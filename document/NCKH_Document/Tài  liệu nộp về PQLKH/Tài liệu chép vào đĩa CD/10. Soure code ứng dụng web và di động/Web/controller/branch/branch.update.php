<!-- Start update branch-->
<?php
if(isset($_POST['save'])) {
    $branchO = new BranchObj();
    $branchM = new BranchMod();

    $branchO->setBranchObj($_POST['idBranch'], $_POST['branchName'], $_POST['city']);
    $branchM->updateBranch($branchO);
    $bangtamO= new AccountHasBranchMod();
    $bangtamO->addAccountHasBranch($_POST['tch'],$_POST['idBranch']);
    echo'<META http-equiv="refresh" content="0;URL=branch.manage.php">';
}
$branchM = new BranchMod();
$list = $branchM->getBranch();
$idBranch = isset($_GET['idBranch']) ? $_GET['idBranch'] : false;
if ($idBranch) {
    $branchO = new BranchObj();
    $branchO = $branchM->findBranchByID($idBranch);
}
function checkO($stringA, $temp)
{
    if ($stringA == $temp) {
        return 'selected="selected"';
    }
    return "";
}



if (!empty($branchO)) {
    echo '
<div id="updateBranch" class="modal fade " tabindex="-1" role="dialog" aria-labelledby aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Sửa Chi Hội</h4>
            </div>
            <div class="modal-body">
                <form method="post">

                    <fieldset class="form-group">
                        <p class="text-left"><b>Mã Chi Hội</b></p>
                        <input type="text" class="form-control" name="idBranch" id="idBranch"
                               value="' . $branchO->getidBranch() . '" readonly >
                    </fieldset>

                    <fieldset class="form-group">
                        <p class="text-left"><b>Tên Chi Hội</b></p>
                        <input type="text" class="form-control" name="branchName" id="branchName"
                               value="' . $branchO->getBranchName() . '" required autofocus>
                    </fieldset>
                    
                    <fieldset class="form-group">
                        <p class="text-left"><b>Trưởng chi hội</b></p>
                        <select class="form-control" name="tch" id="tch">';
                        $TCH = new AccountObj();
                        $TCHM = new AccountMod();
                        $listTCH = $TCHM->getTruongChiHoi();
                        if(gettype($list)!=gettype(0)){
                            foreach($listTCH as $key => $value){
                                echo '
                            <option  value="'.$value->getIdAccount().'">'.$value->getAccountName().'</option> ';
                            }
                        }

    echo '
                        </select>
                    </fieldset>

                    <fieldset class="form-group">
                        <p class="text-left"><b>Tỉnh Thành</b></p>
                        <select class="form-control" name="city" id="city">
                        
                            <option '.checkO("An Giang", $branchO->getCity()).' value="An Giang">An Giang</option>
                            <option '.checkO("Bà Rịa - Vũng Tàu", $branchO->getCity()).' value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu</option>
                            <option '.checkO("Bắc Giang", $branchO->getCity()).' value="Bắc Giang">Bắc Giang</option>
                            <option '.checkO("Bắc Kạn", $branchO->getCity()).' value="Bắc Kạn">Bắc Kạn</option>
                            <option '.checkO("Bạc Liêu", $branchO->getCity()).' value="Bạc Liêu">Bạc Liêu</option>
                            <option '.checkO("Bắc Ninh", $branchO->getCity()).' value="Bắc Ninh">Bắc Ninh</option>
                            <option '.checkO("Bến Tre", $branchO->getCity()).' value="Bến Tre">Bến Tre</option>
                            <option '.checkO("Bình Định", $branchO->getCity()).' value="Bình Định">Bình Định</option>
                            <option '.checkO("Bình Dương", $branchO->getCity()).' value="Bình Dương">Bình Dương</option>
                            <option '.checkO("Bình Phước", $branchO->getCity()).' value="Bình Phước">Bình Phước</option>
                            <option '.checkO("Bình Thuận", $branchO->getCity()).' value="Bình Thuận">Bình Thuận</option>
                            <option '.checkO("Cà Mau", $branchO->getCity()).' value="Cà Mau">Cà Mau</option>
                            <option '.checkO("Cao Bằng", $branchO->getCity()).' value="Cao Bằng">Cao Bằng</option>
                            <option '.checkO("Đắk Lắk", $branchO->getCity()).' value="Đắk Lắk">Đắk Lắk</option>
                            <option '.checkO("Đắk Nông", $branchO->getCity()).' value="Đắk Nông">Đắk Nông</option>
                            <option '.checkO("Điện Biên", $branchO->getCity()).' value="Điện Biên">Điện Biên</option>
                            <option '.checkO("Đồng Nai", $branchO->getCity()).' value="Đồng Nai">Đồng Nai</option>
                            <option '.checkO("Đồng Tháp", $branchO->getCity()).' value="Đồng Tháp">Đồng Tháp</option>
                            <option '.checkO("Gia Lai", $branchO->getCity()).' value="Gia Lai">Gia Lai</option>
                            <option '.checkO("Hà Giang", $branchO->getCity()).' value="Hà Giang">Hà Giang</option>
                            <option '.checkO("Hà Nam", $branchO->getCity()).' value="Hà Nam">Hà Nam</option>
                            <option '.checkO("Hà Tĩnh", $branchO->getCity()).' value="Hà Tĩnh">Hà Tĩnh</option>
                            <option '.checkO("Hải Dương", $branchO->getCity()).' value="Hải Dương">Hải Dương</option>
                            <option '.checkO("Hậu Giang", $branchO->getCity()).' value="Hậu Giang">Hậu Giang</option>
                            <option '.checkO("Hòa Bình", $branchO->getCity()).' value="Hòa Bình">Hòa Bình</option>
                            <option '.checkO("Hưng Yên", $branchO->getCity()).' value="Hưng Yên">Hưng Yên</option>
                            <option '.checkO("Khánh Hòa", $branchO->getCity()).' value="Khánh Hòa">Khánh Hòa</option>
                            <option '.checkO("Kiên Giang", $branchO->getCity()).' value="Kiên Giang">Kiên Giang</option>
                            <option '.checkO("Kon Tum", $branchO->getCity()).' value="Kon Tum">Kon Tum</option>
                            <option '.checkO("Lai Châu", $branchO->getCity()).' value="Lai Châu">Lai Châu</option>
                            <option '.checkO("Lâm Đồng", $branchO->getCity()).' value="Lâm Đồng">Lâm Đồng</option>
                            <option '.checkO("Lạng Sơn", $branchO->getCity()).' value="Lạng Sơn">Lạng Sơn</option>
                            <option '.checkO("Lào Cai", $branchO->getCity()).' value="Lào Cai">Lào Cai</option>
                            <option '.checkO("Long An", $branchO->getCity()).' value="Long An">Long An</option>
                            <option '.checkO("Nam Định", $branchO->getCity()).' value="Nam Định">Nam Định</option>
                            <option  '.checkO("Nghệ An", $branchO->getCity()).'value="Nghệ An">Nghệ An</option>
                            <option '.checkO("Ninh Bình", $branchO->getCity()).' value="Ninh Bình">Ninh Bình</option>
                            <option '.checkO("Ninh Thuận", $branchO->getCity()).' value="Ninh Thuận">Ninh Thuận</option>
                            <option '.checkO("Phú Thọ", $branchO->getCity()).' value="Phú Thọ">Phú Thọ</option>
                            <option '.checkO("Quảng Bình", $branchO->getCity()).' value="Quảng Bình">Quảng Bình</option>
                            <option '.checkO("Quảng Nam", $branchO->getCity()).' value="Quảng Nam">Quảng Nam</option>
                            <option '.checkO("Quảng Ngãi", $branchO->getCity()).' value="Quảng Ngãi">Quảng Ngãi</option>
                            <option '.checkO("Quảng Ninh", $branchO->getCity()).' value="Quảng Ninh">Quảng Ninh</option>
                            <option '.checkO("Quảng Trị", $branchO->getCity()).' value="Quảng Trị">Quảng Trị</option>
                            <option '.checkO("Sóc Trăng", $branchO->getCity()).' value="Sóc Trăng">Sóc Trăng</option>
                            <option '.checkO("Sơn La", $branchO->getCity()).' value="Sơn La">Sơn La</option>
                            <option '.checkO("Tây Ninh", $branchO->getCity()).' value="Tây Ninh">Tây Ninh</option>
                            <option '.checkO("Thái Bình", $branchO->getCity()).' value="Thái Bình">Thái Bình</option>
                            <option '.checkO("Thái Nguyên", $branchO->getCity()).' value="Thái Nguyên">Thái Nguyên</option>
                            <option '.checkO("Thanh Hóa", $branchO->getCity()).' value="Thanh Hóa">Thanh Hóa</option>
                            <option '.checkO("Thừa Thiên Huế", $branchO->getCity()).' value="Thừa Thiên Huế">Thừa Thiên Huế</option>
                            <option '.checkO("Tiền Giang", $branchO->getCity()).' value="Tiền Giang">Tiền Giang</option>
                            <option '.checkO("Trà Vinh", $branchO->getCity()).' value="Trà Vinh">Trà Vinh</option>
                            <option '.checkO("Tuyên Quang", $branchO->getCity()).' value="Tuyên Quang">Tuyên Quang</option>
                            <option '.checkO("Vĩnh Long", $branchO->getCity()).' value="Vĩnh Long">Vĩnh Long</option>
                            <option '.checkO("Vĩnh Phúc", $branchO->getCity()).' value="Vĩnh Phúc">Vĩnh Phúc</option>
                            <option '.checkO("Yên Bái", $branchO->getCity()).' value="Yên Bái">Yên Bái</option>
                            <option '.checkO("Phú Yên", $branchO->getCity()).' value="Phú Yên">Phú Yên</option>
                            <option '.checkO("Cần Thơ", $branchO->getCity()).' value="Cần Thơ">Cần Thơ</option>
                            <option '.checkO("Đà Nẵng", $branchO->getCity()).' value="Đà Nẵng">Đà Nẵng</option>
                            <option '.checkO("Hải Phòng", $branchO->getCity()).' value="Hải Phòng">Hải Phòng</option>
                            <option '.checkO("Hà Nội", $branchO->getCity()).' value="Hà Nội">Hà Nội</option>
                            <option '.checkO("TP HCM", $branchO->getCity()).' value="TP HCM">TP HCM</option> 
                        </select>
                    </fieldset>

                    <div class="form-group">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                        <button type="submit" class="btn btn-primary" name="save" ">Sửa</button>
                    </div>
                    
                        
                       
                </form>
            </div>

        </div>
    </div>
</div>';

}
?>
<!-- End add branch-->
<script>
    $(function () {
        $('#updateBranch').modal('toggle');
        window.history.pushState({path: 'branch.manage.php'}, '', 'branch.manage.php');
    });
</script>