<table class="table table-bordered table-condensed">

    <thead>
    <tr>
        <th>STT</th>
        <th>Mã khoa - viện</th>
        <th>Tên khoa viện</th>
        <th>Chọn</th>
    </tr>
    </thead>



    <tbody class="text-center align-self-center">
    <?php
    $arrayAcademy = array();
    $arrayAcademy = $academyMod->getAcademy();
    foreach ($arrayAcademy as $key=>$value){
        echo '<tr>
        <td>1</td>
        <td>
            <a class="align-self-center " data-toggle="modal" data-target="#infoStudent" method="get" href="student.manage.php?id='.$value->getIdAcademy().'">'.$value->getIdAcademy().'</a>
        </td>
        <td>
            <a class="align-self-center " data-toggle="modal" data-target="#infoStudent" method="get" href="student.manage.php?id='.$value->getIdAcademy().'">'.$value->getAcademyName().'</a>
        </td>
        <td>
            <input type="checkbox" name="idAcademy" value="idAcademy">
        </td>
    </tr>';
    }

    ?>
    </tbody>
</table>