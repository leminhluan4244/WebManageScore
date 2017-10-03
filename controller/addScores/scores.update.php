<?php
if(!empty($update)) {
	$scoresupdateO = new ScoresAddObj();
	$scoresupdateM = new ScoresAddMod();


    echo "<b>Đã gửi dữ liệu qua đây với dữ liệu {$_POST['score']};</b>";


    echo "
    <script>
        $(function(){
            $('#updateScore').modal('show');
        });
    </script>";
    #thêm dữ liệu và truyền đi
  //      echo'<META http-equiv="refresh" content="0;URL=scoreAdd.manage.php">';
}
?>
<?php
    $scoresupdateMT = new ScoresAddMod();
    if(isset($_POST['score'])){
        if($_POST['score']!='NoneScore')
            $scoresupdateOT = $scoresupdateMT->getScoresAddById($_POST['score']);
    }


?>
<?php
if(isset($_GET['btn']))
echo $_GET['score'];
echo '<div id="" class="modal fade " tabindex="-1" role="dialog" aria-labelledby aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="">Xóa lớp!</h4>
            </div>
            <div class="modal-body">
                <h4>Hành động này cần xác nhận: Không thể hoàn tác!</h4>
                <p>Vui lòng kiểm tra cẩn thận!</p>
                    <div class="modal-footer">
                        <button type="submit" name="deleteYes" class="btn btn-danger">Đồng ý</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Không</button>
                    </div>
            </div>
        </div>
    </div>
</div>';
?>
<!-- Start update Class-->
<div id="updateScore" class="modal fade " tabindex="-1" role="dialog" aria-labelledby aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Chỉnh sửa bảng điểm </h4>
            </div>
            <div class="modal-body ">
                <form action="scoreAdd.manage.php" method="post">

                    <fieldset class="form-group">
                        <p class="text-left "><b>Mã bảng</b></p>
                        <input type="text" class="form-control" name="updateScoreID" id="updateScoreID"
                               placeholder="Nhập id cho bảng điểm này" value="<?php echo $scoresupdateOT->getidScore();?>">

                    </fieldset>

                    <fieldset class="form-group">
                        <p class="text-left"><b>Tên bảng</b></p>
                        <input type="text" class="form-control" name="updateScoreName" id="updateScoreName"
                               placeholder="Nhập tên bảng" value="<?php echo $scoresupdateOT->getScoreName();?>">
                    </fieldset>

                    <fieldset class="form-group">
                        <p class="text-left "><b>Điểm</b></p>
                        <input type="text" class="form-control" name="updateScore" id="updateScore"
                               placeholder="Nhập điểm (nếu là điểm trừ vui lòng nhập số âm)" value="<?php echo $scoresupdateOT->getScores();?>">

                    </fieldset>

                    <area class="form-group">
                    <p class="text-left "><b>Mô tả</b></p>
                    <textarea type="" class="form-control" name="updateDesribe" id="updateDesribe"
                              placeholder="Nhập mô tả lý do thêm bảng này" value="<?php echo $scoresupdateOT->getDescribe();?>"></textarea>
                    </fieldset>
                    <fieldset class="form-group">
                        <p class="text-left "><b>Mã người lập bảng điểm</b></p>
                        <input type="text" class="form-control" name="updateScore" id="updateScore"
                               value="value="<?php echo $scoresupdateOT->getIdAccountManage();?>"" readonly>

                    </fieldset>
                    <fieldset class="form-group">
                        <p class="text-left"><b>Mục tác động trong bảng điểm</b></p>
                        <select class="form-control" name="updateItem" id="updateItem">
                            <option value="NoneAcademy">--Chọn mục--</option>
                            <?php
                            $transMod = new TranscriptMod();
                            $listAcademy = $transMod->getTranscriptAllObj();
                            foreach ($listAcademy as $key => $value){
                                if($value->getIdItem()==$scoresupdateOT->getTranscript_idItem())
                                    echo '<option selected="selected" value="'.$value->getIdItem().'">'.$value->getItemName().'</option>';
                                else echo '<option value="'.$value->getIdItem().'">'.$value->getItemName().'</option>';
                            }
                            ?>
                        </select>
                    </fieldset>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                        <button type="submit" class="btn btn-primary" name="btnUpdate">Sửa</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End update Class-->