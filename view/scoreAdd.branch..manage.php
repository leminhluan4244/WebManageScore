<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="bootstrap/jquery-3.2.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="icon" href="img/logo.gif">
</head>

<body>
    <div class="banner container-fluid">
        <div class="col-sm-2 logo">
            <img src="img/logo.gif" width="70" alt="">
        </div>
        <div class="banner-title col-sm-8">
            <h4><strong>TRƯỜNG ĐẠI HỌC CẦN THƠ</strong></h4>
            <p><strong>Hệ thống chấm điểm rèn luyện</strong></p>
        </div>
        <div class="banner-action col-sm-2 text-right">
            <a href="main.html" class="btn btn-primary btn-sm">
                <span class="glyphicon glyphicon-home"></span> Trang chủ</a>
            <a href="index.html" class="btn btn-warning btn-sm">
                <span class="glyphicon glyphicon-log-out"></span> Đăng xuất</a>
        </div>
    </div>
    <br>
    <div class="container main-academy-container">
        <div class="academy-action-list text-center">
            <h4>Danh sách sinh viên</h4>
            <div class="form-group">
               <form action="" method="post">
                  <div class="col-sm-3">
                    <select name="kv" id="" class="form-control">
                       <option value="Chọn khoa viện">Chọn loại bảng điểm</option>
                        <option value="Cong"> Cộng điểm</option>
                        <option value="Tru">Trừ điểm</option>
                    </select>
                </div>
                <div class="form-group input-group">
                        
                        <div class="col-sm-2">
                             <input type=text name="day" placeholder="Ngày" class="form-control ">
                        </div>
                        <div class="col-sm-2">
                            <input type=text name="month" placeholder="Tháng" class="form-control col-sm-2">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" name="year" placeholder="Năm" class="form-control col-sm-2">
                        </div>                        
                    </div> <!--ngay thang nam -->
                    <div class="form-group input-group <col-sm-12></col-sm-12>">
                        <input type="text "name="lyDo" placeholder="Lý do " class="form-control">
                    </div> <!-Lý do-->
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
    <script src="js/common.js"></script>
    <script src="js/academy_action.js"></script>
    <footer class="container-fluid text-center">
        Trường Đại học Cần Thơ <br> Nhóm nghiên cứu khoa học
    </footer>
</body>

</html>
