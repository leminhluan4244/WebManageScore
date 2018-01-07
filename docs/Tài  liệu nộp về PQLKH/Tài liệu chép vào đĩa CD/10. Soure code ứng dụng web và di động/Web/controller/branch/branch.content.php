<div class="">

    <!--Start list branch-->
    <?php
    require "../controller/branch/branch.table.php";
    ?>
    <!--End list branch>
    <!--Start branch add button-->
    <form action="" class="form-inline">
        <a class="btn btn-primary col align-self-center " data-toggle="modal" data-target="#addBranch">
            <span class="glyphicon glyphicon-plus"></span> Thêm mới Chi hội
        </a>
        <a class="btn btn-danger col align-self-center " data-toggle="modal" data-target="#deleteBranch">
            <span class="glyphicon glyphicon-trash"></span> Xóa
        </a>
    </form>
    <!-- End branch add button-->
    <!-- Start add branch-->
    <?php
    require "../controller/branch/branch.add.php";
    ?>
    <!-- End add branch-->

    <!-- Start infor branch-->
    <?php
    require "../controller/branch/branch.info.php";
    ?>
    <!-- End infor branch-->

    <!--Start update branch-->
    <?php
    require "../controller/branch/branch.update.php";
    ?>
    <!--End update branch-->

    <!--Start delete branch-->
    <?php
      require "../controller/branch/branch.delete.php";
     ?>
    <!--End delete branch-->

</div>