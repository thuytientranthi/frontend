<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\Member;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $members = Member::orderBy('id', 'desc')->get();
            return response()->json([
                'data' => $members,
                'error'=>[
                    'status'=> false,
                ]
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'data' => false,
                'error' => [
                    'status' => true,
                    'code' => 400,
                    'message' => 'Phát sinh lỗi trong quá trình xử lý.'
                ]
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name'      => 'required|max:100',
            'email'     => 'required|email|max:64|unique:members,email',
            'phone'     => 'required|max:11|unique:members,phone',
            'birthday'  => 'required|date',
            'gender'    => 'required',
            'address'   => 'required',
            'status'    => 'required',
        ];
        $messages = [
            'name.required'     => 'Vui lòng nhập tên user',
            'name.max'          => 'Vui lòng nhập dưới 100 ký tự',
            'email.required'    => 'Vui lòng nhập địa chỉ email',
            'email.email'       => 'Vui lòng nhập đúng địa chỉ email',
            'email.max'         => 'Vui lòng nhập dưới 64 ký tự',
            'email.unique'      => 'Email đã tồn tại',
            'phone.required'    => 'Vui lòng nhập số điện thoại',
            'phone.max'         => 'Vui lòng nhập dưới 11 ký tự',
            'phone.unique'      => 'Số điện thoại đã sử dụng',
            'birthday.required' => 'Vui lòng nhập ngày sinh',
            'birthday.date'     => 'Vui lòng nhập đúng định dạng yyy\mm\dd',
            'gender.required'   => 'Vui lòng nhập giới tính',
            'address.required'  => 'Vui lòng nhập địa chỉ',
            'status.required'   => 'Vui lòng nhập trạng thái',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if($validator->fails()){
            return response()->json([
                'data' => false,
                'error' => [
                    'message'   => [
                        $validator->errors()->first('name'),
                        $validator->errors()->first('email'),
                        $validator->errors()->first('phone'),
                        $validator->errors()->first('birthday'),
                        $validator->errors()->first('gender'),
                        $validator->errors()->first('address'),
                        $validator->errors()->first('status'),
                    ],
                    'status'    => true,
                    'code'      => 401
                ]
            ]);
        }

        try {
            $member = new Member;
            $member->name = $request->name;
            $member->email = $request->email;
            $member->phone = $request->phone;
            $member->birthday = $request->birthday;
            $member->gender = $request->gender;
            $member->address = $request->address;
            $member->status = $request->status;
            $member->save();
            return response()->json([
                'data'  => $member,
                'error' => [
                    'status'=> false
                ]
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'data' => false,
                'error' => [
                    'message' => "Phát sinh lỗi trong quá trình sử lý",
                    'status' => true,
                    'code' => 500
                ]
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $member = Member::find($id);
            $member->delete();
            return response()->json([
                'data' => true,
                'error' => [
                    'status'=> false
                ]
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'data' => false,
                'error' => [
                    'status'=> true,
                    'code' => 400,
                    "message" => "Phát sinh lỗi trong quá trình xử lý"
                ]
            ]);
        }
    }
}
