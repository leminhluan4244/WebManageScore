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

/*Dữ liệu mẫu 7 phân quyền */
INSERT INTO `permission` (`position`, `power`) VALUES ('Cố vấn học tập', 'Chấm điểm rèn luyện cá nhân sinh viên');
INSERT INTO `permission` (`position`, `power`) VALUES ('Sinh viên', 'Chấm điểm rèn luyện cá nhân sinh viên');
INSERT INTO `permission` (`position`, `power`) VALUES ('Quản lý chi hội', 'Chấm điểm rèn luyện cá nhân sinh viên');
INSERT INTO `permission` (`position`, `power`) VALUES ('Cố vấn học tập', 'Chấm điểm cho một lớp');
INSERT INTO `permission` (`position`, `power`) VALUES ('Cố vấn học tập', 'Thêm bảng điểm cộng trừ cho lớp');
INSERT INTO `permission` (`position`, `power`) VALUES ('Quản lý khoa', 'Chấm điểm rèn luyện cho cả khoa');
INSERT INTO `permission` (`position`, `power`) VALUES ('Quản lý khoa', 'Thêm bảng điểm cộng trừ cho khoa');
INSERT INTO `permission` (`position`, `power`) VALUES ('Quản lý chi hội', 'Thêm bảng điểm cộng trừ cho sinh viên theo chi hội');
/*Dữ liệu mẫu 5 Tài khoản*/
INSERT INTO `account` (`idAccount`, `accountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`) 
VALUES ('B1400704', 'Lê Minh Luân', '1996-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', '0964054244', 'luanb1400704@student.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Sinh viên');
INSERT INTO `account` (`idAccount`, `accountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`) 
VALUES ('B1400713', 'Đoàn Minh Nhựt', '1996-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', '0964054244', 'nhutb1400704@student.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Sinh viên');
INSERT INTO `account` (`idAccount`, `accountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`) 
VALUES ('CB001', 'Phan Phương Lan', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', '0964054244', 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Cố vấn học tập');
INSERT INTO `account` (`idAccount`, `accountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`)
VALUES ('CB002', 'Trần Cao Đệ', '1970', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', '0964054244', 'tcde@ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Quản lý khoa');
INSERT INTO `account` (`idAccount`, `accountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`) 
VALUES ('B1400123', 'Đoàn Minh Nhựt Cùi', '1996-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', '0964054244', 'nhutb1400704@student.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Quản lý chi hội');

/*Dữ liệu mẫu 5 tài khoản vào khoa*/
INSERT INTO `account_has_academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('B1400704', 'DI');
INSERT INTO `account_has_academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('B1400713', 'DI');
INSERT INTO `account_has_academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('B1400123', 'CN');
INSERT INTO `account_has_academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('CB001', 'DI');
INSERT INTO `account_has_academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES ('CB002', 'DI');
/*Dữ liệu mẫu 5 */
INSERT INTO `account_has_class` (`Account_idAccount`, `Class_idClass`) VALUES ('B1400123', 'CN16YTA2');
INSERT INTO `account_has_class` (`Account_idAccount`, `Class_idClass`) VALUES ('B1400704', 'DI1496A1');
INSERT INTO `account_has_class` (`Account_idAccount`, `Class_idClass`) VALUES ('CB001', 'DI1496A1');
INSERT INTO `account_has_class` (`Account_idAccount`, `Class_idClass`) VALUES ('CB001', 'DI1496A2');
INSERT INTO `account_has_class` (`Account_idAccount`, `Class_idClass`) VALUES ('B1400123', 'DI1496A1');
/*Dữ liệu mẫu 5 */
INSERT INTO `account_has_branch` (`Account_idAccount`, `Branch_idBranch`) VALUES ('B1400123', 'AG01');
INSERT INTO `account_has_branch` (`Account_idAccount`, `Branch_idBranch`) VALUES ('B1400123', 'ST01');
INSERT INTO `account_has_branch` (`Account_idAccount`, `Branch_idBranch`) VALUES ('B1400704', 'AG01');
INSERT INTO `account_has_branch` (`Account_idAccount`, `Branch_idBranch`) VALUES ('B1400713', 'AG01');
INSERT INTO `account_has_branch` (`Account_idAccount`, `Branch_idBranch`) VALUES ('B1400123', 'CT03');
/*Dữ liệu mẫu 3 lịch chấm điểm*/
INSERT INTO `calendarscoring` (`openDate`, `closeDate`, `Permission_position`) VALUES ('2017-09-09', '2017-09-15', 'Sinh viên');
INSERT INTO `calendarscoring` (`openDate`, `closeDate`, `Permission_position`) VALUES ('2017-09-15', '2017-10-30','Cố vấn học tập');
INSERT INTO `calendarscoring` (`openDate`, `closeDate`, `Permission_position`) VALUES ('2017-10-01', '2017-10-10', 'Quản lý khoa');

/*Dữ liệu mẫu struct*/
INSERT INTO `Structure` (`idItem`, `itemName`, `scores`, `describe`, `IDParent`) VALUES
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
/*Dữ liệu mẫu 3 hình ảnh minnh chứng*/
INSERT INTO `image` (`Image`, `Account_idAccount`, `Structure_idItem`) VALUES ('abc.com', 'B1400123', 'I.b.1.1');
INSERT INTO `image` (`Image`, `Account_idAccount`, `Structure_idItem`) VALUES ('abc.com', 'B1400704', 'I.b.2.4');
INSERT INTO `image` (`Image`, `Account_idAccount`, `Structure_idItem`) VALUES ('acn.com', 'B1400713', 'I.b.1.1');
/*Dữ liệu mẫu */
INSERT INTO `practisescores` (`scores`, `semester`, `year`, `Account_idAccount`) VALUES ('100', '2', '2017', 'B1400123');
INSERT INTO `practisescores` (`scores`, `semester`, `year`, `Account_idAccount`) VALUES ('98', '1', '2017', 'B1400713');
INSERT INTO `practisescores` (`scores`, `semester`, `year`, `Account_idAccount`) VALUES ('50', '1', '2016', 'B1400713');
/*Dữ liệu mẫu 3 cộng trừ điểm*/
INSERT INTO `scoresadd` (`idScores`, `scoreName`, `scores`, `describe`, `Structure_idItem`) VALUES ('AS001', 'Trừ điểm rèn luyện học lớp', '-5', 'Trừ điểm rèn luyện học lớp cho DI1496A1 Học sinh vắng học lớp bị trừ 5 điểm', 'I.b.1.3');
INSERT INTO `scoresadd` (`idScores`, `scoreName`, `scores`, `describe`, `Structure_idItem`) VALUES ('AS002', 'Trừ điểm rèn luyện học lớp', '-5', 'Trừ điểm rèn luyện học lớp cho DI1496A2 Học sinh vắng học lớp bị trừ 5 điểm', 'I.b.1.3');
INSERT INTO `scoresadd` (`idScores`, `scoreName`, `scores`, `describe`, `Structure_idItem`) VALUES ('AS003', 'Cộng điểm rèn luyện lao động', '5', 'Cộng điểm rèn luyện học lớp cho DI1496A2 Học sinh vắng học lớp bị trừ 5 điểm', 'I.b.2.1');
/*Dữ liệu mẫu */	