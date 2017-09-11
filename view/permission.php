<?php
    require_once "../controller/header.php"
?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script>
  $(document).ready(function() {
    document.title = "Quản lý phân quyền";
    $("#div-main").css("margin-top", "20px");
    $("#btn-list-permission").addClass("active");
    $("#div-list-permission").show();
    $("#div-add-permission").hide();
    $("#div-edit-permission").hide();
    $("#div-delete-permission").hide();
    $("#btn-list-permission").click(function() {
      $("#btn-list-permission").addClass("active");
      $("#btn-add-permission").removeClass("active");
      $("#btn-edit-permission").removeClass("active");
      $("#btn-delete-permission").removeClass("active");
      $("#div-list-permission").show();
      $("#div-add-permission").hide();
      $("#div-edit-permission").hide();
      $("#div-delete-permission").hide();
    });
    $("#btn-add-permission").click(function() {
      $("#btn-list-permission").removeClass("active");
      $("#btn-add-permission").addClass("active");
      $("#btn-edit-permission").removeClass("active");
      $("#btn-delete-permission").removeClass("active");
      $("#div-list-permission").hide();
      $("#div-add-permission").show();
      $("#div-edit-permission").hide();
      $("#div-delete-permission").hide();
    });
    $("#btn-edit-permission").click(function() {
      $("#btn-list-permission").removeClass("active");
      $("#btn-add-permission").removeClass("active");
      $("#btn-edit-permission").addClass("active");
      $("#btn-delete-permission").removeClass("active");
      $("#div-list-permission").hide();
      $("#div-add-permission").hide();
      $("#div-edit-permission").show();
      $("#div-delete-permission").hide();
    });
    $("#btn-delete-permission").click(function() {
      $("#btn-list-permission").removeClass("active");
      $("#btn-add-permission").removeClass("active");
      $("#btn-edit-permission").removeClass("active");
      $("#btn-delete-permission").addClass("active");
      $("#div-list-permission").hide();
      $("#div-add-permission").hide();
      $("#div-edit-permission").hide();
      $("#div-delete-permission").show();
    });
  });
  </script>
  <div id="div-main" class="container main-academy-container">
  <div class="academy-action-menu btn-group">
    <button id="btn-list-permission" class="btn btn-primary">Hiển thị danh sách các phân quyền</button>
  </div>
  <div class="academy-action-menu btn-group">
    <button id="btn-add-permission" class="btn btn-primary">Thêm phân quyền mới</button>
  </div>
  <div class="academy-action-menu btn-group">
    <button id="btn-edit-permission" class="btn btn-primary">Sửa phân quyền</button>
  </div>
  <div class="academy-action-menu btn-group">
    <button id="btn-delete-permission" class="btn btn-primary">Xóa phân quyền</button>
  </div>
  <div id="div-list-permission" class="academy-action-list">
    <div class="row">
      <div class="col-sm-12">
        <form action="#" method="get">
          <!--unknow?-->
          <h4>Danh sách theo phân quyền của người dùng</h4>
          <hr>
          <table>
            <tr>
              <td>
                <div style="margin-right: 10px">
                  <select class="thumbnail" name="">
                          <option selected hidden>-- Chọn theo Phân quyền --</option>
                          <option selected disabled>-- Chọn theo Phân quyền --</option>
                          <option value="">Cố Vấn học tập</option>
                          <option value="">Quản lý khoa</option>
                          <option value="">Quản lý chi hội</option>
                          <option value="">Sinh viên</option>
                        </select>
                </div>
              </td>
              <td>
                <div style="margin-right: 10px">
                  <select class="thumbnail" name="">
                        <option selected hidden>-- Chọn theo Khoa --</option>
                        <option selected disabled>-- Chọn theo Khoa --</option>
                        <option value="">Khoa Công Nghệ</option>
                        <option value="">Khoa CNTT TT</option>
                        <option value="">Khoa Kinh Tế</option>
                        <option value="">Khoa Luật</option>
                      </select>
                </div>
              </td>
              <td>
                <div style="margin-right: 10px">
                  <select class="thumbnail" name="">
                        <option selected hidden>-- Chọn theo Lớp --</option>
                        <option selected disabled>-- Chọn theo Lớp --</option>
                        <option value="">Lớp DI1496 A1</option>
                        <option value="">Lớp DI1496 A2</option>
                    </select>
                </div>
              </td>
              <td>
                <div style="margin-right: 10px">
                  <select class="thumbnail" name="">
                        <option selected hidden>-- Chọn theo Chi hội --</option>
                        <option selected disabled>-- Chọn theo Chi hội --</option>
                        <option value="">Chi hội sinh viên Hậu Giang</option>
                      </select>
                </div>
              </td>
              <td>
                <div class="form-group text-right" style="margin-top: -24px">
                  <br />
                  <button type="submit" class="center-block btn btn-primary">Lọc</button>
                </div>
              </td>
            </tr>
          </table>
          <table class="table table-hover table-condensed table-bordered">
            <thead>
              <tr>
                <th>Mã số</th>
                <th>Họ tên</th>
                <th>Phân quyền</th>
              </tr>
            </thead>
            <tbody class="text-center">
              <tr>
                <td>B1400713</td>
                <td>Đoàn Minh Nhựt</td>
                <td>Sinh viên</td>
              </tr>
            </tbody>
          </table>
          <div class="form-group text-right">
            <button type="submit" class="center-block btn btn-primary">
                            <span class="glyphicon glyphicon-repeat"></span> Trở về
                        </button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div id="div-add-permission" class="academy-action-list">
    <div class="row">
      <div class="col-sm-12">
        <form action="#" method="get">
          <!--unknow?-->
          <h4>Thêm mới một phân quyền cho người dùng</h4>
          <hr>
          <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
              <fieldset class="form-group">
                <p class="text-left"><b>Mã số Cán bộ/Sinh viên</b></p>
                <input class="form-control" name="" placeholder="Nhập mã số cán bộ hoặc mã số sinh viên" type="text">
              </fieldset>
              <fieldset class="form-group">
                <p class="text-left"><b>Họ và Tên</b></p>
                <input class="form-control" name="" placeholder="Nhập họ và tên" type="text">
              </fieldset>
              <fieldset class="form-group">
                <p class="text-left"><b>Phân quyền cho người dùng</b></p>
                <select class="form-control" name="">
                    <option selected hidden>-- Chọn một phân quyền --</option>
                    <option selected disabled>-- Chọn một phân quyền --</option>
                    <option value="">Cố Vấn học tập</option>
                    <option value="">Quản lý khoa</option>
                    <option value="">Quản lý chi hội</option>
                    <option value="">Sinh viên</option>
                  </select>
              </fieldset>
              <div class="form-group text-right">
                <br />
                <button type="submit" class="center-block btn btn-success">
                    <span class="glyphicon glyphicon-ok"></span> Lưu lại
                </button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div id="div-edit-permission" class="academy-action-list">
    <div class="row">
      <div class="col-sm-12">
        <form action="#" method="get">
          <!--unknow?-->
          <h4>Cập nhật danh sách theo phân quyền của người dùng</h4>
          <hr>
          <table>
            <tr>
              <td>
                <div style="margin-right: 10px">
                  <select class="thumbnail" name="">
                          <option selected hidden>-- Chọn theo Phân quyền --</option>
                          <option selected disabled>-- Chọn theo Phân quyền --</option>
                          <option value="">Cố Vấn học tập</option>
                          <option value="">Quản lý khoa</option>
                          <option value="">Quản lý chi hội</option>
                          <option value="">Sinh viên</option>
                        </select>
                </div>
              </td>
              <td>
                <div style="margin-right: 10px">
                  <select class="thumbnail" name="">
                        <option selected hidden>-- Chọn theo Khoa --</option>
                        <option selected disabled>-- Chọn theo Khoa --</option>
                        <option value="">Khoa Công Nghệ</option>
                        <option value="">Khoa CNTT TT</option>
                        <option value="">Khoa Kinh Tế</option>
                        <option value="">Khoa Luật</option>
                      </select>
                </div>
              </td>
              <td>
                <div style="margin-right: 10px">
                  <select class="thumbnail" name="">
                        <option selected hidden>-- Chọn theo Lớp --</option>
                        <option selected disabled>-- Chọn theo Lớp --</option>
                        <option value="">Lớp DI1496 A1</option>
                        <option value="">Lớp DI1496 A2</option>
                    </select>
                </div>
              </td>
              <td>
                <div style="margin-right: 10px">
                  <select class="thumbnail" name="">
                        <option selected hidden>-- Chọn theo Chi hội --</option>
                        <option selected disabled>-- Chọn theo Chi hội --</option>
                        <option value="">Chi hội sinh viên Hậu Giang</option>
                      </select>
                </div>
              </td>
              <td>
                <div class="form-group text-right" style="margin-top: -24px">
                  <br />
                  <button type="submit" class="center-block btn btn-primary">Lọc</button>
                </div>
              </td>
            </tr>
          </table>
          <table class="table table-hover table-condensed table-bordered">
            <thead>
              <tr>
                <th>Mã số</th>
                <th>Họ tên</th>
                <th>Phân quyền</th>
              </tr>
            </thead>
            <tbody class="text-center">
              <tr>
                <td>B1400713</td>
                <td>Đoàn Minh Nhựt</td>
                <td>
                  <select class="thumbnail center-block" style="margin-top: -1px; margin-bottom: 1px" name="">
                            <option selected hidden>-- Chọn một Phân quyền --</option>
                            <option selected disabled>-- Chọn một Phân quyền --</option>
                            <option value="">Cố Vấn học tập</option>
                            <option value="">Quản lý khoa</option>
                            <option value="">Quản lý chi hội</option>
                            <option value="">Sinh viên</option>
                          </select></td>
              </tr>
            </tbody>
          </table>
          <div class="form-group text-right">
            <button type="submit" class="center-block btn btn-success">
                            <span class="glyphicon glyphicon-ok"></span> Lưu lại
                        </button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div id="div-delete-permission" class="academy-action-list">
    <div class="row">
      <div class="col-sm-12">
        <form action="#" method="get">
          <!--unknow?-->
          <h4>Xóa phân quyền của người dùng</h4>
          <hr>
          <table>
            <tr>
              <td>
                <div style="margin-right: 10px">
                  <select class="thumbnail" name="">
                          <option selected hidden>-- Chọn theo Phân quyền --</option>
                          <option selected disabled>-- Chọn theo Phân quyền --</option>
                          <option value="">Cố Vấn học tập</option>
                          <option value="">Quản lý khoa</option>
                          <option value="">Quản lý chi hội</option>
                          <option value="">Sinh viên</option>
                        </select>
                </div>
              </td>
              <td>
                <div style="margin-right: 10px">
                  <select class="thumbnail" name="">
                        <option selected hidden>-- Chọn theo Khoa --</option>
                        <option selected disabled>-- Chọn theo Khoa --</option>
                        <option value="">Khoa Công Nghệ</option>
                        <option value="">Khoa CNTT TT</option>
                        <option value="">Khoa Kinh Tế</option>
                        <option value="">Khoa Luật</option>
                      </select>
                </div>
              </td>
              <td>
                <div style="margin-right: 10px">
                  <select class="thumbnail" name="">
                        <option selected hidden>-- Chọn theo Lớp --</option>
                        <option selected disabled>-- Chọn theo Lớp --</option>
                        <option value="">Lớp DI1496 A1</option>
                        <option value="">Lớp DI1496 A2</option>
                    </select>
                </div>
              </td>
              <td>
                <div style="margin-right: 10px">
                  <select class="thumbnail" name="">
                        <option selected hidden>-- Chọn theo Chi hội --</option>
                        <option selected disabled>-- Chọn theo Chi hội --</option>
                        <option value="">Chi hội sinh viên Hậu Giang</option>
                      </select>
                </div>
              </td>
              <td>
                <div class="form-group text-right" style="margin-top: -24px">
                  <br />
                  <button type="submit" class="center-block btn btn-primary">Lọc</button>
                </div>
              </td>
            </tr>
          </table>
          <table class="table table-hover table-condensed table-bordered">
            <thead>
              <tr>
                <th>Mã số</th>
                <th>Họ tên</th>
                <th>Phân quyền</th>
                <th>Xóa</th>
              </tr>
            </thead>
            <tbody class="text-center">
              <tr>
                <td>B1400713</td>
                <td>Đoàn Minh Nhựt</td>
                <td>Sinh viên</td>
                <td><label><input type="checkbox" value="" name=""></label></td>
              </tr>
            </tbody>
          </table>
          <div class="form-group text-right">
            <button type="submit" class="center-block btn btn-danger">
                            <span class="glyphicon glyphicon-ok"></span> Xóa
                        </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
  <?php
  	require_once "../controller/footer.php";
  ?>
