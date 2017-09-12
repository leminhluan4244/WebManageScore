                <!-- Start add student-->
                <div id="addStudent" class="modal fade " tabindex="-1" role="dialog" aria-labelledby aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">

                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Thêm mới sinh viên</h4>
                            </div>
                            <div class="modal-body ">
                                <form action="student.mamage.php" method="post">

                                    <fieldset class="form-group">
                                        <p class="text-left "><b>Họ và Tên</b></p>
                                        <input type="text" class="form-control" name="addAccountName" id="addAccountName"
                                               placeholder="Nhập tên sinh viên">

                                    </fieldset>

                                    <fieldset class="form-group">
                                        <p class="text-left"><b>MSSV</b></p>
                                        <input type="text" class="form-control" name="addIdAccount" id="addIdAccount"
                                               placeholder="Nhập mã số sinh viên">
                                    </fieldset>

                                    <fieldset class="form-group">
                                        <p class="text-left"><b>Ngày Sinh</b></p>
                                        <input type="date" class="form-control" name="addBirthday" id="addBirthday"
                                               placeholder="Ngày Sinh">
                                    </fieldset>

                                    <fieldset class="form-group">
                                        <p class="text-left"><b>Địa chỉ</b></p>
                                        <input type="text" class="form-control" name="addAddress" id="addAddress"
                                               placeholder="Địa chỉ">
                                    </fieldset>

                                    <fieldset class="form-group">
                                        <p class="text-left"><b>Giới tính</b></p>
                                        <select class="form-control" name="addSex" id="addSex">
                                            <option value="male">Nam</option>
                                            <option value="female">Nữ</option>
                                        </select>
                                    </fieldset>

                                    <fieldset class="form-group">
                                        <p class="text-left"><b>Điện thoại</b></p>
                                        <input type="number" class="form-control" name="addPhone" id="addPhone"
                                               placeholder="Nhập số điện thoại">
                                    </fieldset>

                                    <fieldset class="form-group">
                                        <p class="text-left"><b>Email</b></p>
                                        <input type="mail" class="form-control" name="addEmail" id="addEmail"
                                               placeholder="Nhập email" value="@student.ctu.edu.vn">
                                    </fieldset>

                                    <fieldset class="form-group">
                                        <p class="text-left"><b>Khoa - Viện</b></p>
                                        <select class="form-control" name="addAcademyName" id="addAcademyName">
                                            <option value="TS">--Chọn khoa--</option>
                                            <option value="DI">Công nghệ thông tin và
                                                truyền thông
                                            </option>
                                            <option value="TS">Thủy sản</option>
                                            <option value="MT">Môi trường</option>
                                            <option value="CṆ">Công nghệ</option>
                                        </select>
                                    </fieldset>

                                    <fieldset class="form-group">
                                        <p class="text-left"><b>Lớp</b></p>
                                        <select class="form-control" name="addClassName" id="addClassName">
                                            <option value="DI1496A1">KTPM1 K40</option>
                                            <option value="DI1496A1">KTPM2 K40</option>
                                            <option value="DI1496A1">KTPM3 K40</option>
                                        </select>
                                    </fieldset>
                                    <fieldset class="form-group">
                                        <p class="text-left"><b>Phân quyền</b></p>
                                        <select class="form-control" name="addPermission_position" id="addPermission_position">
                                            <option value="DI1496A1">Sinh viên</option>
                                            <option value="DI1496A1">Cố vấn học tập</option>
                                            <option value="DI1496A1">Quản lý khoa</option>
                                        </select>
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
                <!-- End add student-->
                <?php
//                if(!isset($_POST[addAccountName])){
//                    //thông báo không được rỗng
//                }
//                if(!isset($_POST[addIdAccount])){
//                    //thông báo không được rỗng
//                }
//                if(!isset($_POST[addBrithday])){
//                    //thông báo không được rỗng
//                }
//                if(!isset($_POST[addAddress])){
//                    //thông báo không được rỗng
//                }
//                if(!isset($_POST[addSex])){
//                    //thông báo không được rỗng
//                }
//                if(!isset($_POST[addPhone])){
//                    //thông báo không được rỗng
//                }
//                if(!isset($_POST[addEmail])){
//                    //thông báo không được rỗng
//                }
//                if(!isset($_POST[addPassword])){
//                    //thông báo không được rỗng
//                }
//                if(!isset($_POST[addClassName])){
//                    //thông báo không được rỗng
//                }
//                if(!isset($_POST[addAcademyName])){
//                    //thông báo không được rỗng
//                }
//                if(!isset($_POST[addPermision_Position])){
//                    //thông báo không được rỗng
//                }
                ?>