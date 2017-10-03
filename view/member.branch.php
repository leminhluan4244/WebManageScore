<?php
require_once "../controller/header.php";
require_once "../controller/permission.find.php";
$branchMod = new BranchMod();
?>

<div class="container-fluid">
    <!Start content manage branch-->
    <div class="container main-academy-container">
        <div class="academy-action-list text-center">

            <br>
            <div class="form-group">
                <form action="" method="get">



                    <!---->
                    <!--Start combobox city for branch-->

                    <div class="col-sm-4">
                        <input type="text" class="form-control " name="search" >

                    </div>
                    <!--Start buttun filter-->
                    <input type="submit" value="Tìm kiếm" class="btn btn-primary col-sm-1" name="btnSearch">
                    <!--End buttun filter-->


                </form>
                <br>
                <br>
            </div>
            <!--End filter table-->
            <!--Begin table-->
            <?php
            require_once "../controller/member.branch/member.content.php";
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
