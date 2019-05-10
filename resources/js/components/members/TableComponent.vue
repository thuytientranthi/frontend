<template>
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
                <!-- form-create -->
                    <tr>
                        <td rowspan="2"></td>
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
                <!-- end-form-create -->
                <!-- index -->
                <tr>
                    <td rowspan="2">1</td>
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
                        <button v-on:click="isHidden = !isHidden" class="btn btn-warning btn-edit">Sửa</button>
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
                <!-- end-index -->
               <!-- form-edit -->
                <!-- <form> -->
                    <tr v-if="!isHidden">
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
                            <button class="btn btn-primary btn-save">Lưu</button>
                            <button class="btn btn-danger btn-cancel">Cancel</button>
                        </td>
                    </tr>
                    <tr v-if="!isHidden">
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
                <!-- </form> -->
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                isHidden: true
            };
        }
    }
</script>

<style lang="scss" scoped>
    .btn-regrister{
        background-color: #e2f0d9;
        padding: 5px 30px !important;
    }

    // .custom-table{
    //     border-collapse: collapse;
    //     margin-bottom: 3em !important;
    // }
    // .custom-table tr{
    //     background-color: #fcfdee;
    //     color: #000000;
    // }
    // .custom-table  > thead > tr > th{
    //     background-color: rgb(119, 116, 116);
    //     color: #ffffff;
    // }
    // .custom-table  > tbody > tr:nth-child(1), .custom-table  > tbody > tr:nth-child(2){
    //     background-color: #ffffff;
    // }
    // .custom-table tr th, .custom-table tr td{
    //     text-align: center;
    //     font-size: 13px;
    //     line-height: 18px;
    // }
    // .custom-table, tr, th, td {
    //     border: 1px solid black;
    // }
    // .custom-table tr td button{
    //     margin-top: 20px;
    // }
    // input[type=text], input[type=email], input[type=date]{
    //     width: 100%;
    // }
    // input[type=date]{
    //     border: 1px solid #b3bcc5;
    // }
    // .custom-table .th-phone{
    //     width: 12%;
    // }
    // .custom-table .th-status{
    //     width: 15%;
    // }
    // .custom-table  > thead > tr > th {
    //     vertical-align: bottom;
    //     border-bottom: 1px solid#000000;
    // }
</style>