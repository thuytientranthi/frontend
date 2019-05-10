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
            <thead>
                <tr>
                    <th rowspan="2">#</th>
                    <th colspan="4">Tên User</th>
                    <th colspan="8">Mail</th>
                    <th colspan="4" class="th-phone">Số Điện Thoại</th>
                    <th rowspan="2">Đki/Sửa/Đổi/Xóa</th>
                </tr>
                <tr>
                    <th colspan="1">Ngày sinh</th>
                    <th colspan="2">Giới tính</th>
                    <th colspan="2">Địa chỉ</th>
                    <th colspan="8" class="th-status">Trạng thái</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td rowspan="2">1</td>
                    <td colspan="4">
                        <input type="text" name="username" id="" placeholder="Nhập user name">
                    </td>
                    <td colspan="8">
                        <input type="text" name="email" id="" placeholder="Nhập email">
                    </td>
                    <td colspan="4">
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
                    <td colspan="2">
                        <input type="text" name="address" id="" placeholder="Nhập nơi chốn">
                    </td>
                    <td colspan="8">
                        <select class="custom-select">
                            <option selected>Hoạt động<i class="fas fa-caret-down"></i></option>
                            <option value="">Chặn</option>
                        </select>
                    </td>
                </tr>
    
                <tr>
                    <td rowspan="2">2</td>
                    <td colspan="4">
                        ádasdasdas
                    </td>
                    <td colspan="8">
                        ádasdasd
                    </td>
                    <td colspan="4">
                        sdasdasd
                    </td>
                    <td rowspan="2">
                        <button class="btn btn-warning btn-edit">Sửa</button>
                        <button class="btn btn-danger btn-delete">Xóa</button>
                    </td>
                </tr>
                <tr>
                    <td colspan="1">
                        sadasd
                    </td>
                    <td colspan="2">Nam
                    </td>
                    <td colspan="2">
                        dsfsdfsdfsdf
                    </td>
                    <td colspan="8">
                        Hoatdsf
                    </td>
                </tr>

                <tr>
                        <td rowspan="2">3</td>
                        <td colspan="4">
                            ádasdasdas
                        </td>
                        <td colspan="8">
                            ádasdasd
                        </td>
                        <td colspan="4">
                            sdasdasd
                        </td>
                        <td rowspan="2">
                            <button class="btn btn-warning btn-edit">Sửa</button>
                            <button class="btn btn-danger btn-delete">Xóa</button>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="1">
                            sadasd
                        </td>
                        <td colspan="2">Nam
                        </td>
                        <td colspan="2">
                            dsfsdfsdfsdf
                        </td>
                        <td colspan="8">
                            Hoatdsf
                        </td>
                    </tr>
            </tbody>
        </table>
    </div>
@endsection
