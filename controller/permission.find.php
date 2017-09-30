<?php
    #kiểm tra xem một người đăng nhập chưa
        #chưa thì bắt đăng nhập
        #nếu đăng nhập rồi thì đem đi xét phân quyền
        {
            #đầu tiên thêm bảng danh sách phân quyền ứng với các trang, mỗi trang có một phân quyền ứng tới nó
            #kiểm tra phần quyền mà tài khoản này trả về
            #nếu phân quyền tài khoản cho phép vào trang thì bật trang
            #không cho phép thì thông báo rồi trả về trang chủ
        }
// Lưu ý : để sử dụng được phần này thì các trang phải đặt id tài khoản đăng nhập vào với tên là $idLogin, khi gọi đến trang khác thì truyền nó đi theo bằng post
?>