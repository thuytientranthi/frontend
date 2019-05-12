<template>
    <div class="col-md-6 pageinate">
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
</template>

<script>
    export default {
    }
</script>

<style lang="scss" scoped>
    .page-link{
        border: 1px solid #b1afaf;
        background-color: rgb(235, 215, 158) !important;
    }
    .pageinate{
        margin-top: 3%;
    }

</style>