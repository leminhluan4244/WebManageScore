<?php
    require_once "../controller/header.php";
    require_once "../controller/permission.find.php";
    if (isset($_POST["btnUpdate"]) && $_POST["btnUpdate"] == "update")
        $update = true;
    if (isset($_POST["btnFilter"]) && $_POST["btnFilter"] == "filter")
        $filter = true;
    if (isset($_POST["btnDelete"]) && $_POST["btnDelete"] == "delete"){
        $delete = true;
          }

?>
<div class="container-fluid">
    <!Start content manage student-->
    <div class="container main-academy-container">
        <div class="academy-action-list text-center">

            <h4>Danh sách bảng điểm</h4>
            <div class="form-group">
				<?php
				require_once "../controller/addScores/scores.content.php";
				?>
            </div>


        </div>
    </div>
    <!--End content manage student-->
</div>

<?php 
	require_once "../controller/footer.php";
?>

