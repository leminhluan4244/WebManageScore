<hr />
<?php
  #trước hết xét xem có truyền id sang không
    if(isset($_POST['id'])) {
        #nếu truyền sang thì: (đưa dữ liệu vào mảng temp)
            $permissionMod = new PermissionMod();
            $permissionAcc = $accountMod->getPermission($_POST['id']);
            $list = $permissionMod->selectPower($permissionAcc);
            foreach ($list as $key => $value){
                #nếu có là nguwoif quản lý thì show ra các bảng điểm mà người đó đã thêm
                if($value=='Thêm bảng điểm cộng trừ cho lớp' || $value=='Thêm bảng điểm cộng trừ cho khoa' ||$value=='Thêm bảng điểm cộng trừ cho sinh viên theo chi hội'){
                        $scoreadd = new ScoresAddMod();
                        $temp = $scoreadd->getScoresAddByAccount($_POST['id']);
                        break;
                }
            }
    }

?>

<form action="scoresAdd.manage.php" method="post" id="manageForm">
<table class="table table-bordered table-condensed" id="table-manage-scoreAdd">

    <thead>
    <tr>
        <th>STT</th>
        <th>Mã bảng điểm</th>
        <th>Tên bảng điểm</th>
        <th>Mô tả</th>
        <th>Danh mục tác động</th>
        <th>Tùy chỉnh</th>
        <th>Chọn tất cả <br /><input type="checkbox" onClick="toggle(this)"></th>
    </tr>
    </thead>



    <tbody class="text-center align-self-center">
    <?php
    $i=0;
    if($temp>0)
    foreach ($temp as $key=>$value){
        echo '<tr>
        <td>'.++$i.'</td>
        <td>
            '.$value->getIdScores().'
        </td>
        <td>
            '.$value->getScoreName().'
        </td>
        <td>
            '.$value->getScores().'
        </td>
        <td>
            '.$value->getDecribe().'
        </td>
        <td>
            '.$value->getTranscript_idItem().'
        </td>
        <td>
            <a href="?idScoreAdd='.$value->getIdScore().'" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span></a>
        </td>
        <td><input type="checkbox" name="xoa[]" id="'.$value->getIdScore().'" value="'.$value->getIdScore().'"/> </td>
       
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
    $('#table-manage-scoreAdd').DataTable();
</script>