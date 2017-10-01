<hr />
<?php
    #Khoi tao di tuong chua
    $accountM  = new AccountMod();
  #Kiem tra xe thuoc phan quyen nao
    foreach ($power as $key => $value){
        #la quan ly khoa thi cho xem danh sach hoc sinh khoa
        if($value=='Thêm bảng điểm cộng trừ cho khoa - viện'){
            $tempid = $accountM->getAcademyId($idLogin);
            $temp = $accountM->getAccountStudentByAcademy($tempid);
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
            break;
        }
    }


?>

    <!--Start class add button-->

    <!-- End class add button-->



<form action="scoresAdd.manage.php" method="post" id="manageForm">
    <div class="row">
        <a class="btn btn-primary align-self-center col" data-toggle="modal" data-target="#addScore">
            <span class="glyphicon glyphicon-plus"></span> Thêm bảng điểm
        </a>
        <a type="submit" class="btn btn-success align-self-center  col " data-toggle="modal" data-target="#updateScore" >
            <span class="glyphicon glyphicon-pencil"></span> Sửa bảng điểm
        </a>
        <a class="btn btn-danger col align-self-center " data-toggle="modal" data-target="#deleteClass">
            <span class="glyphicon glyphicon-trash"></span> Xóa bảng điểm
        </a>
        <div class="col-sm-4">
            <select name="score" id="" class="form-control">
                <option value="NoneScore">--Chọn bảng điểm để chỉnh sửa--</option>
                <?php
                $scoreMod = new ScoresAddMod();
                $listScore = $scoreMod->getScoresAddByAccount($idLogin);
                foreach ($listScore as $key => $value){
                    echo'<option value="'.$value->getIdScore().'">'.$value->getScoreName().'</option>';
                }
                ?>
            </select>
        </div>
    </div>
    <br />
<table class="table table-bordered table-condensed" id="table-manage-scoreAdd">

    <thead>
    <tr>
        <th>STT</th>
        <th>Mã số sinh viên</th>
        <th>Tên sinh viên</th>
        <th>Lớp</th>
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
            if(empty($class)) $class[0] ="";
            $academy = $accountM->getAcademy($value->getIdAccount());
            if(empty($academy)) $academy[0]="";
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
            Lựa chọn 
        </td>       
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