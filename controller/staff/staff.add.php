<!-- Start add Staff-->
<div id="addStaff" class="modal fade" tabindex="-1" role="dialog" aria-labelledby aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Thêm mới cán bộ</h4>
            </div>
            <div class="modal-body">
                <form action="" method="post">

                    <fieldset class="form-group">
                        <p class="text-left"><b>MSCB</b></p>
                        <input type="text" class="form-control" name="idAccount" id="idAccount"
                               placeholder="Nhập mã số cán bộ">
                    </fieldset>

                    <fieldset class="form-group">
                        <p class="text-left"><b>Họ và Tên</b></p>
                        <input type="text" class="form-control" name="accountName" id="accountName"
                               placeholder="Nhập tên cán bộ">
                    </fieldset>


                    <fieldset class="form-group">
                        <p class="text-left"><b>Ngày Sinh</b></p>
                        <input type="date" class="form-control" name="birthday" id="birthday"
                               placeholder="Ngày Sinh">
                    </fieldset>

                    <fieldset class="form-group">
                        <p class="text-left"><b>Địa Chỉ</b></p>
                        <input type="text" class="form-control" name="address" id="address"
                               placeholder="Nhập địa chỉ">
                    </fieldset>

                    <fieldset class="form-group">
                        <p class="text-left"><b>Giới Tính</b></p>
                        <input type="text" class="form-control" name="sex" id="sex"
                               placeholder="Nhập địa chỉ">
                    </fieldset>

                    <fieldset class="form-group">
                        <p class="text-left"><b>Điện thoại</b></p>
                        <input type="number" class="form-control" name="phone" id="phone"
                               placeholder="Nhập số điện thoại">
                    </fieldset>

                    <fieldset class="form-group">
                        <p class="text-left"><b>Email</b></p>
                        <input type="mail" class="form-control" name="email" id="email"
                               placeholder="Nhập email" value="@ctu.edu.vn">
                    </fieldset>

                    <fieldset class="form-group">
                        <p class="text-left"><b>Mật Khẩu</b></p>
                        <input type="number" class="form-control" name="password" id="password"
                               placeholder="Nhập số mật khẩu">
                    </fieldset>

                    <fieldset class="form-group">
                        <p class="text-left"><b>Phân Quyền</b></p>
                        <select class="form-control" name="Permission_position" id="Permission_position">
                            <option value="Cố vấn học tập">Cố vấn học tập
                            </option>
                            <option value="Quản lý khoa viện">Quản lý khoa viện</option>
                            <option value="Quản lý chi hội">Quản lý chi hội</option>
                        </select>
                    </fieldset>

                    <fieldset class="form-group">
                        <p class="text-left"><b>Khoa - Viện</b></p>
                        <select class="form-control" name="Academy_idAcademy" id="Academy_idAcademy">
                            <option value="Công nghệ thông tin và truyền thông">Công nghệ thông tin và
                                truyền thông
                            </option>
                            <option value="Thủy sản">Thủy sản</option>
                            <option value="Môi trường">Môi trường</option>
                            <option value="Công nghệ">Công nghệ</option>
                        </select>
                    </fieldset>

                    <fieldset class="form-group">
                        <p class="text-left"><b>Lớp</b></p>
                        <select class="form-control" name="Class_idClass" id="Class_idClass">
                            <option value="Kỹ thuật phần mềm A1">Kỹ thuật phần mềm A1</option>
                            <option value="Kỹ thuật phần mềm A2">Kỹ thuật phần mềm A2</option>
                            <option value="Công nghệ thông tin A1">Công nghệ thông tin A1</option>
                            <option value="Công nghệ thông tin A2">Công nghệ thông tin A1</option>
                        </select>
                    </fieldset>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                        <button type="submit" class="btn btn-primary" name="addNewMember">Thêm</button>
                    </div>
                </form>

            </div>

        </div>
    </div>
</div>
<!-- End add Staff-->