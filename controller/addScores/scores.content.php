<div class="">

    <!--Start list class-->
    <?php
    require "../controller/addScores/scores.table.php";
    ?>
    <!--End list class>


    <!-- Start add class-->
    <?php
    require "../controller/addScores/scores.add.php";
    ?>
    <!-- End add class-->
    <!--Start update class-->
	<?php
	    if (!empty($update)){
			require "../controller/addScores/scores.update.php";
        }
	?>
    <!--End update class-->

    <!--Start delete class-->
    <?php
    require "../controller/addScores/scores.delete.php";
    ?>
    <!--End delete class-->

</div>
