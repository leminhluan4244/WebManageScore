<?php
require_once "../controller/header.php";
require_once "../controller/permission.find.php";
?>
<?php
if(getSession("userToken")['permission'] != 'Quản lý chi hội'){
    echo '<script>window.location.assign("../controller/account/account.login.php")</script>';
}
?>
<div class="container-fluid">
    <!Start content manage branch-->
    <div class="container main-academy-container">
        <div class="academy-action-list text-center">

            <br>
            <div class="form-group">
                <form action="" method="get">
                    <div class="col-sm-4">
                        <input type="text" class="form-control " name="search" placeholder="Nhập tên hoặc mã số một sinh viên muốn thêm vào chi hôi">

                    </div>
                    <!--Start buttun filter-->
                    <input type="submit" value="Tìm kiếm" class="btn btn-primary col-sm-1" name="btnSearch">';
                </form>
                <br>
                <br>
            </div>
            <!--End filter table-->
            <!--Begin table-->
            <?php
            require_once "../controller/member.branch/member.content.php";
            require_once "../controller/member.branch/member.delete.php";
            ?>
            <!--End table-->

        </div>
    </div>
    <!--End content manage branch-->
</div>
<br>

<?php
require_once "../controller/footer.php";
?>
</body>

</html>
