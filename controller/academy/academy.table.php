<form action="academy.manage.php" method="post" id="manageForm">
<table class="table table-bordered table-condensed">

    <thead>
    <tr>
        <th>STT</th>
        <th>Mã khoa - viện</th>
        <th>Tên khoa viện</th>
        <th>Tất cả <br /><input type="checkbox" onClick="toggle(this)"></th>
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
            <a class="align-self-center " data-toggle="modal" data-target="#infoStudent" method="get" href="student.manage.php?id='.$value->getIdAcademy().'">'.$value->getIdAcademy().'</a>
        </td>
        <td>
            <a class="align-self-center " data-toggle="modal" data-target="#infoStudent" method="get" href="student.manage.php?id='.$value->getIdAcademy().'">'.$value->getAcademyName().'</a>
        </td>
        <td><input type="checkbox" name="xoa[]" id="'.$value->getIdAcademy().'" value="'.$value->getIdAcademy().'"/> </td>
       
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
</script>