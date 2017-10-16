<?php

if (!empty($delete)){
    echo "
    <script>
        $(function(){
            $('#deleteScore').modal('show');
        });
    </script>";


}


?>

<!--Start delete Class-->
<div id="deleteScore" class="modal fade " tabindex="-1" role="dialog" aria-labelledby aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="">Xóa lớp!</h4>
            </div>
            <div class="modal-body">
                <h4>Hành động này cần xác nhận: Không thể hoàn tác!</h4>
                <p>Vui lòng kiểm tra cẩn thận!</p>
                <form action="" method="post">

                    <div class="modal-footer">
                        <input type="hidden" name="deleteClass" id="deleteClass">
                        <button type="submit" name="deleteYes" class="btn btn-danger">Đồng ý</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Không</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
    if(isset($_POST['deleteYes'])) {
        $scoresdeleteMT = new ScoresAddMod();
        $scoresdeleteOT = new ScoresAddObj();
        $scoresdeleteOT->getIdScore($_POST['score']);
        $scoresdeleteMT->deleteScoresAdd($scoresdeleteOT);

        //  echo'<META http-equiv="refresh" content="0;URL=scoreAdd.manage.php">';

    }
    ?>
</div>


<!--End delete Class-->