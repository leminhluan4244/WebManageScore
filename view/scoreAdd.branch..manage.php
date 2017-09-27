<?php
require_once "../controller/header.php";
?>
<div class="container main-academy-container">
        <div class="academy-action-list text-center">
            <h4>Danh sách sinh viên</h4>
            <div class="form-group row">
               <form action="" method="post">
                   <div class="col-3">
                       <fieldset class="form-group">
                           <p class="text-left"><b>Chọn loại bảng điểm</b></p>
                           <select class="form-control" name="addSex" id="addSex">
                               <option value="Cong">Cộng</option>
                               <option value="Tru">Trừ</option>
                           </select>
                       </fieldset>
                   </div>
                    <div class="col-3">
                        <fieldset class="form-group">
                            <p class="text-left"><b>Ngày thêm</b></p>
                            <input type="date" class="form-control" name="addBirthday" id="addBirthday"
                                   placeholder="Ngày Sinh">
                        </fieldset>
                    </div>
                   <div class="col-3">
                       <fieldset class="form-group">
                           <p class="text-left"><b>Lý do</b></p>
                           <input type="text" class="form-control" name="addAddress" id="addAddress"
                                  placeholder="Lý do cộng hoặc trừ điểm">
                       </fieldset>
                   </div>
               </form>
            </div> <!--Bang trich loc-->
            <div class="">
                <table class="table table-bordered table-condensed">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>MSSV</th>
                            <th>Họ và tên</th>
                            <th>Thay đổi</th>
                        </tr>
                    </thead>
                    <tbody class="text-left">
                        <tr>
                            <td>1</td>
                            <td>B1400704</td>
                            <td>Lê Minh Luân</td>
                            <td>
                               <input type="checkbox" name="check" value="Chọn"> Chọn
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>B1400713</td>
                            <td>Đoàn Minh Nhựt</td>
                            <td>
                                <input type="checkbox" name="check" value="Chọn"> Chọn
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>B1400777</td>
                            <td>Lê Văn A</td>
                            <td>
                                <input type="checkbox" name="check" value="Chọn"> Chọn
                            </td>
                        </tr>
                    </tbody>
                </table>
                <a type="button" class="btn btn-primary" href="#">Tạo bảng điểm</a>

            </div>
        </div>

    </div>
 <?php
require_once "../controller/footer.php";
 ?>