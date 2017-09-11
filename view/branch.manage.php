<?php
require_once "../controller/header.php"
?>



<div class="container-fluid">
    <!Start content manage branch-->
    <div class="container main-city-container">
        <div class="academy-action-list text-center">

            <h4>Danh sách Chi Hội</h4>
            <div class="form-group">
                <form action="" method="post">

                    <!--Start buttun filter-->
                    <input type="submit" value="Lọc" class="btn btn-primary col-sm-1">
                    <!--End buttun filter-->

                    <!---->
                    <!--Start combobox city for branch-->
                    <?php
                    require "../controller/branch/branch.filter.city.php";
                    ?>
                    <!--End combobox city for branch-->



                    <!---->

                </form>
                <br>
                <br>
            </div>
            <!--End filter table-->
            <!--Begin table-->
            <?php
            require_once "../controller/branch/branch.content.php";
            ?>
            <!--End table-->

        </div>
    </div>
    <!--End content manage branch-->
</div>

<?php
require_once "../controller/footer.php";
?>
</body>

</html>
