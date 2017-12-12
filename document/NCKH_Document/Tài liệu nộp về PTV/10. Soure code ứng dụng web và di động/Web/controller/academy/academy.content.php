<div class="">

    <!--Start list academy-->
    <?php
    require "../controller/academy/academy.table.php";
    ?>
    <!--End list academy>

    <!--Start academy add button-->
    <form action="" class="form-inline">
        <a class="btn btn-primary col align-self-center " data-toggle="modal" data-target="#addAcademy">
            <span class="glyphicon glyphicon-plus"></span> Thêm mới khoa - viện
        </a>
        <a class="btn btn-danger col align-self-center " data-toggle="modal" data-target="#deleteAcademy">
            <span class="glyphicon glyphicon-trash"></span> Xóa
        </a>
    </form>
    <!-- End academy add button-->
    <!-- Start add academy-->
    <?php
    require "../controller/academy/academy.add.php";
    ?>
    <!-- End add academy-->
    <!--Start update academy-->
    <?php
    require "../controller/academy/academy.update.php";
    ?>
    <!--End update academy-->

    <!--Start delete academy-->
    <?php
    require "../controller/academy/academy.delete.php";
    ?>
    <!--End delete academy-->

</div>
