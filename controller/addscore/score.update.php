            <!-- Start update student-->
            <div id="updateScore" class="modal fade " tabindex="-1" role="dialog" aria-labelledby aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">

                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Cập nhật danh sách điểm sinh viên</h4>
                        </div>
                        <div class="modal-body ">
                            <form action="#" method="post">

                                <fieldset class="form-group">
                                    <p class="text-left "><b>Tên danh sách</b></p>
                                    <input type="text" class="form-control" name="updateScoreName" id="updateScoreName"
                                           placeholder="Nhập tên sinh viên">

                                </fieldset>

                                <fieldset class="form-group">
                                    <p class="text-left"><b>Mã danh sách</b></p>
                                    <p class="text-left form-control"><b>AAAA</b></p>
                                </fieldset>

                                <fieldset class="form-group">
                                    <p class="text-left"><b>Ngày Tạo</b></p>
                                    <input type="date" class="form-control" name="updateDay" id="updateDay"
                                           placeholder="Ngày Tạo">
                                </fieldset>

                                <fieldset class="form-group">
                                    <p class="text-left"><b>Bảng này thực hiện cho mục</b></p>
                                    <select class="form-control" name="item" id="item">
                                        <option value="male">I.1.1 Lao động cấp trường</option>
                                        <option value="female">I.i.i Bằng khen cấp Khoa</option>
                                    </select>
                                </fieldset>

                                <fieldset class="form-group">
                                    <p class="text-left"><b>Loại</b></p>
                                    <select class="form-control" name="updateType" id="updateType">
                                        <option value="male">Cộng điểm</option>
                                        <option value="female">Trừ điểm</option>
                                    </select>
                                </fieldset>

                                <fieldset class="form-group">
                                    <p class="text-left"><b>Bảng điểm thuộc khoa</b></p>
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
                                    <p class="text-left"><b>Bảng điểm dành cho lớp</b></p>
                                    <select class="form-control" name="updateClassName" id="updateClassName">
                                        <option value="DI1496A1">KTPM1 K40</option>
                                        <option value="DI1496A1">KTPM2 K40</option>
                                        <option value="DI1496A1">KTPM3 K40</option>
                                    </select>
                                </fieldset>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                                    <button type="submit" class="btn btn-warning" name="btnupdate">Sửa</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End update student-->