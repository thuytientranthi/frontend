<template>
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
</template>

<script>
    export default {
        
    }
</script>

<style lang="scss" scoped>
    .btn-search{
        padding-left: 30px !important;
        padding-right: 30px !important;
        background-color: rgb(235, 215, 158) !important;
        border: 1px solid #b1afaf;
    }
</style>