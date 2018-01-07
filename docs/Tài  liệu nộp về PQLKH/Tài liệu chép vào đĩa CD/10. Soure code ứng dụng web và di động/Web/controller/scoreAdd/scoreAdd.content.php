<div class="">

    <!--Start list class-->
    <?php
    require "../controller/scoreAdd/scoreAdd.table.php";
    ?>
    <!--End list class>

    <!--Start class add button-->
    <form action="scoreAdd.php" class="form-inline">
        <a class="btn btn-primary col align-self-center " data-toggle="modal" data-target="#addScore">
            <span class="glyphicon glyphicon-plus"></span> Thêm mới một bảng cộng trừ điểm sinh viên
        </a>
        <a class="btn btn-danger col align-self-center " data-toggle="modal" data-target="#deleteScore">
            <span class="glyphicon glyphicon-trash"></span> Xóa bảng
        </a>
    </form>
    <!-- End class add button-->
    <!-- Start add class-->
    <?php
    require "../controller/scoreAdd/scoreAdd.add.php";
    ?>
    <!-- End add class-->
    <!--Start update class-->
    <?php
    require "../controller/scoreAdd/scoreAdd.update.php";

    ?>
    <!--End update class-->

    <!--Start delete class-->
    <?php
    require "../controller/scoreAdd/scoreAdd.delete.php";
    ?>
    <!--End delete class-->
</div>
