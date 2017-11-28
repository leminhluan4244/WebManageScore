/*Dữ liệu mẫu phân quyền */
INSERT INTO `Permission` (`position`, `power`,`selected`) VALUES ('Cố vấn học tập','Chấm điểm rèn luyện cá nhân sinh viên',1);
INSERT INTO `Permission` (`position`, `power`,`selected`) VALUES ('Sinh viên', 'Chấm điểm rèn luyện cá nhân sinh viên',1);
INSERT INTO `Permission` (`position`, `power`,`selected`) VALUES ('Quản lý chi hội', 'Chấm điểm rèn luyện cá nhân sinh viên',1);
INSERT INTO `Permission` (`position`, `power`,`selected`) VALUES ('Cố vấn học tập', 'Chấm điểm cho một lớp',1);
INSERT INTO `Permission` (`position`, `power`,`selected`) VALUES ('Cố vấn học tập', 'Thêm bảng điểm cộng trừ cho lớp',1);
INSERT INTO `Permission` (`position`, `power`,`selected`) VALUES ('Quản lý khoa', 'Chấm điểm rèn luyện cho cả khoa - viện',1);
INSERT INTO `Permission` (`position`, `power`,`selected`) VALUES ('Quản lý khoa', 'Thêm bảng điểm cộng trừ cho khoa - viện',1);
INSERT INTO `Permission` (`position`, `power`,`selected`) VALUES ('Quản lý chi hội', 'Thêm bảng điểm cộng trừ cho sinh viên theo chi hội',1);
INSERT INTO `Permission` (`position`, `power`,`selected`) VALUES ('Quản lý chi hội', 'Quản lý thành viên chi hội',1);
INSERT INTO `Permission` (`position`, `power`,`selected`) VALUES ('Admin', 'Full ',1);
INSERT INTO `Permission` (`position`, `power`,`selected`) VALUES ('Default', 'Not ',1);

/* Dữ liệu mẫu 4 Admin  */
INSERT INTO `Account` (`idAccount`, `AccountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('Admin01', 'Lê Minh Luân', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', '0964054244', 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Admin');
INSERT INTO `Account` (`idAccount`, `AccountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('Admin02', 'Nguyễn Minh Nhựt', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', '0964054244', 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Admin');
INSERT INTO `Account` (`idAccount`, `AccountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('Admin03', 'Nguyễn Tấn Phát', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', '0964054244', 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Admin');
INSERT INTO `Account` (`idAccount`, `AccountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('Admin04', 'Pham Hoài An', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', '0964054244', 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Admin');
INSERT INTO `Account` (`idAccount`, `AccountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('Admin05', 'Huỳnh Hoàng Thơ', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', '0964054244', 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Admin');

/*Dữ liệu mẫu 30 Tài khoản sinh viên*/
INSERT INTO `Account` (`idAccount`, `AccountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('AAAA', 'Nguyễn Văn A', '1996-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', '0964054244', 'ab1400701@student.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Sinh viên');
INSERT INTO `Account` (`idAccount`, `AccountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('BBBB', 'Nguyễn Văn B', '1996-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', '09640542402', 'bb1400701@student.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Sinh viên');
INSERT INTO `Account` (`idAccount`, `AccountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('CCCC', 'Nguyễn Văn C', '1996-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', '0964054244', 'cb1400701@student.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Sinh viên');
INSERT INTO `Account` (`idAccount`, `AccountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('DDDD', 'Nguyễn Văn D', '1996-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', '0964054244', 'db1400701@student.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Sinh viên');
INSERT INTO `Account` (`idAccount`, `AccountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('EEEE', 'Nguyễn Văn E', '1996-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', '0964054244', 'eb1400701@student.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Sinh viên');
INSERT INTO `Account` (`idAccount`, `AccountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('FFFF', 'Nguyễn Văn F', '1996-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', '0964054244', 'ab1400701@student.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Sinh viên');
INSERT INTO `Account` (`idAccount`, `AccountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('GGGG', 'Nguyễn Văn G', '1996-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', '09640542402', 'bb1400701@student.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Sinh viên');
INSERT INTO `Account` (`idAccount`, `AccountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('HHHH', 'Nguyễn Văn H', '1996-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', '0964054244', 'cb1400701@student.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Sinh viên');
INSERT INTO `Account` (`idAccount`, `AccountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('IIII', 'Nguyễn Văn I', '1996-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', '0964054244', 'db1400701@student.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Sinh viên');
INSERT INTO `Account` (`idAccount`, `AccountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('KKKK', 'Nguyễn Văn K', '1996-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', '0964054244', 'eb1400701@student.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Sinh viên');
INSERT INTO `Account` (`idAccount`, `AccountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('LLLL', 'Nguyễn Văn L', '1996-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', '0964054244', 'ab1400701@student.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Sinh viên');
INSERT INTO `Account` (`idAccount`, `AccountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('MMMM', 'Nguyễn Văn M', '1996-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', '09640542402', 'bb1400701@student.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Sinh viên');
INSERT INTO `Account` (`idAccount`, `AccountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('OOOO', 'Nguyễn Văn O', '1996-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', '0964054244', 'cb1400701@student.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Sinh viên');
INSERT INTO `Account` (`idAccount`, `AccountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('PPPP', 'Nguyễn Văn P', '1996-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', '0964054244', 'db1400701@student.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Sinh viên');
INSERT INTO `Account` (`idAccount`, `AccountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('QQQQ', 'Nguyễn Văn Q', '1996-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', '0964054244', 'eb1400701@student.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Sinh viên');

/*Dữ liệu mẫu 9 quản lý chi hội*/
INSERT INTO `Account` (`idAccount`, `AccountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('NNNN', 'Nguyễn Văn N', '1996-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', '0964054244', 'ab1400701@student.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Quản lý chi hội');
INSERT INTO `Account` (`idAccount`, `AccountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('RRRR', 'Nguyễn Văn R', '1996-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', '09640542402', 'bb1400701@student.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Quản lý chi hội');
INSERT INTO `Account` (`idAccount`, `AccountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('SSSS', 'Nguyễn Văn S', '1996-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', '0964054244', 'cb1400701@student.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Quản lý chi hội');
INSERT INTO `Account` (`idAccount`, `AccountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('TTTT', 'Nguyễn Văn T', '1996-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', '0964054244', 'db1400701@student.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Quản lý chi hội');
INSERT INTO `Account` (`idAccount`, `AccountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('UUUU', 'Nguyễn Văn U', '1996-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', '0964054244', 'eb1400701@student.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Quản lý chi hội');
INSERT INTO `Account` (`idAccount`, `AccountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('VVVV', 'Nguyễn Văn V', '1996-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', '0964054244', 'ab1400701@student.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Quản lý chi hội');
INSERT INTO `Account` (`idAccount`, `AccountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('WWWW', 'Nguyễn Văn W', '1996-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', '09640542402', 'bb1400701@student.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Quản lý chi hội');
INSERT INTO `Account` (`idAccount`, `AccountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('XXXX', 'Nguyễn Văn X', '1996-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', '0964054244', 'cb1400701@student.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Quản lý chi hội');
INSERT INTO `Account` (`idAccount`, `AccountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('YYYY', 'Nguyễn Văn Y', '1996-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', '0964054244', 'db1400701@student.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Quản lý chi hội');
INSERT INTO `Account` (`idAccount`, `AccountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('ZZZZ', 'Nguyễn Văn Z', '1996-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', '0964054244', 'eb1400701@student.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Quản lý chi hội');

/*Dữ liệu mẫu 10 cố vấn học tập*/
INSERT INTO `Account` (`idAccount`, `AccountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('CB101', 'Phan Phương Lan', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', '0964054244', 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Cố vấn học tập');
INSERT INTO `Account` (`idAccount`, `AccountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('CB102', 'Nguyễn Thái Nghe', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', '0964054244', 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Cố vấn học tập');
INSERT INTO `Account` (`idAccount`, `AccountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('CB103', 'Huỳnh Quang Nghi', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', '0964054244', 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Cố vấn học tập');
INSERT INTO `Account` (`idAccount`, `AccountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('CB104', 'Trương Minh Thái', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', '0964054244', 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Cố vấn học tập');
INSERT INTO `Account` (`idAccount`, `AccountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('CB105', 'Hồ Quang Thái', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', '0964054244', 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Cố vấn học tập');
INSERT INTO `Account` (`idAccount`, `AccountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('CB106', 'Nguyễn Thúy An', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', '0964054244', 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Cố vấn học tập');
INSERT INTO `Account` (`idAccount`, `AccountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('CB107', 'Trần Cao Đệ', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', '0964054244', 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Cố vấn học tập');
INSERT INTO `Account` (`idAccount`, `AccountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('CB108', 'Trần Công Án', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', '0964054244', 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Cố vấn học tập');
INSERT INTO `Account` (`idAccount`, `AccountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('CB109', 'Trương Thị Thanh Tuyền', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', '0964054244', 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Cố vấn học tập');
INSERT INTO `Account` (`idAccount`, `AccountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('CB110', 'Trần Minh Tân', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', '0964054244', 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Cố vấn học tập');

INSERT INTO `Account` (`idAccount`, `AccountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('CB111', 'Nguyễn Hoàng Long', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', '0964054244', 'nhlong@ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Cố vấn học tập');
INSERT INTO `Account` (`idAccount`, `AccountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('CB112', 'Nguyễn Văn Hòa', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', '0964054244', 'nvhoa@ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Cố vấn học tập');
INSERT INTO `Account` (`idAccount`, `AccountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('CB113', 'Trần Văn Hiếu', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', '0964054244', 'nvhieu@ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Cố vấn học tập');
INSERT INTO `Account` (`idAccount`, `AccountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('CB114', 'Bùi Thị Bửu Huê', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', '0964054244', 'btbhue@ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Cố vấn học tập');
INSERT INTO `Account` (`idAccount`, `AccountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('CB115', 'Nguyễn Văn', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', '0964054244', 'btbhue@ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Cố vấn học tập');
INSERT INTO `Account` (`idAccount`, `AccountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('CB116', 'Bùi Thị', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', '0964054244', 'btbhue@ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Cố vấn học tập');
INSERT INTO `Account` (`idAccount`, `AccountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('CB117', 'Lâm Thị', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', '0964054244', 'btbhue@ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Cố vấn học tập');
INSERT INTO `Account` (`idAccount`, `AccountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('CB118', 'Huỳnh Thị', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', '0964054244', 'btbhue@ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Cố vấn học tập');
INSERT INTO `Account` (`idAccount`, `AccountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('CB119', 'Phan Thị', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', '0964054244', 'btbhue@ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Cố vấn học tập');
INSERT INTO `Account` (`idAccount`, `AccountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('CB120', 'Dương Thị', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', '0964054244', 'btbhue@ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Cố vấn học tập');
INSERT INTO `Account` (`idAccount`, `AccountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('CB121', 'Nguyễn Thị', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', '0964054244', 'btbhue@ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Cố vấn học tập');
INSERT INTO `Account` (`idAccount`, `AccountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('CB122', 'Lâm Thị', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', '0964054244', 'btbhue@ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Cố vấn học tập');
INSERT INTO `Account` (`idAccount`, `AccountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('CB123', 'Ngọc Thị', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', '0964054244', 'btbhue@ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Cố vấn học tập');
INSERT INTO `Account` (`idAccount`, `AccountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('CB124', 'Ái Thị', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', '0964054244', 'btbhue@ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Cố vấn học tập');
INSERT INTO `Account` (`idAccount`, `AccountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('CB125', 'Nguyễn Thu', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', '0964054244', 'btbhue@ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Cố vấn học tập');
INSERT INTO `Account` (`idAccount`, `AccountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('CB126', 'Trương Huỳnh Anh', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', '0964054244', 'btbhue@ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Cố vấn học tập');
INSERT INTO `Account` (`idAccount`, `AccountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('CB127', 'Nguyễn Thị Ngọc Yến', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', '0964054244', 'btbhue@ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Cố vấn học tập');
INSERT INTO `Account` (`idAccount`, `AccountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('CB128', 'Võ Huỳnh Diễm', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', '0964054244', 'btbhue@ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Cố vấn học tập');

/*Dữ liệu mẫu 10 quản lý khoa*/
INSERT INTO `Account` (`idAccount`, `AccountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('QL101', 'Dương Văn Lăng', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', '0964054244', 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Quản lý khoa');
INSERT INTO `Account` (`idAccount`, `AccountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('QL102', 'Nguyễn Đại Lợi', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', '0964054244', 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Quản lý khoa');
INSERT INTO `Account` (`idAccount`, `AccountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('QL103', 'Lê Nguyên Thức', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', '0964054244', 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Quản lý khoa');
INSERT INTO `Account` (`idAccount`, `AccountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('QL104', 'Trương Công Hiển', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', '0964054244', 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Quản lý khoa');
INSERT INTO `Account` (`idAccount`, `AccountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('QL105', 'Trần Văn Linh', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', '0964054244', 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Quản lý khoa');
INSERT INTO `Account` (`idAccount`, `AccountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('QL106', 'Nguyễn Văn Tài', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', '0964054244', 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Quản lý khoa');
INSERT INTO `Account` (`idAccount`, `AccountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('QL107', 'Trần Quốc Khánh', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', '0964054244', 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Quản lý khoa');
INSERT INTO `Account` (`idAccount`, `AccountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('QL108', 'Nguyễn Tấn Phát', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', '0964054244', 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Quản lý khoa');
INSERT INTO `Account` (`idAccount`, `AccountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('QL109', 'Phạm Hoài An', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', '0964054244', 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Quản lý khoa');
INSERT INTO `Account` (`idAccount`, `AccountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('QL110', 'Huỳnh Hoàng Thơ', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', '0964054244', 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Quản lý khoa');

/*Dữ liệu mẫu 20 khoa viện*/
INSERT INTO `Academy` (`idAcademy`, `academyName`) VALUES ('CN', 'Khoa Công nghệ');
INSERT INTO `Academy` (`idAcademy`, `academyName`) VALUES ('DI', 'Khoa Công nghệ Thông tin và Truyền thông');
INSERT INTO `Academy` (`idAcademy`, `academyName`) VALUES ('DBDT', 'Khoa Dự bị Dân tộc');
INSERT INTO `Academy` (`idAcademy`, `academyName`) VALUES ('KHCT', 'Khoa Khoa học Chính trị');
INSERT INTO `Academy` (`idAcademy`, `academyName`) VALUES ('KHTN', 'Khoa Khoa học Tự nhiên');
INSERT INTO `Academy` (`idAcademy`, `academyName`) VALUES ('KHXH', 'Khoa Khoa học Xã hội và Nhân văn');
INSERT INTO `Academy` (`idAcademy`, `academyName`) VALUES ('KT', 'Khoa Kinh Tế');
INSERT INTO `Academy` (`idAcademy`, `academyName`) VALUES ('L', 'Khoa Luật');
INSERT INTO `Academy` (`idAcademy`, `academyName`) VALUES ('MT', 'Khoa Trường và Tài nguyên Thiên nhiên');
INSERT INTO `Academy` (`idAcademy`, `academyName`) VALUES ('NN', 'Khoa Ngoại ngữ');
INSERT INTO `Academy` (`idAcademy`, `academyName`) VALUES ('NNSH', 'Khoa Nông nghiệp và Sinh học Ứng dụng');
INSERT INTO `Academy` (`idAcademy`, `academyName`) VALUES ('PTNT', 'Khoa Phát triển Nông thôn');
INSERT INTO `Academy` (`idAcademy`, `academyName`) VALUES ('SDH', 'Khoa Sau đại học');
INSERT INTO `Academy` (`idAcademy`, `academyName`) VALUES ('SP', 'Khoa Sư phạm');
INSERT INTO `Academy` (`idAcademy`, `academyName`) VALUES ('TS', 'Khoa Thủy sản');
INSERT INTO `Academy` (`idAcademy`, `academyName`) VALUES ('GDTC', 'Bộ môn Giáo dục Thể Chất');
INSERT INTO `Academy` (`idAcademy`, `academyName`) VALUES ('VNCBDKH', 'Viện Nghiên cứu Biến đổi Khí hậu');
INSERT INTO `Academy` (`idAcademy`, `academyName`) VALUES ('VNCPT', 'Viện Nghiên cứu Phát triển ĐBSCL');
INSERT INTO `Academy` (`idAcademy`, `academyName`) VALUES ('VNCPTCNSH', 'Viện Nghiên cứu và phát triển công nghệ sinh học');
INSERT INTO `Academy` (`idAcademy`, `academyName`) VALUES ('THSP', 'Trường THPT Thực hành Sư phạm');

/*Dữ liệu mẫu 20 tài khoản thuộc khoa Công nghệ và công nghệ thông tin truyền thông*/
INSERT INTO `Account_has_Academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('AAAA', 'DI');
INSERT INTO `Account_has_Academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('BBBB', 'DI');
INSERT INTO `Account_has_Academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('CCCC', 'DI');
INSERT INTO `Account_has_Academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('DDDD', 'DI');
INSERT INTO `Account_has_Academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('EEEE', 'DI');
INSERT INTO `Account_has_Academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('FFFF', 'DI');
INSERT INTO `Account_has_Academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('GGGG', 'DI');
INSERT INTO `Account_has_Academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('HHHH', 'DI');

INSERT INTO `Account_has_Academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('KKKK', 'CN');
INSERT INTO `Account_has_Academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('LLLL', 'CN');
INSERT INTO `Account_has_Academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('MMMM', 'CN');
INSERT INTO `Account_has_Academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('OOOO', 'CN');
INSERT INTO `Account_has_Academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('PPPP', 'CN');
INSERT INTO `Account_has_Academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('QQQQ', 'CN');

INSERT INTO `Account_has_Academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('CB101', 'DI');
INSERT INTO `Account_has_Academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('CB102', 'DI');
INSERT INTO `Account_has_Academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('CB103', 'DI');
INSERT INTO `Account_has_Academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('CB104', 'DI');
INSERT INTO `Account_has_Academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('CB105', 'DI');

/*Dữ liệu mẫu tai khoan thuộc tất cả các khoa*/
INSERT INTO `Account_has_Academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('CB111', 'DBDT');
INSERT INTO `Account_has_Academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('CB112', 'GDTC');
INSERT INTO `Account_has_Academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('CB113', 'KHCT');
INSERT INTO `Account_has_Academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('CB114', 'KHTN');
INSERT INTO `Account_has_Academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('CB115', 'KHXH');
INSERT INTO `Account_has_Academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('CB116', 'KT');
INSERT INTO `Account_has_Academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('CB117', 'L');
INSERT INTO `Account_has_Academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('CB118', 'MT');
INSERT INTO `Account_has_Academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('CB119', 'NN');
INSERT INTO `Account_has_Academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('CB120', 'NNSH');
INSERT INTO `Account_has_Academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('CB121', 'PTNT');
INSERT INTO `Account_has_Academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('CB122', 'SDH');
INSERT INTO `Account_has_Academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('CB123', 'SP');
INSERT INTO `Account_has_Academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('CB124', 'TS');
INSERT INTO `Account_has_Academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('CB125', 'VNCBDKH');
INSERT INTO `Account_has_Academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('CB126', 'VNCPT');
INSERT INTO `Account_has_Academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('CB127', 'VNCPTCNSH');
INSERT INTO `Account_has_Academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('CB128', 'THSP');

INSERT INTO `Account_has_Academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('CB106', 'CN');
INSERT INTO `Account_has_Academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('CB107', 'CN');
INSERT INTO `Account_has_Academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('CB108', 'CN');
INSERT INTO `Account_has_Academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('CB109', 'CN');
INSERT INTO `Account_has_Academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('CB110', 'CN');

INSERT INTO `Account_has_Academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('QL101', 'DI');
INSERT INTO `Account_has_Academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('QL102', 'DI');
INSERT INTO `Account_has_Academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('QL103', 'DI');
INSERT INTO `Account_has_Academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('QL104', 'DI');
INSERT INTO `Account_has_Academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('QL105', 'DI');

INSERT INTO `Account_has_Academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('QL106', 'CN');
INSERT INTO `Account_has_Academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('QL107', 'CN');
INSERT INTO `Account_has_Academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('QL108', 'CN');
INSERT INTO `Account_has_Academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('QL109', 'CN');
INSERT INTO `Account_has_Academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('QL110', 'CN');

/*Dữ liệu mẫu 36 chi hội phân bộ vào các tỉnh*/
INSERT INTO `Branch` (`idBranch`, `branchName`, `city`) VALUES ('CT01', 'Ninh Kiều', 'Cần Thơ');
INSERT INTO `Branch` (`idBranch`, `branchName`, `city`) VALUES ('CT02', 'Bình Thủy', 'Cần Thơ');
INSERT INTO `Branch` (`idBranch`, `branchName`, `city`) VALUES ('CT03', 'Cái Răng', 'Cần Thơ');
INSERT INTO `Branch` (`idBranch`, `branchName`, `city`) VALUES ('CT04', 'Cờ Đở', 'Cần Thơ');
INSERT INTO `Branch` (`idBranch`, `branchName`, `city`) VALUES ('CT05', 'Thốt Nốt', 'Cần Thơ');
INSERT INTO `Branch` (`idBranch`, `branchName`, `city`) VALUES ('CT06', 'Ô Môn', 'Cần Thơ');
INSERT INTO `Branch` (`idBranch`, `branchName`, `city`) VALUES ('CT07', 'Phong Điền', 'Cần Thơ');
INSERT INTO `Branch` (`idBranch`, `branchName`, `city`) VALUES ('CT08', 'Vĩnh Thạnh', 'Cần Thơ');

INSERT INTO `Branch` (`idBranch`, `branchName`, `city`) VALUES ('ST01', 'Mỹ Tú', 'Sóc Trăng');
INSERT INTO `Branch` (`idBranch`, `branchName`, `city`) VALUES ('ST02', 'TP. Sóc Trăng', 'Sóc Trăng');
INSERT INTO `Branch` (`idBranch`, `branchName`, `city`) VALUES ('ST03', 'Kế Sách', 'Sóc Trăng');
INSERT INTO `Branch` (`idBranch`, `branchName`, `city`) VALUES ('ST04', 'Châu Thành', 'Sóc Trăng');
INSERT INTO `Branch` (`idBranch`, `branchName`, `city`) VALUES ('ST05', 'Cù Lao Dung', 'Sóc Trăng');
INSERT INTO `Branch` (`idBranch`, `branchName`, `city`) VALUES ('ST06', 'Mỹ Xuyên', 'Sóc Trăng');
INSERT INTO `Branch` (`idBranch`, `branchName`, `city`) VALUES ('ST07', 'Long Phú', 'Sóc Trăng');
INSERT INTO `Branch` (`idBranch`, `branchName`, `city`) VALUES ('ST08', 'Vĩnh Châu', 'Sóc Trăng');
INSERT INTO `Branch` (`idBranch`, `branchName`, `city`) VALUES ('ST09', 'Thạnh Trị', 'Sóc Trăng');
INSERT INTO `Branch` (`idBranch`, `branchName`, `city`) VALUES ('ST10', 'Ngã Năm', 'Sóc Trăng');

INSERT INTO `Branch` (`idBranch`, `branchName`, `city`) VALUES ('HG01', 'Châu Thành', 'Hậu Giang');
INSERT INTO `Branch` (`idBranch`, `branchName`, `city`) VALUES ('HG02', 'Ngã Bảy', 'Hậu Giang');
INSERT INTO `Branch` (`idBranch`, `branchName`, `city`) VALUES ('HG03', 'Phụng Hiệp', 'Hậu Giang');
INSERT INTO `Branch` (`idBranch`, `branchName`, `city`) VALUES ('HG04', 'Châu Thành A', 'Hậu Giang');
INSERT INTO `Branch` (`idBranch`, `branchName`, `city`) VALUES ('HG05', 'Vị Thủy', 'Hậu Giang');
INSERT INTO `Branch` (`idBranch`, `branchName`, `city`) VALUES ('HG06', 'Vị Thanh', 'Hậu Giang');
INSERT INTO `Branch` (`idBranch`, `branchName`, `city`) VALUES ('HG07', 'Long Mỹ', 'Hậu Giang');

INSERT INTO `Branch` (`idBranch`, `branchName`, `city`) VALUES ('ĐT01', 'TP. Sa Đéc', 'Đồng Tháp');
INSERT INTO `Branch` (`idBranch`, `branchName`, `city`) VALUES ('ĐT02', 'TP. Cao Lãnh', 'Đồng Tháp');
INSERT INTO `Branch` (`idBranch`, `branchName`, `city`) VALUES ('ĐT03', 'Tháp Mười', 'Đồng Tháp');
INSERT INTO `Branch` (`idBranch`, `branchName`, `city`) VALUES ('ĐT04', 'Cao Lãnh', 'Đồng Tháp');
INSERT INTO `Branch` (`idBranch`, `branchName`, `city`) VALUES ('ĐT05', 'Lấp Vò', 'Đồng Tháp');
INSERT INTO `Branch` (`idBranch`, `branchName`, `city`) VALUES ('ĐT06', 'Lai Dung', 'Đồng Tháp');
INSERT INTO `Branch` (`idBranch`, `branchName`, `city`) VALUES ('ĐT07', 'Châu Thành', 'Đồng Tháp');
INSERT INTO `Branch` (`idBranch`, `branchName`, `city`) VALUES ('ĐT08', 'Thanh Bình', 'Đồng Tháp');
INSERT INTO `Branch` (`idBranch`, `branchName`, `city`) VALUES ('ĐT09', 'Tam Nông', 'Đồng Tháp');
INSERT INTO `Branch` (`idBranch`, `branchName`, `city`) VALUES ('ĐT10', 'Tân Hồng', 'Đồng Tháp');
INSERT INTO `Branch` (`idBranch`, `branchName`, `city`) VALUES ('ĐT11', 'Hồng Ngự', 'Đồng Tháp');

/*Dữ liệu mẫu 15 tài khoản phân bộ cho các chi hội */
INSERT INTO `Account_has_Branch` (`Account_idAccount`, `Branch_idBranch`) VALUES ('AAAA', 'CT01');
INSERT INTO `Account_has_Branch` (`Account_idAccount`, `Branch_idBranch`) VALUES ('BBBB', 'CT01');
INSERT INTO `Account_has_Branch` (`Account_idAccount`, `Branch_idBranch`) VALUES ('CCCC', 'CT01');
INSERT INTO `Account_has_Branch` (`Account_idAccount`, `Branch_idBranch`) VALUES ('DDDD', 'HG01');
INSERT INTO `Account_has_Branch` (`Account_idAccount`, `Branch_idBranch`) VALUES ('EEEE', 'CT03');
INSERT INTO `Account_has_Branch` (`Account_idAccount`, `Branch_idBranch`) VALUES ('FFFF', 'ĐT01');
INSERT INTO `Account_has_Branch` (`Account_idAccount`, `Branch_idBranch`) VALUES ('GGGG', 'ST01');
INSERT INTO `Account_has_Branch` (`Account_idAccount`, `Branch_idBranch`) VALUES ('HHHH', 'CT01');
INSERT INTO `Account_has_Branch` (`Account_idAccount`, `Branch_idBranch`) VALUES ('KKKK', 'HG01');
INSERT INTO `Account_has_Branch` (`Account_idAccount`, `Branch_idBranch`) VALUES ('LLLL', 'CT03');
INSERT INTO `Account_has_Branch` (`Account_idAccount`, `Branch_idBranch`) VALUES ('MMMM', 'ĐT01');
INSERT INTO `Account_has_Branch` (`Account_idAccount`, `Branch_idBranch`) VALUES ('OOOO', 'CT01');
INSERT INTO `Account_has_Branch` (`Account_idAccount`, `Branch_idBranch`) VALUES ('PPPP', 'HG01');
INSERT INTO `Account_has_Branch` (`Account_idAccount`, `Branch_idBranch`) VALUES ('QQQQ', 'CT03');
INSERT INTO `Account_has_Branch` (`Account_idAccount`, `Branch_idBranch`) VALUES ('NNNN', 'CT01');
INSERT INTO `Account_has_Branch` (`Account_idAccount`, `Branch_idBranch`) VALUES ('RRRR', 'ST02');
INSERT INTO `Account_has_Branch` (`Account_idAccount`, `Branch_idBranch`) VALUES ('SSSS', 'CT02');
INSERT INTO `Account_has_Branch` (`Account_idAccount`, `Branch_idBranch`) VALUES ('TTTT', 'HG01');
INSERT INTO `Account_has_Branch` (`Account_idAccount`, `Branch_idBranch`) VALUES ('UUUU', 'CT03');
INSERT INTO `Account_has_Branch` (`Account_idAccount`, `Branch_idBranch`) VALUES ('VVVV', 'ĐT01');
INSERT INTO `Account_has_Branch` (`Account_idAccount`, `Branch_idBranch`) VALUES ('WWWW', 'ST01');


/*Dữ liệu mẫu 16 lớp phân bổ vào các khoa*/
INSERT INTO `Class` (`idClass`, `className`, `schoolYear`, `Academy_idAcademy`) VALUES ('DI1496A1', 'Kỹ thuật phần mềm 1', '40', 'DI');
INSERT INTO `Class` (`idClass`, `className`, `schoolYear`, `Academy_idAcademy`) VALUES ('DI1496A2', 'Kỹ thuật phần mềm 2', '40', 'DI');
INSERT INTO `Class` (`idClass`, `className`, `schoolYear`, `Academy_idAcademy`) VALUES ('CN15YTA1', 'Cơ khí giao thông 1', '41', 'CN');
INSERT INTO `Class` (`idClass`, `className`, `schoolYear`, `Academy_idAcademy`) VALUES ('CN15YTA2', 'Cơ khí giao thông 2', '41', 'CN');
INSERT INTO `Class` (`idClass`, `className`, `schoolYear`, `Academy_idAcademy`) VALUES ('KT16ABA2', 'Kinh tế tài nguyên 2', '42', 'KT');
INSERT INTO `Class` (`idClass`, `className`, `schoolYear`, `Academy_idAcademy`) VALUES ('KT16ABA1', 'Kinh tế tài nguyên 1', '42', 'KT');
INSERT INTO `Class` (`idClass`, `className`, `schoolYear`, `Academy_idAcademy`) VALUES ('TS13ABA1', 'Chăn nuôi thủy sản 1', '39', 'TS');
INSERT INTO `Class` (`idClass`, `className`, `schoolYear`, `Academy_idAcademy`) VALUES ('TS13ABA2', 'Chăn nuôi thủy sản 2', '39', 'TS');
INSERT INTO `Class` (`idClass`, `className`, `schoolYear`, `Academy_idAcademy`) VALUES ('L1496A1', 'Luật Kinh Tế 1', '40', 'L');
INSERT INTO `Class` (`idClass`, `className`, `schoolYear`, `Academy_idAcademy`) VALUES ('L1496A2', 'Luật Kinh Tế 2', '40', 'L');
INSERT INTO `Class` (`idClass`, `className`, `schoolYear`, `Academy_idAcademy`) VALUES ('NN15YTA1', 'Khoa Học Cây Trồng 1', '41', 'NNSH');
INSERT INTO `Class` (`idClass`, `className`, `schoolYear`, `Academy_idAcademy`) VALUES ('NN15YTA2', 'Khoa Học Cây Trồng 2', '41', 'NNSH');
INSERT INTO `Class` (`idClass`, `className`, `schoolYear`, `Academy_idAcademy`) VALUES ('SP15ABA2', 'Sư phạm toán 2', '41', 'SP');
INSERT INTO `Class` (`idClass`, `className`, `schoolYear`, `Academy_idAcademy`) VALUES ('SP15ABA1', 'Sư phạm toán 1', '41', 'SP');
INSERT INTO `Class` (`idClass`, `className`, `schoolYear`, `Academy_idAcademy`) VALUES ('MT13ABA1', 'Tài nguyên môi trường 1', '39', 'MT');
INSERT INTO `Class` (`idClass`, `className`, `schoolYear`, `Academy_idAcademy`) VALUES ('MT13ABA2', 'Tài nguyên môi trường 2', '39', 'MT');


/*Dữ liệu mẫu 18 tài khoản phân bổ vào các lớp */
INSERT INTO `Account_has_Class` (`Account_idAccount`, `Class_idClass`) VALUES ('AAAA', 'DI1496A1');
INSERT INTO `Account_has_Class` (`Account_idAccount`, `Class_idClass`) VALUES ('BBBB', 'DI1496A1');
INSERT INTO `Account_has_Class` (`Account_idAccount`, `Class_idClass`) VALUES ('CCCC', 'DI1496A1');
INSERT INTO `Account_has_Class` (`Account_idAccount`, `Class_idClass`) VALUES ('DDDD', 'DI1496A1');
INSERT INTO `Account_has_Class` (`Account_idAccount`, `Class_idClass`) VALUES ('EEEE', 'DI1496A2');
INSERT INTO `Account_has_Class` (`Account_idAccount`, `Class_idClass`) VALUES ('FFFF', 'DI1496A2');
INSERT INTO `Account_has_Class` (`Account_idAccount`, `Class_idClass`) VALUES ('GGGG', 'DI1496A2');
INSERT INTO `Account_has_Class` (`Account_idAccount`, `Class_idClass`) VALUES ('HHHH', 'DI1496A2');
INSERT INTO `Account_has_Class` (`Account_idAccount`, `Class_idClass`) VALUES ('CB101', 'DI1496A1');
INSERT INTO `Account_has_Class` (`Account_idAccount`, `Class_idClass`) VALUES ('CB102', 'DI1496A2');


INSERT INTO `Account_has_Class` (`Account_idAccount`, `Class_idClass`) VALUES ('KKKK', 'CN15YTA1');
INSERT INTO `Account_has_Class` (`Account_idAccount`, `Class_idClass`) VALUES ('LLLL', 'CN15YTA1');
INSERT INTO `Account_has_Class` (`Account_idAccount`, `Class_idClass`) VALUES ('MMMM', 'CN15YTA1');
INSERT INTO `Account_has_Class` (`Account_idAccount`, `Class_idClass`) VALUES ('OOOO', 'CN15YTA2');
INSERT INTO `Account_has_Class` (`Account_idAccount`, `Class_idClass`) VALUES ('PPPP', 'CN15YTA2');
INSERT INTO `Account_has_Class` (`Account_idAccount`, `Class_idClass`) VALUES ('QQQQ', 'CN15YTA2');
INSERT INTO `Account_has_Class` (`Account_idAccount`, `Class_idClass`) VALUES ('CB106', 'DI1496A1');
INSERT INTO `Account_has_Class` (`Account_idAccount`, `Class_idClass`) VALUES ('CB107', 'DI1496A2');

INSERT INTO `Structure` (`idItem`, `itemName`, `scores`, `describe`, `IDParent`, `scoresDefault`) VALUES
('I', 'Điều 4. Đánh giá về ý thức tham gia học tập', 20, '', '0', 0),
('I.a', 'a. Ý thức và thái độ trong học tập.', 0, '', 'I', 0),
('I.a.1', '- Đi học đầy đủ, đúng giờ, nghiêm túc trong giờ học (Mỗi môn bị cấm thi trừ 03 điểm)', 6, '', 'I.a', 6),
('I.b', 'b. Ý thức và thái độ tham gia các câu lạc bộ học thuật, các hoạt động học thuật, hoạt động ngoại khóa, hoạt động nghiên cứu khoa học.', 0, '', 'I', NULL),
('I.b.1', 'Nghiên cứu khoa học (NCKH)', 0, '', 'I.b', NULL),
('I.b.1.1', '- Có tham gia đề tài NCKH của sinh viên hoặc của Khoa và cấp tương đương, có xác nhận của Chủ nhiệm đề tài (Không tính bài tập, tiểu luận, đồ án môn học, luận văn...)', 5, '', 'I.b.1', 5),
('I.b.1.2', '- Có giấy khen về NCKH', 8, '', 'I.b.1', NULL),
('I.b.1.3', '- Có bài báo trong và ngoài nước trong hoạt động NCKH.', 8, '', 'I.b.1', NULL),
('I.b.2', 'Hoàn thành chứng chỉ ngoại ngữ, tin học.', 0, '', 'I.b', NULL),
('I.b.2.1', '- Ngoại ngữ không chuyên/chứng chỉ A/chuẩn khung Châu Âu.', 3, '', 'I.b.2', 0),
('I.b.2.2', '- Chứng chỉ B/chuẩn khung Châu Âu.', 5, '', 'I.b.2', 0),
('I.b.2.3', '- Chứng chỉ C/chuẩn khung Châu Âu', 7, '', 'I.b.2', 0),
('I.b.2.4', '- Riếng chứng chỉ ngoại ngữ, Chứng nhận Toefl >= 500 điểm; IELTS >= 5.0', 10, '', 'I.b.2', 0),
('I.b.3', 'Tham gia các kỳ thi chuyên ngành, thi Olympic...', 0, '', 'I.b', NULL),
('I.b.3.1', '- Có tham gia kỳ thi', 2, '', 'I.b.3', 0),
('I.b.3.2', '- Đạt giải cấp Trường', 4, '', 'I.b.3', 0),
('I.b.3.3', '- Đạt giải cấp cao hơn.', 7, '', 'I.b.3', 0),
('I.c', 'c. Ý thức và thái độ tham gia các kỳ thi, cuộc thi.', 0, '', 'I', NULL),
('I.c.1', '- Không vi phạm quy chế về thi, kiểm tra (Mỗi lần vi phạm trừ 03 điểm)', 6, '', 'I.c', 6),
('I.d', 'd. Tinh thần vượt khó, phấn đấu vươn lên trong học tập.', 0, '', 'I', NULL),
('I.d.1', '- Có cố gắng, vượt khó trong học tập (có ĐTB học kỳ sau lớn hơn học kỳ trước đó; đối với SV năm thứ nhất, học kỳ I không có điểm dưới 4)', 2, '', 'I.d', 2),
('I.e', 'e. Kết quả học tập', 0, '', 'I', NULL),
('I.e.1', 'Kết quả học tập trong học kỳ:', 0, '', 'I.e', NULL),
('I.e.1.1', '- Điểm trung bình chung học kỳ (ĐTBCHK) đạt >= 3,60', 8, '', 'I.e.1', 0),
('I.e.1.2', '- ĐTBCHK đạt từ 3,20 đến 3,59', 6, '', 'I.e.1', 6),
('I.e.1.3', '- ĐTBCHK đạt từ 2,50 đến 3,19', 4, '', 'I.e.1', 0),
('I.e.1.4', '- ĐTBCHK đạt từ 2,00 đến 2,49', 2, '', 'I.e.1', 0),
('II', 'Điều 5. Đánh giá về ý thức và kết quả chấp hành nội quy, quy chế, quy định trong nhà trường', 25, '', '0', 0),
('II.a', 'a. Ý thức chấp hành các văn bản chỉ đạo của ngành, của cơ quan chỉ đạo cấp trên được thực hiện trong nhà trường.', 0, '', 'II', NULL),
('II.a.1', '- Không vi phạm và có ý thức tham gia thực hiện nghiêm túc các quy định của Lớp, nội quy, quy chế của trường, Khoa và các tổ chức trong nhà trường (Mỗi lần vắng trừ 03 điểm)', 15, '', 'II.a', 15),
('II.b', 'b. Ý thức chấp hành các nội quy, quy chế và các quy định khác được áp dụng trong nhà trường.', 0, '', 'II', NULL),
('II.b.1', 'Sinh viên có tích cực tham gia các hoạt động tuyên truyền, vận động mọi người xung quanh thực hiện nghiêm túc nội quy, quy chế, các quy định của nhà trường về:', 0, '', 'II.b', NULL),
('II.b.1.1', '- Giữ gìn an ninh, trật tự nơi công cộng có xác nhận của Đoàn khoa.', 10, '', 'II.b.1', 0),
('II.b.1.2', '- Giữ gìn vệ sinh, bảo vệ cảnh quan môi trường, nếp sống văn minh (có xác nhận của đoàn thể, Khoa, trường ...)', 10, '', 'II.b.1', 0),
('III', 'Điều 6. Đánh giá về ý thức tham gia các hoạt động chính trị, xã hội, văn hóa, văn nghệ, thể thao, phòng chống tội phạm và các tệ nạn xã hội', 20, '', '0', NULL),
('III.a', 'a. Ý thức và hiệu quả tham gia các hoạt động rèn luyện về chính trị, xã hội, văn hóa, văn nghệ, thể thao.', 0, '', 'III', NULL),
('III.a.1', ' - Tham gia đầy đủ các hoạt động chính trị, xã hội, văn hóa, văn nghệ, thể thao các cấp từ Lớp, Chi hội, Chi đoàn trở lên tổ chức (Mỗi lần vắng trừ 02 điểm từ cấp đơn vị lớp trở lên).', 12, '', 'III.a', 12),
('III.a.2', ' - Lực lượng nồng cốt của phong trào', 5, '', 'III.a', 0),
('III.b', 'b. Ý thức tham gia các hoạt động công ích tình nguyện, công tác xã hội.', 0, '', 'III', NULL),
('III.b.1', 'Là lực lượng nồng cốt trong các phong trào văn hóa, văn nghệ, thể thao:', 0, '', 'III.b', NULL),
('III.b.1.1', '- Cấp Bộ môn, Chi đoàn, Chi hội, Đội, Nhóm', 3, '', 'III.b.1', 0),
('III.b.1.2', '- Cấp Khoa (và tương đương), trường.', 5, '', 'III.b.1', 0),
('III.c', 'c. Tham gia tuyên truyền, phòng chống tội phạm và các tệ nạn xã hội.', 0, '', 'III', 0),
('III.c.1', 'Được khen thưởng trong các hoạt động phong trào.', 0, '', 'III', NULL),
('III.c.1.1', '- Quyết định khen thưởng của Đoàn Khoa (và tương đương)', 6, '', 'III.c.1', 0),
('III.c.1.2', '- Giấy khen cấp Trường.', 8, '', 'III.c.1', 0),
('III.c.1.3', '- Giấy khen cấp cao hơn.', 10, '', 'III.c.1', 0),
('IV', 'Điều 7. Đánh giá về ý thức công dân trong quan hệ cộng đồng', 25, '', '0', 0),
('IV.a', 'a. Ý thức chấp hành và tham gia tuyên truyền các chủ trương của Đảng, chính sách, pháp luật của Nhà nước trong cộng đồng.', 0, '', 'IV', NULL),
('IV.a.1', '- Không vi phạm pháp luật của Nhà nước (Nếu vi phạm pháp luật sẽ bị điểm 00 (điểm không)).', 10, '', 'IV.a', 10),
('IV.a.2', '- Tích cực tham gia tuyên truyền các chủ trương của Đảng, chính sách, pháp luật của Nhà nước trong cộng đồng.', 5, '', 'IV.a', 5),
('IV.b', 'b. Ý thức tham gia các hoạt động xã hội có thành tích được ghi nhận, biểu dương, khen thưởng.', 0, '', 'IV', NULL),
('IV.b.1', '  - Tham gia đội nhóm sinh hoạt hướng đên lợi ích cộng đồng (tham gia công tác xã hội ở trường, nơi cư trú, địa phương). (Mỗi đợt tham gia được cộng 02 điểm).', 10, '', 'IV.b', 2),
('IV.c', 'c. Có tinh thần chia sẽ, giúp đỡ người thân, người có khó khăn, hoạn nạn.', 0, '', 'IV', NULL),
('IV.c.1', '- Có tinh thần giúp đỡ bạn bè trong học tập, trong cuộc sống.', 5, '', 'IV.c', 5),
('V', 'Điều 8. Đánh giá về ý thức và kết quả khi tham gia công tác cán bộ lớp, các đoàn thể, tổ chức trong nhà trường hoặc người học đạt được thành tích đặc biệt trong học tập, rèn luyện.', 10, '', '0', NULL),
('V.a', 'a. Ý thức, tinh thần thái độ, uy tín và hiệu quả công việc của người học được phân công nhiệm vụ quản lý lớp, các tổ chức Đảng, Đoàn thanh niên, Hội sinh viên và các tổ chức khác trong nhà trường.', 0, '', 'V', NULL),
('V.a.1', '- Lớp trưởng, Bí thư Chi đoàn, Ủy viên BCH đoàn thể cấp cao hơn Chi đoàn, BCH Hội sinh viên Trường, Liên Chi hội trưởng, Chi hội trưởng, Đội trưởng các Đội, Nhóm, Câu lạc bộ từ cấp khoa và tương đương.', 10, '', 'V.a', 10),
('V.b', 'b. Kỹ năng tổ chức, quản lý lớp, quản lý các tổ chức Đảng, Đoàn thanh niên, Hội sinh viên và các tổ chức khác trong nhà trường.', 0, '', 'V', NULL),
('V.b.1', ' - Là thành viên của Ban Cán sự lớp, Ban Chấp hành chi đoàn, Ban chấp hành Liên Chi hội SV, Chi hội SV Trường (trừ các thành viên nêu mục trên), Đội SV an ninh xung kích (KTX), Hội đồng tự quản KTX (gồm Chủ tịch và các Trưởng nhóm chuyên môn), Hội đồng tự quản ngoại trú, Nhà trưởng KTX, Cụm trưởng khu nhà trọ đã hoàn thành nhiệm vụ được giao', 8, '', 'V.b', 0),
('V.b.2', ' - Là thành viên của các Ban chuyên môn Đoàn, Hội sinh viên trường hoàn thành nhiệm vụ có xác nhận của Đoàn hoặc Hội sinh viên.', 8, '', 'V.b', 0),
('V.c', 'c. Hỗ trợ và tham gia tích cực vào các hoạt động chung của lớp, tập thể, khoa và nhà trường.', 0, '', 'V', NULL),
('V.c.1', '  - Tích cực tham gia hỗ trợ các hoạt động, phong trào của cấp Khoa, sự kiện chung của nhà trường có xác nhận của đơn vị tổ chức sự kiện (Mỗi đợt tham gia được cộng 01 điểm).', 6, '', 'V.c', 0),
('V.d', 'd. Người học đạt được các thành tích đặc biệt trong học tập, rèn luyện.', 0, '', 'V', NULL),
('V.d.1', '- Được kết nạp Đảng, hoặc được công nhận Đoàn viên ưu tú.', 6, '', 'V.d', 0),
('V.d.2', '- Đạt danh hiệu sinh viên 5 tốt cấp trường trở lên.', 6, '', 'V.d', 0),
('V.d.3', '- Phân loại Đảng viên được xếp loại mức 2', 5, '', 'V.d', 0),
('VI', 'Tổng điểm các điều', 100, '', '0', NULL);

INSERT INTO `CalendarScoring` (`openDate`, `closeDate`, `Permission_position`) VALUES
('2017-10-04', '2017-10-26', 'Cố vấn học tập'),
('2017-10-04', '2017-10-26', 'Quản lý chi hội'),
('2017-10-02', '2017-10-25', 'Quản lý khoa'),
('2017-10-04', '2017-10-25', 'Sinh viên');

INSERT INTO `Transcript` (`idItem`, `Account_idAccount`, `itemName`, `scores`, `describe`, `IDParent`, `scoresDefault`, `scoresMax`, `scoresStudent`, `scoresTeacher`) VALUES
('I.a.1', 'AAAA', '- Đi học đầy đủ, đúng giờ, nghiêm túc trong giờ học (Mỗi môn bị cấm thi trừ 03 điểm)', 0, '', 'I.a', 6, 6, 6, 0),
('I.b.1.1', 'AAAA', '- Có tham gia đề tài NCKH của sinh viên hoặc của Khoa và cấp tương đương, có xác nhận của Chủ nhiệm đề tài (Không tính bài tập, tiểu luận, đồ án môn học, luận văn...)', 0, '', 'I.b.1', 5, 5, 5, 0),
('I.b.1.2', 'AAAA', '- Có giấy khen về NCKH', 0, '', 'I.b.1', 0, 8, 0, 0),
('I.b.1.3', 'AAAA', '- Có bài báo trong và ngoài nước trong hoạt động NCKH.', 0, '', 'I.b.1', 0, 8, 0, 0),
('I.b.2.1', 'AAAA', '- Ngoại ngữ không chuyên/chứng chỉ A/chuẩn khung Châu Âu.', 0, '', 'I.b.2', 0, 3, 0, 0),
('I.b.2.2', 'AAAA', '- Chứng chỉ B/chuẩn khung Châu Âu.', 0, '', 'I.b.2', 0, 5, 0, 0),
('I.b.2.3', 'AAAA', '- Chứng chỉ C/chuẩn khung Châu Âu', 0, '', 'I.b.2', 0, 7, 0, 0),
('I.b.2.4', 'AAAA', '- Riếng chứng chỉ ngoại ngữ, Chứng nhận Toefl >= 500 điểm; IELTS >= 5.0', 0, '', 'I.b.2', 0, 10, 0, 0),
('I.b.3.1', 'AAAA', '- Có tham gia kỳ thi', 0, '', 'I.b.3', 0, 2, 0, 0),
('I.b.3.2', 'AAAA', '- Đạt giải cấp Trường', 0, '', 'I.b.3', 0, 4, 0, 0),
('I.b.3.3', 'AAAA', '- Đạt giải cấp cao hơn.', 0, '', 'I.b.3', 0, 7, 0, 0),
('I.c.1', 'AAAA', '- Không vi phạm quy chế về thi, kiểm tra (Mỗi lần vi phạm trừ 03 điểm)', 0, '', 'I.c', 6, 6, 0, 0),
('I.d.1', 'AAAA', '- Có cố gắng, vượt khó trong học tập (có ĐTB học kỳ sau lớn hơn học kỳ trước đó; đối với SV năm thứ nhất, học kỳ I không có điểm dưới 4)', 0, '', 'I.d', 2, 2, 0, 0),
('I.e.1.1', 'AAAA', '- Điểm trung bình chung học kỳ (ĐTBCHK) đạt >= 3,60', 0, '', 'I.e.1', 0, 8, 0, 0),
('I.e.1.2', 'AAAA', '- ĐTBCHK đạt từ 3,20 đến 3,59', 0, '', 'I.e.1', 6, 6, 0, 0),
('I.e.1.3', 'AAAA', '- ĐTBCHK đạt từ 2,50 đến 3,19', 0, '', 'I.e.1', 0, 4, 0, 0),
('I.e.1.4', 'AAAA', '- ĐTBCHK đạt từ 2,00 đến 2,49', 0, '', 'I.e.1', 0, 2, 0, 0),
('II.a.1', 'AAAA', '- Không vi phạm và có ý thức tham gia thực hiện nghiêm túc các quy định của Lớp, nội quy, quy chế của trường, Khoa và các tổ chức trong nhà trường (Mỗi lần vắng trừ 03 điểm)', 0, '', 'II.a', 15, 15, 0, 0),
('II.b.1.1', 'AAAA', '- Giữ gìn an ninh, trật tự nơi công cộng có xác nhận của Đoàn khoa.', 0, '', 'II.b.1', 0, 10, 0, 0),
('II.b.1.2', 'AAAA', '- Giữ gìn vệ sinh, bảo vệ cảnh quan môi trường, nếp sống văn minh (có xác nhận của đoàn thể, Khoa, trường ...)', 0, '', 'II.b.1', 0, 10, 0, 0),
('III.a.1', 'AAAA', ' - Tham gia đầy đủ các hoạt động chính trị, xã hội, văn hóa, văn nghệ, thể thao các cấp từ Lớp, Chi hội, Chi đoàn trở lên tổ chức (Mỗi lần vắng trừ 02 điểm từ cấp đơn vị lớp trở lên).', 0, '', 'III.a', 12, 12, 0, 0),
('III.a.2', 'AAAA', ' - Lực lượng nồng cốt của phong trào', 0, '', 'III.a', 0, 5, 0, 0),
('III.b.1.1', 'AAAA', '- Cấp Bộ môn, Chi đoàn, Chi hội, Đội, Nhóm', 0, '', 'III.b.1', 0, 3, 0, 0),
('III.b.1.2', 'AAAA', '- Cấp Khoa (và tương đương), trường.', 0, '', 'III.b.1', 0, 5, 0, 0),
('III.c', 'AAAA', 'c. Tham gia tuyên truyền, phòng chống tội phạm và các tệ nạn xã hội.', 0, '', 'III', 0, 0, 0, 0),
('III.c.1.1', 'AAAA', '- Quyết định khen thưởng của Đoàn Khoa (và tương đương)', 0, '', 'III.c.1', 0, 6, 0, 0),
('III.c.1.2', 'AAAA', '- Giấy khen cấp Trường.', 0, '', 'III.c.1', 0, 8, 0, 0),
('III.c.1.3', 'AAAA', '- Giấy khen cấp cao hơn.', 0, '', 'III.c.1', 0, 10, 0, 0),
('IV.a.1', 'AAAA', '- Không vi phạm pháp luật của Nhà nước (Nếu vi phạm pháp luật sẽ bị điểm 00 (điểm không)).', 0, '', 'IV.a', 10, 10, 0, 0),
('IV.a.2', 'AAAA', '- Tích cực tham gia tuyên truyền các chủ trương của Đảng, chính sách, pháp luật của Nhà nước trong cộng đồng.', 0, '', 'IV.a', 5, 5, 0, 0),
('IV.b.1', 'AAAA', '  - Tham gia đội nhóm sinh hoạt hướng đên lợi ích cộng đồng (tham gia công tác xã hội ở trường, nơi cư trú, địa phương). (Mỗi đợt tham gia được cộng 02 điểm).', 0, '', 'IV.b', 2, 10, 0, 0),
('IV.c.1', 'AAAA', '- Có tinh thần giúp đỡ bạn bè trong học tập, trong cuộc sống.', 0, '', 'IV.c', 5, 5, 0, 0),
('V.a.1', 'AAAA', '- Lớp trưởng, Bí thư Chi đoàn, Ủy viên BCH đoàn thể cấp cao hơn Chi đoàn, BCH Hội sinh viên Trường, Liên Chi hội trưởng, Chi hội trưởng, Đội trưởng các Đội, Nhóm, Câu lạc bộ từ cấp khoa và tương đương.', 0, '', 'V.a', 10, 10, 0, 0),
('V.b.1', 'AAAA', ' - Là thành viên của Ban Cán sự lớp, Ban Chấp hành chi đoàn, Ban chấp hành Liên Chi hội SV, Chi hội SV Trường (trừ các thành viên nêu mục trên), Đội SV an ninh xung kích (KTX), Hội đồng tự quản KTX (gồm Chủ tịch và các Trưởng nhóm chuyên môn), Hội đồng tự quản ngoại trú, Nhà trưởng KTX, Cụm trưởng khu nhà trọ đã hoàn thành nhiệm vụ được giao', 0, '', 'V.b', 0, 8, 0, 0),
('V.b.2', 'AAAA', ' - Là thành viên của các Ban chuyên môn Đoàn, Hội sinh viên trường hoàn thành nhiệm vụ có xác nhận của Đoàn hoặc Hội sinh viên.', 0, '', 'V.b', 0, 8, 0, 0),
('V.c.1', 'AAAA', '  - Tích cực tham gia hỗ trợ các hoạt động, phong trào của cấp Khoa, sự kiện chung của nhà trường có xác nhận của đơn vị tổ chức sự kiện (Mỗi đợt tham gia được cộng 01 điểm).', 0, '', 'V.c', 0, 6, 0, 0),
('V.d.1', 'AAAA', '- Được kết nạp Đảng, hoặc được công nhận Đoàn viên ưu tú.', 0, '', 'V.d', 0, 6, 0, 0),
('V.d.2', 'AAAA', '- Đạt danh hiệu sinh viên 5 tốt cấp trường trở lên.', 0, '', 'V.d', 0, 6, 0, 0),
('V.d.3', 'AAAA', '- Phân loại Đảng viên được xếp loại mức 2', 0, '', 'V.d', 0, 5, 0, 0);

INSERT INTO `CalendarScoring` (`openDate`, `closeDate`, `Permission_position`) VALUES
('2017-11-24', '2018-01-31', 'Cố vấn học tập'),
('2017-11-24', '2017-12-30', 'Quản lý chi hội'),
('2017-11-24', '2018-02-28', 'Quản lý khoa'),
('2017-11-24', '2017-12-31', 'Sinh viên');

