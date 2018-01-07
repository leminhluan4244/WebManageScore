<?php
   require_once("../helper/session.helper.php");
   $js_array = json_encode(getSession("userToken")['permission']);
   $newPermissionObj = new PermissionObj();
   $newPermissionMod = new PermissionMod();
   $arr = $newPermissionMod->selectPower(getSession("userToken")['permission']);
  ?>
  <script type='text/javascript'>
 <?php
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
       $("#import-export").show();
       break;

     case 'Cố vấn học tập':
      $("#cham-diem-ren-luyen").show();
      $("#them-bang-cong-tru").show();
      $("#xem-diem").show();
      break;

     case 'Quản lý chi hội':
      $("#quan-ly-thanh-vien-chi-hoi").show();
      $("#cham-diem-ren-luyen").show();
      $("#them-bang-cong-tru").show();
      $("#xem-diem").show();
      break;

     case 'Quản lý khoa':
      $("#cham-diem-ren-luyen").show();
      $("#them-bang-cong-tru").show();
      $("#xem-diem").show();
      break;

      case 'Sinh viên':
       $("#cham-diem-ren-luyen").show();
       $("#xem-diem").show();
       break;

      case 'default':
       break;

     default:
       <?php
        foreach ($arr as $key => $value) {
          switch ($value) {
            case 'Chấm điểm rèn luyện cá nhân sinh viên':
              echo '$("#cham-diem-ren-luyen").show();';
              echo '$("#xem-diem").show();';
              break;

            case 'Chấm điểm cho một lớp':
              echo '$("#cham-diem-ren-luyen").show();';
              break;

            case 'Chấm điểm rèn luyện cho cả khoa':
              echo '$("#cham-diem-ren-luyen").show();';
              break;

            case 'Thêm bảng điểm cộng trừ cho sinh viên theo chi hội':
              echo '$("#them-bang-cong-tru").show();';
              break;

            case 'Thêm bảng điểm cộng trừ cho lớp':
              echo '$("#them-bang-cong-tru").show();';
              break;

            case 'Thêm bảng điểm cộng trừ cho khoa':
              echo '$("#them-bang-cong-tru").show();';
              break;

            case 'Thêm thành viên cho chi hội':
              echo '$("#quan-ly-thanh-vien-chi-hoi").show();';
              break;

            default:

              break;
          }
        }
        ?>
       break;
   }
   });
</script>
