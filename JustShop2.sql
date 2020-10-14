CREATE DATABASE if exist JustShop1
USE JustShop1
 create table LoaiSanPham(
	MaLoai int not null AUTO_INCREMENT PRIMARY KEY ,
	TenLoai nvarchar(50) not null,
	TrichDan nvarchar(3000) not null,
	AnhTieuBieu nvarchar(50) 
 )

 
 create table SanPham(
	MaSp int  AUTO_INCREMENT primary key NOT NULL ,
	MaLoai int not null,
	Tensp nvarchar(50) not null,
	HinhAnh nvarchar(50)  ,
	NoiDung nvarchar(3000) ,
	MoTa nvarchar(3000),
	SoLuong int not null,
	GiaTien FLOAT ,
	FOREIGN KEY (MaLoai) REFERENCES LoaiSanPham(MaLoai)
	
 )


 create table TaiKhoan(
	TaiKhoan nvarchar(50) not null primary key,
	MatKhau  nchar(30) not null,
	TenNV nvarchar(20) not NULL,
	SDT INT ,
	DiaChi nvarchar(50) 
 )

 create table TinTuc(
	MaTin int  AUTO_INCREMENT PRIMARY KEY NOT NULL,
	TieuDe nvarchar(50) not null,
	NoiDung nvarchar(3000),
	NgayDang date not NULL,
	Anh nvarchar(50) 
 )

 create table PhanHoi(
	STT INT  AUTO_INCREMENT NOT NULL PRIMARY KEY,
	Ten nvarchar(50) not null,
	Email nvarchar(50) ,
	DienThoai int not null,
	TieuDePhanHoi nvarchar(3000) ,
	NoiDungPhanHoi nvarchar(3000) not null
 )

 create table DonHang(
	MaDonHang int  AUTO_INCREMENT PRIMARY KEY NOT NULL,
	TenKH nvarchar(50) not null ,
	SDT int not null,
	DiaChi nvarchar(50) not null,
	SoLuong int ,
	TongTien float,
	NgayMua date not null
 )

 create table CTDonHang(
	MdonhangaCT int  AUTO_INCREMENT primary key NOT NULL,
	MaDonHang int Not NULL,
	MaSp int not null,
	SoLuong int not null,
	Gia float not null,
	GiaTien float not null,
	FOREIGN KEY (MaDonHang) REFERENCES DonHang(MaDonHang),
	FOREIGN KEY (MaSp) REFERENCES SanPham(MaSp)
 )



 create table ThongKe (
	ID int primary key  AUTO_INCREMENT NOT NULL,
	SoLuongBan int ,
	TongDoanhThu float ,
	SoLuongDonHang int ,
	SanPhamBanChay nvarchar(3000) ,
	Ngay int not null
 )
 /*tạo biến default cho một số cột trong bảng*/
  CREATE DEFAULT non_update AS 'Chưa được cập nhật'
  EXEC sp_bindefault  non_update,'TinTuc.NoiDung'
  EXEC sp_bindefault  non_update,'TinTuc.TieuDe'
  EXEC sp_bindefault  non_update,'SanPham.NoiDung'
  EXEC sp_bindefault  non_update,'SanPham.Mota'
  EXEC sp_bindefault non_update,'SanPham.HinhAnh'
  EXEC sp_bindefault  non_update,'LoaiSanPham.TrichDan'
  EXEC sp_bindefault non_update,'LoaiSanPham.AnhTieuBieu'

  CREATE DEFAULT unknown AS 'Không có thông tin'
  EXEC sp_bindefault unknown,'PhanHoi.TieuDePhanHoi'
  EXEC sp_bindefault unknown, 'PhanHoi.Email'

  CREATE DEFAULT ONE AS 1
	EXEC sp_bindefault ONE , 'CTDonHang.SoLuong'

	CREATE DEFAULT zero AS 0
	EXEC sp_bindefault zero , 'DonHang.TongTien'
	/*viết một số quy tắc nhập*/
CREATE RULE ngay AS @ngay<getdate()
sp_bindrule ngay,'TinTuc.NgayDang'
sp_bindrule ngay,'TinTuc.NgayDang'

	/*viết một số trigger cho việc cập nhật sản phẩm */
DROP TRIGGER tongtien1
DROP TRIGGER soluong1
DROP TRIGGER ngay_mua
CREATE TRIGGER tongtien1 BEFORE INSERT  ON CTDonHang
FOR EACH ROW 

	UPDATE DonHang
	SET TongTien = (SELECT SUM(GiaTien) FROM CTDonHang WHERE DonHang.MaDonHang = CTDonHang.MaDonHang )

 
/**/
soluong1
CREATE TRIGGER soluong1 AFTER UPDATE  ON 
 CTDonHang
FOR EACH ROW 
	UPDATE DonHang 
	SET SoLuong = (SELECT SUM(SoLuong) FROM CTDonHang WHERE DonHang.MaDonHang = CTDonHang.MaDonHang )

/**/
CREATE TRIGGER ngay_mua AFTER  INSERT ON  DonHang
FOR EACH ROW 

	UPDATE DonHang 
	SET NgayMua = NOW()


/**/
CREATE TRIGGER gia BEFORE INSERT  ON  CTDonHang 
FOR EACH ROW
	UPDATE CTDonHang
	SET GiaTien = Gia *SoLuong
DROP TRIGGER  gia
DROP TRIGGER  gia2sp
DROP TRIGGER soluong
DROP TRIGGER tongtien
/**/
CREATE TRIGGER gia2sp  AFTER INSERT  ON SanPham 
FOR EACH ROW
	UPDATE CTDonHang
	SET Gia = (SELECT SanPham.GiaTien FROM SanPham,CTDonHang WHERE SanPham.MaSp = CTDonHang.MaSp)

DROP TRIGGER gia2sp

/**/
CREATE TRIGGER thongke1 AFTER INSERT  ON DonHang
FOR EACH ROW 

	UPDATE ThongKe 
	SET SoLuongBan = (SELECT SUM(SoLuong) FROM DonHang WHERE MONTH(DonHang.NgayMua) = MONTH(ThongKe.Ngay))

drop trigger thongke1

/**/
CREATE TRIGGER thongke2 AFTER INSERT  ON DonHang 
FOR EACH ROW 
	UPDATE ThongKe
	SET TongDoanhThu = (SELECT SUM(TongTien) FROM inserted WHERE MONTH(inserted.NgayMua) = MONTH(ThongKe.Ngay))


/**/
CREATE TRIGGER thongke3 AFTER INSERT ON ThongKe
FOR EACH ROW 

	UPDATE ThongKe
	SET Ngay = MONTH(GETDATE())


/**/
CREATE TRIGGER thongke4 AFTER INSERT ON  DonHang
FOR EACH ROW 
 
	UPDATE ThongKe
	SET SoLuongDonHang =  (SELECT COUNT(*) FROM DonHang WHERE MONTH(inserted.NgayMua) = MONTH(ThongKe.Ngay))


/**/
CREATE TRIGGER thongke5 AFTER INSERT  ON DonHang
FOR EACH ROW 

UPDATE ThongKe
SET SanPhamBanChay =(SELECT DISTINCT TenSP FROM SanPham, CTDonHang 
							WHERE  SanPham.MaSp = CTDonHang.MaSp 
							GROUP BY TenSP
							HAVING COUNT(CTDonHang.MaSp) >= ALL(SELECT COUNT(CTDonHang.MaSp) 
																		FROM CTDonHang,SanPham 
																		WHERE SanPham.MaSp=CTDonHang.MaSp ))
ALTER TABLE sanpham CHANGE  HinhAnh HinhAnh nvarchar(3000);
drop trigger thongke2
drop trigger thongke3
drop trigger thongke4
drop trigger thongke5
USE justshop1
DROP TABLE CTDonHang
DROP TABLE LoaiSanPham
DROP TABLE DonHang
DROP TABLE SanPham
DROP TABLE ThongKe
DROP TABLE TinTuc
DROP TABLE PhanHoi
DROP TABLE taikhoan
DROP TRIGGER ngay_mua
SELECT * FROM taikhoan WHERE TaiKhoan = 'admin' AND MatKhau='admin'  
INSERT INTO taikhoan(TaiKhoan,MatKhau,TenNV,SDT,DiaChi) VALUES('admin2','admin','Bui Cong Tung','0973537629','Ha noi')
SELECT 	* FROM sanpham ORDER BY Masp DESC LIMIT 8
SELECT * FROM loaisanpham
SELECT * FROM CTDonHang
SELECT * FROM donhang
SELECT * FROM tintuc
SELECT * FROM taikhoan
SELECT MaDonHang FROM donhang ORDER BY MaDonHang DESC  LIMIT 1
SELECT SanPham.GiaTien FROM SanPham,CTDonHang WHERE SanPham.MaSp = CTDonHang.MaSp
SELECT CTDonHang.MaSp  ,TenSP FROM SanPham, CTDonHang 
WHERE SanPham.MaSp=CTDonHang.MaSp 
GROUP BY TenSP,CTDonHang.MaSp 
HAVING COUNT(CTDonHang.MaSp) >= ALL(SELECT COUNT(CTDonHang.MaSp) FROM CTDonHang,SanPham WHERE SanPham.MaSp=CTDonHang.MaSp GROUP BY CTDonHang.MaSp )taikhoan
INSERT INTO DonHang(TenKH, SDT, DiaChi,SoLuong,TongTien) VALUES ('Phùng Thị Ánh Ngọc','0987663215','Ba Vì','45','120000')
ALTER TABLE tintuc CHANGE  COLUMN  NgayDang  NgayDang timestamp  NOT NULL DEFAULT NOW();
ALTER TABLE DonHang CHANGE  COLUMN  NgayMua  NgayMua timestamp  NOT NULL DEFAULT NOW();

INSERT INTO `ctdonhang`(`MaDonHang`, `MaSp`, `SoLuong`, `Gia`, `GiaTien`) VALUES ('25','3','5','10000','50000')
INSERT INTO `ctdonhang`(`MaDonHang`, `MaSp`, `SoLuong`, `Gia`, `GiaTien`) VALUES ('25','4','10','20000','200000')
INSERT INTO `ctdonhang`(`MaDonHang`, `MaSp`, `SoLuong`, `Gia`, `GiaTien`) VALUES ('25','5','15','30','450000')
INSERT INTO `ctdonhang`(`MaDonHang`, `MaSp`, `SoLuong`, `Gia`, `GiaTien`) VALUES ('30','6','20','250000','25000000')
INSERT INTO `ctdonhang`(`MaDonHang`, `MaSp`, `SoLuong`, `Gia`, `GiaTien`) VALUES ('30','8','25','30000','1200000')
INSERT INTO `ctdonhang`(`MaDonHang`, `MaSp`, `SoLuong`, `Gia`, `GiaTien`) VALUES ('30','9','30','10000','3000000')
INSERT INTO `ctdonhang`(`MaDonHang`, `MaSp`, `SoLuong`, `Gia`, `GiaTien`) VALUES ('31','29','35','100000','3500000')
INSERT INTO `ctdonhang`(`MaDonHang`, `MaSp`, `SoLuong`, `Gia`, `GiaTien`) VALUES ('31','30','7','100000','700000')
INSERT INTO `ctdonhang`(`MaDonHang`, `MaSp`, `SoLuong`, `Gia`, `GiaTien`) VALUES ('31','31','9','100000','900000')
INSERT INTO `ctdonhang`(`MaDonHang`, `MaSp`, `SoLuong`, `Gia`, `GiaTien`) VALUES ('32','32','11','100000','1100000')
INSERT INTO `ctdonhang`(`MaDonHang`, `MaSp`, `SoLuong`, `Gia`, `GiaTien`) VALUES ('32','4','3','10000','30000')
INSERT INTO `ctdonhang`(`MaDonHang`, `MaSp`, `SoLuong`, `Gia`, `GiaTien`) VALUES ('32','9','6','250000','250000000')

INSERT INTO `tintuc`(`TieuDe`, `NoiDung`,`Anh`) VALUES ('Những loại bánh ngọt nổi tiếng trên thế giới','Chesse Cake:
Đây là loại bánh ngọt được làm chủ yếu từ phô mai, tạo vị béo ngậy. Phía trên người ta có thể phủ thêm mứt. Chiếc bánh pho mát kem được làm từ những năm 1800 và trở thành một trong những món bánh quen thuộc của người dân New York.','Chesse2.jpg')

INSERT INTO `tintuc`(`TieuDe`, `NoiDung`,`Anh`) VALUES ('Tiramisu','
Là loại bánh ngọt vô cùng quen thuộc tại Việt Nam nhưng không phải ai cũng biết rõ về chúng. Tiramisu là loại bánh ngọt tráng miệng vị cà phê rất nổi tiếng có nguồn gốc từ Italy. Bánh gồm các lớp bánh quy Savoiardi nhúng cà phê xen kẽ với hỗn hợp trứng, đường, phô mai mascarpone đánh bông, bột cacao. Món bánh này còn có một tên gọi khác, là "thiên đường ở trong miệng", nhằm ca ngợi độ ngon của Tiramisu.','tiramisu-cake.jpg')

INSERT INTO `tintuc`(`TieuDe`, `NoiDung`,`Anh`) VALUES ('50 món tráng miệng ngon nhất thế giới','Alfajores, Nam Mỹ: Bánh quy với đủ loại nhân có thể được tìm thấy trong các tiệm bánh trên khắp Nam Mỹ. Ảnh: Shutterstock.
Apfelstrudel, Áo: Bột strudel truyền thống bọc xung quanh nhân táo ngọt với vụn bánh mì nướng bơ, nho khô và đôi khi cả hạt óc chó. Ảnh: Getty Images.Baklava, Thổ Nhĩ Kỳ: Bánh nhân sirô mật ong và lạc xay, cắt thành miếng hình quả trám và đặt trong các khay lớn. Đây là một di sản ngọt ngào của Đế chế Ottoman. Ảnh: Shutterstock.','spp1.jpg')

INSERT INTO `tintuc`(`TieuDe`, `NoiDung`,`Anh`) VALUES ('10 loại bánh ngọt ngon nhất thế giới','Đây là loại bánh ngọt được làm chủ yếu từ phô mai, tạo vị béo ngậy. Phía trên người ta có thể phủ thêm mứt. Chiếc bánh pho mát kem được làm từ những năm 1800 và trở thành một trong những món bánh quen thuộc của người dân New York.','than.jpg')

INSERT INTO `tintuc`(`TieuDe`, `NoiDung`,`Anh`) VALUES ('20 loại bánh ngọt nhỏ xinh ăn hoài không tăng cân',
'Bánh ngọt vẫn là một sự lựa chọn thường được nghĩ đến mỗi khi ta có thời gian rảnh rỗi hoặc xuất hiện trong các bữa tiệc quan trọng. 
Đừng e ngại vì lo lắng các loại bánh ngọt sẽ khiến bạn tăng cân, nếu bạn có chế độ ăn phù hợp thì 
chuyện này sẽ không xảy ra. Trái Cây Vuông Tròn sẽ bật mí 20 loại bánh ngọt nhỏ xinh mà bạn có thể lựa chọn để thưởng thức hàng tuần bạn nhé.',
'banh-teabre.jpg')

INSERT INTO `phanhoi`(`Ten`, `Email`, `DienThoai`, `TieuDePhanHoi`, `NoiDungPhanHoi`) VALUES ('Đinh Văn Trung','dinhvantrung@gmail.com','0976321478','Cửa hàng tiện lợi','Cửa hàng rất tốt, nhân viên dễ tính tận tình tôi rất thích')