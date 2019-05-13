<template>
    <div class="col-md-6 form-search">
        <div class="form-inline">
            <div class="form-group form-inline col-md-6">
                <label class="col-md-3 col-form-label">Tên user</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" id="">
                </div>
            </div>
            <div class="form-group form-inline col-md-6">
                <label class="col-md-3 col-form-label">Trạng thái</label>
                <div class="col-md-9">
                    <select class="custom-select">
                        <option selected>Tất cả <i class="fas fa-caret-down"></i></option>
                        <option value="1">Hoạt động</option>
                        <option value="2">Chờ xử lý</option>
                        <option value="2">Chặn</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-inline">
            <div class="form-group form-inline col-md-6">
                <label class="col-md-3 col-form-label">Mail</label>
                <div class="col-md-9">
                <input type="email" class="form-control">
                </div>
            </div>
            <div class="form-group form-inline col-md-6">
                <label class="col-md-3 col-form-label"></label>
                <div class="col-md-9">
                <button type="button" class="btn btn-search">Tìm kiếm</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        
    }
</script>

<style lang="scss" scoped>
    .btn-search{
        background-color: #FFF2CC !important;
        border: 1px solid #ced4da;
    }
    .btn-search:hover{
        background-color: #e8c561 !important;
    }
    .col-md-6 input, .col-md-6 select, .btn-search{
        width : 130%;
    }
    input:focus, select:focus, select option:focus, button:focus{
        outline: none !important;
        border: 1px solid #ced4da;
        box-shadow: none !important;
    }
</style>