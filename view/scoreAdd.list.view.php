<?php
require_once "../model/Link.php";
$idSocre = getSession("stdId");
$accMod = new AccountMod();
$accObj = $accountM->getAccount($idSocre);
$tempMod = new ScoresAddMod();
$scoreTable = $tempMod->getScoresForStudent($idSocre);

?>
<div class="container-fluid">
    <!--Start content manage accademy -->
    <div class="container main-academy-container">
        <div class="academy-action-list text-center">

            <h4>Danh sách các mục điểm cho : <?php echo $accObj->getAccountName(); ?></h4>
            <!--End filter table-->
            <div class="form-group">
                <form action="scoreAdd.list.view.php" method="get">
                    <!--Start buttun filter-->
                    <input type="submit" value="Lọc" class="btn btn-primary col-sm-1" name="btnfilter">
                    <table class="table table-bordered table-condensed" id="table-manage-scoreAdd">

                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên bảng điểm</th>
                            <th>Mục tác động</th>
                            <th>Cán bộ thực hiện</th>
                        </tr>
                        </thead>
                        <tbody class="text-center align-self-center">
                        <?php
                        $i = 0;

                        if ($scoreTable > 0) {
                            foreach ($scoreTable as $key => $value) {
                                echo '<tr>
                                <td>' . ++$i . '</td>
                                <td>
                                    ' . $value->getScoreName() . '
                                </td>
                                <td>
                                    ' . $value->getTranscript_idItem() . '
                                </td>
                                <td>
                                    ' . $value->getIdAccountManage() . '
                                </td>     
                            </tr>';
                            }
                        }

                        ?>
                        </tbody>
                    </table>
                    <!--End buttun filter-->
                </form>
                <br>
                <br>
            </div>


        </div>
    </div>
    <!--End content manage student-->
</div>
