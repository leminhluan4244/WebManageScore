<form action="practise.manage.php" method="post" id="manageForm">
<table class="table table-bordered table-condensed" id="table-manage-practise">

    <thead>
    <tr>
        <th>STT</th>
        <th>Học kỳ</th>
        <th>Năm</th>
        <th>Bắt đầu</th>
        <th>Kết thúc</th>
        <th>Tùy chỉnh</th>
        <th>Chọn tất cả <br /><input type="checkbox" onClick="toggle(this)"></th>
    </tr>
    </thead>



    <tbody class="text-center align-self-center">
    <?php
    $practiseMod = new PractiseScoresMod();
    $arraypractise = array();
    $arraypractise = $practiseMod->getListYears();
    $i=0;
    foreach ($arraypractise as $key=>$value){
        echo '<tr>
        <td>'.++$i.'</td>
        <td>
            '.$value->getSemester().'
        </td>
        <td>
            '.$value->getYears().'
        </td>
        <td>
            '.$value->getBeginDate().'
        </td>
        <td>
            '.$value->getEndDate().'
        </td>
        <td>
            <a href="?semester='.$value->getSemester().'?years='.$value->getYears().'" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span></a>
        </td>
        <td><input type="checkbox" name="xoa[]" id="'.$value->getYears().'" value="'.$value->getIdpractise().'"/> </td>
       
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
    $('#table-manage-practise').DataTable();
</script>