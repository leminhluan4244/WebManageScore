

INSERT INTO `Transcript` (`idItem`,`Account_idAccount`, `itemName`, `scores`, `describe`, `IDParent`,`scoresDefault`, `scoresMax`,`scoresStudent`, `scoresTeacher`) VALUES
('I','B1400704', 'Điều 4. Đánh giá về ý thức tham gia học tập', 20, '', '',20,20,20,20),
('I.a','B1400704', 'a. Ý thức và thái độ trong học tập.',0, '', 'I',6,6,6,6),
('','B1400704', '- Đi học đầy đủ, đúng giờ, nghiêm túc trong giờ học (Mỗi môn bị cấm thi trừ 03 điểm)',6, '', 'I.a',6,6,6,6),

('I.b','B1400704', 'b. Ý thức và thái độ tham gia các câu lạc bộ học thuật, các hoạt động học thuật, hoạt động ngoại khóa, hoạt động nghiên cứu khoa học.',5, '', 'I',5,5,5,5),

('I.b.1','B1400704', 'Nghiên cứu khoa học (NCKH)',5, '', 'I.b',5,5,5,5),
('I.b.1.1','B1400704', '- Có tham gia đề tài NCKH của sinh viên hoặc của Khoa và cấp tương đương, có xác nhận của Chủ nhiệm đề tài (Không tính bài tập, tiểu luận, đồ án môn học, luận văn...)',5, '', 'I.b.1',5,5,5,5),
('I.b.1.2', 'B1400704','- Có giấy khen về NCKH',0, '', 'I.b.1',0,8,0,0),
('I.b.1.3','B1400704', '- Có bài báo trong và ngoài nước trong hoạt động NCKH.',8, '', 'I.b.1',0,8,0,0),

('I.b.2','B1400704', 'Hoàn thành chứng chỉ ngoại ngữ, tin học.',0, '', 'I.b',0,0,5,5),
('I.b.2.1','B1400704', '- Ngoại ngữ không chuyên/chứng chỉ A/chuẩn khung Châu Âu.',0, '', 'I.b.2',5,5,5,5),
('I.b.2.2','B1400704', '- Chứng chỉ B/chuẩn khung Châu Âu.',0, '', 'I.b.2',5,5,5,5),
('I.b.2.3','B1400704', '- Chứng chỉ C/chuẩn khung Châu Âu',0, '', 'I.b.2',5,5,5,5),
('I.b.2.4','B1400704', '- Riếng chứng chỉ ngoại ngữ, Chứng nhận Toefl >= 500 điểm; IELTS >= 5.0',0, '', 'I.b.2',5,5,5,5),

('I.b.3','B1400704', 'Tham gia các kỳ thi chuyên ngành, thi Olympic...',0, '', 'I.b',5,5,5,5),
('I.b.3.1', 'B1400704','- Có tham gia kỳ thi',0, '', 'I.b.3',5,5,5,5),
('I.b.3.2','B1400704', '- Đạt giải cấp Trường',0, '', 'I.b.3',5,5,5,5),
('I.b.3.3','B1400704', '- Đạt giải cấp cao hơn.',0, '', 'I.b.3',5,5,5,5),

('I.c', 'B1400704','c. Ý thức và thái độ tham gia các kỳ thi, cuộc thi.',0, '', 'I',5,5,5,5),
('I.c.1','B1400704', '- Không vi phạm quy chế về thi, kiểm tra (Mỗi lần vi phạm trừ 03 điểm)',0, '', 'I.c',5,5,5,5),


('I.d','B1400704', 'd. Tinh thần vượt khó, phấn đấu vươn lên trong học tập.',0, '', 'I',5,5,5,5),
('I.d.1','B1400704', '- Có cố gắng, vượt khó trong học tập (có ĐTB học kỳ sau lớn hơn học kỳ trước đó; đối với SV năm thứ nhất, học kỳ I không có điểm dưới 4)',0, '', 'I.d',5,5,5,5),


('I.e','B1400704', 'e. Kết quả học tập',0, '', 'I',5,5,5,5),
('I.e.1','B1400704', 'Kết quả học tập trong học kỳ:',0, '', 'I.e',5,5,5,5),
('I.e.1.1','B1400704', '- Điểm trung bình chung học kỳ (ĐTBCHK) đạt >= 3,60',0, '', 'I.e.1',5,5,5,5),
('I.e.1.2','B1400704', '- ĐTBCHK đạt từ 3,20 đến 3,59',0, '', 'I.e.1',5,5,5,5),
('I.e.1.3','B1400704', '- ĐTBCHK đạt từ 2,50 đến 3,19',0, '', 'I.e.1',5,5,5,5),
('I.e.1.4','B1400704', '- ĐTBCHK đạt từ 2,00 đến 2,49',0, '', 'I.e.1',5,5,5,5),


('II','B1400704', 'Điều 5. Đánh giá về ý thức và kết quả chấp hành nội quy, quy chế, quy định trong nhà trường', 25, '', '',5,5,5,5),
('II.a','B1400704', 'a. Ý thức chấp hành các văn bản chỉ đạo của ngành, của cơ quan chỉ đạo cấp trên được thực hiện trong nhà trường.',0, '', 'II',5,5,5,5),
('II.a.1', 'B1400704','- Không vi phạm và có ý thức tham gia thực hiện nghiêm túc các quy định của Lớp, nội quy, quy chế của trường, Khoa và các tổ chức trong nhà trường (Mỗi lần vắng trừ 03 điểm)',0, '', 'II.a',5,5,5,5),

('II.b','B1400704', 'b. Ý thức chấp hành các nội quy, quy chế và các quy định khác được áp dụng trong nhà trường.',0, '', 'II',5,5,5,5),
('II.b.1','B1400704', 'Sinh viên có tích cực tham gia các hoạt động tuyên truyền, vận động mọi người xung quanh thực hiện nghiêm túc nội quy, quy chế, các quy định của nhà trường về:',0, '', 'II.b',5,5,5,5),
('II.b.1.1','B1400704', '- Giữ gìn an ninh, trật tự nơi công cộng có xác nhận của Đoàn khoa.',0, '', 'II.b.1',5,5,5,5),
('II.b.1.2','B1400704', '- Giữ gìn vệ sinh, bảo vệ cảnh quan môi trường, nếp sống văn minh (có xác nhận của đoàn thể, Khoa, trường ...)',0, '', 'II.b.1',5,5,5,5),

('III', 'B1400704','Điều 6. Đánh giá về ý thức tham gia các hoạt động chính trị, xã hội, văn hóa, văn nghệ, thể thao, phòng chống tội phạm và các tệ nạn xã hội', 20, '', '',5,5,5,5),
('III.a','B1400704', 'a. Ý thức và hiệu quả tham gia các hoạt động rèn luyện về chính trị, xã hội, văn hóa, văn nghệ, thể thao.',0, '', 'III',5,5,5,5),
('III.a.1','B1400704', ' - Tham gia đầy đủ các hoạt động chính trị, xã hội, văn hóa, văn nghệ, thể thao các cấp từ Lớp, Chi hội, Chi đoàn trở lên tổ chức (Mỗi lần vắng trừ 02 điểm từ cấp đơn vị lớp trở lên).',0, '', 'III.a',5,5,5,5),

('III.b','B1400704', 'b. Ý thức tham gia các hoạt động công ích tình nguyện, công tác xã hội.',0, '', 'III',5,5,5,5),
('III.b.1','B1400704', 'Là lực lượng nồng cốt trong các phong trào văn hóa, văn nghệ, thể thao:',0, '', 'III.b',5,5,5,5),
('III.b.1.1','B1400704', '- Cấp Bộ môn, Chi đoàn, Chi hội, Đội, Nhóm',0, '', 'III.b.1',5,5,5,5),
('III.b.1.2','B1400704', '- Cấp Khoa (và tương đương), trường.',0, '', 'III.b.1',5,5,5,5),

('III.c','B1400704', 'c. Tham gia tuyên truyền, phòng chống tội phạm và các tệ nạn xã hội.',0, '', 'III',5,5,5,5),
('III.c.1','B1400704', 'Được khen thưởng trong các hoạt động phong trào.',0, '', 'III',5,5,5,5),
('III.c.1.1','B1400704', '- Quyết định khen thưởng của Đoàn Khoa (và tương đương)',0, '', 'III.c.1',5,5,5,5),
('III.c.1.2','B1400704', '- Giấy khen cấp Trường.',0, '', 'III.c.1',5,5,5,5),
('III.c.1.3','B1400704', '- Giấy khen cấp cao hơn.',0, '', 'III.c.1',5,5,5,5),

('IV','B1400704', 'Điều 7. Đánh giá về ý thức công dân trong quan hệ cộng đồng', 25, '', '',5,5,5,5),
('IV.a', 'B1400704','a. Ý thức chấp hành và tham gia tuyên truyền các chủ trương của Đảng, chính sách, pháp luật của Nhà nước trong cộng đồng.', 0, '', 'IV',5,5,5,5),
('IV.a.1','B1400704', '- Không vi phạm pháp luật của Nhà nước (Nếu vi phạm pháp luật sẽ bị điểm 00 (điểm không)).', 0, '', 'IV.a',5,5,5,5),
('IV.a.2','B1400704', '- Tích cực tham gia tuyên truyền các chủ trương của Đảng, chính sách, pháp luật của Nhà nước trong cộng đồng.', 0, '', 'IV.a',5,5,5,5),
('IV.b', 'B1400704','b. Ý thức tham gia các hoạt động xã hội có thành tích được ghi nhận, biểu dương, khen thưởng.', 0, '', 'IV',5,5,5,5),
('IV.b.1','B1400704', '  - Tham gia đội nhóm sinh hoạt hướng đên lợi ích cộng đồng (tham gia công tác xã hội ở trường, nơi cư trú, địa phương). (Mỗi đợt tham gia được cộng 02 điểm).', 0, '', 'IV.b',5,5,5,5),
('IV.c', 'B1400704','c. Có tinh thần chia sẽ, giúp đỡ người thân, người có khó khăn, hoạn nạn.', 0, '', 'IV',5,5,5,5),
('IV.c.1', 'B1400704','- Có tinh thần giúp đỡ bạn bè trong học tập, trong cuộc sống.', 0, '', 'IV.c',5,5,5,5),

('V', 'B1400704','Điều 8. Đánh giá về ý thức và kết quả khi tham gia công tác cán bộ lớp, các đoàn thể, tổ chức trong nhà trường hoặc người học đạt được thành tích đặc biệt trong học tập, rèn luyện.', 10, '', '',5,5,5,5),
('V.a','B1400704', 'a. Ý thức, tinh thần thái độ, uy tín và hiệu quả công việc của người học được phân công nhiệm vụ quản lý lớp, các tổ chức Đảng, Đoàn thanh niên, Hội sinh viên và các tổ chức khác trong nhà trường.', 0, '', 'V',5,5,5,5),
('V.a.1','B1400704', '- Lớp trưởng, Bí thư Chi đoàn, Ủy viên BCH đoàn thể cấp cao hơn Chi đoàn, BCH Hội sinh viên Trường, Liên Chi hội trưởng, Chi hội trưởng, Đội trưởng các Đội, Nhóm, Câu lạc bộ từ cấp khoa và tương đương.', 0, '', 'V.a',5,5,5,5),

('V.b','B1400704', 'b. Kỹ năng tổ chức, quản lý lớp, quản lý các tổ chức Đảng, Đoàn thanh niên, Hội sinh viên và các tổ chức khác trong nhà trường.', 0, '', 'V',5,5,5,5),
('V.b.1','B1400704', ' - Là thành viên của Ban Cán sự lớp, Ban Chấp hành chi đoàn, Ban chấp hành Liên Chi hội SV, Chi hội SV Trường (trừ các thành viên nêu mục trên), Đội SV an ninh xung kích (KTX), Hội đồng tự quản KTX (gồm Chủ tịch và các Trưởng nhóm chuyên môn), Hội đồng tự quản ngoại trú, Nhà trưởng KTX, Cụm trưởng khu nhà trọ đã hoàn thành nhiệm vụ được giao', 0, '', 'V.b',5,5,5,5),
('V.b.2','B1400704', ' - Là thành viên của các Ban chuyên môn Đoàn, Hội sinh viên trường hoàn thành nhiệm vụ có xác nhận của Đoàn hoặc Hội sinh viên.', 0, '', 'V.b',5,5,5,5),

('V.c','B1400704', 'c. Hỗ trợ và tham gia tích cực vào các hoạt động chung của lớp, tập thể, khoa và nhà trường.', 0, '', 'V',5,5,5,5),
('V.c.1','B1400704', '  - Tích cực tham gia hỗ trợ các hoạt động, phong trào của cấp Khoa, sự kiện chung của nhà trường có xác nhận của đơn vị tổ chức sự kiện (Mỗi đợt tham gia được cộng 01 điểm).', 0, '', 'V.c',5,5,5,5),

('V.d','B1400704', 'd. Người học đạt được các thành tích đặc biệt trong học tập, rèn luyện.', 0, '', 'V',5,5,5,5),
('V.d.1','B1400704', '- Được kết nạp Đảng, hoặc được công nhận Đoàn viên ưu tú.', 0, '', 'V.d',5,5,5,5),
('V.d.2','B1400704', '- Đạt danh hiệu sinh viên 5 tốt cấp trường trở lên.', 0, '', 'V.d',5,5,5,5),
('V.d.3','B1400704', '- Phân loại Đảng viên được xếp loại mức 2', 0, '', 'V.d',5,5,5,5),

('VI','B1400704', 'Tổng điểm các điều', 100, '', '',100,100,100,100);
