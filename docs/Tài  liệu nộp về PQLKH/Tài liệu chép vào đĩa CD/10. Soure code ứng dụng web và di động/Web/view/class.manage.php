<?php
    require_once "../controller/header.php";
    $academyObj = new AcademyObj();
    $academyMod = new AcademyMod();
?>
<?php
if(getSession("userToken")['permission'] != 'Admin'){
    echo '<script>window.location.assign("../controller/account/account.login.php")</script>';
}
?>
<div class="container-fluid">
    <!--Start content manage accademy -->
    <div class="container main-academy-container">
        <div class="academy-action-list text-center">

            <h4>Danh sách các lớp</h4>
            <!--End filter table-->
            <div class="form-group">
                <form action="class.manage.php" method="get">

                    <!--Start buttun filter-->
                    <input type="submit" value="Lọc" class="btn btn-primary col-sm-1" name="btnfilter">
                    <!--End buttun filter-->
                    <!---->
                    <!--Start combobox city for class-->
                    <?php
                    require "../controller/class/class.filter.php";
                    ?>
                    <!--End combobox city for class-->



                    <!---->

                </form>
                <br>
                <br>
            </div>
            <!--Begin table-->
            <?php
                require_once "../controller/class/class.content.php";
            ?>
            <!--End table-->

        </div>
    </div>
    <!--End content manage student-->
</div>

<?php 
	require_once "../controller/footer.php";
?>
