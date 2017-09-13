<table class="table table-bordered table-condensed">

    <thead>
    <tr>
        <th>STT</th>
        <th>MSSV</th>
        <th>Họ và tên</th>
        <th>Chọn</th>
    </tr>
    </thead>



    <tbody class="text-center align-self-center">
    <?php
    $arrayAccount = array();
    $arrayAccount = $accountMod->getAllAccountByPermission('Sinh viên');
    foreach ($arrayAccount as $key=>$value){
        echo '<tr>
        <td>1</td>
        <td>
            <a class="align-self-center " data-toggle="modal" data-target="#infoStudent" method="get" href="student.manage.php?id='.$value->getIdAccount().'">'.$value->getIdAccount().'</a>
        </td>
        <td>
            <a class="align-self-center " data-toggle="modal" data-target="#infoStudent" method="get" href="student.manage.php?id='.$value->getIdAccount().'">'.$value->getAccountName().'</a>
        </td>
        <td>
            <input type="checkbox" name="idAccount" value="idAccount">
        </td>
    </tr>';
    }

    ?>
    </tbody>
</table>