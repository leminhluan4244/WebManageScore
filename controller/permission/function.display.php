<?php
  require_once("../helper/session.helper.php");
  #var_dump(getSession("userToken")['permission']);
  echo '<br />';
  ?>
  <script type='text/javascript'>
 <?php
  $js_array = json_encode(getSession("userToken")['permission']);
  echo "var arrJS = ". $js_array . ";\n";
 ?>
 $(document).ready(function() {
   arrJS.toString();
   if(arrJS == 'Sinh viên'){
    $("#div-schedule-manage").show();
  }
   });

</script>
