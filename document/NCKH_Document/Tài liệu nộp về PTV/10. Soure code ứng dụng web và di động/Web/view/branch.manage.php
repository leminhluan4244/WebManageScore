<?php
require_once "../controller/header.php";
$branchMod = new BranchMod();
?>
<?php
if(getSession("userToken")['permission'] != 'Admin'){
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

                    <!--Start buttun filter-->
                    <input type="submit" value="Lọc" class="btn btn-primary col-sm-1" name="btnfilter">
                    <!--End buttun filter-->

                    <!---->
                    <!--Start combobox city for branch-->
                    <?php
                    require "../controller/branch/branch.filter.city.php";
                    ?>


                </form>
                <br>
                <br>
            </div>
            <!--End filter table-->
            <!--Begin table-->
            <?php
            require_once "../controller/branch/branch.content.php";
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
