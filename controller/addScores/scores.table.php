<hr />
<?php
    #Khoi tao di tuong chua
    $accountM  = new AccountMod();
  #Kiem tra xe thuoc phan quyen nao
    $number1=false;
    $number2=false;
    $number3=false;
    foreach ($power as $key => $value){
        if($value=='Thêm bảng điểm cộng trừ cho khoa') {
            $number1 =true;
        }
        if($value=='Thêm bảng điểm cộng trừ cho lớp') {
            $number2 =true;
        }
        if($value=='Thêm bảng điểm cộng trừ cho sinh viên theo chi hội') {
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
        $selected = 'NoneScore';
        ?>
<form action="" method="get" id="manageForm">
    <div class="row">
        <div class="col-sm-8">
            <select name="score" id="score" class="form-control">
                <option value="NoneScore">--Chọn bảng điểm để chỉnh sửa--</option>
                <?php

                foreach ($listScore as $key => $value){
                    echo'<option value="'.$value->getIdScore().'">'.$value->getScoreName().'</option>';
                }
                ?>
            </select>
        </div>
        <a  class="btn btn-info align-self-center col" data-toggle="modal" >
            <span class="glyphicon glyphicon-filter"></span> Liệt kê
        </a>
        <a href="" class="btn btn-primary col align-self-center " data-toggle="modal" data-target="#addScore">
            <span class="glyphicon glyphicon-plus"></span> Thêm
        </a>
        <button name="btn" type="submit" class="btn btn-success align-self-center  col " data-toggle="modal" data-target="#updateScore" >
            <span class="glyphicon glyphicon-pencil"></span> Sửa
        </button>
        <a class="btn btn-danger col align-self-center " data-toggle="modal" data-target="#deleteScore">
            <span class="glyphicon glyphicon-trash"></span> Xóa
        </a>

    </div>
</form>
    <br />
<form action="scoresAdd.manage.php" method="post" id="manageForm2">
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
    <a type="submit" class="btn btn-success align-self-center  col " data-toggle="modal" data-target="#" >
        <span class="glyphicon glyphicon-ok"></span> Lưu
    </a>
</form>
<script language="JavaScript">
    function toggle(checkall) {
        checkboxes = document.getElementsByName('xoa[]');
        for(var i=0, n=checkboxes.length;i<n;i++)
        {
            checkboxes[i].checked = checkall.checked;
        }
    }
    $('#table-manage-scoreAdd').DataTable();
</script>