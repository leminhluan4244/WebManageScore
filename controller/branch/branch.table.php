<table class="table table-bordered table-condensed ">

    <thead>
    <tr>
        <th>STT</th>
        <th>Mã CH</th>
        <th>Tên CH</th>
        <th>Tỉnh Thành</th>
        <th><input type="checkbox" onClick="toggle(this)"><br>All check</th>
    </tr>
    </thead>



    <tbody class="text-center align-self-center">

    <!-- Lấy thuộc tính cho bảng từ CSDL -->
    <?php
    $arrayBranch = array();
    $arrayBranch = $branchMod->getBranch();
    foreach ($arrayBranch as $key=>$value){
        echo '<tr>
        <td>1</td>
        <td>
            <a class="align-self-center " data-toggle="modal" data-target="#infoBranch" method="get" href="branch.manage.php?id='.$value->getidBranch().'">'.$value->getidBranch().'</a>
        </td>
        <td>
            <a class="align-self-center " data-toggle="modal" data-target="#infoBranch" method="get" href="branch.manage.php?id='.$value->getidBranch().'">'.$value->getBranchName().'</a>
        </td>
        <td>
            <a class="align-self-center " data-toggle="modal" data-target="#infoBranch" method="get" href="branch.manage.php?id='.$value->getidBranch().'">'.$value->getCity().'</a>
        </td>
        <td>
            <input type="checkbox" name="idBranch" value="idBranch">
        </td>
    </tr>';
    }
    ?>
    <!-- Kết thúc lấy thuộc tính cho bảng từ CSDL -->
    </tbody>
</table>