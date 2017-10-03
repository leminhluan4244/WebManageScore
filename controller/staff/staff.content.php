<div class="">

    <!--Start list staff-->
    <?php
    require "../controller/staff/staff.table.php";
    ?>
    <!--End list staff>

    <!--Start staff add button-->
    <div class="text-center">
        <form action="" class="form-inline">
            <a class="btn btn-primary col align-self-center " data-toggle="modal" data-target="#addStaff">
                <span class="glyphicon glyphicon-plus"></span> Thêm mới cán bộ
            </a>
            <a class="btn btn-danger col align-self-center " data-toggle="modal" data-target="#deleteTeacher">
                <span class="glyphicon glyphicon-trash"></span> Xóa
            </a>
        </form>
    </div>
    <!-- End staff add button-->
    <!-- Start add staff-->
<?php
   require_once "../controller/staff/staff.add.php";
   ?>
    <!-- End add staff-->

    <!-- Start infor staff-->
    <?php
    require_once "../controller/staff/staff.info.php";
    ?>
    <!-- End infor staff-->

    <!--Start update staff-->
    <?php
    require_once "../controller/staff/staff.update.php";
    ?>
    <!--End update staff-->

    <!--Start delete staff-->
<!--    --><?php
    require_once "../controller/staff/staff.delete.php";
//    ?>
    <!--End delete staff-->

</div>