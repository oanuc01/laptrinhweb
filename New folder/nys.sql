





--2
create table Bai_viet(
ma_bv varchar(20) primary key not null,
ten_bv varchar(50) not null,
ngay_dang date,
noi_dung text ,
anh_minh_hoa varchar
)


--3

create table Tai_khoan(
ma_tk varchar(20) primary key,
ten_tk varchar(30) ,
mat_khau varchar(30),
quyen varchar(20),
trang_thai_tk varchar(20),
ghi_chu text,
thoi_gian_tao datetime)


--4
create table Khach_hang(
ma_kh varchar(20) primary key,
ten_kh varchar(30),
email varchar(20),
dic_chi varchar(30),
sdt int,
ma_tk varchar (20),
constraint fk_kh_tk foreign key (ma_tk) references Tai_khoan(ma_tk))


--5
create table Admins
( admin_id int identity primary key,
	ten_ad varchar(30),
	email varchar(20),
	chucvu varchar(15),
	ma_tk varchar(20),
	ma_bv varchar(20),
constraint fk_ad_tk foreign key (ma_tk) references Tai_khoan(ma_tk),
constraint fk_ad_bv foreign key (ma_bv) references Bai_viet(ma_bv)
)

--6
create table Lien_he(
ma_lh varchar(20) primary key not null,
email varchar(20),
ngay_lh date,
noi_dung_lh text,
trang_thai varchar(20),
ma_kh varchar (20),
constraint fk_lh_kh foreign key (ma_kh) references Khach_hang(ma_kh))


--7

create table Binh_luan(
ma_kh varchar(20),
ma_sp varchar(20),
noi_dung_bl text,
thoi_gian datetime
constraint pk_bl primary key (ma_kh,ma_sp),

)




--1
create table Loai_sp(
ma_loai varchar(20) primary key,
ten_loai varchar(30)
)


create table Sanpham(
ma_sp varchar (20) primary key,
ten_sp varchar(50),
so_luong int,
gia_ban float,
mo_ta varchar(25),
anh varchar,
ma_loai varchar(20),
constraint fk_sp_loai foreign key (ma_loai) references Loai_sp(ma_loai)
)


create table Giao_dich(
ma_gd varchar(20) primary key,
ma_kh varchar(20),
ma_sp varchar(20),
so_luong int,
tinh_trang_don varchar(20),
thoi_gian datetime ,
constraint fk_gd_kh foreign key (ma_kh) references Khach_hang(ma_kh),
constraint fk_gd_sp foreign key (ma_sp) references Sanpham(ma_sp))




create table Don_hang(
ma_don_hang varchar(20) primary key,
ngay_ban datetime,
tinh_trang varchar(10),
tong_tien float,
ma_kh varchar(20),
constraint fk_dh_kh foreign key (ma_kh) references Khach_hang(ma_kh))


create table CTDH(
ma_cthd varchar(20) primary key,
ma_don_hang varchar(20) ,	
ma_sp varchar(20),
so_luong int,
thanh_tien float,
constraint fk_ctdh_dh foreign key (ma_don_hang) references Don_hang(ma_don_hang),
constraint fk_ctdh_sp foreign key (ma_sp) references Sanpham(ma_sp))


create table Gio_hang(
ma_gh varchar(20) primary key,
ma_kh varchar(20),
ma_sp varchar(20),
constraint fk_ctdh_kh foreign key (ma_kh) references Khach_hang(ma_kh),
constraint fk_ctdh_sp foreign key (ma_sp) references Sanpham(ma_sp))






