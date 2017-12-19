
<?php
    if(isset($_GET['idStudentAdd'])){
        $tempAdd = new AccountHasBranchMod();
        $tempAdd->addAccountHasBranch($_GET['idStudentAdd']);
    }
    if(isset($_GET['btnSearch']) && $_GET['btnSearch']!='') {
        $studentMod = new AccountMod();
        $arraystudent = $studentMod->findSVByID($_GET['search']);
        if($arraystudent<=0)  echo 'Không tìm thấy sinh viên này';
        else{
            echo '
    <h4 class="text-primary text-center">Kết quả tìm kiếm</h4>
    <table class="table table-bordered table-condensed " id="table-manage">
                <thead>
                <tr>

                    <th>Mã số Sinh Viên</th>
                    <th>Tên Sinh Viên</th>
                    <th>Thêm</th>
                </tr>
                </thead>
                <tbody class="text-center align-self-center">';

            foreach ($arraystudent as $key => $value) {
                echo '
                    <tr>                   
                    <td>
                        ' .  $value->getIdAccount() . '
                    </td>
                    <td>
                        ' . $value->getAccountName() . '
                    </td>
               
                        <td>
                        <a href="?idAcc='.$value->getIdAccount().'" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-plus"></span></a>
                        </td>
                     </tr>';
            }

            echo'
    </tbody>
    </table>';
        }
       }
?>
<?php
    $accTemp =new AccountMod();
    $idBranch =$accTemp->getBranchId($idLogin);
    if(gettype($idBranch)!='integer') {
        $branchMod = new BranchMod();
        $listAccount =  $branchMod->getListAccount($idBranch[0]);
        if(gettype($listAccount)!='integer'){
        echo '
    <div id="memberBranch-manage-wrapper">
        <form action="member.branch.php" method="post" id="manageForm">
            <h4>Thành viên chi hội '.$accTemp->getBranchName($idLogin)[0].'</h4>
            <table class="table table-bordered table-condensed " id="table-manage-branch">

                <thead>
                <tr>
                    <th>STT</th>
                    <th>MSSV</th>
                    <th>Tên Sinh Viên</th>
                    <th>Giới tính</th>
                    <th>Ngày sinh</th>
                    <th>Phân quyền</th>
                    <th>Chọn tất cả <br /><input type="checkbox" onClick="toggle(this)"></th>
                </tr>
                </thead>
               <tbody class="text-center align-self-center">';
        $i = 0;
        if ($listAccount > 0)
            foreach ($listAccount as $key => $value) {
                echo '<tr>
                    <td>' . ++$i . '</td>
                    <td>
                        ' . $value->getIdAccount() . '
                    </td>
                    <td>
                        ' . $value->getAccountName() . '
                    </td>
                    <td>
                        ' . $value->getSex() . '
                    </td>
                    <td>
                        ' . $value->getBirthday() . '
                    </td>
                    <td>
                        ' . $value->getPermission_position() . '
                    </td>
                    <td><input type="checkbox" name="xoa[]" id="' . $value->getIdAccount() . '" value="' . $value->getIdAccount() . '"/> </td>
                   
                     </tr>';}
                echo ' </tbody>
            </table>
        </form>
    </div>';
            }
    }
echo '<a class="btn btn-danger col align-self-center " data-toggle="modal" data-target="#deleteBranch">
            <span class="glyphicon glyphicon-trash"></span> Xóa
        </a>';
?>
<?php
if(isset($_GET['idAcc'])){
    $branchAdd = new AccountHasBranchMod();
    $branchAdd->addAccountHasBranch($_GET['idAcc'],$idBranch[0]);
    echo'<META http-equiv="refresh" content="0;URL=member.branch.php">';
}
?>
<script language="JavaScript">
    function toggle(checkall) {
        checkboxes = document.getElementsByName('xoa[]');
        for(var i=0, n=checkboxes.length;i<n;i++)
        {checkboxes[i].checked = checkall.checked;
        }
    }
    $('#table-manage-branch').DataTable();
</script>

