@extends('layouts.app')
@section('menu-left')
    @include('layouts.admin-menu')
@endsection
@section('content')
    <h1>QL User</h1>
    <div class="row">
        <div class="col-md-6 form-search">
            <form>
                <div class="form-group row col-md-6">
                    <label for="staticEmail" class="col-md-3 col-form-label">Tên user</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="">
                    </div>
                </div>
                <div class="form-group row col-md-6">
                    <label for="inputPassword" class="col-md-3 col-form-label">Trạng thái</label>
                    <div class="col-md-9">
                        <select class="custom-select">
                            <option selected>Tất cả <i class="fas fa-caret-down"></i></option>
                            <option value="1">Hoạt động</option>
                            <option value="2">Chờ xử lý</option>
                            <option value="2">Chặn</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row col-md-6">
                    <label for="inputPassword" class="col-md-3 col-form-label">Mail</label>
                    <div class="col-md-9">
                    <input type="text" class="form-control" id="inputPassword">
                    </div>
                </div>
                <div class="form-group row col-md-6">
                    <label for="inputPassword" class="col-md-3 col-form-label"></label>
                    <div class="col-md-9">
                    <button type="button" class="btn btn-search">Tìm kiếm</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <form action="" class="form-inline">
                <div class="col-md-6">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo; Trang</span>
                            </a>
                            </li>
                            <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">Trang &raquo;</span>
                            </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-6">
                    <span>3 phiếu</span>/<span>3 phiếu</span>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <table class="custom-table table">
            <tr>
                <th rowspan="2"><p>#</p></th>
                <th colspan="2">Tên User</th>
                <th colspan="3">Mail</th>
                <th colspan="1">Số Điện Thoại</th>
                <th rowspan="2"><p>Đki/Sửa/Đổi/Xóa</p></th>
            </tr>
            <tr>
                <th colspan="1">Ngày sinh</th>
                <th colspan="2">Giới tính</th>
                <th colspan="1">Địa chỉ</th>
                <th colspan="2">Trạng thái</th>
            </tr>
            <tr>
                <td rowspan="2"><p>1</p></td>
                <td colspan="2">
                    <input type="text" name="username" id="" placeholder="Nhập user name">
                </td>
                <td colspan="3">
                    <input type="text" name="email" id="" placeholder="Nhập email">
                </td>
                <td colspan="1">
                    <input type="text" name="phone" id="" placeholder="Nhập số điện thoại">
                </td>
                <td rowspan="2">
                    <button class="btn btn-regrister">Đăng ký</button>
                </td>
            </tr>
            <tr>
                <td colspan="1">
                    <input type="date" name="birthday" id="" placeholder="Nhập ngày sinh">
                </td>
                <td colspan="2">
                    <input type="radio" name="gender" id="" value="nam">Nam
                    <input type="radio" name="gender" id="" value="nữ">Nữ
                </td>
                <td colspan="1">
                    <input type="text" name="address" id="" placeholder="Nhập nơi chốn">
                </td>
                <td colspan="2">
                    <select class="custom-select">
                        <option selected>Hoạt động<i class="fas fa-caret-down"></i></option>
                        <option value="">Chặn</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td rowspan="2"><p>2</p></td>
                <td colspan="2">Trần Thị Thủy Tiên
                </td>
                <td colspan="3">tt.thuytien15@gmail.com
                </td>
                <td colspan="1">0971473895
                </td>
                <td rowspan="2">
                    <button class="btn btn-warning btn-edit">Sửa</button>
                    <button class="btn btn-danger btn-delete">Xóa</button>
                </td>
            </tr>
            <tr>
                <td colspan="1">16/02/1997</td>
                <td colspan="2">
                    <input type="radio" name="gender" id="" value="nam">Nam
                    <input type="radio" name="gender" id="" value="nữ" checked>Nữ
                </td>
                <td colspan="1">459 Tôn Đức Thắng - Hòa Khánh Nam - Liên Chiểu - Đà Nẵng</td>
                <td colspan="2">Hoạt động</td>
            </tr>
            {{-- <thead>
                <tr>
                    <th rowspan="2"><p>#</p></th>
                    <th colspan="2">Tên User</th>
                    <th colspan="3">Mail</th>
                    <th colspan="1">Số Điện Thoại</th>
                    <th rowspan="2"><p>Đki/Sửa/Đổi/Xóa</p></th>
                </tr>
                <tr>
                    <th colspan="1">Ngày sinh</th>
                    <th colspan="2">Giới tính</th>
                    <th colspan="1">Địa chỉ</th>
                    <th colspan="2">Trạng thái</th>
    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td colspan="3"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody> --}}
        </table>
    </div>
@endsection
