<?php
?>
<table class="table table-bordered table-condensed ">

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
            $arrayBranch = array();
            $arrayBranch = $branchMod->getBranch();
              $i=0;
        if(count($arrayBranch)>1)
            foreach ($arrayBranch as $key => $value) {
                $i++;
                echo '
    
                <tr>
                    <td>'.$i.'</td>
                    <td>
                        <a class="align-self-center " data-toggle="modal" data-target="#infoBranch" method="get" href="branch.manage.php?id=' . $value->getidBranch() . '">' . $value->getidBranch() . '</a>
                    </td>
                    <td>
                        <a class="align-self-center " data-toggle="modal" data-target="#infoBranch" method="get" href="branch.manage.php?id=' . $value->getidBranch() . '">' . $value->getBranchName() . '</a>
                    </td>
                    <td>
                        <a class="align-self-center " data-toggle="modal" data-target="#infoBranch" method="get" href="branch.manage.php?id=' . $value->getidBranch() . '">' . $value->getCity() . '</a>
                    </td>
                    <td>
                        <a href="?idBranch='.$value->getidBranch().'" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span></a>
                    </td>
                    <td>
                        <input type="checkbox" name="xoa[]" id="'.$value->getidBranch().'" value="'.$value->getidBranch().'"/>            
                    </td>
                </tr>';
            }
        ?>
    </form>
    <!-- Kết thúc lấy thuộc tính cho bảng từ CSDL -->
    </tbody>
</table>
<!-- Bắt sự kiện check all tất cả checkbox để xóa tất cả dữ liệu  -->
<script language="JavaScript">
    function toggle(checkall) {
        checkboxes = document.getElementsByName('xoa[]');
        for(var i=0, n=checkboxes.length;i<n;i++) {
            checkboxes[i].checked = checkall.checked;
        }
    }
</script>