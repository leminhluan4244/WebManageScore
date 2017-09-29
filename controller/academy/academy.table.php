<form action="academy.manage.php" method="post" id="manageForm">
<table class="table table-bordered table-condensed" id="table-manage-academy">

    <thead>
    <tr>
        <th>STT</th>
        <th>Mã khoa - viện</th>
        <th>Tên khoa viện</th>
        <th>Tùy chỉnh</th>
        <th>Chọn tất cả <br /><input type="checkbox" onClick="toggle(this)"></th>
    </tr>
    </thead>



    <tbody class="text-center align-self-center">
    <?php
    $arrayAcademy = array();
    $arrayAcademy = $academyMod->getAcademy();
    $i=0;
    foreach ($arrayAcademy as $key=>$value){
        echo '<tr>
        <td>'.++$i.'</td>
        <td>
            '.$value->getIdAcademy().'
        </td>
        <td>
            '.$value->getAcademyName().'
        </td>
        <td>
            <a href="?idAcademy='.$value->getIdAcademy().'" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span></a>
        </td>
        <td><input type="checkbox" name="xoa[]" id="'.$value->getIdAcademy().'" value="'.$value->getIdAcademy().'"/>
         </td>
       
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
  $('#table-manage-academy').DataTable();
</script>