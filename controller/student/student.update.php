            <!-- Start update student-->
            <div id="updateStudent" class="modal fade " tabindex="-1" role="dialog" aria-labelledby aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">

                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Cập nhật sinh viên</h4>
                        </div>
                        <div class="modal-body ">
                            <form action="#" method="post">

                                <fieldset class="form-group">
                                    <p class="text-left "><b>Họ và Tên</b></p>
                                    <input type="text" class="form-control" name="updateAccountName" id="updateAccountName"
                                           value="">

                                </fieldset>

                                <fieldset class="form-group">
                                    <p class="text-left"><b>MSSV</b></p>
                                    <p class="text-left form-control"><b>MSSV</b></p>
                                </fieldset>

                                <fieldset class="form-group">
                                    <p class="text-left"><b>Ngày Sinh</b></p>
                                    <input type="date" class="form-control" name="updateBirthday" id="updateBirthday"
                                           placeholder="Ngày Sinh">
                                </fieldset>

                                <fieldset class="form-group">
                                    <p class="text-left"><b>Địa chỉ</b></p>
                                    <input type="text" class="form-control" name="updateAddress" id="updateAddress"
                                           placeholder="Ngày Sinh">
                                </fieldset>

                                <fieldset class="form-group">
                                    <p class="text-left"><b>Giới tính</b></p>
                                    <select class="form-control" name=updateSex" id="updateSex">
                                        <option value="male">Nam</option>
                                        <option value="female">Nữ</option>
                                    </select>
                                </fieldset>

                                <fieldset class="form-group">
                                    <p class="text-left"><b>Điện thoại</b></p>
                                    <input type="number" class="form-control" name="updatePhone" id="updatePhone"
                                           placeholder="Nhập số điện thoại">
                                </fieldset>

                                <fieldset class="form-group">
                                    <p class="text-left"><b>Email</b></p>
                                    <input type="mail" class="form-control" name="updateEmail" id="updateEmail"
                                           placeholder="Nhập email" value="@student.ctu.edu.vn">
                                </fieldset>

                                <fieldset class="form-group">
                                    <p class="text-left"><b>Khoa - Viện</b></p>
                                    <select class="form-control" name="updateAcademyName" id="updateAcademyName">
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
                                    <select class="form-control" name="updateClassNamer" id="UpdateclassName">
                                        <option value="DI1496A1">KTPM1 K40</option>
                                        <option value="DI1496A1">KTPM2 K40</option>
                                        <option value="DI1496A1">KTPM3 K40</option>
                                    </select>
                                </fieldset>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                                    <button type="submit" class="btn btn-warning" name="btnUpdate">Sửa</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End update student-->