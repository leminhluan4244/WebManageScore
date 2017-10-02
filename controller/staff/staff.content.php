<div class="">

    <!--Start list student-->
    <?php
    require "../controller/staff/staff.table.php";
    ?>
    <!--End list student>

    <!--Start student add button-->
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
    <!-- End student add button-->
    <!-- Start add student-->
<?php
   require_once "../controller/staff/staff.add.php";
   ?>
    <!-- End add student-->

    <!-- Start infor student-->
    <?php
    require_once "../controller/staff/staff.info.php";
    ?>
    <!-- End infor student-->

    <!--Start update student-->
    <?php
    require_once "../controller/staff/staff.update.php";
    ?>
    <!--End update student-->

    <!--Start delete student-->
<!--    --><?php
    require_once "../controller/staff/staff.delete.php";
//    ?>
    <!--End delete student-->

</div>