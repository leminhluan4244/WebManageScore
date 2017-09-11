<div class="">

    <!--Start list student-->
    <?php
    require "../controller/addscore/score.table.php";
    ?>
    <!--End list student>

    <!--Start student add button-->
    <form action="" class="form-inline">
        <a class="btn btn-primary col align-self-center " data-toggle="modal" data-target="#addScore">
            <span class="glyphicon glyphicon-plus"></span> Thêm mới bảng điểm
        </a>
        <a class="btn btn-warning col align-self-center " data-toggle="modal" data-target="#updateScore">
            <span class="glyphicon glyphicon-pencil"></span> Sửa đổi
        </a>
        <a class="btn btn-danger col align-self-center " data-toggle="modal" data-target="#deleteScore">
            <span class="glyphicon glyphicon-trash"></span> Xóa
        </a>
    </form>
    <!-- End student add button-->
    <!-- Start add student-->
    <?php
    require "../controller/addscore/score.add.php";
    ?>
    <!-- End add student-->

    <!-- Start infor student-->
    <?php
    require "../controller/addscore/score.info.php";
    ?>
    <!-- End infor student-->

    <!--Start update student-->
    <?php
    require "../controller/addscore/score.update.php";
    ?>
    <!--End update student-->

    <!--Start delete student-->
    <?php
    require "../controller/addscore/score.delete.php";
    ?>
    <!--End delete student-->

</div>
