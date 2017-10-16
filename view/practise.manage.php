<?php
    require_once "../controller/header.php";
?>
<?php
 if(!isLogged()){
  redirect("../controller/account/account.login.php");
 }
?>
<div class="container-fluid">

</div>

<?php
	require_once "../controller/footer.php";
?>
