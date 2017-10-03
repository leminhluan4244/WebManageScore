<?php
if(isset($_POST['btnThemThanhVien'])) {

    }

if(isset($_GET['idAcc'])){
    $studentMT = new AccountMod();
    $studentOT = $studentMT->findAccountByID($_GET['idAcc']);
    echo "
    <script> 
        $(function() {
            $('#addMemberBranch').modal('toggle');
        });
    </script>";
}
?>
<div id="addMemberBranch" class="modal fade " tabindex="-1" role="dialog" aria-labelledby aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Cập nhật thành viên chi hộih4>
            </div>
            <div class="modal-body ">
                <form action="#" method="post">

                    <fieldset class="form-group">
                        <p class="text-left "><b>Họ và Tên</b></p>
                        <input type="text" class="form-control" name="updateAccountName" id="updateAccountName"
                               value="<?php echo $studentOT['accountName']?>">

                    </fieldset>

                    <fieldset class="form-group">
                        <p class="text-left"><b>MSSV</b></p>
                        <input type="text" class="form-control" name="updateIdAccount" id="updateIdAccount"
                               value="<?php echo $studentOT['idAccount']?>">
                    </fieldset>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                        <button type="submit" class="btn btn-warning" name="btnThemThanhVien">Thêm</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End update student-->

<script>

    $(function () {
        window.history.pushState({path: 'member.branch.php'}, '', 'member.branch.php');
    });
</script>