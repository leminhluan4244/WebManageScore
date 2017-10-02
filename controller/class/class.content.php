<div class="">

    <!--Start list class-->
    <?php
    require "../controller/class/class.table.php";
    ?>
    <!--End list class>

    <!--Start class add button-->
    <form action="class.manage.php" class="form-inline">
        <a class="btn btn-primary col align-self-center " data-toggle="modal" data-target="#addClass">
            <span class="glyphicon glyphicon-plus"></span> Thêm mới lớp
        </a>
        <a class="btn btn-danger col align-self-center " data-toggle="modal" data-target="#deleteClass">
            <span class="glyphicon glyphicon-trash"></span> Xóa
        </a>
    </form>
    <!-- End class add button-->
    <!-- Start add class-->
    <?php
    require "../controller/class/class.add.php";
    ?>
    <!-- End add class-->
    <!--Start update class-->
    <?php
    require "../controller/class/class.update.php";
    ?>
    <!--End update class-->

    <!--Start delete class-->
    <?php
    require "../controller/class/class.delete.php";
    ?>
    <!--End delete class-->
    <!--Start delete class-->
    <?php
    require "../controller/class/teacher.manage.php";
    ?>
    <!--End delete class-->

</div>
