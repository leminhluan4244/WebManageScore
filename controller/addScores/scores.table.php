<hr />
<?php
    #Khoi tao di tuong chua
    $accountM  = new AccountMod();
  #Kiem tra xe thuoc phan quyen nao
    foreach ($power as $key => $value){
        #la quan ly khoa thi cho xem danh sach hoc sinh khoa
        if($value=='Thêm bảng điểm cộng trừ cho khoa - viện'){
            $tempid = $accountM->getAcademyId($idLogin);
            var_dump($tempid);
            $temp = $accountM->getAccountStudentByAcademy($tempid);
          echo ' 1';
          break;
        }
        #la quan ly chi hoi cho xem danh sach chi hoi va khong co nut loc theo lop
        else if($value=='Thêm bảng điểm cộng trừ cho lớp'){
            $tempid = $accountM->getCLassId($idLogin);
            $temp = $accountM->getAccountStudentByClass($tempid);
            break;
        }
        #la quan ly lop hoc cho xem danh sach cac lop
        else if($value=='Thêm bảng điểm cộng trừ cho sinh viên theo chi hội') {
            $tempid = $accountM->getBrachId($idLogin);
            $temp = $accountM->getAccountStudentByBranch($tempid);
            echo '3';
            break;
        }
    }


?>

<form action="scoresAdd.manage.php" method="post" id="manageForm">
<table class="table table-bordered table-condensed" id="table-manage-scoreAdd">

    <thead>
    <tr>
        <th>STT</th>
        <th>Mã số sinh viên</th>
        <th>Tên sinh viên</th>
        <th>Lớp</th>
        <th>Khoa</th>
        <th>Tùy chỉnh</th>
        <th>Chọn tất cả <br /><input type="checkbox" onClick="toggle(this)"></th>
    </tr>
    </thead>
    <tbody class="text-center align-self-center">
    <?php
    $i=0;

    if($temp>0) {
        $accountTemp = new AccountMod();
        foreach ($temp as $key => $value) {
            $class = $accountM->getClass($value->getIdAccount());
            $academy = $accountM->getAcademy($value->getIdAccount());
            echo '<tr>
        <td>' . ++$i . '</td>
        <td>
            ' . $value->getIdAccount() . '
        </td>
        <td>
            ' . $value->getAccountName() . '
        </td>
        <td>
            ' . $class[0] . '
        </td>
        <td>
            ' .$academy[0].'
        </td>
        <td>
            <a href="?idScoreAdd=' . $value->getIdScore() . '" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span></a>
        </td>
        <td><input type="checkbox" name="xoa[]" id="' . $value->getIdScore() . '" value="' . $value->getIdScore() . '"/> </td>
       
    </tr>';
        }
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
    $('#table-manage-scoreAdd').DataTable();
</script>