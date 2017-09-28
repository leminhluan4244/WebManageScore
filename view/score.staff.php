<?php
    require_once "../controller/header.php"
?>



<div class="container-fluid">
    <!Start content manage student-->
    <div class="container main-academy-container">
        <div class="academy-action-list text-center">

            <h4>Danh sách sinh viên</h4>
            <div class="form-group">
                <form action="" method="post">

                </form>
                <br>
                <br>
            </div>
            <!--End filter table-->
            <!--Begin table-->
            <?php
                require_once "../controller/addscore/score.content.php";
            ?>
            <!--End table-->

        </div>
    </div>
    <!--End content manage student-->
</div>

<?php 
	require_once "../controller/footer.php";
?>
</body>

</html>
