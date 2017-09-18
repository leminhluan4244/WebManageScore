<?php
    require_once "../controller/header.php"
?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
      $("#btn-person-group").addClass("active");
      $("#div-person-group").show();
      $("#div-add-permission").hide();
      $("#btn-person-group").click(function() {
        $("#btn-person-group").addClass("active");
        $("#btn-add-permission").removeClass("active");
        $("#div-person-group").show();
        $("#div-add-permission").hide();
      });
      $("#btn-add-permission").click(function() {
        $("#btn-person-group").removeClass("active");
        $("#btn-add-permission").addClass("active");
        $("#div-person-group").hide();
        $("#div-add-permission").show();
      });
    });
  </script>
  <div id="div-main" class="container main-academy-container">
    <br />
    <div class="btn-group">
      <button id="btn-person-group" class="btn btn-primary">Cài đặt phân quyền theo nhóm người dùng</button>
      <button id="btn-add-permission" class="btn btn-primary">Thêm mới phân quyền theo nhóm người dùng</button>
    </div>
    <div id="div-person-group" class="academy-action-list">
      <div class="row">
        <div class="col-sm-12">
          <h4>Chọn nhóm quyền người dùng trong hệ thống</h4>
          <hr>
          <form action="#" method="get">
            <!--unknow?-->
            <div class="row">
              <div class="col-sm-4">
                <select class="form-control" name="">
                  <option selected hidden>-- Chọn một phân quyền người dùng --</option>
                  <option selected disabled>-- Chọn một phân quyền người dùng --</option>
                  <option value="">Cố vấn học tập</option>
                  <option value="">Quản lý khoa</option>
                  <option value="">Quản lý chi hội</option>
                  <option value="">Sinh viên</option>
                </select>
              </div>
              <div class="col-sm-1">
                <button type="submit" class="center-block btn btn-primary">
                              <span class="glyphicon glyphicon-th-list"></span> Xem
                          </button>
              </div>
            </div>
          </form>
          <br />
          <form action="#" method="get">
            <!--unknow?-->
            <div class="row">
              <div class="col-sm-3">
                <label class="text-left"><input type="checkbox" value="">&nbsp; Chấm điểm rèn luyện cá nhân</labe>
                    </div>
          <div class="col-sm-3">
            <label><input type="checkbox" value="">&nbsp;Chấm điểm cho một lớp</label>
              </div>
              <div class="col-sm-3">
                <label><input type="checkbox" value="">&nbsp;Chấm điểm rèn luyện cho cả khoa</label>
              </div>
              <div class="col-sm-3">
                <label><input type="checkbox" value="">&nbsp;Thêm bảng điểm cộng trừ cho sinh viên theo chi hội</label>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-3 col-sm-offset-3">
                <label><input type="checkbox" value="">&nbsp;Thêm bảng điểm cộng trừ cho lớp</label>
              </div>
              <div class="col-sm-3">
                <label><input type="checkbox" value="">&nbsp;Thêm bảng điểm cộng trừ cho khoa</label>
              </div>
            </div>
            <div class="row">
              <div class="form-group text-right">
                <button type="submit" class="center-block btn btn-success">
                <span class="glyphicon glyphicon-ok"></span> Lưu lại
            </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div id="div-add-permission" class="academy-action-list" style="display: none;">
      <div class="row">
        <div class="col-sm-12">
          <h4>Theo mới nhóm quyền người dùng vào hệ thống</h4>
          <hr>
          <form action="../controller/permission/permission.add.php" method="post">
            <!--unknow?-->
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <fieldset class="form-group">
                  <p class="text-left"><b>Tên phân quyền</b></p>
                  <input class="form-control" name="txt-namePermission" placeholder="Nhập tên tên phân quyền" type="text">
                </fieldset>
                <div class="row">
                  <div class="form-group text-right">
                    <button type="submit" class="center-block btn btn-success">
                    <span class="glyphicon glyphicon-ok"></span> Lưu lại
                </button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php
  	require_once "../controller/footer.php";
  ?>
