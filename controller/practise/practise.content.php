<div class="">

    <!--Start list practise-->
    <?php
    require "../controller/practise/practise.table.php";
    ?>
    <!--End list practise>

    <!--Start practise add button-->
    <form action="" class="form-inline">
        <a class="btn btn-primary col align-self-center " data-toggle="modal" data-target="#addpractise">
            <span class="glyphicon glyphicon-plus"></span> Thêm học kỳ
        </a>
        <a class="btn btn-danger col align-self-center " data-toggle="modal" data-target="#deletepractise">
            <span class="glyphicon glyphicon-trash"></span> Xóa
        </a>
    </form>
    <!-- End practise add button-->
    <!-- Start add practise-->
    <?php
    require "../controller/practise/practise.add.php";
    ?>
    <!-- End add practise-->
    <!--Start update practise-->
    <?php
    require "../controller/practise/practise.update.php";
    ?>
    <!--End update practise-->

    <!--Start delete practise-->
    <?php
    require "../controller/practise/practise.delete.php";
    ?>
    <!--End delete practise-->

</div>
