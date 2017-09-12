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
    $arrayAccount = $accountMod->getAllAccount();
    foreach ($arrayAccount as $key=> $value){
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
    <tr>
        <td>1</td>
        <td>
            <a class="align-self-center " data-toggle="modal" data-target="#infoStudent" method="post" href="student.manage.php?id=<?php ?>">SV001</a>
        </td>
        <td>
            <a class="align-self-center " data-toggle="modal" data-target="#infoStudent">Lê Minh Luân</a>
        </td>
        <td>
            <input type="checkbox" name="idAccount" value="idAccount">
        </td>
    </tr>
    <tr>
        <td>2</td>
        <td>SV002</td>
        <td>Huỳnh Hoàng Thơ</td>
        <td>
            <input type="checkbox" name="idAccount" value="idAccount">
        </td>
    </tr>
    <tr>
        <td>2</td>
        <td>SV003</td>
        <td>Đoàn Minh Nhựt</td>
        <td>
            <input type="checkbox" name="idAccount" value="idAccount">
        </td>
    </tr>
    <tr>
        <td>3</td>
        <td>SV004</td>
        <td>Nguyễn Tấn Phát</td>
        <td>
            <input type="checkbox" name="idAccount" value="idAccount">
        </td>
    </tr>
    </tbody>
</table>