/*Dữ liệu mẫu phân quyền */
INSERT INTO `permission` (`position`, `power`,`selected`) VALUES ('Cố vấn học tập', 'Chấm điểm rèn luyện cá nhân sinh viên',1);
INSERT INTO `permission` (`position`, `power`,`selected`) VALUES ('Sinh viên', 'Chấm điểm rèn luyện cá nhân sinh viên',1);
INSERT INTO `permission` (`position`, `power`,`selected`) VALUES ('Quản lý chi hội', 'Chấm điểm rèn luyện cá nhân sinh viên',1);
INSERT INTO `permission` (`position`, `power`,`selected`) VALUES ('Cố vấn học tập', 'Chấm điểm cho một lớp',1);
INSERT INTO `permission` (`position`, `power`,`selected`) VALUES ('Cố vấn học tập', 'Thêm bảng điểm cộng trừ cho lớp',1);
INSERT INTO `permission` (`position`, `power`,`selected`) VALUES ('Quản lý khoa', 'Chấm điểm rèn luyện cho cả khoa - viện',1);
INSERT INTO `permission` (`position`, `power`,`selected`) VALUES ('Quản lý khoa', 'Thêm bảng điểm cộng trừ cho khoa - viện',1);
INSERT INTO `permission` (`position`, `power`,`selected`) VALUES ('Quản lý chi hội', 'Thêm bảng điểm cộng trừ cho sinh viên theo chi hội',1);
INSERT INTO `permission` (`position`, `power`,`selected`) VALUES ('Quản lý chi hội', 'Quản lý thành viên chi hội',1);
INSERT INTO `permission` (`position`, `power`,`selected`) VALUES ('Admin', 'Full ',1);
INSERT INTO `permission` (`position`, `power`,`selected`) VALUES ('Default', 'Not ',1);

/* Dữ liệu mẫu 4 Admin  */
INSERT INTO `account` (`idAccount`, `accountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('Admin01', 'Lê Minh Luân', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', '0964054244', 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Admin');
INSERT INTO `account` (`idAccount`, `accountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('Admin02', 'Nguyễn Minh Nhựt', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', '0964054244', 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Admin');
INSERT INTO `account` (`idAccount`, `accountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('Admin03', 'Nguyễn Tấn Phát', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', '0964054244', 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Admin');
INSERT INTO `account` (`idAccount`, `accountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('Admin04', 'Pham Hoài An', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', '0964054244', 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Admin');
INSERT INTO `account` (`idAccount`, `accountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('Admin05', 'Huỳnh Hoàng Thơ', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', '0964054244', 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Admin');

/*Dữ liệu mẫu 30 Tài khoản sinh viên*/
INSERT INTO `account` (`idAccount`, `accountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('AAAA', 'Nguyễn Văn A', '1996-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', '0964054244', 'ab1400701@student.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Sinh viên');
INSERT INTO `account` (`idAccount`, `accountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('BBBB', 'Nguyễn Văn B', '1996-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', '09640542402', 'bb1400701@student.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Sinh viên');
INSERT INTO `account` (`idAccount`, `accountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('CCCC', 'Nguyễn Văn C', '1996-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', '0964054244', 'cb1400701@student.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Sinh viên');
INSERT INTO `account` (`idAccount`, `accountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('DDDD', 'Nguyễn Văn D', '1996-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', '0964054244', 'db1400701@student.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Sinh viên');
INSERT INTO `account` (`idAccount`, `accountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('EEEE', 'Nguyễn Văn E', '1996-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', '0964054244', 'eb1400701@student.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Sinh viên');
INSERT INTO `account` (`idAccount`, `accountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('FFFF', 'Nguyễn Văn F', '1996-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', '0964054244', 'ab1400701@student.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Sinh viên');
INSERT INTO `account` (`idAccount`, `accountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('GGGG', 'Nguyễn Văn G', '1996-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', '09640542402', 'bb1400701@student.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Sinh viên');
INSERT INTO `account` (`idAccount`, `accountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('HHHH', 'Nguyễn Văn H', '1996-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', '0964054244', 'cb1400701@student.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Sinh viên');
INSERT INTO `account` (`idAccount`, `accountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('IIII', 'Nguyễn Văn I', '1996-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', '0964054244', 'db1400701@student.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Sinh viên');
INSERT INTO `account` (`idAccount`, `accountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('KKKK', 'Nguyễn Văn K', '1996-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', '0964054244', 'eb1400701@student.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Sinh viên');
INSERT INTO `account` (`idAccount`, `accountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('LLLL', 'Nguyễn Văn L', '1996-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', '0964054244', 'ab1400701@student.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Sinh viên');
INSERT INTO `account` (`idAccount`, `accountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('MMMM', 'Nguyễn Văn M', '1996-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', '09640542402', 'bb1400701@student.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Sinh viên');
INSERT INTO `account` (`idAccount`, `accountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('OOOO', 'Nguyễn Văn O', '1996-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', '0964054244', 'cb1400701@student.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Sinh viên');
INSERT INTO `account` (`idAccount`, `accountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('PPPP', 'Nguyễn Văn P', '1996-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', '0964054244', 'db1400701@student.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Sinh viên');
INSERT INTO `account` (`idAccount`, `accountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('QQQQ', 'Nguyễn Văn Q', '1996-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', '0964054244', 'eb1400701@student.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Sinh viên');


/*Dữ liệu mẫu 10 cố vấn học tập*/
INSERT INTO `account` (`idAccount`, `accountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('CB101', 'Phan Phương Lan', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', '0964054244', 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Cố vấn học tập');
INSERT INTO `account` (`idAccount`, `accountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('CB102', 'Nguyễn Thái Nghe', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', '0964054244', 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Cố vấn học tập');
INSERT INTO `account` (`idAccount`, `accountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('CB103', 'Huỳnh Quang Nghi', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', '0964054244', 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Cố vấn học tập');
INSERT INTO `account` (`idAccount`, `accountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('CB104', 'Trương Minh Thái', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', '0964054244', 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Cố vấn học tập');
INSERT INTO `account` (`idAccount`, `accountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('CB105', 'Hồ Quang Thái', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', '0964054244', 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Cố vấn học tập');
INSERT INTO `account` (`idAccount`, `accountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('CB106', 'Nguyễn Thúy An', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', '0964054244', 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Cố vấn học tập');
INSERT INTO `account` (`idAccount`, `accountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('CB107', 'Trần Cao Đệ', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', '0964054244', 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Cố vấn học tập');
INSERT INTO `account` (`idAccount`, `accountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('CB108', 'Trần Công Án', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', '0964054244', 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Cố vấn học tập');
INSERT INTO `account` (`idAccount`, `accountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('CB109', 'Trương Thị Thanh Tuyền', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', '0964054244', 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Cố vấn học tập');
INSERT INTO `account` (`idAccount`, `accountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('CB110', 'Trần Minh Tân', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', '0964054244', 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Cố vấn học tập');

/*Dữ liệu mẫu 10 quản lý khoa*/
INSERT INTO `account` (`idAccount`, `accountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('QL101', 'Dương Văn Lăng', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', '0964054244', 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Quản lý khoa');
INSERT INTO `account` (`idAccount`, `accountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('QL102', 'Nguyễn Đại Lợi', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', '0964054244', 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Quản lý khoa');
INSERT INTO `account` (`idAccount`, `accountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('QL103', 'Lê Nguyên Thức', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', '0964054244', 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Quản lý khoa');
INSERT INTO `account` (`idAccount`, `accountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('QL104', 'Trương Công Hiển', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', '0964054244', 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Quản lý khoa');
INSERT INTO `account` (`idAccount`, `accountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('QL105', 'Trần Văn Linh', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', '0964054244', 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Quản lý khoa');
INSERT INTO `account` (`idAccount`, `accountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('QL106', 'Nguyễn Văn Tài', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', '0964054244', 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Quản lý khoa');
INSERT INTO `account` (`idAccount`, `accountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('QL107', 'Trần Quốc Khánh', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', '0964054244', 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Quản lý khoa');
INSERT INTO `account` (`idAccount`, `accountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('QL108', 'Nguyễn Tấn Phát', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', '0964054244', 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Quản lý khoa');
INSERT INTO `account` (`idAccount`, `accountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('QL109', 'Phạm Hoài An', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', '0964054244', 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Quản lý khoa');
INSERT INTO `account` (`idAccount`, `accountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('QL110', 'Huỳnh Hoàng Thơ', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', '0964054244', 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Quản lý khoa');

/*Dữ liệu mẫu 20 khoa viện*/
INSERT INTO `academy` (`idAcademy`, `academyName`) VALUES ('CN', 'Khoa Công nghệ');
INSERT INTO `academy` (`idAcademy`, `academyName`) VALUES ('DI', 'Khoa Công nghệ Thông tin và Truyền thông');
INSERT INTO `academy` (`idAcademy`, `academyName`) VALUES ('DBDT', 'Khoa Dự bị Dân tộc');
INSERT INTO `academy` (`idAcademy`, `academyName`) VALUES ('KHCT', 'Khoa Khoa học Chính trị');
INSERT INTO `academy` (`idAcademy`, `academyName`) VALUES ('KHTN', 'Khoa Khoa học Tự nhiên');
INSERT INTO `academy` (`idAcademy`, `academyName`) VALUES ('KHXH', 'Khoa Khoa học Xã hội và Nhân văn');
INSERT INTO `academy` (`idAcademy`, `academyName`) VALUES ('KT', 'Khoa Kinh Tế');
INSERT INTO `academy` (`idAcademy`, `academyName`) VALUES ('L', 'Khoa Luật');
INSERT INTO `academy` (`idAcademy`, `academyName`) VALUES ('MT', 'Khoa Trường và Tài nguyên Thiên nhiên');
INSERT INTO `academy` (`idAcademy`, `academyName`) VALUES ('NN', 'Khoa Ngoại ngữ');
INSERT INTO `academy` (`idAcademy`, `academyName`) VALUES ('NNSH', 'Khoa Nông nghiệp và Sinh học Ứng dụng');
INSERT INTO `academy` (`idAcademy`, `academyName`) VALUES ('PTNT', 'Khoa Phát triển Nông thôn');
INSERT INTO `academy` (`idAcademy`, `academyName`) VALUES ('SDH', 'Khoa Sau đại học');
INSERT INTO `academy` (`idAcademy`, `academyName`) VALUES ('SP', 'Khoa Sư phạm');
INSERT INTO `academy` (`idAcademy`, `academyName`) VALUES ('TS', 'Khoa Thủy sản');
INSERT INTO `academy` (`idAcademy`, `academyName`) VALUES ('GDTC', 'Bộ môn Giáo dục Thể Chất');
INSERT INTO `academy` (`idAcademy`, `academyName`) VALUES ('VNCBDKH', 'Viện Nghiên cứu Biến đổi Khí hậu');
INSERT INTO `academy` (`idAcademy`, `academyName`) VALUES ('VNCPT', 'Viện Nghiên cứu Phát triển ĐBSCL');
INSERT INTO `academy` (`idAcademy`, `academyName`) VALUES ('VNCPTCNSH', 'Viện Nghiên cứu và phát triển công nghệ sinh học');
INSERT INTO `academy` (`idAcademy`, `academyName`) VALUES ('THSP', 'Trường THPT Thực hành Sư phạm');
/*Dữ liệu mẫu 20 tài khoản vào khoa*/
INSERT INTO `account_has_academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('AAAA', 'DI');
INSERT INTO `account_has_academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('BBBB', 'DI');
INSERT INTO `account_has_academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('CCCC', 'DI');
INSERT INTO `account_has_academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('DDDD', 'DI');
INSERT INTO `account_has_academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('EEEE', 'DI');
INSERT INTO `account_has_academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('FFFF', 'DI');
INSERT INTO `account_has_academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('GGGG', 'DI');
INSERT INTO `account_has_academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('HHHH', 'DI');

INSERT INTO `account_has_academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('KKKK', 'CN');
INSERT INTO `account_has_academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('LLLL', 'CN');
INSERT INTO `account_has_academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('MMMM', 'CN');
INSERT INTO `account_has_academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('OOOO', 'CN');
INSERT INTO `account_has_academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('PPPP', 'CN');
INSERT INTO `account_has_academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('QQQQ', 'CN');

INSERT INTO `account_has_academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('CB101', 'DI');
INSERT INTO `account_has_academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('CB102', 'DI');
INSERT INTO `account_has_academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('CB103', 'DI');
INSERT INTO `account_has_academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('CB104', 'DI');
INSERT INTO `account_has_academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('CB105', 'DI');

INSERT INTO `account_has_academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('CB106', 'CN');
INSERT INTO `account_has_academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('CB107', 'CN');
INSERT INTO `account_has_academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('CB108', 'CN');
INSERT INTO `account_has_academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('CB109', 'CN');
INSERT INTO `account_has_academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('CB110', 'CN');

INSERT INTO `account_has_academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('QL101', 'DI');
INSERT INTO `account_has_academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('QL102', 'DI');
INSERT INTO `account_has_academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('QL103', 'DI');
INSERT INTO `account_has_academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('QL104', 'DI');
INSERT INTO `account_has_academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('QL105', 'DI');

INSERT INTO `account_has_academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('QL106', 'CN');
INSERT INTO `account_has_academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('QL107', 'CN');
INSERT INTO `account_has_academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('QL108', 'CN');
INSERT INTO `account_has_academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('QL109', 'CN');
INSERT INTO `account_has_academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('QL110', 'CN');

/*Dữ liệu mẫu 36 chi hội phân bộ vào các tỉnh*/
INSERT INTO `branch` (`idBranch`, `branchName`, `city`) VALUES ('CT01', 'Ninh Kiều', 'Cần Thơ');
INSERT INTO `branch` (`idBranch`, `branchName`, `city`) VALUES ('CT02', 'Bình Thủy', 'Cần Thơ');
INSERT INTO `branch` (`idBranch`, `branchName`, `city`) VALUES ('CT03', 'Cái Răng', 'Cần Thơ');
INSERT INTO `branch` (`idBranch`, `branchName`, `city`) VALUES ('CT04', 'Cờ Đở', 'Cần Thơ');
INSERT INTO `branch` (`idBranch`, `branchName`, `city`) VALUES ('CT05', 'Thốt Nốt', 'Cần Thơ');
INSERT INTO `branch` (`idBranch`, `branchName`, `city`) VALUES ('CT06', 'Ô Môn', 'Cần Thơ');
INSERT INTO `branch` (`idBranch`, `branchName`, `city`) VALUES ('CT07', 'Phong Điền', 'Cần Thơ');
INSERT INTO `branch` (`idBranch`, `branchName`, `city`) VALUES ('CT08', 'Vĩnh Thạnh', 'Cần Thơ');

INSERT INTO `branch` (`idBranch`, `branchName`, `city`) VALUES ('ST01', 'Mỹ Tú', 'Sóc Trăng');
INSERT INTO `branch` (`idBranch`, `branchName`, `city`) VALUES ('ST02', 'TP. Sóc Trăng', 'Sóc Trăng');
INSERT INTO `branch` (`idBranch`, `branchName`, `city`) VALUES ('ST03', 'Kế Sách', 'Sóc Trăng');
INSERT INTO `branch` (`idBranch`, `branchName`, `city`) VALUES ('ST04', 'Châu Thành', 'Sóc Trăng');
INSERT INTO `branch` (`idBranch`, `branchName`, `city`) VALUES ('ST05', 'Cù Lao Dung', 'Sóc Trăng');
INSERT INTO `branch` (`idBranch`, `branchName`, `city`) VALUES ('ST06', 'Mỹ Xuyên', 'Sóc Trăng');
INSERT INTO `branch` (`idBranch`, `branchName`, `city`) VALUES ('ST07', 'Long Phú', 'Sóc Trăng');
INSERT INTO `branch` (`idBranch`, `branchName`, `city`) VALUES ('ST08', 'Vĩnh Châu', 'Sóc Trăng');
INSERT INTO `branch` (`idBranch`, `branchName`, `city`) VALUES ('ST09', 'Thạnh Trị', 'Sóc Trăng');
INSERT INTO `branch` (`idBranch`, `branchName`, `city`) VALUES ('ST10', 'Ngã Năm', 'Sóc Trăng');

INSERT INTO `branch` (`idBranch`, `branchName`, `city`) VALUES ('HG01', 'Châu Thành', 'Hậu Giang');
INSERT INTO `branch` (`idBranch`, `branchName`, `city`) VALUES ('HG02', 'Ngã Bảy', 'Hậu Giang');
INSERT INTO `branch` (`idBranch`, `branchName`, `city`) VALUES ('HG03', 'Phụng Hiệp', 'Hậu Giang');
INSERT INTO `branch` (`idBranch`, `branchName`, `city`) VALUES ('HG04', 'Châu Thành A', 'Hậu Giang');
INSERT INTO `branch` (`idBranch`, `branchName`, `city`) VALUES ('HG05', 'Vị Thủy', 'Hậu Giang');
INSERT INTO `branch` (`idBranch`, `branchName`, `city`) VALUES ('HG06', 'Vị Thanh', 'Hậu Giang');
INSERT INTO `branch` (`idBranch`, `branchName`, `city`) VALUES ('HG07', 'Long Mỹ', 'Hậu Giang');

INSERT INTO `branch` (`idBranch`, `branchName`, `city`) VALUES ('ĐT01', 'TP. Sa Đéc', 'Đồng Tháp');
INSERT INTO `branch` (`idBranch`, `branchName`, `city`) VALUES ('ĐT02', 'TP. Cao Lãnh', 'Đồng Tháp');
INSERT INTO `branch` (`idBranch`, `branchName`, `city`) VALUES ('ĐT03', 'Tháp Mười', 'Đồng Tháp');
INSERT INTO `branch` (`idBranch`, `branchName`, `city`) VALUES ('ĐT04', 'Cao Lãnh', 'Đồng Tháp');
INSERT INTO `branch` (`idBranch`, `branchName`, `city`) VALUES ('ĐT05', 'Lấp Vò', 'Đồng Tháp');
INSERT INTO `branch` (`idBranch`, `branchName`, `city`) VALUES ('ĐT06', 'Lai Dung', 'Đồng Tháp');
INSERT INTO `branch` (`idBranch`, `branchName`, `city`) VALUES ('ĐT07', 'Châu Thành', 'Đồng Tháp');
INSERT INTO `branch` (`idBranch`, `branchName`, `city`) VALUES ('ĐT08', 'Thanh Bình', 'Đồng Tháp');
INSERT INTO `branch` (`idBranch`, `branchName`, `city`) VALUES ('ĐT09', 'Tam Nông', 'Đồng Tháp');
INSERT INTO `branch` (`idBranch`, `branchName`, `city`) VALUES ('ĐT10', 'Tân Hồng', 'Đồng Tháp');
INSERT INTO `branch` (`idBranch`, `branchName`, `city`) VALUES ('ĐT11', 'Hồng Ngự', 'Đồng Tháp');

/*Dữ liệu mẫu 15 tài khoản phân bộ cho các chi hội */
INSERT INTO `account_has_branch` (`Account_idAccount`, `Branch_idBranch`) VALUES ('AAAA', 'CT01');
INSERT INTO `account_has_branch` (`Account_idAccount`, `Branch_idBranch`) VALUES ('BBBB', 'CT01');
INSERT INTO `account_has_branch` (`Account_idAccount`, `Branch_idBranch`) VALUES ('CCCC', 'CT01');
INSERT INTO `account_has_branch` (`Account_idAccount`, `Branch_idBranch`) VALUES ('DDDD', 'HG01');
INSERT INTO `account_has_branch` (`Account_idAccount`, `Branch_idBranch`) VALUES ('EEEE', 'CT03');
INSERT INTO `account_has_branch` (`Account_idAccount`, `Branch_idBranch`) VALUES ('FFFF', 'ĐT01');
INSERT INTO `account_has_branch` (`Account_idAccount`, `Branch_idBranch`) VALUES ('GGGG', 'ST01');
INSERT INTO `account_has_branch` (`Account_idAccount`, `Branch_idBranch`) VALUES ('HHHH', 'CT01');
INSERT INTO `account_has_branch` (`Account_idAccount`, `Branch_idBranch`) VALUES ('KKKK', 'HG01');
INSERT INTO `account_has_branch` (`Account_idAccount`, `Branch_idBranch`) VALUES ('LLLL', 'CT03');
INSERT INTO `account_has_branch` (`Account_idAccount`, `Branch_idBranch`) VALUES ('MMMM', 'ĐT01');
INSERT INTO `account_has_branch` (`Account_idAccount`, `Branch_idBranch`) VALUES ('OOOO', 'CT01');
INSERT INTO `account_has_branch` (`Account_idAccount`, `Branch_idBranch`) VALUES ('PPPP', 'HG01');
INSERT INTO `account_has_branch` (`Account_idAccount`, `Branch_idBranch`) VALUES ('QQQQ', 'CT03');

/*Dữ liệu mẫu 16 lớp phân bổ vào các khoa*/
INSERT INTO `class` (`idClass`, `className`, `schoolYear`, `Academy_idAcademy`) VALUES ('DI1496A1', 'Kỹ thuật phần mềm 1', '40', 'DI');
INSERT INTO `class` (`idClass`, `className`, `schoolYear`, `Academy_idAcademy`) VALUES ('DI1496A2', 'Kỹ thuật phần mềm 2', '40', 'DI');
INSERT INTO `class` (`idClass`, `className`, `schoolYear`, `Academy_idAcademy`) VALUES ('CN15YTA1', 'Cơ khí giao thông 1', '41', 'CN');
INSERT INTO `class` (`idClass`, `className`, `schoolYear`, `Academy_idAcademy`) VALUES ('CN15YTA2', 'Cơ khí giao thông 2', '41', 'CN');
INSERT INTO `class` (`idClass`, `className`, `schoolYear`, `Academy_idAcademy`) VALUES ('KT16ABA2', 'Kinh tế tài nguyên 2', '42', 'KT');
INSERT INTO `class` (`idClass`, `className`, `schoolYear`, `Academy_idAcademy`) VALUES ('KT16ABA1', 'Kinh tế tài nguyên 1', '42', 'KT');
INSERT INTO `class` (`idClass`, `className`, `schoolYear`, `Academy_idAcademy`) VALUES ('TS13ABA1', 'Chăn nuôi thủy sản 1', '39', 'TS');
INSERT INTO `class` (`idClass`, `className`, `schoolYear`, `Academy_idAcademy`) VALUES ('TS13ABA2', 'Chăn nuôi thủy sản 2', '39', 'TS');
INSERT INTO `class` (`idClass`, `className`, `schoolYear`, `Academy_idAcademy`) VALUES ('L1496A1', 'Luật Kinh Tế 1', '40', 'L');
INSERT INTO `class` (`idClass`, `className`, `schoolYear`, `Academy_idAcademy`) VALUES ('L1496A2', 'Luật Kinh Tế 2', '40', 'L');
INSERT INTO `class` (`idClass`, `className`, `schoolYear`, `Academy_idAcademy`) VALUES ('NN15YTA1', 'Khoa Học Cây Trồng 1', '41', 'NNSH');
INSERT INTO `class` (`idClass`, `className`, `schoolYear`, `Academy_idAcademy`) VALUES ('NN15YTA2', 'Khoa Học Cây Trồng 2', '41', 'NNSH');
INSERT INTO `class` (`idClass`, `className`, `schoolYear`, `Academy_idAcademy`) VALUES ('SP15ABA2', 'Sư phạm toán 2', '41', 'SP');
INSERT INTO `class` (`idClass`, `className`, `schoolYear`, `Academy_idAcademy`) VALUES ('SP15ABA1', 'Sư phạm toán 1', '41', 'SP');
INSERT INTO `class` (`idClass`, `className`, `schoolYear`, `Academy_idAcademy`) VALUES ('MT13ABA1', 'Tài nguyên môi trường 1', '39', 'MT');
INSERT INTO `class` (`idClass`, `className`, `schoolYear`, `Academy_idAcademy`) VALUES ('MT13ABA2', 'Tài nguyên môi trường 2', '39', 'MT');

/*Dữ liệu mẫu 18 tài khoản phân bổ vào các lớp */
INSERT INTO `account_has_class` (`Account_idAccount`, `Class_idClass`) VALUES ('AAAA', 'DI1496A1');
INSERT INTO `account_has_class` (`Account_idAccount`, `Class_idClass`) VALUES ('BBBB', 'DI1496A1');
INSERT INTO `account_has_class` (`Account_idAccount`, `Class_idClass`) VALUES ('CCCC', 'DI1496A1');
INSERT INTO `account_has_class` (`Account_idAccount`, `Class_idClass`) VALUES ('DDDD', 'DI1496A1');
INSERT INTO `account_has_class` (`Account_idAccount`, `Class_idClass`) VALUES ('EEEE', 'DI1496A2');
INSERT INTO `account_has_class` (`Account_idAccount`, `Class_idClass`) VALUES ('FFFF', 'DI1496A2');
INSERT INTO `account_has_class` (`Account_idAccount`, `Class_idClass`) VALUES ('GGGG', 'DI1496A2');
INSERT INTO `account_has_class` (`Account_idAccount`, `Class_idClass`) VALUES ('HHHH', 'DI1496A2');
INSERT INTO `account_has_class` (`Account_idAccount`, `Class_idClass`) VALUES ('CB101', 'DI1496A1');
INSERT INTO `account_has_class` (`Account_idAccount`, `Class_idClass`) VALUES ('CB102', 'DI1496A2');


INSERT INTO `account_has_class` (`Account_idAccount`, `Class_idClass`) VALUES ('KKKK', 'CN15YTA1');
INSERT INTO `account_has_class` (`Account_idAccount`, `Class_idClass`) VALUES ('LLLL', 'CN15YTA1');
INSERT INTO `account_has_class` (`Account_idAccount`, `Class_idClass`) VALUES ('MMMM', 'CN15YTA1');
INSERT INTO `account_has_class` (`Account_idAccount`, `Class_idClass`) VALUES ('OOOO', 'CN15YTA2');
INSERT INTO `account_has_class` (`Account_idAccount`, `Class_idClass`) VALUES ('PPPP', 'CN15YTA2');
INSERT INTO `account_has_class` (`Account_idAccount`, `Class_idClass`) VALUES ('QQQQ', 'CN15YTA2');
INSERT INTO `account_has_class` (`Account_idAccount`, `Class_idClass`) VALUES ('CB106', 'DI1496A1');
INSERT INTO `account_has_class` (`Account_idAccount`, `Class_idClass`) VALUES ('CB107', 'DI1496A2');

/*Dữ liệu mẫu struct*/
INSERT INTO `Structure` (`idItem`, `itemName`, `scores`, `describe`, `IDParent`) VALUES
('I', 'Điều 4. Đánh giá về ý thức tham gia học tập', 20, '', '0'),
('I.a', 'a. Ý thức và thái độ trong học tập.',0, '', 'I'),
('', '- Đi học đầy đủ, đúng giờ, nghiêm túc trong giờ học (Mỗi môn bị cấm thi trừ 03 điểm)',6, '', 'I.a'),

('I.b', 'b. Ý thức và thái độ tham gia các câu lạc bộ học thuật, các hoạt động học thuật, hoạt động ngoại khóa, hoạt động nghiên cứu khoa học.',0, '', 'I'),

('I.b.1', 'Nghiên cứu khoa học (NCKH)',0, '', 'I.b'),
('I.b.1.1', '- Có tham gia đề tài NCKH của sinh viên hoặc của Khoa và cấp tương đương, có xác nhận của Chủ nhiệm đề tài (Không tính bài tập, tiểu luận, đồ án môn học, luận văn...)',5, '', 'I.b.1'),
('I.b.1.2', '- Có giấy khen về NCKH',8, '', 'I.b.1'),
('I.b.1.3', '- Có bài báo trong và ngoài nước trong hoạt động NCKH.',8, '', 'I.b.1'),

('I.b.2', 'Hoàn thành chứng chỉ ngoại ngữ, tin học.',0, '', 'I.b'),
('I.b.2.1', '- Ngoại ngữ không chuyên/chứng chỉ A/chuẩn khung Châu Âu.',0, '', 'I.b.2'),
('I.b.2.2', '- Chứng chỉ B/chuẩn khung Châu Âu.',0, '', 'I.b.2'),
('I.b.2.3', '- Chứng chỉ C/chuẩn khung Châu Âu',0, '', 'I.b.2'),
('I.b.2.4', '- Riếng chứng chỉ ngoại ngữ, Chứng nhận Toefl >= 500 điểm; IELTS >= 5.0',0, '', 'I.b.2'),

('I.b.3', 'Tham gia các kỳ thi chuyên ngành, thi Olympic...',0, '', 'I.b'),
('I.b.3.1', '- Có tham gia kỳ thi',0, '', 'I.b.3'),
('I.b.3.2', '- Đạt giải cấp Trường',0, '', 'I.b.3'),
('I.b.3.3', '- Đạt giải cấp cao hơn.',0, '', 'I.b.3'),

('I.c', 'c. Ý thức và thái độ tham gia các kỳ thi, cuộc thi.',0, '', 'I'),
('I.c.1', '- Không vi phạm quy chế về thi, kiểm tra (Mỗi lần vi phạm trừ 03 điểm)',0, '', 'I.c'),


('I.d', 'd. Tinh thần vượt khó, phấn đấu vươn lên trong học tập.',0, '', 'I'),
('I.d.1', '- Có cố gắng, vượt khó trong học tập (có ĐTB học kỳ sau lớn hơn học kỳ trước đó; đối với SV năm thứ nhất, học kỳ I không có điểm dưới 4)',0, '', 'I.d'),


('I.e', 'e. Kết quả học tập',0, '', 'I'),
('I.e.1', 'Kết quả học tập trong học kỳ:',0, '', 'I.e'),
('I.e.1.1', '- Điểm trung bình chung học kỳ (ĐTBCHK) đạt >= 3,60',0, '', 'I.e.1'),
('I.e.1.2', '- ĐTBCHK đạt từ 3,20 đến 3,59',0, '', 'I.e.1'),
('I.e.1.3', '- ĐTBCHK đạt từ 2,50 đến 3,19',0, '', 'I.e.1'),
('I.e.1.4', '- ĐTBCHK đạt từ 2,00 đến 2,49',0, '', 'I.e.1'),


('II', 'Điều 5. Đánh giá về ý thức và kết quả chấp hành nội quy, quy chế, quy định trong nhà trường', 25, '', '0'),
('II.a', 'a. Ý thức chấp hành các văn bản chỉ đạo của ngành, của cơ quan chỉ đạo cấp trên được thực hiện trong nhà trường.',0, '', 'II'),
('II.a.1', '- Không vi phạm và có ý thức tham gia thực hiện nghiêm túc các quy định của Lớp, nội quy, quy chế của trường, Khoa và các tổ chức trong nhà trường (Mỗi lần vắng trừ 03 điểm)',0, '', 'II.a'),

('II.b', 'b. Ý thức chấp hành các nội quy, quy chế và các quy định khác được áp dụng trong nhà trường.',0, '', 'II'),
('II.b.1', 'Sinh viên có tích cực tham gia các hoạt động tuyên truyền, vận động mọi người xung quanh thực hiện nghiêm túc nội quy, quy chế, các quy định của nhà trường về:',0, '', 'II.b'),
('II.b.1.1', '- Giữ gìn an ninh, trật tự nơi công cộng có xác nhận của Đoàn khoa.',0, '', 'II.b.1'),
('II.b.1.2', '- Giữ gìn vệ sinh, bảo vệ cảnh quan môi trường, nếp sống văn minh (có xác nhận của đoàn thể, Khoa, trường ...)',0, '', 'II.b.1'),

('III', 'Điều 6. Đánh giá về ý thức tham gia các hoạt động chính trị, xã hội, văn hóa, văn nghệ, thể thao, phòng chống tội phạm và các tệ nạn xã hội', 20, '', '0'),
('III.a', 'a. Ý thức và hiệu quả tham gia các hoạt động rèn luyện về chính trị, xã hội, văn hóa, văn nghệ, thể thao.',0, '', 'III'),
('III.a.1', ' - Tham gia đầy đủ các hoạt động chính trị, xã hội, văn hóa, văn nghệ, thể thao các cấp từ Lớp, Chi hội, Chi đoàn trở lên tổ chức (Mỗi lần vắng trừ 02 điểm từ cấp đơn vị lớp trở lên).',0, '', 'III.a'),

('III.b', 'b. Ý thức tham gia các hoạt động công ích tình nguyện, công tác xã hội.',0, '', 'III'),
('III.b.1', 'Là lực lượng nồng cốt trong các phong trào văn hóa, văn nghệ, thể thao:',0, '', 'III.b'),
('III.b.1.1', '- Cấp Bộ môn, Chi đoàn, Chi hội, Đội, Nhóm',0, '', 'III.b.1'),
('III.b.1.2', '- Cấp Khoa (và tương đương), trường.',0, '', 'III.b.1'),

('III.c', 'c. Tham gia tuyên truyền, phòng chống tội phạm và các tệ nạn xã hội.',0, '', 'III'),
('III.c.1', 'Được khen thưởng trong các hoạt động phong trào.',0, '', 'III'),
('III.c.1.1', '- Quyết định khen thưởng của Đoàn Khoa (và tương đương)',0, '', 'III.c.1'),
('III.c.1.2', '- Giấy khen cấp Trường.',0, '', 'III.c.1'),
('III.c.1.3', '- Giấy khen cấp cao hơn.',0, '', 'III.c.1'),

('IV', 'Điều 7. Đánh giá về ý thức công dân trong quan hệ cộng đồng', 25, '', '0'),
('IV.a', 'a. Ý thức chấp hành và tham gia tuyên truyền các chủ trương của Đảng, chính sách, pháp luật của Nhà nước trong cộng đồng.', 0, '', 'IV'),
('IV.a.1', '- Không vi phạm pháp luật của Nhà nước (Nếu vi phạm pháp luật sẽ bị điểm 00 (điểm không)).', 0, '', 'IV.a'),
('IV.a.2', '- Tích cực tham gia tuyên truyền các chủ trương của Đảng, chính sách, pháp luật của Nhà nước trong cộng đồng.', 0, '', 'IV.a'),
('IV.b', 'b. Ý thức tham gia các hoạt động xã hội có thành tích được ghi nhận, biểu dương, khen thưởng.', 0, '', 'IV'),
('IV.b.1', '  - Tham gia đội nhóm sinh hoạt hướng đên lợi ích cộng đồng (tham gia công tác xã hội ở trường, nơi cư trú, địa phương). (Mỗi đợt tham gia được cộng 02 điểm).', 0, '', 'IV.b'),
('IV.c', 'c. Có tinh thần chia sẽ, giúp đỡ người thân, người có khó khăn, hoạn nạn.', 0, '', 'IV'),
('IV.c.1', '- Có tinh thần giúp đỡ bạn bè trong học tập, trong cuộc sống.', 0, '', 'IV.c'),

('V', 'Điều 8. Đánh giá về ý thức và kết quả khi tham gia công tác cán bộ lớp, các đoàn thể, tổ chức trong nhà trường hoặc người học đạt được thành tích đặc biệt trong học tập, rèn luyện.', 10, '', '0'),
('V.a', 'a. Ý thức, tinh thần thái độ, uy tín và hiệu quả công việc của người học được phân công nhiệm vụ quản lý lớp, các tổ chức Đảng, Đoàn thanh niên, Hội sinh viên và các tổ chức khác trong nhà trường.', 0, '', 'V'),
('V.a.1', '- Lớp trưởng, Bí thư Chi đoàn, Ủy viên BCH đoàn thể cấp cao hơn Chi đoàn, BCH Hội sinh viên Trường, Liên Chi hội trưởng, Chi hội trưởng, Đội trưởng các Đội, Nhóm, Câu lạc bộ từ cấp khoa và tương đương.', 0, '', 'V.a'),

('V.b', 'b. Kỹ năng tổ chức, quản lý lớp, quản lý các tổ chức Đảng, Đoàn thanh niên, Hội sinh viên và các tổ chức khác trong nhà trường.', 0, '', 'V'),
('V.b.1', ' - Là thành viên của Ban Cán sự lớp, Ban Chấp hành chi đoàn, Ban chấp hành Liên Chi hội SV, Chi hội SV Trường (trừ các thành viên nêu mục trên), Đội SV an ninh xung kích (KTX), Hội đồng tự quản KTX (gồm Chủ tịch và các Trưởng nhóm chuyên môn), Hội đồng tự quản ngoại trú, Nhà trưởng KTX, Cụm trưởng khu nhà trọ đã hoàn thành nhiệm vụ được giao', 0, '', 'V.b'),
('V.b.2', ' - Là thành viên của các Ban chuyên môn Đoàn, Hội sinh viên trường hoàn thành nhiệm vụ có xác nhận của Đoàn hoặc Hội sinh viên.', 0, '', 'V.b'),

('V.c', 'c. Hỗ trợ và tham gia tích cực vào các hoạt động chung của lớp, tập thể, khoa và nhà trường.', 0, '', 'V'),
('V.c.1', '  - Tích cực tham gia hỗ trợ các hoạt động, phong trào của cấp Khoa, sự kiện chung của nhà trường có xác nhận của đơn vị tổ chức sự kiện (Mỗi đợt tham gia được cộng 01 điểm).', 0, '', 'V.c'),

('V.d', 'd. Người học đạt được các thành tích đặc biệt trong học tập, rèn luyện.', 0, '', 'V'),
('V.d.1', '- Được kết nạp Đảng, hoặc được công nhận Đoàn viên ưu tú.', 0, '', 'V.d'),
('V.d.2', '- Đạt danh hiệu sinh viên 5 tốt cấp trường trở lên.', 0, '', 'V.d'),
('V.d.3', '- Phân loại Đảng viên được xếp loại mức 2', 0, '', 'V.d'),

('VI', 'Tổng điểm các điều', 100, '', '0');
/*Dữ liệu mẫu */
INSERT INTO `practisescores` (`scores`, `semester`, `years`, `Account_idAccount`, `beginDate`, `endDate`) VALUES ('100', '1', '2017', 'AAAA', '2017-10-04', '2017-10-12');
INSERT INTO `practisescores` (`scores`, `semester`, `years`, `Account_idAccount`, `beginDate`, `endDate`) VALUES ('100', '1', '2017', 'BBBB', '2017-10-04', '2017-10-12');
INSERT INTO `practisescores` (`scores`, `semester`, `years`, `Account_idAccount`, `beginDate`, `endDate`) VALUES ('100', '1', '2017', 'CCCC', '2017-10-04', '2017-10-12');
/*Dữ liệu mẫu transcrpit
INSERT INTO `Transcript` (`idItem`, `itemName`, `scores`, `describe`, `IDParent`) VALUES
('I', 'Điều 4. Đánh giá về ý thức tham gia học tập', 20, '', ''),
('I.a', 'a. Ý thức và thái độ trong học tập.',0, '', 'I'),
('', '- Đi học đầy đủ, đúng giờ, nghiêm túc trong giờ học (Mỗi môn bị cấm thi trừ 03 điểm)',6, '', 'I.a'),

('I.b', 'b. Ý thức và thái độ tham gia các câu lạc bộ học thuật, các hoạt động học thuật, hoạt động ngoại khóa, hoạt động nghiên cứu khoa học.',0, '', 'I'),

('I.b.1', 'Nghiên cứu khoa học (NCKH)',0, '', 'I.b'),
('I.b.1.1', '- Có tham gia đề tài NCKH của sinh viên hoặc của Khoa và cấp tương đương, có xác nhận của Chủ nhiệm đề tài (Không tính bài tập, tiểu luận, đồ án môn học, luận văn...)',5, '', 'I.b.1'),
('I.b.1.2', '- Có giấy khen về NCKH',8, '', 'I.b.1'),
('I.b.1.3', '- Có bài báo trong và ngoài nước trong hoạt động NCKH.',8, '', 'I.b.1'),

('I.b.2', 'Hoàn thành chứng chỉ ngoại ngữ, tin học.',0, '', 'I.b'),
('I.b.2.1', '- Ngoại ngữ không chuyên/chứng chỉ A/chuẩn khung Châu Âu.',0, '', 'I.b.2'),
('I.b.2.2', '- Chứng chỉ B/chuẩn khung Châu Âu.',0, '', 'I.b.2'),
('I.b.2.3', '- Chứng chỉ C/chuẩn khung Châu Âu',0, '', 'I.b.2'),
('I.b.2.4', '- Riếng chứng chỉ ngoại ngữ, Chứng nhận Toefl >= 500 điểm; IELTS >= 5.0',0, '', 'I.b.2'),

('I.b.3', 'Tham gia các kỳ thi chuyên ngành, thi Olympic...',0, '', 'I.b'),
('I.b.3.1', '- Có tham gia kỳ thi',0, '', 'I.b.3'),
('I.b.3.2', '- Đạt giải cấp Trường',0, '', 'I.b.3'),
('I.b.3.3', '- Đạt giải cấp cao hơn.',0, '', 'I.b.3'),

('I.c', 'c. Ý thức và thái độ tham gia các kỳ thi, cuộc thi.',0, '', 'I'),
('I.c.1', '- Không vi phạm quy chế về thi, kiểm tra (Mỗi lần vi phạm trừ 03 điểm)',0, '', 'I.c'),


('I.d', 'd. Tinh thần vượt khó, phấn đấu vươn lên trong học tập.',0, '', 'I'),
('I.d.1', '- Có cố gắng, vượt khó trong học tập (có ĐTB học kỳ sau lớn hơn học kỳ trước đó; đối với SV năm thứ nhất, học kỳ I không có điểm dưới 4)',0, '', 'I.d'),


('I.e', 'e. Kết quả học tập',0, '', 'I'),
('I.e.1', 'Kết quả học tập trong học kỳ:',0, '', 'I.e'),
('I.e.1.1', '- Điểm trung bình chung học kỳ (ĐTBCHK) đạt >= 3,60',0, '', 'I.e.1'),
('I.e.1.2', '- ĐTBCHK đạt từ 3,20 đến 3,59',0, '', 'I.e.1'),
('I.e.1.3', '- ĐTBCHK đạt từ 2,50 đến 3,19',0, '', 'I.e.1'),
('I.e.1.4', '- ĐTBCHK đạt từ 2,00 đến 2,49',0, '', 'I.e.1'),


('II', 'Điều 5. Đánh giá về ý thức và kết quả chấp hành nội quy, quy chế, quy định trong nhà trường', 25, '', ''),
('II.a', 'a. Ý thức chấp hành các văn bản chỉ đạo của ngành, của cơ quan chỉ đạo cấp trên được thực hiện trong nhà trường.',0, '', 'II'),
('II.a.1', '- Không vi phạm và có ý thức tham gia thực hiện nghiêm túc các quy định của Lớp, nội quy, quy chế của trường, Khoa và các tổ chức trong nhà trường (Mỗi lần vắng trừ 03 điểm)',0, '', 'II.a'),

('II.b', 'b. Ý thức chấp hành các nội quy, quy chế và các quy định khác được áp dụng trong nhà trường.',0, '', 'II'),
('II.b.1', 'Sinh viên có tích cực tham gia các hoạt động tuyên truyền, vận động mọi người xung quanh thực hiện nghiêm túc nội quy, quy chế, các quy định của nhà trường về:',0, '', 'II.b'),
('II.b.1.1', '- Giữ gìn an ninh, trật tự nơi công cộng có xác nhận của Đoàn khoa.',0, '', 'II.b.1'),
('II.b.1.2', '- Giữ gìn vệ sinh, bảo vệ cảnh quan môi trường, nếp sống văn minh (có xác nhận của đoàn thể, Khoa, trường ...)',0, '', 'II.b.1'),

('III', 'Điều 6. Đánh giá về ý thức tham gia các hoạt động chính trị, xã hội, văn hóa, văn nghệ, thể thao, phòng chống tội phạm và các tệ nạn xã hội', 20, '', ''),
('III.a', 'a. Ý thức và hiệu quả tham gia các hoạt động rèn luyện về chính trị, xã hội, văn hóa, văn nghệ, thể thao.',0, '', 'III'),
('III.a.1', ' - Tham gia đầy đủ các hoạt động chính trị, xã hội, văn hóa, văn nghệ, thể thao các cấp từ Lớp, Chi hội, Chi đoàn trở lên tổ chức (Mỗi lần vắng trừ 02 điểm từ cấp đơn vị lớp trở lên).',0, '', 'III.a'),

('III.b', 'b. Ý thức tham gia các hoạt động công ích tình nguyện, công tác xã hội.',0, '', 'III'),
('III.b.1', 'Là lực lượng nồng cốt trong các phong trào văn hóa, văn nghệ, thể thao:',0, '', 'III.b'),
('III.b.1.1', '- Cấp Bộ môn, Chi đoàn, Chi hội, Đội, Nhóm',0, '', 'III.b.1'),
('III.b.1.2', '- Cấp Khoa (và tương đương), trường.',0, '', 'III.b.1'),

('III.c', 'c. Tham gia tuyên truyền, phòng chống tội phạm và các tệ nạn xã hội.',0, '', 'III'),
('III.c.1', 'Được khen thưởng trong các hoạt động phong trào.',0, '', 'III'),
('III.c.1.1', '- Quyết định khen thưởng của Đoàn Khoa (và tương đương)',0, '', 'III.c.1'),
('III.c.1.2', '- Giấy khen cấp Trường.',0, '', 'III.c.1'),
('III.c.1.3', '- Giấy khen cấp cao hơn.',0, '', 'III.c.1'),

('IV', 'Điều 7. Đánh giá về ý thức công dân trong quan hệ cộng đồng', 25, '', ''),
('IV.a', 'a. Ý thức chấp hành và tham gia tuyên truyền các chủ trương của Đảng, chính sách, pháp luật của Nhà nước trong cộng đồng.', 0, '', 'IV'),
('IV.a.1', '- Không vi phạm pháp luật của Nhà nước (Nếu vi phạm pháp luật sẽ bị điểm 00 (điểm không)).', 0, '', 'IV.a'),
('IV.a.2', '- Tích cực tham gia tuyên truyền các chủ trương của Đảng, chính sách, pháp luật của Nhà nước trong cộng đồng.', 0, '', 'IV.a'),
('IV.b', 'b. Ý thức tham gia các hoạt động xã hội có thành tích được ghi nhận, biểu dương, khen thưởng.', 0, '', 'IV'),
('IV.b.1', '  - Tham gia đội nhóm sinh hoạt hướng đên lợi ích cộng đồng (tham gia công tác xã hội ở trường, nơi cư trú, địa phương). (Mỗi đợt tham gia được cộng 02 điểm).', 0, '', 'IV.b'),
('IV.c', 'c. Có tinh thần chia sẽ, giúp đỡ người thân, người có khó khăn, hoạn nạn.', 0, '', 'IV'),
('IV.c.1', '- Có tinh thần giúp đỡ bạn bè trong học tập, trong cuộc sống.', 0, '', 'IV.c'),

('V', 'Điều 8. Đánh giá về ý thức và kết quả khi tham gia công tác cán bộ lớp, các đoàn thể, tổ chức trong nhà trường hoặc người học đạt được thành tích đặc biệt trong học tập, rèn luyện.', 10, '', ''),
('V.a', 'a. Ý thức, tinh thần thái độ, uy tín và hiệu quả công việc của người học được phân công nhiệm vụ quản lý lớp, các tổ chức Đảng, Đoàn thanh niên, Hội sinh viên và các tổ chức khác trong nhà trường.', 0, '', 'V'),
('V.a.1', '- Lớp trưởng, Bí thư Chi đoàn, Ủy viên BCH đoàn thể cấp cao hơn Chi đoàn, BCH Hội sinh viên Trường, Liên Chi hội trưởng, Chi hội trưởng, Đội trưởng các Đội, Nhóm, Câu lạc bộ từ cấp khoa và tương đương.', 0, '', 'V.a'),

('V.b', 'b. Kỹ năng tổ chức, quản lý lớp, quản lý các tổ chức Đảng, Đoàn thanh niên, Hội sinh viên và các tổ chức khác trong nhà trường.', 0, '', 'V'),
('V.b.1', ' - Là thành viên của Ban Cán sự lớp, Ban Chấp hành chi đoàn, Ban chấp hành Liên Chi hội SV, Chi hội SV Trường (trừ các thành viên nêu mục trên), Đội SV an ninh xung kích (KTX), Hội đồng tự quản KTX (gồm Chủ tịch và các Trưởng nhóm chuyên môn), Hội đồng tự quản ngoại trú, Nhà trưởng KTX, Cụm trưởng khu nhà trọ đã hoàn thành nhiệm vụ được giao', 0, '', 'V.b'),
('V.b.2', ' - Là thành viên của các Ban chuyên môn Đoàn, Hội sinh viên trường hoàn thành nhiệm vụ có xác nhận của Đoàn hoặc Hội sinh viên.', 0, '', 'V.b'),

('V.c', 'c. Hỗ trợ và tham gia tích cực vào các hoạt động chung của lớp, tập thể, khoa và nhà trường.', 0, '', 'V'),
('V.c.1', '  - Tích cực tham gia hỗ trợ các hoạt động, phong trào của cấp Khoa, sự kiện chung của nhà trường có xác nhận của đơn vị tổ chức sự kiện (Mỗi đợt tham gia được cộng 01 điểm).', 0, '', 'V.c'),

('V.d', 'd. Người học đạt được các thành tích đặc biệt trong học tập, rèn luyện.', 0, '', 'V'),
('V.d.1', '- Được kết nạp Đảng, hoặc được công nhận Đoàn viên ưu tú.', 0, '', 'V.d'),
('V.d.2', '- Đạt danh hiệu sinh viên 5 tốt cấp trường trở lên.', 0, '', 'V.d'),
('V.d.3', '- Phân loại Đảng viên được xếp loại mức 2', 0, '', 'V.d'),

('VI', 'Tổng điểm các điều', 100, '', '');
/*Dữ liệu mẫu điểm cho 1 sinh viên*/
/*
INSERT INTO `transcript_has_account` (`Transcript_idItem`, `Account_idAccount`, `scoresStudent`, `scoresTeacher`,`scoresEnd`) VALUES ('I', 'B1400704', '20', '20','20');
INSERT INTO `transcript_has_account` (`Transcript_idItem`, `Account_idAccount`, `scoresStudent`, `scoresTeacher`,`scoresEnd`) VALUES ('I.a', 'B1400704', '6', '6','6');
*/
/*Dữ liệu mẫu */
/*Dữ liệu mẫu */
/*Dữ liệu mẫu */
/*Dữ liệu mẫu */
/*Dữ liệu mẫu */