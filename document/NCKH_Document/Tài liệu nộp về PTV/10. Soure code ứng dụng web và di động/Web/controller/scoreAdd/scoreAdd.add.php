<?php
if(isset($_POST['btnAdd'])) {

    $scoresAddO = new ScoresAddObj();
    $scoresAddM = new ScoresAddMod();
    if($_POST['addTranscript']!= 'NoneTranscript'){
        $scoresAddO->setScoresAddObj($_POST['addIDScore'],$_POST['addScoreName'],$_POST['addScore'],$_POST['addDescribe'],$_POST['addTranscript'],$_POST['addID']);
        $scoresAddM->addScoresAdd($scoresAddO);
    }
    #thêm dữ liệu và truyền đi
    echo'<META http-equiv="refresh" content="0;URL=scoreAdd.php">';
}
?>
<div id="addScore" class="modal fade " tabindex="-1" role="dialog" aria-labelledby aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Thêm mới bảng điểm</h4>
            </div>
            <div class="modal-body ">
                <form action="scoreAdd.php" method="post">
                    <fieldset class="form-group">
                        <p class="text-left"><b>ID</b></p>
                        <input type="text" class="form-control" name="addIDScore" id="addIDScore"
                               placeholder="Nhập tên bảng" required autofocus readonly value="<?php
                        $micro_date = microtime();
                        $date_array = explode(" ",$micro_date);
                        $date = date("Y-m-d H:i:s",$date_array[1]);
                        $id = strval($date_array[0]* 1000000).$idLogin;
                        echo $id;
                        ?>">
                    </fieldset>

                    <fieldset class="form-group">
                        <p class="text-left"><b>Tên bảng</b></p>
                        <input type="text" class="form-control" name="addScoreName" id="addScoreName"
                               placeholder="Nhập tên bảng" required autofocus>
                    </fieldset>

                    <fieldset class="form-group">
                        <p class="text-left "><b>Điểm</b></p>
                        <input type="number" class="form-control" name="addScore" id="addScore"
                               placeholder="Nhập điểm (nếu là điểm trừ vui lòng nhập số âm)" min="-20" max="20" required autofocus>

                    </fieldset>

                    <area class="form-group">
                    <p class="text-left "><b>Mô tả</b></p>
                    <textarea type="" class="form-control" name="addDescribe" id="addDescribe"
                              placeholder="Nhập mô tả lý do thêm bảng này" required autofocus></textarea>
                    </fieldset>

                    <fieldset class="form-group">
                        <p class="text-left"><b>Mục tác động trong bảng điểm</b></p>
                        <select class="form-control" name="addTranscript" id="addTranscript">
                            <option value="NoneTranscript">--Chọn mục--</option>
                            <?php
                            $transMod = new TranscriptMod();
                            $listTr = $transMod->getTranscriptAllObj();
                            foreach ($listTr as $key => $value){
                                echo '<option value="'.$value->getIdItem().'">'.$value->getItemName().'</option>';
                            }
                            ?>

                        </select>
                    </fieldset>

                    <fieldset class="form-group">
                        <p class="text-left "><b>Mã người lập bảng điểm</b></p>
                        <input type="text" class="form-control" name="addID" id="addID"
                               value="<?php echo $idLogin?>" readonly>

                    </fieldset>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                        <button type="submit" class="btn btn-primary" name="btnAdd">Thêm</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End add Class-->