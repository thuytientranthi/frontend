<template>
    <div class="row">
        <p v-if="errors.length">
            <b class="text-danger">{{errors}}</b>
        </p>
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
                <template v-for="member, index in members">
                    <tr v-if="seen">
                        <td rowspan="2">{{ index+1 }}</td>
                        <td colspan="4">
                            {{ member.name }}
                        </td>
                        <td colspan="8">
                            {{ member.email }}
                        </td>
                        <td colspan="4">
                            {{ member.phone }}
                        </td>
                        <td rowspan="2">
                            <button  v-on:click="seen = !seen" class="btn btn-warning btn-edit">Sửa</button>
                            <button class="btn btn-danger btn-delete">Xóa</button>
                        </td>
                    </tr>
                    <tr v-if="seen">
                        <td colspan="1">
                            {{ member.birthday }}
                        </td>
                        <td colspan="2"> {{ member.gender }}
                        </td>
                        <td colspan="2">
                            {{ member.address}}
                        </td>
                        <td colspan="8">
                            {{ member.status }}
                        </td>
                    </tr>
                <!-- end-index -->
               <!-- form-edit -->
                    <tr v-if="!seen">
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
                            <button v-on:click="seen = !seen" class="btn btn-danger btn-cancel">Cancel</button>
                        </td>
                    </tr>
                    <tr v-if="!seen">
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
                </template>
                <!-- </form> -->
            </tbody>
        </table>
    </div>
</template>

<script>
    import axios from 'axios';
    export default {
        data: function() {
            return {
                seen: true,
                members: [],
                errors: [],
            };
        },
        mounted() {
            var app = this;
            axios.get('http://localhost:8000/api/members')
            .then(function (resp ){
                console.log(resp.data);
                if (resp.data.data == false) {
                    app.errors = resp.data.error.message;
                }
                if (resp.data.error.status == false) {
                    app.members = resp.data.data;
                }
            })
            .catch(function(resp){
                console.log(resp);
                alert("Could not load posts");
            })
        },
        method:{
            select: function(event) {
            targetId = event.currentTarget.id;
            console.log(targetId); // returns 'foo'
        },
        }
    }
</script>

<style lang="scss" scoped>
    .btn-regrister{
        background-color: #e2f0d9;
        padding: 5px 30px !important;
    }
    .custom-table{
        margin : 10px;
    }
    .custom-table tr{
        background-color: #fcfdee;
        color: #000000;
    }
    .custom-table td{
        padding: 0px;
    }
    .custom-table  > thead > tr > th{
        background-color: rgb(119, 116, 116);
        color: #ffffff;
        vertical-align: inherit;
        border-bottom: 1px solid#000000;
        border-top: 1px solid#000000;
    }
    .custom-table  > tbody > tr:nth-child(1), .custom-table  > tbody > tr:nth-child(2){
        background-color: #ffffff;
    }
    .custom-table tr th, .custom-table tr td{
        text-align: center;
        font-size: 13px;
    }
    .custom-table tr td{
        line-height: 35px;
    }
    .custom-table, tr, th, td {
        border: 1px solid black;
    }
    .custom-table tr td button{
        margin-top: 20px;
        font-size: 13px;
    }
    input[type=text], input[type=email], input[type=date]{
        width: 100%;
        line-height: 35px;
        text-align: center;
        border: none;
    }
    input[type=radio]:after{
        width: 15px;
        height: 15px;
        border-radius: 15px;
        top: -6px;
        left: -1px;
        position: relative;
        background-color: #d1d3d1;
        content: '';
        display: inline-block;
        visibility: visible;
        border: 2px solid white;
    }
    input[type=radio]:checked:after{
        width: 15px;
        height: 15px;
        border-radius: 15px;
        top: -6px;
        left: -1px;
        position: relative;
        background-color: #ffa500;
        content: '';
        display: inline-block;
        visibility: visible;
        border: 2px solid white;
    }
    .custom-table tr td .custom-select {
        font-size: 13px;
        border: none;
    }
    .custom-table .th-phone{
        width: 12%;
    }
    .custom-table .th-status{
        width: 15%;
    }
</style>