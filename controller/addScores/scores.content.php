<div class="">

    <!--Start list class-->
    <?php
    require "../controller/addScores/scores.table.php";
    ?>
    <!--End list class>

    <!--Start class add button-->
    <form action="scoreAdd.manage.php" class="form-inline">
        <a class="btn btn-primary col align-self-center " data-toggle="modal" data-target="#addClass">
            <span class="glyphicon glyphicon-plus"></span> Thêm bảng điểm
        </a>
        <a class="btn btn-danger col align-self-center " data-toggle="modal" data-target="#deleteClass">
            <span class="glyphicon glyphicon-trash"></span> Xóa bảng điểm
        </a>
    </form>
    <!-- End class add button-->
    <!-- Start add class-->
    <?php
    require "../controller/addScores/scores.add.php";
    ?>
    <!-- End add class-->
    <!--Start update class-->
    <?php
    require "../controller/addScores/scores.update.php";
    ?>
    <!--End update class-->

    <!--Start delete class-->
    <?php
    require "../controller/addScores/scores.delete.php";
    ?>
    <!--End delete class-->

</div>
