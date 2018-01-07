<div class="">

    <!--Start list student-->
    <?php
    require "../controller/student/student.table.php";
    ?>
    <!--End list student>

    <!--Start student add button-->
    <div class="text-center">
        <form action="" class="form-inline">
            <a class="btn btn-primary col align-self-center " data-toggle="modal" data-target="#addStudent">
                <span class="glyphicon glyphicon-plus"></span> Thêm mới sinh viên
            </a>
            <a class="btn btn-danger col align-self-center " data-toggle="modal" data-target="#deleteStudent">
                <span class="glyphicon glyphicon-trash"></span> Xóa
            </a>
        </form>
    </div>
    <!-- End student add button-->
    <!-- Start add student-->
    <?php
    require "../controller/student/student.add.php";
    ?>
    <!-- End add student-->

    <!-- Start infor student-->
    <?php
    require "../controller/student/student.info.php";
    ?>
    <!-- End infor student-->

    <!--Start update student-->
    <?php
    require "../controller/student/student.update.php";
    ?>
    <!--End update student-->

    <!--Start delete student-->
    <?php
    require "../controller/student/student.delete.php";
    ?>
    <!--End delete student-->

</div>
