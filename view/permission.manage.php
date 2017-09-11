<?php
    require_once "../controller/header.php"
?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script>
  $(document).ready(function() {
    document.title = "Quản lý phân quyền người dùng";
    $("#div-main").css("margin-top", "20px");
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
  <div class="academy-action-menu btn-group">
    <button id="btn-person-group" class="btn btn-primary">Cài đặt phân quyền theo nhóm người dùng</button>
  </div>
  <div class="academy-action-menu btn-group">
    <button id="btn-add-permission" class="btn btn-primary">Thêm mới phân quyền theo nhóm người dùng</button>
  </div>
  <div id="div-person-group" class="academy-action-list">
    <div class="row">
      <div class="col-sm-12">
        <form action="#" method="get">
          <!--unknow?-->
          <h4>Chọn nhóm quyền người dùng trong hệ thống</h4>
          <hr>
          <select style="width: 400px" class="thumbnail" name="">
              <option selected hidden>-- Chọn một phân quyền người dùng --</option>
              <option selected disabled>-- Chọn một phân quyền người dùng --</option>
              <option value="">Cố Vấn học tập</option>
              <option value="">Quản lý khoa</option>
              <option value="">Quản lý chi hội</option>
              <option value="">Sinh viên</option>
            </select>
          <div class="row">
            <div class="col-sm-3">
              <label class="text-left"><input type="checkbox" value="">&nbsp; Chấm điểm rèn luyện cá nhân sinh viên</labe>
                    </div>
          <div class="col-sm-3">
            <label><input type="checkbox" value="">&nbsp;Chấm điểm cho một Lớp</label>
              <label><input type="checkbox" value="">&nbsp;Thêm bảng điểm cộng trừ cho lớp</label>
            </div>
            <div class="col-sm-3">
              <label><input type="checkbox" value="">&nbsp;Chấm điểm rèn luyện cho cả khoa</label>
              <label><input type="checkbox" value="">&nbsp;Thêm bảng điểm cộng trừ cho khoa</label>
            </div>
            <div class="col-sm-3">
              <label><input type="checkbox" value="">&nbsp;Thêm bảng điểm cộng trừ cho sinh viên theo chi hội</label>
            </div>
          </div>
          <div class="form-group text-right">
            <br />
            <button type="submit" class="center-block btn btn-success">
              <span class="glyphicon glyphicon-ok"></span> Lưu lại
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
          <h4>Theo mới nhóm quyền người dùng vào hệ thống</h4>
          <hr>
          <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
              <fieldset class="form-group">
                <p class="text-left"><b>Mã số Phân quyền</b></p>
                <input class="form-control" name="" placeholder="Nhập mã số phân quyền" type="text">
              </fieldset>
              <fieldset class="form-group">
                <p class="text-left"><b>Tên Phân Quyền</b></p>
                <input class="form-control" name="" placeholder="Nhập tên tên phân quyền" type="text">
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
</div>
  <?php
  	require_once "../controller/footer.php";
  ?>
