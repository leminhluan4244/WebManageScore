<hr />
<?php
if(!isset($_GET['btnfilter'])) {
    $arrayBranch = array();
    $arrayBranch = $branchMod->getBranch();
}
else {
    $arrayBranch = array();
    $arrayBranch = $branchMod->findBranchByCity($_GET['city']);

}

?>
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
    <form action="branch.manage.php" method="post" id="manageForm">
        <?php
              $i=0;
        if(count($arrayBranch)>1){
            if($arrayBranch==0) echo 'Dữ liệu rỗng';
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
        }

        ?>
    </form>
    <!-- Kết thúc lấy thuộc tính cho bảng từ CSDL -->
    </tbody>
</table>
<script language="JavaScript">
    function toggle(checkall) {
        checkboxes = document.getElementsByName('xoa[]');
        for(var i=0, n=checkboxes.length;i<n;i++) {
            checkboxes[i].checked = checkall.checked;
        }
    }
    $('#table-manage-branch').DataTable();
</script>