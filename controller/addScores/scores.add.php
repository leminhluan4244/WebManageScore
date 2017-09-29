<?php
if(isset($_POST['btnAdd'])) {

    $ScoresAddO = new ScoresAddObj();
    $ScoresAddM = new ScoresAddMod();
    #thêm dữ liệu và truyền đi
    echo'<META http-equiv="refresh" content="0;URL=scoreAdd.manage.php">';
}
?>
                <!-- Start add Class-->
<div id="addScoreAdd" class="modal fade " tabindex="-1" role="dialog" aria-labelledby aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">

                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Thêm mới bảng điểm</h4>
                            </div>
                            <div class="modal-body ">
                                <form action="class.manage.php" method="post">

                                    <fieldset class="form-group">
                                        <p class="text-left "><b>Mã bảng</b></p>
                                        <input type="text" class="form-control" name="addScoreID" id="addScoreID"
                                               placeholder="Nhập id cho bảng điểm này">

                                    </fieldset>

                                    <fieldset class="form-group">
                                        <p class="text-left"><b>Tên bảng</b></p>
                                        <input type="text" class="form-control" name="addScoreName" id="addScoreName"
                                               placeholder="Nhập tên bảng">
                                    </fieldset>

                                    <fieldset class="form-group">
                                        <p class="text-left "><b>Điểm</b></p>
                                        <input type="text" class="form-control" name="addScore" id="addScore"
                                               placeholder="Nhập điểm (nếu là điểm trừ vui lòng nhập số âm)">

                                    </fieldset>

                                    <area class="form-group">
                                        <p class="text-left "><b>Mô tả</b></p>
                                        <textarea type="" class="form-control" name="addDesribe" id="addDesribe"
                                              placeholder="Nhập mô tả lý do thêm bảng này"></textarea>
                                    </fieldset>
                                    <?php
                                    #tạo biến lưu trữ id người thực hiện
                                    $id = $_POST['id'];
                                    ?>
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