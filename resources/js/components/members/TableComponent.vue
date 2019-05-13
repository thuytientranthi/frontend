<template>
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-danger" v-if="errors.length">
                <ul>
                    <li v-for="(error, index) in errors" :key="index">{{ error=='' ? errors.splice(index, 1) : error }}</li>
                </ul>
            </div>
        </div>
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
                            <input type="text" v-model="member.name" name="username" id="" placeholder="Nhập user name">
                        </td>
                        <td colspan="8">
                            <input type="text" v-model="member.email" name="email" id="" placeholder="Nhập email">
                        </td>
                        <td colspan="4">
                            <input type="text" v-model="member.phone" name="phone" id="" placeholder="Nhập số điện thoại">
                        </td>
                        <td rowspan="2">
                            <button v-on:click="memberRegrister()" class="btn btn-regrister">Đăng ký</button>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="1">
                            <input type="date" v-model="member.birthday" name="birthday" id="" placeholder="Nhập ngày sinh">
                        </td>
                        <td colspan="2">
                            <input type="radio" v-model="member.gender" name="gender" id="" value="nam">Nam
                            <input type="radio" v-model="member.gender" name="gender" id="" value="nữ">Nữ
                        </td>
                        <td colspan="2">
                            <input type="text" v-model="member.address" name="address" id="" placeholder="Nhập nơi chốn">
                        </td>
                        <td colspan="8">
                            <!-- <select class="custom-select" v-model="member.status" v-for="status, index in statues">
                                <option>{{ status.name }}<i class="fas fa-caret-down"></i></option>
                            </select> -->
                            <select class="custom-select" v-model='member.status'>
                                <option value="">- Vui lòng chọn-</option>
                                <option v-for="(status, index) in statuses" :key="index" :value="status.id">{{status.name}}</option>
                            </select>
                        </td>
                    </tr>
                <!-- end-form-create -->
                <!-- index -->
                <template v-for="(member, index) in members">
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
                            <button v-on:click="seen = !seen" class="btn btn-warning btn-edit">Sửa</button>
                            <button v-on:click="deleteMember(member.id)" class="btn btn-danger btn-delete">Xóa</button>
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
                            {{ member.status == 1 ? 'Chờ xử lý' : member.status == 2 ? 'Hoạt động' : 'Chặn'}}
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
                statuses: [],
                errors: [],
                member: {
                    name: '',
                    phone: '',
                    email: '',
                    address: '',
                    gender: '',
                    status: '',
                    birthday: '',
                }
            };
        },
        mounted() {
            this.getMembers();
        },
        methods:{
            getMembers() {
                var app = this;
                axios.all([
                    axios.get('http://localhost:8000/api/members'),
                    axios.get('http://localhost:8000/api/statuses')
                ])
                .then(axios.spread(function (response1, response2) {
                    if (response1.data.data == false) {
                        app.errors = response1.data.error.message;
                    }
                    if (response2.data.data == false) {
                        app.errors = response2.data.error.message;
                    }
                    if ((response1.data.error.status == false) && (response2.data.error.status == false)) {
                        app.members = response1.data.data;
                        app.statuses = response2.data.data;
                    }
                }))
                .catch(function (error) {
                    swal("lỗi!", "could not display members.", "warning")
                });
            },

            memberRegrister() {
                this.errors = [];
                var new_member = this.member;
                if (new_member.name == '') {
                   return swal('Lỗi','Vui lòng nhập tên user', "warning")
                }
                if (new_member.email == '') {
                   return swal('Lỗi','Vui lòng nhập email', "warning")
                }
                if (new_member.phone == '') {
                   return swal('Lỗi','Vui lòng nhập số điện thoại', "warning")
                }
                if (new_member.birthday == '') {
                   return swal('Lỗi','Vui lòng nhập ngày sinh', "warning")
                }
                if (new_member.gender == '') {
                   return swal('Lỗi','Vui lòng chọn giới tính', "warning")
                }
                if (new_member.address == '') {
                   return swal('Lỗi','Vui lòng nhập địa chỉ', "warning")
                }
                if (new_member.status == '') {
                   return swal('Lỗi','Vui lòng chọn trạng thái', "warning")
                }
                axios.post('http://localhost:8000/api/members', new_member)
                .then((resp)=>{
                    if (resp.data.data == false) {
                        if ((resp.data.error.code == 401) || (resp.data.error.code == 500)){
                            resp.data.error.message.forEach(element => {
                                this.errors.push(element);
                            });
                        }
                    }
                    if (resp.data.error.status == false) {
                        this.member = {
                            name: '',
                            phone: '',
                            email: '',
                            address: '',
                            gender: '',
                            status: '',
                            birthday: '',
                        };
                        this.members = resp.data.data;
                        swal("Thành công!", "", "success");
                        this.getMembers();
                    }
                })
            },

            deleteMember(id) {
                console.log(id);
                swal({
                    title: "Bạn có chắc chắn muốn xóa?",
                    text: "Khi click 'OK', bạn sẽ xóa member",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        axios.delete('http://localhost:8000/api/members/'+id)
                        .then((resp) => {
                            if (resp.data.data == false) {
                                this.errors = resp.data.error.message;
                            }
                            if (resp.data.data == true) {
                                swal('Thành công', 'Đã xóa member', 'success');
                                this.getMembers();
                            }
                        })
                    } 
                });
            }
        },
        watch: {
            message() {
                console.log('message changed')
            }
        }
    }
</script>

<style lang="scss"  scoped module>
    .btn-regrister{
        background-color: #e2f0d9;
        padding: 5px 30px !important;
    }
    .btn-regrister:hover{
        background-color: #d0f0bc;
    }
    .btn-edit, .btn-delete, .btn-save, .btn-cancel{
        padding: 5px 15px !important;
    }
    .btn-edit:hover{
        background-color: #decd3a;
    }
    .btn-delete:hover{
        background-color: #a21d19;
    }
    .btn-save:hover{
        background-color: #1b619c;
    }
    .btn-cancel:hover{
        background-color: #a21d19;
    }
    .custom-table{
        margin : 10px;
    }
    .custom-table tr{
        background-color: #fcfdee;
        color: #000000;
    }
    .custom-table tr[rowspan]:hover{
        background-color: #f5f8c6;
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
        border: 1px solid #000000;
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
        // top: -6px;
        left: -1px;
        position: relative;
        background-color: #d1d3d1;
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
    input[type=radio]:checked:after{
        width: 15px;
        height: 15px;
        border-radius: 15px;
        // top: -6px;
        left: -1px;
        position: relative;
        background-color: #ffa500;
        content: '';
        display: inline-block;
        visibility: visible;
        border: 2px solid white;
    }
    input:focus, select:focus, select option:focus, button:focus{
        outline: none !important;
        border-color: #000000;
        box-shadow: none !important;
    }
</style>