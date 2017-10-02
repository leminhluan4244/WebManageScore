<hr />
<?php
if(!isset($_GET['btnfilter'])) {
    $branchMod = new BranchMod();
    $arrayBranch = array();
    $arrayBranch = $branchMod->getBranch();
}
else {
    if($_GET['city']=='NoneCity') {
        $branchMod = new BranchMod();
        $arrayBranch = array();
        $arrayBranch = $branchMod->getBranch();

    }else{
        $arrayBranch = array();
        $arrayBranch = $branchMod->findBranchByCity($_GET['city']);
    }


}
?>

<div id="branch-manage-wrapper">
    <h4 class="text-primary text-center">Danh sách chi hội</h4>
    <form action="branch.manage.php" method="post" id="manageForm">
    <table class="table table-bordered table-condensed " id="table-manage-branch">
    <thead>
    <tr>
        <th>STT</th>
        <th>Mã CH</th>
        <th>Tên CH</th>
        <th>Tỉnh Thành</th>
        <th>Tùy Chỉnh</th>
        <th>Chọn tất cả<br>
            <input type="checkbox" onClick="toggle(this)"></th>
    </tr>
    </thead>
        <tbody class="text-center align-self-center">
        <?php
              $i=0;
            if($arrayBranch<=0) echo 'Không có dữ liệu';
            else
                foreach ($arrayBranch as $key => $value) {
                    $i++;
                    echo '
    
                <tr>
                    <td>'.$i.'</td>
                   
                    <td>
                        ' . $value->getIdBranch() . '
                    </td>
                    <td>
                        ' . $value->getBranchName() . '
                    </td>
                    <td>
                        ' . $value->getCity() . '
                    </td>
                    <td>
                        <a href="?idBranch='.$value->getIdBranch().'" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span></a>
                    </td>
                    <td>
                        <input type="checkbox" name="xoa[]" id="'.$value->getIdBranch().'" value="'.$value->getIdBranch().'"/>
                    </td>
                </tr>';
        }

        ?>
        </tbody>
    </table>
    </form>
</div>
<script language="JavaScript">

    function toggle(checkall) {
        checkboxes = document.getElementsByName('xoa[]');
        for(var i=0, n=checkboxes.length;i<n;i++)
        {checkboxes[i].checked = checkall.checked;
        }
    }
    $('#table-manage-branch').DataTable();
</script>