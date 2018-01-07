<?php
if(isset($_POST['btnUpdate'])) {

    $scoresUpO = new ScoresAddObj();
    $scoresUpM = new ScoresAddMod();
    if($_POST['btnUpdate']!= 'NoneTranscript'){
        $scoresUpO->setScoresAddObj($_POST['updateScoreID'],$_POST['updateScoreName'],$_POST['updateScore'],$_POST['updateDescribe'],$_POST['updateTranscript'],$_POST['updateID']);
        $scoresUpM->updateScoresAdd($scoresUpO);
    }
    #thêm dữ liệu và truyền đi
    echo'<META http-equiv="refresh" content="0;URL=scoreAdd.php">';
}
if(isset($_GET['idScore'])) {
    var_dump($_GET['idScore']);
    $O = new ScoresAddObj();
    $M = new ScoresAddMod();
    $O = $M->getScoresAddById($_GET['idScore']);
}
else $O=0;
?>
<?php
if (gettype($O)!='integer') {
echo'
<div id="updateScore" class="modal fade " tabindex="-1" role="dialog" aria-labelledby aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Thêm mới bảng điểm</h4>
            </div>
            <div class="modal-body ">
                <form action="scoreAdd.php" method="post">

                    <fieldset class="form-group">
                        <p class="text-left "><b>ID</b></p>
                        <input type="text" class="form-control" name="updateScoreID" id="updateScoreID"
                               placeholder="Nhập id cho bảng điểm này" required autofocus value="' . $O->getIdScore() . '" readonly>

                    </fieldset>

                    <fieldset class="form-group">
                        <p class="text-left"><b>Tên bảng</b></p>
                        <input type="text" class="form-control" name="updateScoreName" id="updateScoreName"
                               placeholder="Nhập tên bảng" required autofocus value="' . $O->getScoreName(). '">
                    </fieldset>

                    <fieldset class="form-group">
                        <p class="text-left "><b>Điểm</b></p>
                        <input type="number" class="form-control" name="updateScore" id="updateScore"
                               placeholder="Nhập điểm (nếu là điểm trừ vui lòng nhập số âm)" min="-20" max="20" required autofocus value="' . $O->getScores() . '">

                    </fieldset>

                    <area class="form-group">
                    <p class="text-left "><b>Mô tả</b></p>
                    <textarea type="" class="form-control" name="updateDescribe" id="updateDescribe"
                              placeholder="Nhập mô tả lý do thêm bảng này" required autofocus >'. $O->getDescribe() .'</textarea>
                    </fieldset>

                    <fieldset class="form-group">
                        <p class="text-left"><b>Mục tác động trong bảng điểm</b></p>
                        <select class="form-control" name="updateTranscript" id="updateTranscript">
                            <option value="NoneTranscript">--Chọn mục--</option>'; ?>
                            <?php
                            $transMod = new TranscriptMod();
                            $listTr = $transMod->getTranscriptAllObj();
                            foreach ($listTr as $key => $value){
                                if($O->getTranscript_idItem()==$value->getIdItem())
                                    echo '<option selected = "selected" value="'.$value->getIdItem().'">'.$value->getItemName().'</option>';
                                else
                                echo '<option value="'.$value->getIdItem().'">'.$value->getItemName().'</option>';

                            }
                            ?>
<?php
echo'
                        </select>
                    </fieldset>

                    <fieldset class="form-group">
                        <p class="text-left "><b>Mã người lập bảng điểm</b></p>
                        <input type="text" class="form-control" name="updateID" id="updateID"
                               value="'.$O->getIdAccountManage().'" readonly>

                    </fieldset>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                        <button type="submit" class="btn btn-primary" name="btnUpdate">Sửa</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
';
}?>
<!-- End add Class-->
<script>
    $(function () {
        $('#updateScore').modal('toggle');
        window.history.pushState({path: 'scoreAdd.php'}, '', 'scoreAdd.php');
    });
</script>