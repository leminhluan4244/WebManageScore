<hr />
    <?php
    $idLogin = getLoggedAccountId();
    $scoreMod = new ScoresAddMod();
    $listScore = $scoreMod->getScoresAddByAccount($idLogin);
    ?>

<form action="scoreAdd.php" method="post" id="manageForm">
<table class="table table-bordered table-condensed" id="table-manage-score">

    <thead>
    <tr>
        <th>STT</th>
        <th>Mã bảng điểm</th>
        <th>Tên bảng điểm</th>
        <th>Điểm</th>
        <th>Tùy chỉnh</th>
        <th>Sinh viên chịu tác động</th>
        <th>Chọn tất cả <br /><input type="checkbox" onClick="toggle(this)"></th>
    </tr>
    </thead>

    <tbody class="text-center align-self-center">
    <?php
    $i=0;
    if(gettype($listScore)!='integer')
    foreach ($listScore as $key=>$value){
        echo '<tr>
        <td>'.++$i.'</td>
        <td>
            '.$value->getIdScore().'
        </td>
        <td>
            '.$value->getScoreName().'
        </td>
        <td>
            '.$value->getScores().'
        </td>
        <td>
            <a href="scoreAdd.php?idScore='.$value->getIdScore().'" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span></a>
        </td>
        <td>
            <a href="scoreAdd.manage.php?idScore='.$value->getIdScore().'" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-user"></span></a>
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
    $('#table-manage-score').DataTable();
</script>