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
   arrJS = arrJS.toString();
   switch (arrJS) {
     case 'Admin':
       $("#div-student-manage").show();
       $("#div-academy-manage").show();
       $("#div-staff-manage").show();
       $("#div-branch-manage").show();
       $("#div-structure-editor").show();
       $("#div-class-manage").show();
       $("#div-permission-manage").show();
       $("#div-permission").show();
       $("#div-schedule-manage").show();
       $("#quan-ly-thanh-vien-chi-hoi").show();
       $("#them-bang-cong-tru").show();
       break;
     case 'Cố vấn học tập':
      $("#cham-diem-ren-luyen").show();
      $("#them-bang-cong-tru").show()
      break;
     case 'Quản lý chi hội':
     $("#quan-ly-thanh-vien-chi-hoi").show();
      $("#cham-diem-ren-luyen").show();
      $("#them-bang-cong-tru").show();
      break;

     case 'Quản lý khoa':
      $("#cham-diem-ren-luyen").show();
      $("#them-bang-cong-tru").show()
      break;

      case 'Sinh viên':
       $("#cham-diem-ren-luyen").show();
       break;

      case 'default':
       break;

     default:
       break;
   }
   });
</script>
