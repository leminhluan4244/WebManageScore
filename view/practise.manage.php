<?php
    require_once "../controller/header.php";
?>
<?php
 if(!isLogged()){
  redirect("../controller/account/account.login.php");
 }
?>
<div class="container-fluid">
    <h4 class="text-center text-primary">Danh sách điểm rèn luyện đã chấm</h4>
    <div class="table-view-score-graded">
        <table class="table">
            <tr><th></th></tr>
        </table>
    </div>
</div>

<?php
	require_once "../controller/footer.php";
?>
