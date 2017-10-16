<hr />
<?php

    $scoreAddObj = new ScoresAddObj();
    $scoreAddMod = new ScoresAddMod();
    /**
    * Gửi dữ liệu qua bên này
    */
    #Khoi tao di tuong chua
    $idLogin = getLoggedAccountId();
    $power = new PermissionMod();
    $power->getPermissionByAccount($idLogin);
    #Kiem tra xe thuoc phan quyen nao
    $number1=false;
    $number2=false;
    $number3=false;
    foreach ($power as $key => $value){
    if($value->getPower()=='Thêm bảng điểm cộng trừ cho khoa' && $value->getSelected()==1) {
    $number1 =true;
    }
    if($value->getPower()=='Thêm bảng điểm cộng trừ cho lớp' && $value->getSelected()==1) {
    $number2 =true;
    }
    if($value->getPower()=='Thêm bảng điểm cộng trừ cho sinh viên theo chi hội' && $value->getSelected()==1) {
    $number3 =true;
    }

    }
    #la quan ly khoa thi cho xem danh sach hoc sinh khoa
    if($number1){
        $tempid = $accountM->getAcademyId($idLogin);
        $temp1 = $accountM->getAccountStudentByAcademy($tempid);

    }else $temp1=false;
    #la quan ly chi hoi cho xem danh sach chi hoi va khong co nut loc theo lop
    if($number2){
        $tempid = $accountM->getCLassId($idLogin);
        $temp2 = $accountM->getAccountStudentByClass($tempid);

    } else $temp2=false;
    #la quan ly lop hoc cho xem danh sach cac lop
    if($number3) {
        $tempid = $accountM->getBrachId($idLogin);
        $temp3 = $accountM->getAccountStudentByBranch($tempid);
    } else $temp3=false;
    $k=0;
    $temp = array();
    if($temp1)
    foreach ($temp1 as $key =>$value){
        $temp[$k]=$value;
        $k++;
    }
    if($temp2)
    foreach ($temp2 as $key =>$value){
        $temp[$k]=$value;
        $k++;
    }
    if($temp3)
    foreach ($temp3 as $key =>$value){
        $temp[$k]=$value;
        $k++;
    }
    ?>
    <?php
    $scoreMod = new ScoresAddMod();
    $listScore = $scoreMod->getScoresAddByAccount($idLogin);
    ?>

<form action="DEMO.php" method="post" id="manageForm">
<table class="table table-bordered table-condensed" id="table-manage-class">

    <thead>
    <tr>
        <th>STT</th>
        <th>Mã Lớp</th>
        <th>Tên lớp</th>
        <th>Niên khóa</th>
        <th>Khoa - viện</th>
        <th>Cố vấn</th>
        <th>Tùy chỉnh</th>
        <th>Chọn tất cả <br /><input type="checkbox" onClick="toggle(this)"></th>
    </tr>
    </thead>



    <tbody class="text-center align-self-center">
    <?php
    $i=0;
    if($arrayClass>0)
    foreach ($arrayClass as $key=>$value){
        echo '<tr>
        <td>'.++$i.'</td>
        <td>
            '.$value->getIdClass().'
        </td>
        <td>
            '.$value->getClassName().'
        </td>
        <td>
            '.$value->getSchoolYear().'
        </td>
        <td>
            '.getName($value->getAcademy_idAcademy()).'
        </td>
        <td>
            <a href="?changeTeacher='.$value->getIdClass().'" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-user"></span></a>
        </td>
        <td>
            <a href="?idClass='.$value->getIdClass().'" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span></a>
        </td>
        <td><input type="checkbox" name="xoa[]" id="'.$value->getIdClass().'" value="'.$value->getIdClass().'"/> </td>
       
    </tr>';
    }

    ?>
    </tbody>
</table>
</form>
<script language="JavaScript">
    function toggle(checkall) {
        checkboxes = document.getElementsByName('xoa[]');
        for(var i=0, n=checkboxes.length;i<n;i++)
        {checkboxes[i].checked = checkall.checked;
        }
    }
    $('#table-manage-class').DataTable();
</script>