    <?php
    if(isset($_GET['idStudentAdd'])){
        $tempAdd = new AccountHasBranchMod();
        $tempAdd->addAccountHasBranch($_GET['idStudentAdd']);
    }
    if(isset($_GET['btnSearch'])) {
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
    if($idBranch)
?>
    <div id="memberBranch-manage-wrapper">

        <form action="member.branch.php" method="post" id="manageForm">


            <!-- bang 2 -->
            <h4>Thành viên chi hội</h4>
            <table class="table table-bordered table-condensed " id="table-manage-branch">

                <thead>
                <tr>
                    <th>STT</th>
                    <th>MSSV</th>
                    <th>Tên Sinh Viên</th>
                    <th>Lớp</th>
                </tr>
                </thead>
                <tbody>

                <!-- Kết thúc lấy thuộc tính cho bảng từ CSDL -->
                </tbody>
            </table>
        </form>
    </div>


