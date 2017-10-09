<?php
if (!empty($update) && ($_POST['score'] != 'NoneScore')) {
    echo "
        <script>
            $(function(){
                $('#updateScore').modal('show');
            });
        </script>";
    if (isset($_POST['score'])) {

            $scoresupdateMT = new ScoresAddMod();
            $scoresupdateOT = $scoresupdateMT->getScoresAddById($_POST['score']);
    }
    #thêm dữ liệu và truyền đi
}
?>

<?php
if(isset($_POST['btnUpdateSave'])) {
    $scoresupdateOTP = new ScoresAddObj();
    $scoresupdateOTP->setScoresAddObj($_POST['updateIdScore'], $_POST['updateScoreName'], $_POST['updateScore'], $_POST['updateDesribe'], $_POST['updateItem'], $_POST['updateScoreManage']);
    echo'<META http-equiv="refresh" content="0;URL=scoreAdd.manage.php">';
}
?>

        <div id="updateScore" class="modal fade " tabindex="-1" role="dialog" aria-labelledby aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
    
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Chỉnh sửa bảng điểm </h4>
                </div>
                <div class="modal-body ">
                    <form action="" method="post">
    
                        <fieldset class="form-group">
                            <p class="text-left "><b>Mã bảng</b></p>
                            <input type="text" class="form-control" name="updateIdScore" id="updateIdScore"
                                   placeholder="Nhập id cho bảng điểm này" value="<?php echo $scoresupdateOT->getIdScore(); ?>" readonly>
    
                        </fieldset>
    
                        <fieldset class="form-group">
                            <p class="text-left"><b>Tên bảng</b></p>
                            <input type="text" class="form-control" name="updateScoreName" id="updateScoreName"
                                   placeholder="Nhập tên bảng" value="<?php echo $scoresupdateOT->getScoreName(); ?>">
                        </fieldset>
    
                        <fieldset class="form-group">
                            <p class="text-left "><b>Điểm</b></p>
                            <input type="number" class="form-control" name="updateScore" id="updateScore"
                                   placeholder="Nhập điểm (nếu là điểm trừ vui lòng nhập số âm)" value="<?php echo $scoresupdateOT->getScores(); ?>">


                            <fieldset class="form-group">
                                <p class="text-left "><b>Mô tả</b></p>
                                <input type="text" class="form-control" name="updateDesribe" id="updateDesribe"
                                       value="<?php echo $scoresupdateOT->getDescribe(); ?>" >

                            </fieldset>

                        <fieldset class="form-group">
                            <p class="text-left "><b>Mã người lập bảng điểm</b></p>
                            <input type="text" class="form-control" name="updateScoreManage" id="updateScoreManage"
                                   value="<?php echo $scoresupdateOT->getIdAccountManage(); ?>" readonly>

                        </fieldset>
                        <fieldset class="form-group">
                            <p class="text-left"><b>Mục tác động trong bảng điểm</b></p>
                            <select class="form-control" name="updateItem" id="updateItem">
                                <option value="NoneAcademy">--Chọn mục--</option>';
                                <?php
        $transMod = new TranscriptMod();
        $listTr = $transMod->getTranscriptAllObj();
        if(gettype($listTr)!='integer')
        foreach ($listTr as $key => $value) {
            if ($value->getIdItem() == $scoresupdateOT->getTranscript_idItem())
                echo '<option selected="selected" value="' . $value->getIdItem() . '">' . $value->getItemName() . '</option>';
            else echo '<option value="' . $value->getIdItem() . '">' . $value->getItemName() . '</option>';
        }
      ?>
        </select>
    </fieldset>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
        <button type="submit" class="btn btn-primary" name="btnUpdateSave">Sửa</button>
    </div>
    </form>
    </div>
    </div>
    </div>
    </div>
