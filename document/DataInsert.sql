/*Dữ liệu mẫu 5 khoa*/ 

INSERT INTO `academy` (`idAcademy`, `academyName`) VALUES ('DI', 'Công nghệ thông tin và truyền thông');
INSERT INTO `academy` (`idAcademy`, `academyName`) VALUES ('TS', 'Thủy sản');
INSERT INTO `academy` (`idAcademy`, `academyName`) VALUES ('MT', 'Môi trường');
INSERT INTO `academy` (`idAcademy`, `academyName`) VALUES ('CN', 'Công nghệ');
INSERT INTO `academy` (`idAcademy`, `academyName`) VALUES ('KT', 'Kinh tê');

/*Dữ liệu mẫu 5 chi hội*/
INSERT INTO `branch` (`idBranch`, `branchName`, `city`) VALUES ('AG01', 'Châu Thành An Giang', 'An Giang');
INSERT INTO `branch` (`idBranch`, `branchName`, `city`) VALUES ('ST01', 'Châu Thành Sóc Trăng', 'Sóc Trăng');
INSERT INTO `branch` (`idBranch`, `branchName`, `city`) VALUES ('ST02', 'Kế Sách', 'Sóc Trăng');
INSERT INTO `branch` (`idBranch`, `branchName`, `city`) VALUES ('BT02', 'Mỏ Cày Bến Tre', 'Bến Tre');
INSERT INTO `branch` (`idBranch`, `branchName`, `city`) VALUES ('CT03', 'Ninh Kiều', 'Cần Thơ');

/*Dữ liệu mẫu 5 lớp*/
INSERT INTO `class` (`idClass`, `className`, `schoolYear`, `Academy_idAcademy`) VALUES ('DI1496A1', 'Kỹ thuật phần mềm 1', '40', 'DI');
INSERT INTO `class` (`idClass`, `className`, `schoolYear`, `Academy_idAcademy`) VALUES ('DI1496A2', 'Kỹ thuật phần mềm 2', '40', 'DI');
INSERT INTO `class` (`idClass`, `className`, `schoolYear`, `Academy_idAcademy`) VALUES ('CN16YTA2', 'Cơ khí giao thông 2', '42', 'CN');
INSERT INTO `class` (`idClass`, `className`, `schoolYear`, `Academy_idAcademy`) VALUES ('KT15ABA3', 'Kinh tế tài nguyên 3', '41', 'KT');
INSERT INTO `class` (`idClass`, `className`, `schoolYear`, `Academy_idAcademy`) VALUES ('TS13ABA1', 'Chăn nuôi thủy sản 1', '39', 'TS');

/*Dữ liệu mẫu 5 */
/*Dữ liệu mẫu 5 Tài khoản*/
INSERT INTO `account` (`idAccount`, `accountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`) 
VALUES ('B1400704', 'Lê Minh Luân', '1996-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Name', '0964054244', 'luanb1400704@student.ctu.edu.vn', '', '');
/*Dữ liệu mẫu 5 */
/*Dữ liệu mẫu 5 */
/*Dữ liệu mẫu 5 */
/*Dữ liệu mẫu 5 */
