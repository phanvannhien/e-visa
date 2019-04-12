<?php

use Illuminate\Database\Seeder;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = json_decode("{
\"district\": [
	{
		\"maqh\" : 1,
		\"name\" : \"Quận Ba Đình\",
		\"type\" : \"Quận\",
		\"matp\" : 1,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"quan-ba-dinh\"
	},
	{
		\"maqh\" : 2,
		\"name\" : \"Quận Hoàn Kiếm\",
		\"type\" : \"Quận\",
		\"matp\" : 1,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"quan-hoan-kiem\"
	},
	{
		\"maqh\" : 3,
		\"name\" : \"Quận Tây Hồ\",
		\"type\" : \"Quận\",
		\"matp\" : 1,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"quan-tay-ho\"
	},
	{
		\"maqh\" : 4,
		\"name\" : \"Quận Long Biên\",
		\"type\" : \"Quận\",
		\"matp\" : 1,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"quan-long-bien\"
	},
	{
		\"maqh\" : 5,
		\"name\" : \"Quận Cầu Giấy\",
		\"type\" : \"Quận\",
		\"matp\" : 1,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"quan-cau-giay\"
	},
	{
		\"maqh\" : 6,
		\"name\" : \"Quận Đống Đa\",
		\"type\" : \"Quận\",
		\"matp\" : 1,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"quan-dong-da\"
	},
	{
		\"maqh\" : 7,
		\"name\" : \"Quận Hai Bà Trưng\",
		\"type\" : \"Quận\",
		\"matp\" : 1,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"quan-hai-ba-trung\"
	},
	{
		\"maqh\" : 8,
		\"name\" : \"Quận Hoàng Mai\",
		\"type\" : \"Quận\",
		\"matp\" : 1,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"quan-hoang-mai\"
	},
	{
		\"maqh\" : 9,
		\"name\" : \"Quận Thanh Xuân\",
		\"type\" : \"Quận\",
		\"matp\" : 1,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"quan-thanh-xuan\"
	},
	{
		\"maqh\" : 16,
		\"name\" : \"Huyện Sóc Sơn\",
		\"type\" : \"Huyện\",
		\"matp\" : 1,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-soc-son\"
	},
	{
		\"maqh\" : 17,
		\"name\" : \"Huyện Đông Anh\",
		\"type\" : \"Huyện\",
		\"matp\" : 1,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-dong-anh\"
	},
	{
		\"maqh\" : 18,
		\"name\" : \"Huyện Gia Lâm\",
		\"type\" : \"Huyện\",
		\"matp\" : 1,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-gia-lam\"
	},
	{
		\"maqh\" : 19,
		\"name\" : \"Quận Nam Từ Liêm\",
		\"type\" : \"Quận\",
		\"matp\" : 1,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"quan-nam-tu-liem\"
	},
	{
		\"maqh\" : 20,
		\"name\" : \"Huyện Thanh Trì\",
		\"type\" : \"Huyện\",
		\"matp\" : 1,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-thanh-tri\"
	},
	{
		\"maqh\" : 21,
		\"name\" : \"Quận Bắc Từ Liêm\",
		\"type\" : \"Quận\",
		\"matp\" : 1,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"quan-bac-tu-liem\"
	},
	{
		\"maqh\" : 24,
		\"name\" : \"Thành phố Hà Giang\",
		\"type\" : \"Thành phố\",
		\"matp\" : 2,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thanh-pho-ha-giang\"
	},
	{
		\"maqh\" : 26,
		\"name\" : \"Huyện Đồng Văn\",
		\"type\" : \"Huyện\",
		\"matp\" : 2,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-dong-van\"
	},
	{
		\"maqh\" : 27,
		\"name\" : \"Huyện Mèo Vạc\",
		\"type\" : \"Huyện\",
		\"matp\" : 2,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-meo-vac\"
	},
	{
		\"maqh\" : 28,
		\"name\" : \"Huyện Yên Minh\",
		\"type\" : \"Huyện\",
		\"matp\" : 2,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-yen-minh\"
	},
	{
		\"maqh\" : 29,
		\"name\" : \"Huyện Quản Bạ\",
		\"type\" : \"Huyện\",
		\"matp\" : 2,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-quan-ba\"
	},
	{
		\"maqh\" : 30,
		\"name\" : \"Huyện Vị Xuyên\",
		\"type\" : \"Huyện\",
		\"matp\" : 2,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-vi-xuyen\"
	},
	{
		\"maqh\" : 31,
		\"name\" : \"Huyện Bắc Mê\",
		\"type\" : \"Huyện\",
		\"matp\" : 2,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-bac-me\"
	},
	{
		\"maqh\" : 32,
		\"name\" : \"Huyện Hoàng Su Phì\",
		\"type\" : \"Huyện\",
		\"matp\" : 2,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-hoang-su-phi\"
	},
	{
		\"maqh\" : 33,
		\"name\" : \"Huyện Xín Mần\",
		\"type\" : \"Huyện\",
		\"matp\" : 2,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-xin-man\"
	},
	{
		\"maqh\" : 34,
		\"name\" : \"Huyện Bắc Quang\",
		\"type\" : \"Huyện\",
		\"matp\" : 2,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-bac-quang\"
	},
	{
		\"maqh\" : 35,
		\"name\" : \"Huyện Quang Bình\",
		\"type\" : \"Huyện\",
		\"matp\" : 2,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-quang-binh\"
	},
	{
		\"maqh\" : 40,
		\"name\" : \"Thành phố Cao Bằng\",
		\"type\" : \"Thành phố\",
		\"matp\" : 4,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thanh-pho-cao-bang\"
	},
	{
		\"maqh\" : 42,
		\"name\" : \"Huyện Bảo Lâm\",
		\"type\" : \"Huyện\",
		\"matp\" : 4,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-bao-lam\"
	},
	{
		\"maqh\" : 43,
		\"name\" : \"Huyện Bảo Lạc\",
		\"type\" : \"Huyện\",
		\"matp\" : 4,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-bao-lac\"
	},
	{
		\"maqh\" : 44,
		\"name\" : \"Huyện Thông Nông\",
		\"type\" : \"Huyện\",
		\"matp\" : 4,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-thong-nong\"
	},
	{
		\"maqh\" : 45,
		\"name\" : \"Huyện Hà Quảng\",
		\"type\" : \"Huyện\",
		\"matp\" : 4,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-ha-quang\"
	},
	{
		\"maqh\" : 46,
		\"name\" : \"Huyện Trà Lĩnh\",
		\"type\" : \"Huyện\",
		\"matp\" : 4,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-tra-linh\"
	},
	{
		\"maqh\" : 47,
		\"name\" : \"Huyện Trùng Khánh\",
		\"type\" : \"Huyện\",
		\"matp\" : 4,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-trung-khanh\"
	},
	{
		\"maqh\" : 48,
		\"name\" : \"Huyện Hạ Lang\",
		\"type\" : \"Huyện\",
		\"matp\" : 4,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-ha-lang\"
	},
	{
		\"maqh\" : 49,
		\"name\" : \"Huyện Quảng Uyên\",
		\"type\" : \"Huyện\",
		\"matp\" : 4,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-quang-uyen\"
	},
	{
		\"maqh\" : 50,
		\"name\" : \"Huyện Phục Hoà\",
		\"type\" : \"Huyện\",
		\"matp\" : 4,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-phuc-hoa\"
	},
	{
		\"maqh\" : 51,
		\"name\" : \"Huyện Hoà An\",
		\"type\" : \"Huyện\",
		\"matp\" : 4,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-hoa-an\"
	},
	{
		\"maqh\" : 52,
		\"name\" : \"Huyện Nguyên Bình\",
		\"type\" : \"Huyện\",
		\"matp\" : 4,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-nguyen-binh\"
	},
	{
		\"maqh\" : 53,
		\"name\" : \"Huyện Thạch An\",
		\"type\" : \"Huyện\",
		\"matp\" : 4,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-thach-an\"
	},
	{
		\"maqh\" : 58,
		\"name\" : \"Thành Phố Bắc Kạn\",
		\"type\" : \"Thành phố\",
		\"matp\" : 6,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thanh-pho-bac-kan\"
	},
	{
		\"maqh\" : 60,
		\"name\" : \"Huyện Pác Nặm\",
		\"type\" : \"Huyện\",
		\"matp\" : 6,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-pac-nam\"
	},
	{
		\"maqh\" : 61,
		\"name\" : \"Huyện Ba Bể\",
		\"type\" : \"Huyện\",
		\"matp\" : 6,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-ba-be\"
	},
	{
		\"maqh\" : 62,
		\"name\" : \"Huyện Ngân Sơn\",
		\"type\" : \"Huyện\",
		\"matp\" : 6,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-ngan-son\"
	},
	{
		\"maqh\" : 63,
		\"name\" : \"Huyện Bạch Thông\",
		\"type\" : \"Huyện\",
		\"matp\" : 6,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-bach-thong\"
	},
	{
		\"maqh\" : 64,
		\"name\" : \"Huyện Chợ Đồn\",
		\"type\" : \"Huyện\",
		\"matp\" : 6,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-cho-don\"
	},
	{
		\"maqh\" : 65,
		\"name\" : \"Huyện Chợ Mới\",
		\"type\" : \"Huyện\",
		\"matp\" : 6,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-cho-moi\"
	},
	{
		\"maqh\" : 66,
		\"name\" : \"Huyện Na Rì\",
		\"type\" : \"Huyện\",
		\"matp\" : 6,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-na-ri\"
	},
	{
		\"maqh\" : 70,
		\"name\" : \"Thành phố Tuyên Quang\",
		\"type\" : \"Thành phố\",
		\"matp\" : 8,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thanh-pho-tuyen-quang\"
	},
	{
		\"maqh\" : 71,
		\"name\" : \"Huyện Lâm Bình\",
		\"type\" : \"Huyện\",
		\"matp\" : 8,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-lam-binh\"
	},
	{
		\"maqh\" : 72,
		\"name\" : \"Huyện Nà Hang\",
		\"type\" : \"Huyện\",
		\"matp\" : 8,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-na-hang\"
	},
	{
		\"maqh\" : 73,
		\"name\" : \"Huyện Chiêm Hóa\",
		\"type\" : \"Huyện\",
		\"matp\" : 8,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-chiem-hoa\"
	},
	{
		\"maqh\" : 74,
		\"name\" : \"Huyện Hàm Yên\",
		\"type\" : \"Huyện\",
		\"matp\" : 8,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-ham-yen\"
	},
	{
		\"maqh\" : 75,
		\"name\" : \"Huyện Yên Sơn\",
		\"type\" : \"Huyện\",
		\"matp\" : 8,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-yen-son\"
	},
	{
		\"maqh\" : 76,
		\"name\" : \"Huyện Sơn Dương\",
		\"type\" : \"Huyện\",
		\"matp\" : 8,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-son-duong\"
	},
	{
		\"maqh\" : 80,
		\"name\" : \"Thành phố Lào Cai\",
		\"type\" : \"Thành phố\",
		\"matp\" : 10,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thanh-pho-lao-cai\"
	},
	{
		\"maqh\" : 82,
		\"name\" : \"Huyện Bát Xát\",
		\"type\" : \"Huyện\",
		\"matp\" : 10,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-bat-xat\"
	},
	{
		\"maqh\" : 83,
		\"name\" : \"Huyện Mường Khương\",
		\"type\" : \"Huyện\",
		\"matp\" : 10,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-muong-khuong\"
	},
	{
		\"maqh\" : 84,
		\"name\" : \"Huyện Si Ma Cai\",
		\"type\" : \"Huyện\",
		\"matp\" : 10,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-si-ma-cai\"
	},
	{
		\"maqh\" : 85,
		\"name\" : \"Huyện Bắc Hà\",
		\"type\" : \"Huyện\",
		\"matp\" : 10,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-bac-ha\"
	},
	{
		\"maqh\" : 86,
		\"name\" : \"Huyện Bảo Thắng\",
		\"type\" : \"Huyện\",
		\"matp\" : 10,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-bao-thang\"
	},
	{
		\"maqh\" : 87,
		\"name\" : \"Huyện Bảo Yên\",
		\"type\" : \"Huyện\",
		\"matp\" : 10,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-bao-yen\"
	},
	{
		\"maqh\" : 88,
		\"name\" : \"Huyện Sa Pa\",
		\"type\" : \"Huyện\",
		\"matp\" : 10,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-sa-pa\"
	},
	{
		\"maqh\" : 89,
		\"name\" : \"Huyện Văn Bàn\",
		\"type\" : \"Huyện\",
		\"matp\" : 10,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-van-ban\"
	},
	{
		\"maqh\" : 94,
		\"name\" : \"Thành phố Điện Biên Phủ\",
		\"type\" : \"Thành phố\",
		\"matp\" : 11,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thanh-pho-dien-bien-phu\"
	},
	{
		\"maqh\" : 95,
		\"name\" : \"Thị Xã Mường Lay\",
		\"type\" : \"Thị xã\",
		\"matp\" : 11,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thi-xa-muong-lay\"
	},
	{
		\"maqh\" : 96,
		\"name\" : \"Huyện Mường Nhé\",
		\"type\" : \"Huyện\",
		\"matp\" : 11,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-muong-nhe\"
	},
	{
		\"maqh\" : 97,
		\"name\" : \"Huyện Mường Chà\",
		\"type\" : \"Huyện\",
		\"matp\" : 11,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-muong-cha\"
	},
	{
		\"maqh\" : 98,
		\"name\" : \"Huyện Tủa Chùa\",
		\"type\" : \"Huyện\",
		\"matp\" : 11,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-tua-chua\"
	},
	{
		\"maqh\" : 99,
		\"name\" : \"Huyện Tuần Giáo\",
		\"type\" : \"Huyện\",
		\"matp\" : 11,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-tuan-giao\"
	},
	{
		\"maqh\" : 100,
		\"name\" : \"Huyện Điện Biên\",
		\"type\" : \"Huyện\",
		\"matp\" : 11,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-dien-bien\"
	},
	{
		\"maqh\" : 101,
		\"name\" : \"Huyện Điện Biên Đông\",
		\"type\" : \"Huyện\",
		\"matp\" : 11,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-dien-bien-dong\"
	},
	{
		\"maqh\" : 102,
		\"name\" : \"Huyện Mường Ảng\",
		\"type\" : \"Huyện\",
		\"matp\" : 11,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-muong-ang\"
	},
	{
		\"maqh\" : 103,
		\"name\" : \"Huyện Nậm Pồ\",
		\"type\" : \"Huyện\",
		\"matp\" : 11,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-nam-po\"
	},
	{
		\"maqh\" : 105,
		\"name\" : \"Thành phố Lai Châu\",
		\"type\" : \"Thành phố\",
		\"matp\" : 12,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thanh-pho-lai-chau\"
	},
	{
		\"maqh\" : 106,
		\"name\" : \"Huyện Tam Đường\",
		\"type\" : \"Huyện\",
		\"matp\" : 12,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-tam-duong\"
	},
	{
		\"maqh\" : 107,
		\"name\" : \"Huyện Mường Tè\",
		\"type\" : \"Huyện\",
		\"matp\" : 12,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-muong-te\"
	},
	{
		\"maqh\" : 108,
		\"name\" : \"Huyện Sìn Hồ\",
		\"type\" : \"Huyện\",
		\"matp\" : 12,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-sin-ho\"
	},
	{
		\"maqh\" : 109,
		\"name\" : \"Huyện Phong Thổ\",
		\"type\" : \"Huyện\",
		\"matp\" : 12,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-phong-tho\"
	},
	{
		\"maqh\" : 110,
		\"name\" : \"Huyện Than Uyên\",
		\"type\" : \"Huyện\",
		\"matp\" : 12,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-than-uyen\"
	},
	{
		\"maqh\" : 111,
		\"name\" : \"Huyện Tân Uyên\",
		\"type\" : \"Huyện\",
		\"matp\" : 12,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-tan-uyen\"
	},
	{
		\"maqh\" : 112,
		\"name\" : \"Huyện Nậm Nhùn\",
		\"type\" : \"Huyện\",
		\"matp\" : 12,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-nam-nhun\"
	},
	{
		\"maqh\" : 116,
		\"name\" : \"Thành phố Sơn La\",
		\"type\" : \"Thành phố\",
		\"matp\" : 14,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thanh-pho-son-la\"
	},
	{
		\"maqh\" : 118,
		\"name\" : \"Huyện Quỳnh Nhai\",
		\"type\" : \"Huyện\",
		\"matp\" : 14,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-quynh-nhai\"
	},
	{
		\"maqh\" : 119,
		\"name\" : \"Huyện Thuận Châu\",
		\"type\" : \"Huyện\",
		\"matp\" : 14,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-thuan-chau\"
	},
	{
		\"maqh\" : 120,
		\"name\" : \"Huyện Mường La\",
		\"type\" : \"Huyện\",
		\"matp\" : 14,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-muong-la\"
	},
	{
		\"maqh\" : 121,
		\"name\" : \"Huyện Bắc Yên\",
		\"type\" : \"Huyện\",
		\"matp\" : 14,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-bac-yen\"
	},
	{
		\"maqh\" : 122,
		\"name\" : \"Huyện Phù Yên\",
		\"type\" : \"Huyện\",
		\"matp\" : 14,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-phu-yen\"
	},
	{
		\"maqh\" : 123,
		\"name\" : \"Huyện Mộc Châu\",
		\"type\" : \"Huyện\",
		\"matp\" : 14,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-moc-chau\"
	},
	{
		\"maqh\" : 124,
		\"name\" : \"Huyện Yên Châu\",
		\"type\" : \"Huyện\",
		\"matp\" : 14,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-yen-chau\"
	},
	{
		\"maqh\" : 125,
		\"name\" : \"Huyện Mai Sơn\",
		\"type\" : \"Huyện\",
		\"matp\" : 14,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-mai-son\"
	},
	{
		\"maqh\" : 126,
		\"name\" : \"Huyện Sông Mã\",
		\"type\" : \"Huyện\",
		\"matp\" : 14,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-song-ma\"
	},
	{
		\"maqh\" : 127,
		\"name\" : \"Huyện Sốp Cộp\",
		\"type\" : \"Huyện\",
		\"matp\" : 14,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-sop-cop\"
	},
	{
		\"maqh\" : 128,
		\"name\" : \"Huyện Vân Hồ\",
		\"type\" : \"Huyện\",
		\"matp\" : 14,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-van-ho\"
	},
	{
		\"maqh\" : 132,
		\"name\" : \"Thành phố Yên Bái\",
		\"type\" : \"Thành phố\",
		\"matp\" : 15,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thanh-pho-yen-bai\"
	},
	{
		\"maqh\" : 133,
		\"name\" : \"Thị xã Nghĩa Lộ\",
		\"type\" : \"Thị xã\",
		\"matp\" : 15,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thi-xa-nghia-lo\"
	},
	{
		\"maqh\" : 135,
		\"name\" : \"Huyện Lục Yên\",
		\"type\" : \"Huyện\",
		\"matp\" : 15,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-luc-yen\"
	},
	{
		\"maqh\" : 136,
		\"name\" : \"Huyện Văn Yên\",
		\"type\" : \"Huyện\",
		\"matp\" : 15,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-van-yen\"
	},
	{
		\"maqh\" : 137,
		\"name\" : \"Huyện Mù Căng Chải\",
		\"type\" : \"Huyện\",
		\"matp\" : 15,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-mu-cang-chai\"
	},
	{
		\"maqh\" : 138,
		\"name\" : \"Huyện Trấn Yên\",
		\"type\" : \"Huyện\",
		\"matp\" : 15,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-tran-yen\"
	},
	{
		\"maqh\" : 139,
		\"name\" : \"Huyện Trạm Tấu\",
		\"type\" : \"Huyện\",
		\"matp\" : 15,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-tram-tau\"
	},
	{
		\"maqh\" : 140,
		\"name\" : \"Huyện Văn Chấn\",
		\"type\" : \"Huyện\",
		\"matp\" : 15,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-van-chan\"
	},
	{
		\"maqh\" : 141,
		\"name\" : \"Huyện Yên Bình\",
		\"type\" : \"Huyện\",
		\"matp\" : 15,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-yen-binh\"
	},
	{
		\"maqh\" : 148,
		\"name\" : \"Thành phố Hòa Bình\",
		\"type\" : \"Thành phố\",
		\"matp\" : 17,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thanh-pho-hoa-binh\"
	},
	{
		\"maqh\" : 150,
		\"name\" : \"Huyện Đà Bắc\",
		\"type\" : \"Huyện\",
		\"matp\" : 17,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-da-bac\"
	},
	{
		\"maqh\" : 151,
		\"name\" : \"Huyện Kỳ Sơn\",
		\"type\" : \"Huyện\",
		\"matp\" : 17,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-ky-son\"
	},
	{
		\"maqh\" : 152,
		\"name\" : \"Huyện Lương Sơn\",
		\"type\" : \"Huyện\",
		\"matp\" : 17,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-luong-son\"
	},
	{
		\"maqh\" : 153,
		\"name\" : \"Huyện Kim Bôi\",
		\"type\" : \"Huyện\",
		\"matp\" : 17,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-kim-boi\"
	},
	{
		\"maqh\" : 154,
		\"name\" : \"Huyện Cao Phong\",
		\"type\" : \"Huyện\",
		\"matp\" : 17,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-cao-phong\"
	},
	{
		\"maqh\" : 155,
		\"name\" : \"Huyện Tân Lạc\",
		\"type\" : \"Huyện\",
		\"matp\" : 17,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-tan-lac\"
	},
	{
		\"maqh\" : 156,
		\"name\" : \"Huyện Mai Châu\",
		\"type\" : \"Huyện\",
		\"matp\" : 17,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-mai-chau\"
	},
	{
		\"maqh\" : 157,
		\"name\" : \"Huyện Lạc Sơn\",
		\"type\" : \"Huyện\",
		\"matp\" : 17,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-lac-son\"
	},
	{
		\"maqh\" : 158,
		\"name\" : \"Huyện Yên Thủy\",
		\"type\" : \"Huyện\",
		\"matp\" : 17,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-yen-thuy\"
	},
	{
		\"maqh\" : 159,
		\"name\" : \"Huyện Lạc Thủy\",
		\"type\" : \"Huyện\",
		\"matp\" : 17,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-lac-thuy\"
	},
	{
		\"maqh\" : 164,
		\"name\" : \"Thành phố Thái Nguyên\",
		\"type\" : \"Thành phố\",
		\"matp\" : 19,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thanh-pho-thai-nguyen\"
	},
	{
		\"maqh\" : 165,
		\"name\" : \"Thành phố Sông Công\",
		\"type\" : \"Thành phố\",
		\"matp\" : 19,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thanh-pho-song-cong\"
	},
	{
		\"maqh\" : 167,
		\"name\" : \"Huyện Định Hóa\",
		\"type\" : \"Huyện\",
		\"matp\" : 19,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-dinh-hoa\"
	},
	{
		\"maqh\" : 168,
		\"name\" : \"Huyện Phú Lương\",
		\"type\" : \"Huyện\",
		\"matp\" : 19,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-phu-luong\"
	},
	{
		\"maqh\" : 169,
		\"name\" : \"Huyện Đồng Hỷ\",
		\"type\" : \"Huyện\",
		\"matp\" : 19,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-dong-hy\"
	},
	{
		\"maqh\" : 170,
		\"name\" : \"Huyện Võ Nhai\",
		\"type\" : \"Huyện\",
		\"matp\" : 19,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-vo-nhai\"
	},
	{
		\"maqh\" : 171,
		\"name\" : \"Huyện Đại Từ\",
		\"type\" : \"Huyện\",
		\"matp\" : 19,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-dai-tu\"
	},
	{
		\"maqh\" : 172,
		\"name\" : \"Thị xã Phổ Yên\",
		\"type\" : \"Thị xã\",
		\"matp\" : 19,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thi-xa-pho-yen\"
	},
	{
		\"maqh\" : 173,
		\"name\" : \"Huyện Phú Bình\",
		\"type\" : \"Huyện\",
		\"matp\" : 19,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-phu-binh\"
	},
	{
		\"maqh\" : 178,
		\"name\" : \"Thành phố Lạng Sơn\",
		\"type\" : \"Thành phố\",
		\"matp\" : 20,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thanh-pho-lang-son\"
	},
	{
		\"maqh\" : 180,
		\"name\" : \"Huyện Tràng Định\",
		\"type\" : \"Huyện\",
		\"matp\" : 20,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-trang-dinh\"
	},
	{
		\"maqh\" : 181,
		\"name\" : \"Huyện Bình Gia\",
		\"type\" : \"Huyện\",
		\"matp\" : 20,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-binh-gia\"
	},
	{
		\"maqh\" : 182,
		\"name\" : \"Huyện Văn Lãng\",
		\"type\" : \"Huyện\",
		\"matp\" : 20,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-van-lang\"
	},
	{
		\"maqh\" : 183,
		\"name\" : \"Huyện Cao Lộc\",
		\"type\" : \"Huyện\",
		\"matp\" : 20,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-cao-loc\"
	},
	{
		\"maqh\" : 184,
		\"name\" : \"Huyện Văn Quan\",
		\"type\" : \"Huyện\",
		\"matp\" : 20,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-van-quan\"
	},
	{
		\"maqh\" : 185,
		\"name\" : \"Huyện Bắc Sơn\",
		\"type\" : \"Huyện\",
		\"matp\" : 20,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-bac-son\"
	},
	{
		\"maqh\" : 186,
		\"name\" : \"Huyện Hữu Lũng\",
		\"type\" : \"Huyện\",
		\"matp\" : 20,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-huu-lung\"
	},
	{
		\"maqh\" : 187,
		\"name\" : \"Huyện Chi Lăng\",
		\"type\" : \"Huyện\",
		\"matp\" : 20,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-chi-lang\"
	},
	{
		\"maqh\" : 188,
		\"name\" : \"Huyện Lộc Bình\",
		\"type\" : \"Huyện\",
		\"matp\" : 20,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-loc-binh\"
	},
	{
		\"maqh\" : 189,
		\"name\" : \"Huyện Đình Lập\",
		\"type\" : \"Huyện\",
		\"matp\" : 20,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-dinh-lap\"
	},
	{
		\"maqh\" : 193,
		\"name\" : \"Thành phố Hạ Long\",
		\"type\" : \"Thành phố\",
		\"matp\" : 22,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thanh-pho-ha-long\"
	},
	{
		\"maqh\" : 194,
		\"name\" : \"Thành phố Móng Cái\",
		\"type\" : \"Thành phố\",
		\"matp\" : 22,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thanh-pho-mong-cai\"
	},
	{
		\"maqh\" : 195,
		\"name\" : \"Thành phố Cẩm Phả\",
		\"type\" : \"Thành phố\",
		\"matp\" : 22,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thanh-pho-cam-pha\"
	},
	{
		\"maqh\" : 196,
		\"name\" : \"Thành phố Uông Bí\",
		\"type\" : \"Thành phố\",
		\"matp\" : 22,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thanh-pho-uong-bi\"
	},
	{
		\"maqh\" : 198,
		\"name\" : \"Huyện Bình Liêu\",
		\"type\" : \"Huyện\",
		\"matp\" : 22,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-binh-lieu\"
	},
	{
		\"maqh\" : 199,
		\"name\" : \"Huyện Tiên Yên\",
		\"type\" : \"Huyện\",
		\"matp\" : 22,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-tien-yen\"
	},
	{
		\"maqh\" : 200,
		\"name\" : \"Huyện Đầm Hà\",
		\"type\" : \"Huyện\",
		\"matp\" : 22,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-dam-ha\"
	},
	{
		\"maqh\" : 201,
		\"name\" : \"Huyện Hải Hà\",
		\"type\" : \"Huyện\",
		\"matp\" : 22,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-hai-ha\"
	},
	{
		\"maqh\" : 202,
		\"name\" : \"Huyện Ba Chẽ\",
		\"type\" : \"Huyện\",
		\"matp\" : 22,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-ba-che\"
	},
	{
		\"maqh\" : 203,
		\"name\" : \"Huyện Vân Đồn\",
		\"type\" : \"Huyện\",
		\"matp\" : 22,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-van-don\"
	},
	{
		\"maqh\" : 204,
		\"name\" : \"Huyện Hoành Bồ\",
		\"type\" : \"Huyện\",
		\"matp\" : 22,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-hoanh-bo\"
	},
	{
		\"maqh\" : 205,
		\"name\" : \"Thị xã Đông Triều\",
		\"type\" : \"Thị xã\",
		\"matp\" : 22,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thi-xa-dong-trieu\"
	},
	{
		\"maqh\" : 206,
		\"name\" : \"Thị xã Quảng Yên\",
		\"type\" : \"Thị xã\",
		\"matp\" : 22,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thi-xa-quang-yen\"
	},
	{
		\"maqh\" : 207,
		\"name\" : \"Huyện Cô Tô\",
		\"type\" : \"Huyện\",
		\"matp\" : 22,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-co-to\"
	},
	{
		\"maqh\" : 213,
		\"name\" : \"Thành phố Bắc Giang\",
		\"type\" : \"Thành phố\",
		\"matp\" : 24,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thanh-pho-bac-giang\"
	},
	{
		\"maqh\" : 215,
		\"name\" : \"Huyện Yên Thế\",
		\"type\" : \"Huyện\",
		\"matp\" : 24,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-yen-the\"
	},
	{
		\"maqh\" : 216,
		\"name\" : \"Huyện Tân Yên\",
		\"type\" : \"Huyện\",
		\"matp\" : 24,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-tan-yen\"
	},
	{
		\"maqh\" : 217,
		\"name\" : \"Huyện Lạng Giang\",
		\"type\" : \"Huyện\",
		\"matp\" : 24,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-lang-giang\"
	},
	{
		\"maqh\" : 218,
		\"name\" : \"Huyện Lục Nam\",
		\"type\" : \"Huyện\",
		\"matp\" : 24,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-luc-nam\"
	},
	{
		\"maqh\" : 219,
		\"name\" : \"Huyện Lục Ngạn\",
		\"type\" : \"Huyện\",
		\"matp\" : 24,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-luc-ngan\"
	},
	{
		\"maqh\" : 220,
		\"name\" : \"Huyện Sơn Động\",
		\"type\" : \"Huyện\",
		\"matp\" : 24,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-son-dong\"
	},
	{
		\"maqh\" : 221,
		\"name\" : \"Huyện Yên Dũng\",
		\"type\" : \"Huyện\",
		\"matp\" : 24,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-yen-dung\"
	},
	{
		\"maqh\" : 222,
		\"name\" : \"Huyện Việt Yên\",
		\"type\" : \"Huyện\",
		\"matp\" : 24,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-viet-yen\"
	},
	{
		\"maqh\" : 223,
		\"name\" : \"Huyện Hiệp Hòa\",
		\"type\" : \"Huyện\",
		\"matp\" : 24,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-hiep-hoa\"
	},
	{
		\"maqh\" : 227,
		\"name\" : \"Thành phố Việt Trì\",
		\"type\" : \"Thành phố\",
		\"matp\" : 25,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thanh-pho-viet-tri\"
	},
	{
		\"maqh\" : 228,
		\"name\" : \"Thị xã Phú Thọ\",
		\"type\" : \"Thị xã\",
		\"matp\" : 25,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thi-xa-phu-tho\"
	},
	{
		\"maqh\" : 230,
		\"name\" : \"Huyện Đoan Hùng\",
		\"type\" : \"Huyện\",
		\"matp\" : 25,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-doan-hung\"
	},
	{
		\"maqh\" : 231,
		\"name\" : \"Huyện Hạ Hoà\",
		\"type\" : \"Huyện\",
		\"matp\" : 25,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-ha-hoa\"
	},
	{
		\"maqh\" : 232,
		\"name\" : \"Huyện Thanh Ba\",
		\"type\" : \"Huyện\",
		\"matp\" : 25,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-thanh-ba\"
	},
	{
		\"maqh\" : 233,
		\"name\" : \"Huyện Phù Ninh\",
		\"type\" : \"Huyện\",
		\"matp\" : 25,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-phu-ninh\"
	},
	{
		\"maqh\" : 234,
		\"name\" : \"Huyện Yên Lập\",
		\"type\" : \"Huyện\",
		\"matp\" : 25,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-yen-lap\"
	},
	{
		\"maqh\" : 235,
		\"name\" : \"Huyện Cẩm Khê\",
		\"type\" : \"Huyện\",
		\"matp\" : 25,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-cam-khe\"
	},
	{
		\"maqh\" : 236,
		\"name\" : \"Huyện Tam Nông\",
		\"type\" : \"Huyện\",
		\"matp\" : 25,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-tam-nong\"
	},
	{
		\"maqh\" : 237,
		\"name\" : \"Huyện Lâm Thao\",
		\"type\" : \"Huyện\",
		\"matp\" : 25,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-lam-thao\"
	},
	{
		\"maqh\" : 238,
		\"name\" : \"Huyện Thanh Sơn\",
		\"type\" : \"Huyện\",
		\"matp\" : 25,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-thanh-son\"
	},
	{
		\"maqh\" : 239,
		\"name\" : \"Huyện Thanh Thuỷ\",
		\"type\" : \"Huyện\",
		\"matp\" : 25,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-thanh-thuy\"
	},
	{
		\"maqh\" : 240,
		\"name\" : \"Huyện Tân Sơn\",
		\"type\" : \"Huyện\",
		\"matp\" : 25,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-tan-son\"
	},
	{
		\"maqh\" : 243,
		\"name\" : \"Thành phố Vĩnh Yên\",
		\"type\" : \"Thành phố\",
		\"matp\" : 26,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thanh-pho-vinh-yen\"
	},
	{
		\"maqh\" : 244,
		\"name\" : \"Thị xã Phúc Yên\",
		\"type\" : \"Thị xã\",
		\"matp\" : 26,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thi-xa-phuc-yen\"
	},
	{
		\"maqh\" : 246,
		\"name\" : \"Huyện Lập Thạch\",
		\"type\" : \"Huyện\",
		\"matp\" : 26,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-lap-thach\"
	},
	{
		\"maqh\" : 247,
		\"name\" : \"Huyện Tam Dương\",
		\"type\" : \"Huyện\",
		\"matp\" : 26,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-tam-duong\"
	},
	{
		\"maqh\" : 248,
		\"name\" : \"Huyện Tam Đảo\",
		\"type\" : \"Huyện\",
		\"matp\" : 26,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-tam-dao\"
	},
	{
		\"maqh\" : 249,
		\"name\" : \"Huyện Bình Xuyên\",
		\"type\" : \"Huyện\",
		\"matp\" : 26,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-binh-xuyen\"
	},
	{
		\"maqh\" : 250,
		\"name\" : \"Huyện Mê Linh\",
		\"type\" : \"Huyện\",
		\"matp\" : 1,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-me-linh\"
	},
	{
		\"maqh\" : 251,
		\"name\" : \"Huyện Yên Lạc\",
		\"type\" : \"Huyện\",
		\"matp\" : 26,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-yen-lac\"
	},
	{
		\"maqh\" : 252,
		\"name\" : \"Huyện Vĩnh Tường\",
		\"type\" : \"Huyện\",
		\"matp\" : 26,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-vinh-tuong\"
	},
	{
		\"maqh\" : 253,
		\"name\" : \"Huyện Sông Lô\",
		\"type\" : \"Huyện\",
		\"matp\" : 26,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-song-lo\"
	},
	{
		\"maqh\" : 256,
		\"name\" : \"Thành phố Bắc Ninh\",
		\"type\" : \"Thành phố\",
		\"matp\" : 27,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thanh-pho-bac-ninh\"
	},
	{
		\"maqh\" : 258,
		\"name\" : \"Huyện Yên Phong\",
		\"type\" : \"Huyện\",
		\"matp\" : 27,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-yen-phong\"
	},
	{
		\"maqh\" : 259,
		\"name\" : \"Huyện Quế Võ\",
		\"type\" : \"Huyện\",
		\"matp\" : 27,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-que-vo\"
	},
	{
		\"maqh\" : 260,
		\"name\" : \"Huyện Tiên Du\",
		\"type\" : \"Huyện\",
		\"matp\" : 27,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-tien-du\"
	},
	{
		\"maqh\" : 261,
		\"name\" : \"Thị xã Từ Sơn\",
		\"type\" : \"Thị xã\",
		\"matp\" : 27,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thi-xa-tu-son\"
	},
	{
		\"maqh\" : 262,
		\"name\" : \"Huyện Thuận Thành\",
		\"type\" : \"Huyện\",
		\"matp\" : 27,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-thuan-thanh\"
	},
	{
		\"maqh\" : 263,
		\"name\" : \"Huyện Gia Bình\",
		\"type\" : \"Huyện\",
		\"matp\" : 27,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-gia-binh\"
	},
	{
		\"maqh\" : 264,
		\"name\" : \"Huyện Lương Tài\",
		\"type\" : \"Huyện\",
		\"matp\" : 27,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-luong-tai\"
	},
	{
		\"maqh\" : 268,
		\"name\" : \"Quận Hà Đông\",
		\"type\" : \"Quận\",
		\"matp\" : 1,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"quan-ha-dong\"
	},
	{
		\"maqh\" : 269,
		\"name\" : \"Thị xã Sơn Tây\",
		\"type\" : \"Thị xã\",
		\"matp\" : 1,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thi-xa-son-tay\"
	},
	{
		\"maqh\" : 271,
		\"name\" : \"Huyện Ba Vì\",
		\"type\" : \"Huyện\",
		\"matp\" : 1,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-ba-vi\"
	},
	{
		\"maqh\" : 272,
		\"name\" : \"Huyện Phúc Thọ\",
		\"type\" : \"Huyện\",
		\"matp\" : 1,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-phuc-tho\"
	},
	{
		\"maqh\" : 273,
		\"name\" : \"Huyện Đan Phượng\",
		\"type\" : \"Huyện\",
		\"matp\" : 1,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-dan-phuong\"
	},
	{
		\"maqh\" : 274,
		\"name\" : \"Huyện Hoài Đức\",
		\"type\" : \"Huyện\",
		\"matp\" : 1,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-hoai-duc\"
	},
	{
		\"maqh\" : 275,
		\"name\" : \"Huyện Quốc Oai\",
		\"type\" : \"Huyện\",
		\"matp\" : 1,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-quoc-oai\"
	},
	{
		\"maqh\" : 276,
		\"name\" : \"Huyện Thạch Thất\",
		\"type\" : \"Huyện\",
		\"matp\" : 1,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-thach-that\"
	},
	{
		\"maqh\" : 277,
		\"name\" : \"Huyện Chương Mỹ\",
		\"type\" : \"Huyện\",
		\"matp\" : 1,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-chuong-my\"
	},
	{
		\"maqh\" : 278,
		\"name\" : \"Huyện Thanh Oai\",
		\"type\" : \"Huyện\",
		\"matp\" : 1,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-thanh-oai\"
	},
	{
		\"maqh\" : 279,
		\"name\" : \"Huyện Thường Tín\",
		\"type\" : \"Huyện\",
		\"matp\" : 1,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-thuong-tin\"
	},
	{
		\"maqh\" : 280,
		\"name\" : \"Huyện Phú Xuyên\",
		\"type\" : \"Huyện\",
		\"matp\" : 1,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-phu-xuyen\"
	},
	{
		\"maqh\" : 281,
		\"name\" : \"Huyện Ứng Hòa\",
		\"type\" : \"Huyện\",
		\"matp\" : 1,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-ung-hoa\"
	},
	{
		\"maqh\" : 282,
		\"name\" : \"Huyện Mỹ Đức\",
		\"type\" : \"Huyện\",
		\"matp\" : 1,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-my-duc\"
	},
	{
		\"maqh\" : 288,
		\"name\" : \"Thành phố Hải Dương\",
		\"type\" : \"Thành phố\",
		\"matp\" : 30,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thanh-pho-hai-duong\"
	},
	{
		\"maqh\" : 290,
		\"name\" : \"Thị xã Chí Linh\",
		\"type\" : \"Thị xã\",
		\"matp\" : 30,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thi-xa-chi-linh\"
	},
	{
		\"maqh\" : 291,
		\"name\" : \"Huyện Nam Sách\",
		\"type\" : \"Huyện\",
		\"matp\" : 30,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-nam-sach\"
	},
	{
		\"maqh\" : 292,
		\"name\" : \"Huyện Kinh Môn\",
		\"type\" : \"Huyện\",
		\"matp\" : 30,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-kinh-mon\"
	},
	{
		\"maqh\" : 293,
		\"name\" : \"Huyện Kim Thành\",
		\"type\" : \"Huyện\",
		\"matp\" : 30,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-kim-thanh\"
	},
	{
		\"maqh\" : 294,
		\"name\" : \"Huyện Thanh Hà\",
		\"type\" : \"Huyện\",
		\"matp\" : 30,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-thanh-ha\"
	},
	{
		\"maqh\" : 295,
		\"name\" : \"Huyện Cẩm Giàng\",
		\"type\" : \"Huyện\",
		\"matp\" : 30,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-cam-giang\"
	},
	{
		\"maqh\" : 296,
		\"name\" : \"Huyện Bình Giang\",
		\"type\" : \"Huyện\",
		\"matp\" : 30,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-binh-giang\"
	},
	{
		\"maqh\" : 297,
		\"name\" : \"Huyện Gia Lộc\",
		\"type\" : \"Huyện\",
		\"matp\" : 30,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-gia-loc\"
	},
	{
		\"maqh\" : 298,
		\"name\" : \"Huyện Tứ Kỳ\",
		\"type\" : \"Huyện\",
		\"matp\" : 30,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-tu-ky\"
	},
	{
		\"maqh\" : 299,
		\"name\" : \"Huyện Ninh Giang\",
		\"type\" : \"Huyện\",
		\"matp\" : 30,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-ninh-giang\"
	},
	{
		\"maqh\" : 300,
		\"name\" : \"Huyện Thanh Miện\",
		\"type\" : \"Huyện\",
		\"matp\" : 30,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-thanh-mien\"
	},
	{
		\"maqh\" : 303,
		\"name\" : \"Quận Hồng Bàng\",
		\"type\" : \"Quận\",
		\"matp\" : 31,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"quan-hong-bang\"
	},
	{
		\"maqh\" : 304,
		\"name\" : \"Quận Ngô Quyền\",
		\"type\" : \"Quận\",
		\"matp\" : 31,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"quan-ngo-quyen\"
	},
	{
		\"maqh\" : 305,
		\"name\" : \"Quận Lê Chân\",
		\"type\" : \"Quận\",
		\"matp\" : 31,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"quan-le-chan\"
	},
	{
		\"maqh\" : 306,
		\"name\" : \"Quận Hải An\",
		\"type\" : \"Quận\",
		\"matp\" : 31,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"quan-hai-an\"
	},
	{
		\"maqh\" : 307,
		\"name\" : \"Quận Kiến An\",
		\"type\" : \"Quận\",
		\"matp\" : 31,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"quan-kien-an\"
	},
	{
		\"maqh\" : 308,
		\"name\" : \"Quận Đồ Sơn\",
		\"type\" : \"Quận\",
		\"matp\" : 31,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"quan-do-son\"
	},
	{
		\"maqh\" : 309,
		\"name\" : \"Quận Dương Kinh\",
		\"type\" : \"Quận\",
		\"matp\" : 31,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"quan-duong-kinh\"
	},
	{
		\"maqh\" : 311,
		\"name\" : \"Huyện Thuỷ Nguyên\",
		\"type\" : \"Huyện\",
		\"matp\" : 31,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-thuy-nguyen\"
	},
	{
		\"maqh\" : 312,
		\"name\" : \"Huyện An Dương\",
		\"type\" : \"Huyện\",
		\"matp\" : 31,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-an-duong\"
	},
	{
		\"maqh\" : 313,
		\"name\" : \"Huyện An Lão\",
		\"type\" : \"Huyện\",
		\"matp\" : 31,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-an-lao\"
	},
	{
		\"maqh\" : 314,
		\"name\" : \"Huyện Kiến Thuỵ\",
		\"type\" : \"Huyện\",
		\"matp\" : 31,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-kien-thuy\"
	},
	{
		\"maqh\" : 315,
		\"name\" : \"Huyện Tiên Lãng\",
		\"type\" : \"Huyện\",
		\"matp\" : 31,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-tien-lang\"
	},
	{
		\"maqh\" : 316,
		\"name\" : \"Huyện Vĩnh Bảo\",
		\"type\" : \"Huyện\",
		\"matp\" : 31,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-vinh-bao\"
	},
	{
		\"maqh\" : 317,
		\"name\" : \"Huyện Cát Hải\",
		\"type\" : \"Huyện\",
		\"matp\" : 31,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-cat-hai\"
	},
	{
		\"maqh\" : 318,
		\"name\" : \"Huyện Bạch Long Vĩ\",
		\"type\" : \"Huyện\",
		\"matp\" : 31,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-bach-long-vi\"
	},
	{
		\"maqh\" : 323,
		\"name\" : \"Thành phố Hưng Yên\",
		\"type\" : \"Thành phố\",
		\"matp\" : 33,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thanh-pho-hung-yen\"
	},
	{
		\"maqh\" : 325,
		\"name\" : \"Huyện Văn Lâm\",
		\"type\" : \"Huyện\",
		\"matp\" : 33,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-van-lam\"
	},
	{
		\"maqh\" : 326,
		\"name\" : \"Huyện Văn Giang\",
		\"type\" : \"Huyện\",
		\"matp\" : 33,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-van-giang\"
	},
	{
		\"maqh\" : 327,
		\"name\" : \"Huyện Yên Mỹ\",
		\"type\" : \"Huyện\",
		\"matp\" : 33,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-yen-my\"
	},
	{
		\"maqh\" : 328,
		\"name\" : \"Huyện Mỹ Hào\",
		\"type\" : \"Huyện\",
		\"matp\" : 33,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-my-hao\"
	},
	{
		\"maqh\" : 329,
		\"name\" : \"Huyện Ân Thi\",
		\"type\" : \"Huyện\",
		\"matp\" : 33,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-an-thi\"
	},
	{
		\"maqh\" : 330,
		\"name\" : \"Huyện Khoái Châu\",
		\"type\" : \"Huyện\",
		\"matp\" : 33,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-khoai-chau\"
	},
	{
		\"maqh\" : 331,
		\"name\" : \"Huyện Kim Động\",
		\"type\" : \"Huyện\",
		\"matp\" : 33,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-kim-dong\"
	},
	{
		\"maqh\" : 332,
		\"name\" : \"Huyện Tiên Lữ\",
		\"type\" : \"Huyện\",
		\"matp\" : 33,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-tien-lu\"
	},
	{
		\"maqh\" : 333,
		\"name\" : \"Huyện Phù Cừ\",
		\"type\" : \"Huyện\",
		\"matp\" : 33,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-phu-cu\"
	},
	{
		\"maqh\" : 336,
		\"name\" : \"Thành phố Thái Bình\",
		\"type\" : \"Thành phố\",
		\"matp\" : 34,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thanh-pho-thai-binh\"
	},
	{
		\"maqh\" : 338,
		\"name\" : \"Huyện Quỳnh Phụ\",
		\"type\" : \"Huyện\",
		\"matp\" : 34,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-quynh-phu\"
	},
	{
		\"maqh\" : 339,
		\"name\" : \"Huyện Hưng Hà\",
		\"type\" : \"Huyện\",
		\"matp\" : 34,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-hung-ha\"
	},
	{
		\"maqh\" : 340,
		\"name\" : \"Huyện Đông Hưng\",
		\"type\" : \"Huyện\",
		\"matp\" : 34,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-dong-hung\"
	},
	{
		\"maqh\" : 341,
		\"name\" : \"Huyện Thái Thụy\",
		\"type\" : \"Huyện\",
		\"matp\" : 34,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-thai-thuy\"
	},
	{
		\"maqh\" : 342,
		\"name\" : \"Huyện Tiền Hải\",
		\"type\" : \"Huyện\",
		\"matp\" : 34,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-tien-hai\"
	},
	{
		\"maqh\" : 343,
		\"name\" : \"Huyện Kiến Xương\",
		\"type\" : \"Huyện\",
		\"matp\" : 34,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-kien-xuong\"
	},
	{
		\"maqh\" : 344,
		\"name\" : \"Huyện Vũ Thư\",
		\"type\" : \"Huyện\",
		\"matp\" : 34,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-vu-thu\"
	},
	{
		\"maqh\" : 347,
		\"name\" : \"Thành phố Phủ Lý\",
		\"type\" : \"Thành phố\",
		\"matp\" : 35,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thanh-pho-phu-ly\"
	},
	{
		\"maqh\" : 349,
		\"name\" : \"Huyện Duy Tiên\",
		\"type\" : \"Huyện\",
		\"matp\" : 35,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-duy-tien\"
	},
	{
		\"maqh\" : 350,
		\"name\" : \"Huyện Kim Bảng\",
		\"type\" : \"Huyện\",
		\"matp\" : 35,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-kim-bang\"
	},
	{
		\"maqh\" : 351,
		\"name\" : \"Huyện Thanh Liêm\",
		\"type\" : \"Huyện\",
		\"matp\" : 35,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-thanh-liem\"
	},
	{
		\"maqh\" : 352,
		\"name\" : \"Huyện Bình Lục\",
		\"type\" : \"Huyện\",
		\"matp\" : 35,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-binh-luc\"
	},
	{
		\"maqh\" : 353,
		\"name\" : \"Huyện Lý Nhân\",
		\"type\" : \"Huyện\",
		\"matp\" : 35,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-ly-nhan\"
	},
	{
		\"maqh\" : 356,
		\"name\" : \"Thành phố Nam Định\",
		\"type\" : \"Thành phố\",
		\"matp\" : 36,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thanh-pho-nam-dinh\"
	},
	{
		\"maqh\" : 358,
		\"name\" : \"Huyện Mỹ Lộc\",
		\"type\" : \"Huyện\",
		\"matp\" : 36,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-my-loc\"
	},
	{
		\"maqh\" : 359,
		\"name\" : \"Huyện Vụ Bản\",
		\"type\" : \"Huyện\",
		\"matp\" : 36,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-vu-ban\"
	},
	{
		\"maqh\" : 360,
		\"name\" : \"Huyện Ý Yên\",
		\"type\" : \"Huyện\",
		\"matp\" : 36,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-y-yen\"
	},
	{
		\"maqh\" : 361,
		\"name\" : \"Huyện Nghĩa Hưng\",
		\"type\" : \"Huyện\",
		\"matp\" : 36,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-nghia-hung\"
	},
	{
		\"maqh\" : 362,
		\"name\" : \"Huyện Nam Trực\",
		\"type\" : \"Huyện\",
		\"matp\" : 36,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-nam-truc\"
	},
	{
		\"maqh\" : 363,
		\"name\" : \"Huyện Trực Ninh\",
		\"type\" : \"Huyện\",
		\"matp\" : 36,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-truc-ninh\"
	},
	{
		\"maqh\" : 364,
		\"name\" : \"Huyện Xuân Trường\",
		\"type\" : \"Huyện\",
		\"matp\" : 36,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-xuan-truong\"
	},
	{
		\"maqh\" : 365,
		\"name\" : \"Huyện Giao Thủy\",
		\"type\" : \"Huyện\",
		\"matp\" : 36,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-giao-thuy\"
	},
	{
		\"maqh\" : 366,
		\"name\" : \"Huyện Hải Hậu\",
		\"type\" : \"Huyện\",
		\"matp\" : 36,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-hai-hau\"
	},
	{
		\"maqh\" : 369,
		\"name\" : \"Thành phố Ninh Bình\",
		\"type\" : \"Thành phố\",
		\"matp\" : 37,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thanh-pho-ninh-binh\"
	},
	{
		\"maqh\" : 370,
		\"name\" : \"Thành phố Tam Điệp\",
		\"type\" : \"Thành phố\",
		\"matp\" : 37,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thanh-pho-tam-diep\"
	},
	{
		\"maqh\" : 372,
		\"name\" : \"Huyện Nho Quan\",
		\"type\" : \"Huyện\",
		\"matp\" : 37,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-nho-quan\"
	},
	{
		\"maqh\" : 373,
		\"name\" : \"Huyện Gia Viễn\",
		\"type\" : \"Huyện\",
		\"matp\" : 37,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-gia-vien\"
	},
	{
		\"maqh\" : 374,
		\"name\" : \"Huyện Hoa Lư\",
		\"type\" : \"Huyện\",
		\"matp\" : 37,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-hoa-lu\"
	},
	{
		\"maqh\" : 375,
		\"name\" : \"Huyện Yên Khánh\",
		\"type\" : \"Huyện\",
		\"matp\" : 37,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-yen-khanh\"
	},
	{
		\"maqh\" : 376,
		\"name\" : \"Huyện Kim Sơn\",
		\"type\" : \"Huyện\",
		\"matp\" : 37,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-kim-son\"
	},
	{
		\"maqh\" : 377,
		\"name\" : \"Huyện Yên Mô\",
		\"type\" : \"Huyện\",
		\"matp\" : 37,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-yen-mo\"
	},
	{
		\"maqh\" : 380,
		\"name\" : \"Thành phố Thanh Hóa\",
		\"type\" : \"Thành phố\",
		\"matp\" : 38,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thanh-pho-thanh-hoa\"
	},
	{
		\"maqh\" : 381,
		\"name\" : \"Thị xã Bỉm Sơn\",
		\"type\" : \"Thị xã\",
		\"matp\" : 38,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thi-xa-bim-son\"
	},
	{
		\"maqh\" : 382,
		\"name\" : \"Thị xã Sầm Sơn\",
		\"type\" : \"Thị xã\",
		\"matp\" : 38,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thi-xa-sam-son\"
	},
	{
		\"maqh\" : 384,
		\"name\" : \"Huyện Mường Lát\",
		\"type\" : \"Huyện\",
		\"matp\" : 38,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-muong-lat\"
	},
	{
		\"maqh\" : 385,
		\"name\" : \"Huyện Quan Hóa\",
		\"type\" : \"Huyện\",
		\"matp\" : 38,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-quan-hoa\"
	},
	{
		\"maqh\" : 386,
		\"name\" : \"Huyện Bá Thước\",
		\"type\" : \"Huyện\",
		\"matp\" : 38,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-ba-thuoc\"
	},
	{
		\"maqh\" : 387,
		\"name\" : \"Huyện Quan Sơn\",
		\"type\" : \"Huyện\",
		\"matp\" : 38,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-quan-son\"
	},
	{
		\"maqh\" : 388,
		\"name\" : \"Huyện Lang Chánh\",
		\"type\" : \"Huyện\",
		\"matp\" : 38,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-lang-chanh\"
	},
	{
		\"maqh\" : 389,
		\"name\" : \"Huyện Ngọc Lặc\",
		\"type\" : \"Huyện\",
		\"matp\" : 38,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-ngoc-lac\"
	},
	{
		\"maqh\" : 390,
		\"name\" : \"Huyện Cẩm Thủy\",
		\"type\" : \"Huyện\",
		\"matp\" : 38,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-cam-thuy\"
	},
	{
		\"maqh\" : 391,
		\"name\" : \"Huyện Thạch Thành\",
		\"type\" : \"Huyện\",
		\"matp\" : 38,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-thach-thanh\"
	},
	{
		\"maqh\" : 392,
		\"name\" : \"Huyện Hà Trung\",
		\"type\" : \"Huyện\",
		\"matp\" : 38,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-ha-trung\"
	},
	{
		\"maqh\" : 393,
		\"name\" : \"Huyện Vĩnh Lộc\",
		\"type\" : \"Huyện\",
		\"matp\" : 38,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-vinh-loc\"
	},
	{
		\"maqh\" : 394,
		\"name\" : \"Huyện Yên Định\",
		\"type\" : \"Huyện\",
		\"matp\" : 38,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-yen-dinh\"
	},
	{
		\"maqh\" : 395,
		\"name\" : \"Huyện Thọ Xuân\",
		\"type\" : \"Huyện\",
		\"matp\" : 38,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-tho-xuan\"
	},
	{
		\"maqh\" : 396,
		\"name\" : \"Huyện Thường Xuân\",
		\"type\" : \"Huyện\",
		\"matp\" : 38,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-thuong-xuan\"
	},
	{
		\"maqh\" : 397,
		\"name\" : \"Huyện Triệu Sơn\",
		\"type\" : \"Huyện\",
		\"matp\" : 38,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-trieu-son\"
	},
	{
		\"maqh\" : 398,
		\"name\" : \"Huyện Thiệu Hóa\",
		\"type\" : \"Huyện\",
		\"matp\" : 38,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-thieu-hoa\"
	},
	{
		\"maqh\" : 399,
		\"name\" : \"Huyện Hoằng Hóa\",
		\"type\" : \"Huyện\",
		\"matp\" : 38,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-hoang-hoa\"
	},
	{
		\"maqh\" : 400,
		\"name\" : \"Huyện Hậu Lộc\",
		\"type\" : \"Huyện\",
		\"matp\" : 38,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-hau-loc\"
	},
	{
		\"maqh\" : 401,
		\"name\" : \"Huyện Nga Sơn\",
		\"type\" : \"Huyện\",
		\"matp\" : 38,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-nga-son\"
	},
	{
		\"maqh\" : 402,
		\"name\" : \"Huyện Như Xuân\",
		\"type\" : \"Huyện\",
		\"matp\" : 38,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-nhu-xuan\"
	},
	{
		\"maqh\" : 403,
		\"name\" : \"Huyện Như Thanh\",
		\"type\" : \"Huyện\",
		\"matp\" : 38,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-nhu-thanh\"
	},
	{
		\"maqh\" : 404,
		\"name\" : \"Huyện Nông Cống\",
		\"type\" : \"Huyện\",
		\"matp\" : 38,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-nong-cong\"
	},
	{
		\"maqh\" : 405,
		\"name\" : \"Huyện Đông Sơn\",
		\"type\" : \"Huyện\",
		\"matp\" : 38,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-dong-son\"
	},
	{
		\"maqh\" : 406,
		\"name\" : \"Huyện Quảng Xương\",
		\"type\" : \"Huyện\",
		\"matp\" : 38,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-quang-xuong\"
	},
	{
		\"maqh\" : 407,
		\"name\" : \"Huyện Tĩnh Gia\",
		\"type\" : \"Huyện\",
		\"matp\" : 38,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-tinh-gia\"
	},
	{
		\"maqh\" : 412,
		\"name\" : \"Thành phố Vinh\",
		\"type\" : \"Thành phố\",
		\"matp\" : 40,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thanh-pho-vinh\"
	},
	{
		\"maqh\" : 413,
		\"name\" : \"Thị xã Cửa Lò\",
		\"type\" : \"Thị xã\",
		\"matp\" : 40,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thi-xa-cua-lo\"
	},
	{
		\"maqh\" : 414,
		\"name\" : \"Thị xã Thái Hoà\",
		\"type\" : \"Thị xã\",
		\"matp\" : 40,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thi-xa-thai-hoa\"
	},
	{
		\"maqh\" : 415,
		\"name\" : \"Huyện Quế Phong\",
		\"type\" : \"Huyện\",
		\"matp\" : 40,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-que-phong\"
	},
	{
		\"maqh\" : 416,
		\"name\" : \"Huyện Quỳ Châu\",
		\"type\" : \"Huyện\",
		\"matp\" : 40,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-quy-chau\"
	},
	{
		\"maqh\" : 417,
		\"name\" : \"Huyện Kỳ Sơn\",
		\"type\" : \"Huyện\",
		\"matp\" : 40,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-ky-son\"
	},
	{
		\"maqh\" : 418,
		\"name\" : \"Huyện Tương Dương\",
		\"type\" : \"Huyện\",
		\"matp\" : 40,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-tuong-duong\"
	},
	{
		\"maqh\" : 419,
		\"name\" : \"Huyện Nghĩa Đàn\",
		\"type\" : \"Huyện\",
		\"matp\" : 40,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-nghia-dan\"
	},
	{
		\"maqh\" : 420,
		\"name\" : \"Huyện Quỳ Hợp\",
		\"type\" : \"Huyện\",
		\"matp\" : 40,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-quy-hop\"
	},
	{
		\"maqh\" : 421,
		\"name\" : \"Huyện Quỳnh Lưu\",
		\"type\" : \"Huyện\",
		\"matp\" : 40,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-quynh-luu\"
	},
	{
		\"maqh\" : 422,
		\"name\" : \"Huyện Con Cuông\",
		\"type\" : \"Huyện\",
		\"matp\" : 40,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-con-cuong\"
	},
	{
		\"maqh\" : 423,
		\"name\" : \"Huyện Tân Kỳ\",
		\"type\" : \"Huyện\",
		\"matp\" : 40,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-tan-ky\"
	},
	{
		\"maqh\" : 424,
		\"name\" : \"Huyện Anh Sơn\",
		\"type\" : \"Huyện\",
		\"matp\" : 40,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-anh-son\"
	},
	{
		\"maqh\" : 425,
		\"name\" : \"Huyện Diễn Châu\",
		\"type\" : \"Huyện\",
		\"matp\" : 40,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-dien-chau\"
	},
	{
		\"maqh\" : 426,
		\"name\" : \"Huyện Yên Thành\",
		\"type\" : \"Huyện\",
		\"matp\" : 40,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-yen-thanh\"
	},
	{
		\"maqh\" : 427,
		\"name\" : \"Huyện Đô Lương\",
		\"type\" : \"Huyện\",
		\"matp\" : 40,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-do-luong\"
	},
	{
		\"maqh\" : 428,
		\"name\" : \"Huyện Thanh Chương\",
		\"type\" : \"Huyện\",
		\"matp\" : 40,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-thanh-chuong\"
	},
	{
		\"maqh\" : 429,
		\"name\" : \"Huyện Nghi Lộc\",
		\"type\" : \"Huyện\",
		\"matp\" : 40,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-nghi-loc\"
	},
	{
		\"maqh\" : 430,
		\"name\" : \"Huyện Nam Đàn\",
		\"type\" : \"Huyện\",
		\"matp\" : 40,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-nam-dan\"
	},
	{
		\"maqh\" : 431,
		\"name\" : \"Huyện Hưng Nguyên\",
		\"type\" : \"Huyện\",
		\"matp\" : 40,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-hung-nguyen\"
	},
	{
		\"maqh\" : 432,
		\"name\" : \"Thị xã Hoàng Mai\",
		\"type\" : \"Thị xã\",
		\"matp\" : 40,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thi-xa-hoang-mai\"
	},
	{
		\"maqh\" : 436,
		\"name\" : \"Thành phố Hà Tĩnh\",
		\"type\" : \"Thành phố\",
		\"matp\" : 42,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thanh-pho-ha-tinh\"
	},
	{
		\"maqh\" : 437,
		\"name\" : \"Thị xã Hồng Lĩnh\",
		\"type\" : \"Thị xã\",
		\"matp\" : 42,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thi-xa-hong-linh\"
	},
	{
		\"maqh\" : 439,
		\"name\" : \"Huyện Hương Sơn\",
		\"type\" : \"Huyện\",
		\"matp\" : 42,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-huong-son\"
	},
	{
		\"maqh\" : 440,
		\"name\" : \"Huyện Đức Thọ\",
		\"type\" : \"Huyện\",
		\"matp\" : 42,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-duc-tho\"
	},
	{
		\"maqh\" : 441,
		\"name\" : \"Huyện Vũ Quang\",
		\"type\" : \"Huyện\",
		\"matp\" : 42,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-vu-quang\"
	},
	{
		\"maqh\" : 442,
		\"name\" : \"Huyện Nghi Xuân\",
		\"type\" : \"Huyện\",
		\"matp\" : 42,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-nghi-xuan\"
	},
	{
		\"maqh\" : 443,
		\"name\" : \"Huyện Can Lộc\",
		\"type\" : \"Huyện\",
		\"matp\" : 42,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-can-loc\"
	},
	{
		\"maqh\" : 444,
		\"name\" : \"Huyện Hương Khê\",
		\"type\" : \"Huyện\",
		\"matp\" : 42,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-huong-khe\"
	},
	{
		\"maqh\" : 445,
		\"name\" : \"Huyện Thạch Hà\",
		\"type\" : \"Huyện\",
		\"matp\" : 42,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-thach-ha\"
	},
	{
		\"maqh\" : 446,
		\"name\" : \"Huyện Cẩm Xuyên\",
		\"type\" : \"Huyện\",
		\"matp\" : 42,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-cam-xuyen\"
	},
	{
		\"maqh\" : 447,
		\"name\" : \"Huyện Kỳ Anh\",
		\"type\" : \"Huyện\",
		\"matp\" : 42,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-ky-anh\"
	},
	{
		\"maqh\" : 448,
		\"name\" : \"Huyện Lộc Hà\",
		\"type\" : \"Huyện\",
		\"matp\" : 42,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-loc-ha\"
	},
	{
		\"maqh\" : 449,
		\"name\" : \"Thị xã Kỳ Anh\",
		\"type\" : \"Thị xã\",
		\"matp\" : 42,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thi-xa-ky-anh\"
	},
	{
		\"maqh\" : 450,
		\"name\" : \"Thành Phố Đồng Hới\",
		\"type\" : \"Thành phố\",
		\"matp\" : 44,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thanh-pho-dong-hoi\"
	},
	{
		\"maqh\" : 452,
		\"name\" : \"Huyện Minh Hóa\",
		\"type\" : \"Huyện\",
		\"matp\" : 44,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-minh-hoa\"
	},
	{
		\"maqh\" : 453,
		\"name\" : \"Huyện Tuyên Hóa\",
		\"type\" : \"Huyện\",
		\"matp\" : 44,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-tuyen-hoa\"
	},
	{
		\"maqh\" : 454,
		\"name\" : \"Huyện Quảng Trạch\",
		\"type\" : \"Thị xã\",
		\"matp\" : 44,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-quang-trach\"
	},
	{
		\"maqh\" : 455,
		\"name\" : \"Huyện Bố Trạch\",
		\"type\" : \"Huyện\",
		\"matp\" : 44,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-bo-trach\"
	},
	{
		\"maqh\" : 456,
		\"name\" : \"Huyện Quảng Ninh\",
		\"type\" : \"Huyện\",
		\"matp\" : 44,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-quang-ninh\"
	},
	{
		\"maqh\" : 457,
		\"name\" : \"Huyện Lệ Thủy\",
		\"type\" : \"Huyện\",
		\"matp\" : 44,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-le-thuy\"
	},
	{
		\"maqh\" : 458,
		\"name\" : \"Thị xã Ba Đồn\",
		\"type\" : \"Huyện\",
		\"matp\" : 44,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thi-xa-ba-don\"
	},
	{
		\"maqh\" : 461,
		\"name\" : \"Thành phố Đông Hà\",
		\"type\" : \"Thành phố\",
		\"matp\" : 45,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thanh-pho-dong-ha\"
	},
	{
		\"maqh\" : 462,
		\"name\" : \"Thị xã Quảng Trị\",
		\"type\" : \"Thị xã\",
		\"matp\" : 45,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thi-xa-quang-tri\"
	},
	{
		\"maqh\" : 464,
		\"name\" : \"Huyện Vĩnh Linh\",
		\"type\" : \"Huyện\",
		\"matp\" : 45,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-vinh-linh\"
	},
	{
		\"maqh\" : 465,
		\"name\" : \"Huyện Hướng Hóa\",
		\"type\" : \"Huyện\",
		\"matp\" : 45,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-huong-hoa\"
	},
	{
		\"maqh\" : 466,
		\"name\" : \"Huyện Gio Linh\",
		\"type\" : \"Huyện\",
		\"matp\" : 45,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-gio-linh\"
	},
	{
		\"maqh\" : 467,
		\"name\" : \"Huyện Đa Krông\",
		\"type\" : \"Huyện\",
		\"matp\" : 45,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-da-krong\"
	},
	{
		\"maqh\" : 468,
		\"name\" : \"Huyện Cam Lộ\",
		\"type\" : \"Huyện\",
		\"matp\" : 45,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-cam-lo\"
	},
	{
		\"maqh\" : 469,
		\"name\" : \"Huyện Triệu Phong\",
		\"type\" : \"Huyện\",
		\"matp\" : 45,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-trieu-phong\"
	},
	{
		\"maqh\" : 470,
		\"name\" : \"Huyện Hải Lăng\",
		\"type\" : \"Huyện\",
		\"matp\" : 45,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-hai-lang\"
	},
	{
		\"maqh\" : 471,
		\"name\" : \"Huyện Cồn Cỏ\",
		\"type\" : \"Huyện\",
		\"matp\" : 45,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-con-co\"
	},
	{
		\"maqh\" : 474,
		\"name\" : \"Thành phố Huế\",
		\"type\" : \"Thành phố\",
		\"matp\" : 46,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thanh-pho-hue\"
	},
	{
		\"maqh\" : 476,
		\"name\" : \"Huyện Phong Điền\",
		\"type\" : \"Huyện\",
		\"matp\" : 46,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-phong-dien\"
	},
	{
		\"maqh\" : 477,
		\"name\" : \"Huyện Quảng Điền\",
		\"type\" : \"Huyện\",
		\"matp\" : 46,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-quang-dien\"
	},
	{
		\"maqh\" : 478,
		\"name\" : \"Huyện Phú Vang\",
		\"type\" : \"Huyện\",
		\"matp\" : 46,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-phu-vang\"
	},
	{
		\"maqh\" : 479,
		\"name\" : \"Thị xã Hương Thủy\",
		\"type\" : \"Thị xã\",
		\"matp\" : 46,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thi-xa-huong-thuy\"
	},
	{
		\"maqh\" : 480,
		\"name\" : \"Thị xã Hương Trà\",
		\"type\" : \"Thị xã\",
		\"matp\" : 46,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thi-xa-huong-tra\"
	},
	{
		\"maqh\" : 481,
		\"name\" : \"Huyện A Lưới\",
		\"type\" : \"Huyện\",
		\"matp\" : 46,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-a-luoi\"
	},
	{
		\"maqh\" : 482,
		\"name\" : \"Huyện Phú Lộc\",
		\"type\" : \"Huyện\",
		\"matp\" : 46,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-phu-loc\"
	},
	{
		\"maqh\" : 483,
		\"name\" : \"Huyện Nam Đông\",
		\"type\" : \"Huyện\",
		\"matp\" : 46,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-nam-dong\"
	},
	{
		\"maqh\" : 490,
		\"name\" : \"Quận Liên Chiểu\",
		\"type\" : \"Quận\",
		\"matp\" : 48,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"quan-lien-chieu\"
	},
	{
		\"maqh\" : 491,
		\"name\" : \"Quận Thanh Khê\",
		\"type\" : \"Quận\",
		\"matp\" : 48,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"quan-thanh-khe\"
	},
	{
		\"maqh\" : 492,
		\"name\" : \"Quận Hải Châu\",
		\"type\" : \"Quận\",
		\"matp\" : 48,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"quan-hai-chau\"
	},
	{
		\"maqh\" : 493,
		\"name\" : \"Quận Sơn Trà\",
		\"type\" : \"Quận\",
		\"matp\" : 48,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"quan-son-tra\"
	},
	{
		\"maqh\" : 494,
		\"name\" : \"Quận Ngũ Hành Sơn\",
		\"type\" : \"Quận\",
		\"matp\" : 48,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"quan-ngu-hanh-son\"
	},
	{
		\"maqh\" : 495,
		\"name\" : \"Quận Cẩm Lệ\",
		\"type\" : \"Quận\",
		\"matp\" : 48,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"quan-cam-le\"
	},
	{
		\"maqh\" : 497,
		\"name\" : \"Huyện Hòa Vang\",
		\"type\" : \"Huyện\",
		\"matp\" : 48,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-hoa-vang\"
	},
	{
		\"maqh\" : 498,
		\"name\" : \"Huyện Hoàng Sa\",
		\"type\" : \"Huyện\",
		\"matp\" : 48,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-hoang-sa\"
	},
	{
		\"maqh\" : 502,
		\"name\" : \"Thành phố Tam Kỳ\",
		\"type\" : \"Thành phố\",
		\"matp\" : 49,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thanh-pho-tam-ky\"
	},
	{
		\"maqh\" : 503,
		\"name\" : \"Thành phố Hội An\",
		\"type\" : \"Thành phố\",
		\"matp\" : 49,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thanh-pho-hoi-an\"
	},
	{
		\"maqh\" : 504,
		\"name\" : \"Huyện Tây Giang\",
		\"type\" : \"Huyện\",
		\"matp\" : 49,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-tay-giang\"
	},
	{
		\"maqh\" : 505,
		\"name\" : \"Huyện Đông Giang\",
		\"type\" : \"Huyện\",
		\"matp\" : 49,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-dong-giang\"
	},
	{
		\"maqh\" : 506,
		\"name\" : \"Huyện Đại Lộc\",
		\"type\" : \"Huyện\",
		\"matp\" : 49,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-dai-loc\"
	},
	{
		\"maqh\" : 507,
		\"name\" : \"Thị xã Điện Bàn\",
		\"type\" : \"Thị xã\",
		\"matp\" : 49,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thi-xa-dien-ban\"
	},
	{
		\"maqh\" : 508,
		\"name\" : \"Huyện Duy Xuyên\",
		\"type\" : \"Huyện\",
		\"matp\" : 49,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-duy-xuyen\"
	},
	{
		\"maqh\" : 509,
		\"name\" : \"Huyện Quế Sơn\",
		\"type\" : \"Huyện\",
		\"matp\" : 49,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-que-son\"
	},
	{
		\"maqh\" : 510,
		\"name\" : \"Huyện Nam Giang\",
		\"type\" : \"Huyện\",
		\"matp\" : 49,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-nam-giang\"
	},
	{
		\"maqh\" : 511,
		\"name\" : \"Huyện Phước Sơn\",
		\"type\" : \"Huyện\",
		\"matp\" : 49,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-phuoc-son\"
	},
	{
		\"maqh\" : 512,
		\"name\" : \"Huyện Hiệp Đức\",
		\"type\" : \"Huyện\",
		\"matp\" : 49,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-hiep-duc\"
	},
	{
		\"maqh\" : 513,
		\"name\" : \"Huyện Thăng Bình\",
		\"type\" : \"Huyện\",
		\"matp\" : 49,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-thang-binh\"
	},
	{
		\"maqh\" : 514,
		\"name\" : \"Huyện Tiên Phước\",
		\"type\" : \"Huyện\",
		\"matp\" : 49,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-tien-phuoc\"
	},
	{
		\"maqh\" : 515,
		\"name\" : \"Huyện Bắc Trà My\",
		\"type\" : \"Huyện\",
		\"matp\" : 49,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-bac-tra-my\"
	},
	{
		\"maqh\" : 516,
		\"name\" : \"Huyện Nam Trà My\",
		\"type\" : \"Huyện\",
		\"matp\" : 49,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-nam-tra-my\"
	},
	{
		\"maqh\" : 517,
		\"name\" : \"Huyện Núi Thành\",
		\"type\" : \"Huyện\",
		\"matp\" : 49,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-nui-thanh\"
	},
	{
		\"maqh\" : 518,
		\"name\" : \"Huyện Phú Ninh\",
		\"type\" : \"Huyện\",
		\"matp\" : 49,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-phu-ninh\"
	},
	{
		\"maqh\" : 519,
		\"name\" : \"Huyện Nông Sơn\",
		\"type\" : \"Huyện\",
		\"matp\" : 49,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-nong-son\"
	},
	{
		\"maqh\" : 522,
		\"name\" : \"Thành phố Quảng Ngãi\",
		\"type\" : \"Thành phố\",
		\"matp\" : 51,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thanh-pho-quang-ngai\"
	},
	{
		\"maqh\" : 524,
		\"name\" : \"Huyện Bình Sơn\",
		\"type\" : \"Huyện\",
		\"matp\" : 51,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-binh-son\"
	},
	{
		\"maqh\" : 525,
		\"name\" : \"Huyện Trà Bồng\",
		\"type\" : \"Huyện\",
		\"matp\" : 51,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-tra-bong\"
	},
	{
		\"maqh\" : 526,
		\"name\" : \"Huyện Tây Trà\",
		\"type\" : \"Huyện\",
		\"matp\" : 51,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-tay-tra\"
	},
	{
		\"maqh\" : 527,
		\"name\" : \"Huyện Sơn Tịnh\",
		\"type\" : \"Huyện\",
		\"matp\" : 51,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-son-tinh\"
	},
	{
		\"maqh\" : 528,
		\"name\" : \"Huyện Tư Nghĩa\",
		\"type\" : \"Huyện\",
		\"matp\" : 51,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-tu-nghia\"
	},
	{
		\"maqh\" : 529,
		\"name\" : \"Huyện Sơn Hà\",
		\"type\" : \"Huyện\",
		\"matp\" : 51,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-son-ha\"
	},
	{
		\"maqh\" : 530,
		\"name\" : \"Huyện Sơn Tây\",
		\"type\" : \"Huyện\",
		\"matp\" : 51,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-son-tay\"
	},
	{
		\"maqh\" : 531,
		\"name\" : \"Huyện Minh Long\",
		\"type\" : \"Huyện\",
		\"matp\" : 51,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-minh-long\"
	},
	{
		\"maqh\" : 532,
		\"name\" : \"Huyện Nghĩa Hành\",
		\"type\" : \"Huyện\",
		\"matp\" : 51,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-nghia-hanh\"
	},
	{
		\"maqh\" : 533,
		\"name\" : \"Huyện Mộ Đức\",
		\"type\" : \"Huyện\",
		\"matp\" : 51,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-mo-duc\"
	},
	{
		\"maqh\" : 534,
		\"name\" : \"Huyện Đức Phổ\",
		\"type\" : \"Huyện\",
		\"matp\" : 51,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-duc-pho\"
	},
	{
		\"maqh\" : 535,
		\"name\" : \"Huyện Ba Tơ\",
		\"type\" : \"Huyện\",
		\"matp\" : 51,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-ba-to\"
	},
	{
		\"maqh\" : 536,
		\"name\" : \"Huyện Lý Sơn\",
		\"type\" : \"Huyện\",
		\"matp\" : 51,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-ly-son\"
	},
	{
		\"maqh\" : 540,
		\"name\" : \"Thành phố Qui Nhơn\",
		\"type\" : \"Thành phố\",
		\"matp\" : 52,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thanh-pho-qui-nhon\"
	},
	{
		\"maqh\" : 542,
		\"name\" : \"Huyện An Lão\",
		\"type\" : \"Huyện\",
		\"matp\" : 52,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-an-lao\"
	},
	{
		\"maqh\" : 543,
		\"name\" : \"Huyện Hoài Nhơn\",
		\"type\" : \"Huyện\",
		\"matp\" : 52,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-hoai-nhon\"
	},
	{
		\"maqh\" : 544,
		\"name\" : \"Huyện Hoài Ân\",
		\"type\" : \"Huyện\",
		\"matp\" : 52,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-hoai-an\"
	},
	{
		\"maqh\" : 545,
		\"name\" : \"Huyện Phù Mỹ\",
		\"type\" : \"Huyện\",
		\"matp\" : 52,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-phu-my\"
	},
	{
		\"maqh\" : 546,
		\"name\" : \"Huyện Vĩnh Thạnh\",
		\"type\" : \"Huyện\",
		\"matp\" : 52,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-vinh-thanh\"
	},
	{
		\"maqh\" : 547,
		\"name\" : \"Huyện Tây Sơn\",
		\"type\" : \"Huyện\",
		\"matp\" : 52,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-tay-son\"
	},
	{
		\"maqh\" : 548,
		\"name\" : \"Huyện Phù Cát\",
		\"type\" : \"Huyện\",
		\"matp\" : 52,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-phu-cat\"
	},
	{
		\"maqh\" : 549,
		\"name\" : \"Thị xã An Nhơn\",
		\"type\" : \"Thị xã\",
		\"matp\" : 52,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thi-xa-an-nhon\"
	},
	{
		\"maqh\" : 550,
		\"name\" : \"Huyện Tuy Phước\",
		\"type\" : \"Huyện\",
		\"matp\" : 52,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-tuy-phuoc\"
	},
	{
		\"maqh\" : 551,
		\"name\" : \"Huyện Vân Canh\",
		\"type\" : \"Huyện\",
		\"matp\" : 52,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-van-canh\"
	},
	{
		\"maqh\" : 555,
		\"name\" : \"Thành phố Tuy Hoà\",
		\"type\" : \"Thành phố\",
		\"matp\" : 54,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thanh-pho-tuy-hoa\"
	},
	{
		\"maqh\" : 557,
		\"name\" : \"Thị xã Sông Cầu\",
		\"type\" : \"Thị xã\",
		\"matp\" : 54,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thi-xa-song-cau\"
	},
	{
		\"maqh\" : 558,
		\"name\" : \"Huyện Đồng Xuân\",
		\"type\" : \"Huyện\",
		\"matp\" : 54,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-dong-xuan\"
	},
	{
		\"maqh\" : 559,
		\"name\" : \"Huyện Tuy An\",
		\"type\" : \"Huyện\",
		\"matp\" : 54,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-tuy-an\"
	},
	{
		\"maqh\" : 560,
		\"name\" : \"Huyện Sơn Hòa\",
		\"type\" : \"Huyện\",
		\"matp\" : 54,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-son-hoa\"
	},
	{
		\"maqh\" : 561,
		\"name\" : \"Huyện Sông Hinh\",
		\"type\" : \"Huyện\",
		\"matp\" : 54,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-song-hinh\"
	},
	{
		\"maqh\" : 562,
		\"name\" : \"Huyện Tây Hoà\",
		\"type\" : \"Huyện\",
		\"matp\" : 54,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-tay-hoa\"
	},
	{
		\"maqh\" : 563,
		\"name\" : \"Huyện Phú Hoà\",
		\"type\" : \"Huyện\",
		\"matp\" : 54,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-phu-hoa\"
	},
	{
		\"maqh\" : 564,
		\"name\" : \"Huyện Đông Hòa\",
		\"type\" : \"Huyện\",
		\"matp\" : 54,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-dong-hoa\"
	},
	{
		\"maqh\" : 568,
		\"name\" : \"Thành phố Nha Trang\",
		\"type\" : \"Thành phố\",
		\"matp\" : 56,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thanh-pho-nha-trang\"
	},
	{
		\"maqh\" : 569,
		\"name\" : \"Thành phố Cam Ranh\",
		\"type\" : \"Thành phố\",
		\"matp\" : 56,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thanh-pho-cam-ranh\"
	},
	{
		\"maqh\" : 570,
		\"name\" : \"Huyện Cam Lâm\",
		\"type\" : \"Huyện\",
		\"matp\" : 56,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-cam-lam\"
	},
	{
		\"maqh\" : 571,
		\"name\" : \"Huyện Vạn Ninh\",
		\"type\" : \"Huyện\",
		\"matp\" : 56,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-van-ninh\"
	},
	{
		\"maqh\" : 572,
		\"name\" : \"Thị xã Ninh Hòa\",
		\"type\" : \"Thị xã\",
		\"matp\" : 56,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thi-xa-ninh-hoa\"
	},
	{
		\"maqh\" : 573,
		\"name\" : \"Huyện Khánh Vĩnh\",
		\"type\" : \"Huyện\",
		\"matp\" : 56,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-khanh-vinh\"
	},
	{
		\"maqh\" : 574,
		\"name\" : \"Huyện Diên Khánh\",
		\"type\" : \"Huyện\",
		\"matp\" : 56,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-dien-khanh\"
	},
	{
		\"maqh\" : 575,
		\"name\" : \"Huyện Khánh Sơn\",
		\"type\" : \"Huyện\",
		\"matp\" : 56,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-khanh-son\"
	},
	{
		\"maqh\" : 576,
		\"name\" : \"Huyện Trường Sa\",
		\"type\" : \"Huyện\",
		\"matp\" : 56,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-truong-sa\"
	},
	{
		\"maqh\" : 582,
		\"name\" : \"Thành phố Phan Rang-Tháp Chàm\",
		\"type\" : \"Thành phố\",
		\"matp\" : 58,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thanh-pho-phan-rang-thap-cham\"
	},
	{
		\"maqh\" : 584,
		\"name\" : \"Huyện Bác Ái\",
		\"type\" : \"Huyện\",
		\"matp\" : 58,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-bac-ai\"
	},
	{
		\"maqh\" : 585,
		\"name\" : \"Huyện Ninh Sơn\",
		\"type\" : \"Huyện\",
		\"matp\" : 58,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-ninh-son\"
	},
	{
		\"maqh\" : 586,
		\"name\" : \"Huyện Ninh Hải\",
		\"type\" : \"Huyện\",
		\"matp\" : 58,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-ninh-hai\"
	},
	{
		\"maqh\" : 587,
		\"name\" : \"Huyện Ninh Phước\",
		\"type\" : \"Huyện\",
		\"matp\" : 58,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-ninh-phuoc\"
	},
	{
		\"maqh\" : 588,
		\"name\" : \"Huyện Thuận Bắc\",
		\"type\" : \"Huyện\",
		\"matp\" : 58,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-thuan-bac\"
	},
	{
		\"maqh\" : 589,
		\"name\" : \"Huyện Thuận Nam\",
		\"type\" : \"Huyện\",
		\"matp\" : 58,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-thuan-nam\"
	},
	{
		\"maqh\" : 593,
		\"name\" : \"Thành phố Phan Thiết\",
		\"type\" : \"Thành phố\",
		\"matp\" : 60,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thanh-pho-phan-thiet\"
	},
	{
		\"maqh\" : 594,
		\"name\" : \"Thị xã La Gi\",
		\"type\" : \"Thị xã\",
		\"matp\" : 60,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thi-xa-la-gi\"
	},
	{
		\"maqh\" : 595,
		\"name\" : \"Huyện Tuy Phong\",
		\"type\" : \"Huyện\",
		\"matp\" : 60,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-tuy-phong\"
	},
	{
		\"maqh\" : 596,
		\"name\" : \"Huyện Bắc Bình\",
		\"type\" : \"Huyện\",
		\"matp\" : 60,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-bac-binh\"
	},
	{
		\"maqh\" : 597,
		\"name\" : \"Huyện Hàm Thuận Bắc\",
		\"type\" : \"Huyện\",
		\"matp\" : 60,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-ham-thuan-bac\"
	},
	{
		\"maqh\" : 598,
		\"name\" : \"Huyện Hàm Thuận Nam\",
		\"type\" : \"Huyện\",
		\"matp\" : 60,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-ham-thuan-nam\"
	},
	{
		\"maqh\" : 599,
		\"name\" : \"Huyện Tánh Linh\",
		\"type\" : \"Huyện\",
		\"matp\" : 60,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-tanh-linh\"
	},
	{
		\"maqh\" : 600,
		\"name\" : \"Huyện Đức Linh\",
		\"type\" : \"Huyện\",
		\"matp\" : 60,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-duc-linh\"
	},
	{
		\"maqh\" : 601,
		\"name\" : \"Huyện Hàm Tân\",
		\"type\" : \"Huyện\",
		\"matp\" : 60,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-ham-tan\"
	},
	{
		\"maqh\" : 602,
		\"name\" : \"Huyện Phú Quí\",
		\"type\" : \"Huyện\",
		\"matp\" : 60,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-phu-qui\"
	},
	{
		\"maqh\" : 608,
		\"name\" : \"Thành phố Kon Tum\",
		\"type\" : \"Thành phố\",
		\"matp\" : 62,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thanh-pho-kon-tum\"
	},
	{
		\"maqh\" : 610,
		\"name\" : \"Huyện Đắk Glei\",
		\"type\" : \"Huyện\",
		\"matp\" : 62,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-dak-glei\"
	},
	{
		\"maqh\" : 611,
		\"name\" : \"Huyện Ngọc Hồi\",
		\"type\" : \"Huyện\",
		\"matp\" : 62,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-ngoc-hoi\"
	},
	{
		\"maqh\" : 612,
		\"name\" : \"Huyện Đắk Tô\",
		\"type\" : \"Huyện\",
		\"matp\" : 62,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-dak-to\"
	},
	{
		\"maqh\" : 613,
		\"name\" : \"Huyện Kon Plông\",
		\"type\" : \"Huyện\",
		\"matp\" : 62,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-kon-plong\"
	},
	{
		\"maqh\" : 614,
		\"name\" : \"Huyện Kon Rẫy\",
		\"type\" : \"Huyện\",
		\"matp\" : 62,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-kon-ray\"
	},
	{
		\"maqh\" : 615,
		\"name\" : \"Huyện Đắk Hà\",
		\"type\" : \"Huyện\",
		\"matp\" : 62,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-dak-ha\"
	},
	{
		\"maqh\" : 616,
		\"name\" : \"Huyện Sa Thầy\",
		\"type\" : \"Huyện\",
		\"matp\" : 62,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-sa-thay\"
	},
	{
		\"maqh\" : 617,
		\"name\" : \"Huyện Tu Mơ Rông\",
		\"type\" : \"Huyện\",
		\"matp\" : 62,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-tu-mo-rong\"
	},
	{
		\"maqh\" : 618,
		\"name\" : \"Huyện Ia H' Drai\",
		\"type\" : \"Huyện\",
		\"matp\" : 62,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-ia-h-drai\"
	},
	{
		\"maqh\" : 622,
		\"name\" : \"Thành phố Pleiku\",
		\"type\" : \"Thành phố\",
		\"matp\" : 64,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thanh-pho-pleiku\"
	},
	{
		\"maqh\" : 623,
		\"name\" : \"Thị xã An Khê\",
		\"type\" : \"Thị xã\",
		\"matp\" : 64,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thi-xa-an-khe\"
	},
	{
		\"maqh\" : 624,
		\"name\" : \"Thị xã Ayun Pa\",
		\"type\" : \"Thị xã\",
		\"matp\" : 64,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thi-xa-ayun-pa\"
	},
	{
		\"maqh\" : 625,
		\"name\" : \"Huyện KBang\",
		\"type\" : \"Huyện\",
		\"matp\" : 64,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-kbang\"
	},
	{
		\"maqh\" : 626,
		\"name\" : \"Huyện Đăk Đoa\",
		\"type\" : \"Huyện\",
		\"matp\" : 64,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-dak-doa\"
	},
	{
		\"maqh\" : 627,
		\"name\" : \"Huyện Chư Păh\",
		\"type\" : \"Huyện\",
		\"matp\" : 64,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-chu-pah\"
	},
	{
		\"maqh\" : 628,
		\"name\" : \"Huyện Ia Grai\",
		\"type\" : \"Huyện\",
		\"matp\" : 64,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-ia-grai\"
	},
	{
		\"maqh\" : 629,
		\"name\" : \"Huyện Mang Yang\",
		\"type\" : \"Huyện\",
		\"matp\" : 64,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-mang-yang\"
	},
	{
		\"maqh\" : 630,
		\"name\" : \"Huyện Kông Chro\",
		\"type\" : \"Huyện\",
		\"matp\" : 64,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-kong-chro\"
	},
	{
		\"maqh\" : 631,
		\"name\" : \"Huyện Đức Cơ\",
		\"type\" : \"Huyện\",
		\"matp\" : 64,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-duc-co\"
	},
	{
		\"maqh\" : 632,
		\"name\" : \"Huyện Chư Prông\",
		\"type\" : \"Huyện\",
		\"matp\" : 64,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-chu-prong\"
	},
	{
		\"maqh\" : 633,
		\"name\" : \"Huyện Chư Sê\",
		\"type\" : \"Huyện\",
		\"matp\" : 64,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-chu-se\"
	},
	{
		\"maqh\" : 634,
		\"name\" : \"Huyện Đăk Pơ\",
		\"type\" : \"Huyện\",
		\"matp\" : 64,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-dak-po\"
	},
	{
		\"maqh\" : 635,
		\"name\" : \"Huyện Ia Pa\",
		\"type\" : \"Huyện\",
		\"matp\" : 64,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-ia-pa\"
	},
	{
		\"maqh\" : 637,
		\"name\" : \"Huyện Krông Pa\",
		\"type\" : \"Huyện\",
		\"matp\" : 64,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-krong-pa\"
	},
	{
		\"maqh\" : 638,
		\"name\" : \"Huyện Phú Thiện\",
		\"type\" : \"Huyện\",
		\"matp\" : 64,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-phu-thien\"
	},
	{
		\"maqh\" : 639,
		\"name\" : \"Huyện Chư Pưh\",
		\"type\" : \"Huyện\",
		\"matp\" : 64,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-chu-puh\"
	},
	{
		\"maqh\" : 643,
		\"name\" : \"Thành phố Buôn Ma Thuột\",
		\"type\" : \"Thành phố\",
		\"matp\" : 66,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thanh-pho-buon-ma-thuot\"
	},
	{
		\"maqh\" : 644,
		\"name\" : \"Thị Xã Buôn Hồ\",
		\"type\" : \"Thị xã\",
		\"matp\" : 66,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thi-xa-buon-ho\"
	},
	{
		\"maqh\" : 645,
		\"name\" : \"Huyện Ea H'leo\",
		\"type\" : \"Huyện\",
		\"matp\" : 66,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-ea-hleo\"
	},
	{
		\"maqh\" : 646,
		\"name\" : \"Huyện Ea Súp\",
		\"type\" : \"Huyện\",
		\"matp\" : 66,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-ea-sup\"
	},
	{
		\"maqh\" : 647,
		\"name\" : \"Huyện Buôn Đôn\",
		\"type\" : \"Huyện\",
		\"matp\" : 66,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-buon-don\"
	},
	{
		\"maqh\" : 648,
		\"name\" : \"Huyện Cư M'gar\",
		\"type\" : \"Huyện\",
		\"matp\" : 66,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-cu-mgar\"
	},
	{
		\"maqh\" : 649,
		\"name\" : \"Huyện Krông Búk\",
		\"type\" : \"Huyện\",
		\"matp\" : 66,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-krong-buk\"
	},
	{
		\"maqh\" : 650,
		\"name\" : \"Huyện Krông Năng\",
		\"type\" : \"Huyện\",
		\"matp\" : 66,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-krong-nang\"
	},
	{
		\"maqh\" : 651,
		\"name\" : \"Huyện Ea Kar\",
		\"type\" : \"Huyện\",
		\"matp\" : 66,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-ea-kar\"
	},
	{
		\"maqh\" : 652,
		\"name\" : \"Huyện M'Đrắk\",
		\"type\" : \"Huyện\",
		\"matp\" : 66,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-mdrak\"
	},
	{
		\"maqh\" : 653,
		\"name\" : \"Huyện Krông Bông\",
		\"type\" : \"Huyện\",
		\"matp\" : 66,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-krong-bong\"
	},
	{
		\"maqh\" : 654,
		\"name\" : \"Huyện Krông Pắc\",
		\"type\" : \"Huyện\",
		\"matp\" : 66,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-krong-pac\"
	},
	{
		\"maqh\" : 655,
		\"name\" : \"Huyện Krông A Na\",
		\"type\" : \"Huyện\",
		\"matp\" : 66,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-krong-a-na\"
	},
	{
		\"maqh\" : 656,
		\"name\" : \"Huyện Lắk\",
		\"type\" : \"Huyện\",
		\"matp\" : 66,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-lak\"
	},
	{
		\"maqh\" : 657,
		\"name\" : \"Huyện Cư Kuin\",
		\"type\" : \"Huyện\",
		\"matp\" : 66,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-cu-kuin\"
	},
	{
		\"maqh\" : 660,
		\"name\" : \"Thị xã Gia Nghĩa\",
		\"type\" : \"Thị xã\",
		\"matp\" : 67,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thi-xa-gia-nghia\"
	},
	{
		\"maqh\" : 661,
		\"name\" : \"Huyện Đăk Glong\",
		\"type\" : \"Huyện\",
		\"matp\" : 67,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-dak-glong\"
	},
	{
		\"maqh\" : 662,
		\"name\" : \"Huyện Cư Jút\",
		\"type\" : \"Huyện\",
		\"matp\" : 67,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-cu-jut\"
	},
	{
		\"maqh\" : 663,
		\"name\" : \"Huyện Đắk Mil\",
		\"type\" : \"Huyện\",
		\"matp\" : 67,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-dak-mil\"
	},
	{
		\"maqh\" : 664,
		\"name\" : \"Huyện Krông Nô\",
		\"type\" : \"Huyện\",
		\"matp\" : 67,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-krong-no\"
	},
	{
		\"maqh\" : 665,
		\"name\" : \"Huyện Đắk Song\",
		\"type\" : \"Huyện\",
		\"matp\" : 67,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-dak-song\"
	},
	{
		\"maqh\" : 666,
		\"name\" : \"Huyện Đắk R'Lấp\",
		\"type\" : \"Huyện\",
		\"matp\" : 67,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-dak-rlap\"
	},
	{
		\"maqh\" : 667,
		\"name\" : \"Huyện Tuy Đức\",
		\"type\" : \"Huyện\",
		\"matp\" : 67,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-tuy-duc\"
	},
	{
		\"maqh\" : 672,
		\"name\" : \"Thành phố Đà Lạt\",
		\"type\" : \"Thành phố\",
		\"matp\" : 68,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thanh-pho-da-lat\"
	},
	{
		\"maqh\" : 673,
		\"name\" : \"Thành phố Bảo Lộc\",
		\"type\" : \"Thành phố\",
		\"matp\" : 68,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thanh-pho-bao-loc\"
	},
	{
		\"maqh\" : 674,
		\"name\" : \"Huyện Đam Rông\",
		\"type\" : \"Huyện\",
		\"matp\" : 68,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-dam-rong\"
	},
	{
		\"maqh\" : 675,
		\"name\" : \"Huyện Lạc Dương\",
		\"type\" : \"Huyện\",
		\"matp\" : 68,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-lac-duong\"
	},
	{
		\"maqh\" : 676,
		\"name\" : \"Huyện Lâm Hà\",
		\"type\" : \"Huyện\",
		\"matp\" : 68,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-lam-ha\"
	},
	{
		\"maqh\" : 677,
		\"name\" : \"Huyện Đơn Dương\",
		\"type\" : \"Huyện\",
		\"matp\" : 68,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-don-duong\"
	},
	{
		\"maqh\" : 678,
		\"name\" : \"Huyện Đức Trọng\",
		\"type\" : \"Huyện\",
		\"matp\" : 68,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-duc-trong\"
	},
	{
		\"maqh\" : 679,
		\"name\" : \"Huyện Di Linh\",
		\"type\" : \"Huyện\",
		\"matp\" : 68,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-di-linh\"
	},
	{
		\"maqh\" : 680,
		\"name\" : \"Huyện Bảo Lâm\",
		\"type\" : \"Huyện\",
		\"matp\" : 68,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-bao-lam\"
	},
	{
		\"maqh\" : 681,
		\"name\" : \"Huyện Đạ Huoai\",
		\"type\" : \"Huyện\",
		\"matp\" : 68,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-da-huoai\"
	},
	{
		\"maqh\" : 682,
		\"name\" : \"Huyện Đạ Tẻh\",
		\"type\" : \"Huyện\",
		\"matp\" : 68,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-da-teh\"
	},
	{
		\"maqh\" : 683,
		\"name\" : \"Huyện Cát Tiên\",
		\"type\" : \"Huyện\",
		\"matp\" : 68,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-cat-tien\"
	},
	{
		\"maqh\" : 688,
		\"name\" : \"Thị xã Phước Long\",
		\"type\" : \"Thị xã\",
		\"matp\" : 70,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thi-xa-phuoc-long\"
	},
	{
		\"maqh\" : 689,
		\"name\" : \"Thị xã Đồng Xoài\",
		\"type\" : \"Thị xã\",
		\"matp\" : 70,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thi-xa-dong-xoai\"
	},
	{
		\"maqh\" : 690,
		\"name\" : \"Thị xã Bình Long\",
		\"type\" : \"Thị xã\",
		\"matp\" : 70,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thi-xa-binh-long\"
	},
	{
		\"maqh\" : 691,
		\"name\" : \"Huyện Bù Gia Mập\",
		\"type\" : \"Huyện\",
		\"matp\" : 70,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-bu-gia-map\"
	},
	{
		\"maqh\" : 692,
		\"name\" : \"Huyện Lộc Ninh\",
		\"type\" : \"Huyện\",
		\"matp\" : 70,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-loc-ninh\"
	},
	{
		\"maqh\" : 693,
		\"name\" : \"Huyện Bù Đốp\",
		\"type\" : \"Huyện\",
		\"matp\" : 70,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-bu-dop\"
	},
	{
		\"maqh\" : 694,
		\"name\" : \"Huyện Hớn Quản\",
		\"type\" : \"Huyện\",
		\"matp\" : 70,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-hon-quan\"
	},
	{
		\"maqh\" : 695,
		\"name\" : \"Huyện Đồng Phú\",
		\"type\" : \"Huyện\",
		\"matp\" : 70,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-dong-phu\"
	},
	{
		\"maqh\" : 696,
		\"name\" : \"Huyện Bù Đăng\",
		\"type\" : \"Huyện\",
		\"matp\" : 70,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-bu-dang\"
	},
	{
		\"maqh\" : 697,
		\"name\" : \"Huyện Chơn Thành\",
		\"type\" : \"Huyện\",
		\"matp\" : 70,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-chon-thanh\"
	},
	{
		\"maqh\" : 698,
		\"name\" : \"Huyện Phú Riềng\",
		\"type\" : \"Huyện\",
		\"matp\" : 70,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-phu-rieng\"
	},
	{
		\"maqh\" : 703,
		\"name\" : \"Thành phố Tây Ninh\",
		\"type\" : \"Thành phố\",
		\"matp\" : 72,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thanh-pho-tay-ninh\"
	},
	{
		\"maqh\" : 705,
		\"name\" : \"Huyện Tân Biên\",
		\"type\" : \"Huyện\",
		\"matp\" : 72,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-tan-bien\"
	},
	{
		\"maqh\" : 706,
		\"name\" : \"Huyện Tân Châu\",
		\"type\" : \"Huyện\",
		\"matp\" : 72,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-tan-chau\"
	},
	{
		\"maqh\" : 707,
		\"name\" : \"Huyện Dương Minh Châu\",
		\"type\" : \"Huyện\",
		\"matp\" : 72,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-duong-minh-chau\"
	},
	{
		\"maqh\" : 708,
		\"name\" : \"Huyện Châu Thành\",
		\"type\" : \"Huyện\",
		\"matp\" : 72,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-chau-thanh\"
	},
	{
		\"maqh\" : 709,
		\"name\" : \"Huyện Hòa Thành\",
		\"type\" : \"Huyện\",
		\"matp\" : 72,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-hoa-thanh\"
	},
	{
		\"maqh\" : 710,
		\"name\" : \"Huyện Gò Dầu\",
		\"type\" : \"Huyện\",
		\"matp\" : 72,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-go-dau\"
	},
	{
		\"maqh\" : 711,
		\"name\" : \"Huyện Bến Cầu\",
		\"type\" : \"Huyện\",
		\"matp\" : 72,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-ben-cau\"
	},
	{
		\"maqh\" : 712,
		\"name\" : \"Huyện Trảng Bàng\",
		\"type\" : \"Huyện\",
		\"matp\" : 72,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-trang-bang\"
	},
	{
		\"maqh\" : 718,
		\"name\" : \"Thành phố Thủ Dầu Một\",
		\"type\" : \"Thành phố\",
		\"matp\" : 74,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thanh-pho-thu-dau-mot\"
	},
	{
		\"maqh\" : 719,
		\"name\" : \"Huyện Bàu Bàng\",
		\"type\" : \"Huyện\",
		\"matp\" : 74,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-bau-bang\"
	},
	{
		\"maqh\" : 720,
		\"name\" : \"Huyện Dầu Tiếng\",
		\"type\" : \"Huyện\",
		\"matp\" : 74,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-dau-tieng\"
	},
	{
		\"maqh\" : 721,
		\"name\" : \"Thị xã Bến Cát\",
		\"type\" : \"Thị xã\",
		\"matp\" : 74,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thi-xa-ben-cat\"
	},
	{
		\"maqh\" : 722,
		\"name\" : \"Huyện Phú Giáo\",
		\"type\" : \"Huyện\",
		\"matp\" : 74,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-phu-giao\"
	},
	{
		\"maqh\" : 723,
		\"name\" : \"Thị xã Tân Uyên\",
		\"type\" : \"Thị xã\",
		\"matp\" : 74,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thi-xa-tan-uyen\"
	},
	{
		\"maqh\" : 724,
		\"name\" : \"Thị xã Dĩ An\",
		\"type\" : \"Thị xã\",
		\"matp\" : 74,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thi-xa-di-an\"
	},
	{
		\"maqh\" : 725,
		\"name\" : \"Thị xã Thuận An\",
		\"type\" : \"Thị xã\",
		\"matp\" : 74,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thi-xa-thuan-an\"
	},
	{
		\"maqh\" : 726,
		\"name\" : \"Huyện Bắc Tân Uyên\",
		\"type\" : \"Huyện\",
		\"matp\" : 74,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-bac-tan-uyen\"
	},
	{
		\"maqh\" : 731,
		\"name\" : \"Thành phố Biên Hòa\",
		\"type\" : \"Thành phố\",
		\"matp\" : 75,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thanh-pho-bien-hoa\"
	},
	{
		\"maqh\" : 732,
		\"name\" : \"Thị xã Long Khánh\",
		\"type\" : \"Thị xã\",
		\"matp\" : 75,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thi-xa-long-khanh\"
	},
	{
		\"maqh\" : 734,
		\"name\" : \"Huyện Tân Phú\",
		\"type\" : \"Huyện\",
		\"matp\" : 75,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-tan-phu\"
	},
	{
		\"maqh\" : 735,
		\"name\" : \"Huyện Vĩnh Cửu\",
		\"type\" : \"Huyện\",
		\"matp\" : 75,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-vinh-cuu\"
	},
	{
		\"maqh\" : 736,
		\"name\" : \"Huyện Định Quán\",
		\"type\" : \"Huyện\",
		\"matp\" : 75,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-dinh-quan\"
	},
	{
		\"maqh\" : 737,
		\"name\" : \"Huyện Trảng Bom\",
		\"type\" : \"Huyện\",
		\"matp\" : 75,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-trang-bom\"
	},
	{
		\"maqh\" : 738,
		\"name\" : \"Huyện Thống Nhất\",
		\"type\" : \"Huyện\",
		\"matp\" : 75,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-thong-nhat\"
	},
	{
		\"maqh\" : 739,
		\"name\" : \"Huyện Cẩm Mỹ\",
		\"type\" : \"Huyện\",
		\"matp\" : 75,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-cam-my\"
	},
	{
		\"maqh\" : 740,
		\"name\" : \"Huyện Long Thành\",
		\"type\" : \"Huyện\",
		\"matp\" : 75,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-long-thanh\"
	},
	{
		\"maqh\" : 741,
		\"name\" : \"Huyện Xuân Lộc\",
		\"type\" : \"Huyện\",
		\"matp\" : 75,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-xuan-loc\"
	},
	{
		\"maqh\" : 742,
		\"name\" : \"Huyện Nhơn Trạch\",
		\"type\" : \"Huyện\",
		\"matp\" : 75,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-nhon-trach\"
	},
	{
		\"maqh\" : 747,
		\"name\" : \"Thành phố Vũng Tàu\",
		\"type\" : \"Thành phố\",
		\"matp\" : 77,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thanh-pho-vung-tau\"
	},
	{
		\"maqh\" : 748,
		\"name\" : \"Thành phố Bà Rịa\",
		\"type\" : \"Thành phố\",
		\"matp\" : 77,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thanh-pho-ba-ria\"
	},
	{
		\"maqh\" : 750,
		\"name\" : \"Huyện Châu Đức\",
		\"type\" : \"Huyện\",
		\"matp\" : 77,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-chau-duc\"
	},
	{
		\"maqh\" : 751,
		\"name\" : \"Huyện Xuyên Mộc\",
		\"type\" : \"Huyện\",
		\"matp\" : 77,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-xuyen-moc\"
	},
	{
		\"maqh\" : 752,
		\"name\" : \"Huyện Long Điền\",
		\"type\" : \"Huyện\",
		\"matp\" : 77,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-long-dien\"
	},
	{
		\"maqh\" : 753,
		\"name\" : \"Huyện Đất Đỏ\",
		\"type\" : \"Huyện\",
		\"matp\" : 77,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-dat-do\"
	},
	{
		\"maqh\" : 754,
		\"name\" : \"Huyện Tân Thành\",
		\"type\" : \"Huyện\",
		\"matp\" : 77,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-tan-thanh\"
	},
	{
		\"maqh\" : 755,
		\"name\" : \"Huyện Côn Đảo\",
		\"type\" : \"Huyện\",
		\"matp\" : 77,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-con-dao\"
	},
	{
		\"maqh\" : 760,
		\"name\" : \"Quận 1\",
		\"type\" : \"Quận\",
		\"matp\" : 79,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"quan-1\"
	},
	{
		\"maqh\" : 761,
		\"name\" : \"Quận 12\",
		\"type\" : \"Quận\",
		\"matp\" : 79,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"quan-12\"
	},
	{
		\"maqh\" : 762,
		\"name\" : \"Quận Thủ Đức\",
		\"type\" : \"Quận\",
		\"matp\" : 79,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"quan-thu-duc\"
	},
	{
		\"maqh\" : 763,
		\"name\" : \"Quận 9\",
		\"type\" : \"Quận\",
		\"matp\" : 79,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"quan-9\"
	},
	{
		\"maqh\" : 764,
		\"name\" : \"Quận Gò Vấp\",
		\"type\" : \"Quận\",
		\"matp\" : 79,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"quan-go-vap\"
	},
	{
		\"maqh\" : 765,
		\"name\" : \"Quận Bình Thạnh\",
		\"type\" : \"Quận\",
		\"matp\" : 79,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"quan-binh-thanh\"
	},
	{
		\"maqh\" : 766,
		\"name\" : \"Quận Tân Bình\",
		\"type\" : \"Quận\",
		\"matp\" : 79,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"quan-tan-binh\"
	},
	{
		\"maqh\" : 767,
		\"name\" : \"Quận Tân Phú\",
		\"type\" : \"Quận\",
		\"matp\" : 79,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"quan-tan-phu\"
	},
	{
		\"maqh\" : 768,
		\"name\" : \"Quận Phú Nhuận\",
		\"type\" : \"Quận\",
		\"matp\" : 79,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"quan-phu-nhuan\"
	},
	{
		\"maqh\" : 769,
		\"name\" : \"Quận 2\",
		\"type\" : \"Quận\",
		\"matp\" : 79,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"quan-2\"
	},
	{
		\"maqh\" : 770,
		\"name\" : \"Quận 3\",
		\"type\" : \"Quận\",
		\"matp\" : 79,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"quan-3\"
	},
	{
		\"maqh\" : 771,
		\"name\" : \"Quận 10\",
		\"type\" : \"Quận\",
		\"matp\" : 79,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"quan-10\"
	},
	{
		\"maqh\" : 772,
		\"name\" : \"Quận 11\",
		\"type\" : \"Quận\",
		\"matp\" : 79,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"quan-11\"
	},
	{
		\"maqh\" : 773,
		\"name\" : \"Quận 4\",
		\"type\" : \"Quận\",
		\"matp\" : 79,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"quan-4\"
	},
	{
		\"maqh\" : 774,
		\"name\" : \"Quận 5\",
		\"type\" : \"Quận\",
		\"matp\" : 79,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"quan-5\"
	},
	{
		\"maqh\" : 775,
		\"name\" : \"Quận 6\",
		\"type\" : \"Quận\",
		\"matp\" : 79,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"quan-6\"
	},
	{
		\"maqh\" : 776,
		\"name\" : \"Quận 8\",
		\"type\" : \"Quận\",
		\"matp\" : 79,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"quan-8\"
	},
	{
		\"maqh\" : 777,
		\"name\" : \"Quận Bình Tân\",
		\"type\" : \"Quận\",
		\"matp\" : 79,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"quan-binh-tan\"
	},
	{
		\"maqh\" : 778,
		\"name\" : \"Quận 7\",
		\"type\" : \"Quận\",
		\"matp\" : 79,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"quan-7\"
	},
	{
		\"maqh\" : 783,
		\"name\" : \"Huyện Củ Chi\",
		\"type\" : \"Huyện\",
		\"matp\" : 79,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-cu-chi\"
	},
	{
		\"maqh\" : 784,
		\"name\" : \"Huyện Hóc Môn\",
		\"type\" : \"Huyện\",
		\"matp\" : 79,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-hoc-mon\"
	},
	{
		\"maqh\" : 785,
		\"name\" : \"Huyện Bình Chánh\",
		\"type\" : \"Huyện\",
		\"matp\" : 79,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-binh-chanh\"
	},
	{
		\"maqh\" : 786,
		\"name\" : \"Huyện Nhà Bè\",
		\"type\" : \"Huyện\",
		\"matp\" : 79,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-nha-be\"
	},
	{
		\"maqh\" : 787,
		\"name\" : \"Huyện Cần Giờ\",
		\"type\" : \"Huyện\",
		\"matp\" : 79,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-can-gio\"
	},
	{
		\"maqh\" : 794,
		\"name\" : \"Thành phố Tân An\",
		\"type\" : \"Thành phố\",
		\"matp\" : 80,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thanh-pho-tan-an\"
	},
	{
		\"maqh\" : 795,
		\"name\" : \"Thị xã Kiến Tường\",
		\"type\" : \"Thị xã\",
		\"matp\" : 80,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thi-xa-kien-tuong\"
	},
	{
		\"maqh\" : 796,
		\"name\" : \"Huyện Tân Hưng\",
		\"type\" : \"Huyện\",
		\"matp\" : 80,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-tan-hung\"
	},
	{
		\"maqh\" : 797,
		\"name\" : \"Huyện Vĩnh Hưng\",
		\"type\" : \"Huyện\",
		\"matp\" : 80,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-vinh-hung\"
	},
	{
		\"maqh\" : 798,
		\"name\" : \"Huyện Mộc Hóa\",
		\"type\" : \"Huyện\",
		\"matp\" : 80,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-moc-hoa\"
	},
	{
		\"maqh\" : 799,
		\"name\" : \"Huyện Tân Thạnh\",
		\"type\" : \"Huyện\",
		\"matp\" : 80,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-tan-thanh\"
	},
	{
		\"maqh\" : 800,
		\"name\" : \"Huyện Thạnh Hóa\",
		\"type\" : \"Huyện\",
		\"matp\" : 80,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-thanh-hoa\"
	},
	{
		\"maqh\" : 801,
		\"name\" : \"Huyện Đức Huệ\",
		\"type\" : \"Huyện\",
		\"matp\" : 80,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-duc-hue\"
	},
	{
		\"maqh\" : 802,
		\"name\" : \"Huyện Đức Hòa\",
		\"type\" : \"Huyện\",
		\"matp\" : 80,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-duc-hoa\"
	},
	{
		\"maqh\" : 803,
		\"name\" : \"Huyện Bến Lức\",
		\"type\" : \"Huyện\",
		\"matp\" : 80,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-ben-luc\"
	},
	{
		\"maqh\" : 804,
		\"name\" : \"Huyện Thủ Thừa\",
		\"type\" : \"Huyện\",
		\"matp\" : 80,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-thu-thua\"
	},
	{
		\"maqh\" : 805,
		\"name\" : \"Huyện Tân Trụ\",
		\"type\" : \"Huyện\",
		\"matp\" : 80,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-tan-tru\"
	},
	{
		\"maqh\" : 806,
		\"name\" : \"Huyện Cần Đước\",
		\"type\" : \"Huyện\",
		\"matp\" : 80,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-can-duoc\"
	},
	{
		\"maqh\" : 807,
		\"name\" : \"Huyện Cần Giuộc\",
		\"type\" : \"Huyện\",
		\"matp\" : 80,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-can-giuoc\"
	},
	{
		\"maqh\" : 808,
		\"name\" : \"Huyện Châu Thành\",
		\"type\" : \"Huyện\",
		\"matp\" : 80,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-chau-thanh\"
	},
	{
		\"maqh\" : 815,
		\"name\" : \"Thành phố Mỹ Tho\",
		\"type\" : \"Thành phố\",
		\"matp\" : 82,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thanh-pho-my-tho\"
	},
	{
		\"maqh\" : 816,
		\"name\" : \"Thị xã Gò Công\",
		\"type\" : \"Thị xã\",
		\"matp\" : 82,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thi-xa-go-cong\"
	},
	{
		\"maqh\" : 817,
		\"name\" : \"Thị xã Cai Lậy\",
		\"type\" : \"Huyện\",
		\"matp\" : 82,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thi-xa-cai-lay\"
	},
	{
		\"maqh\" : 818,
		\"name\" : \"Huyện Tân Phước\",
		\"type\" : \"Huyện\",
		\"matp\" : 82,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-tan-phuoc\"
	},
	{
		\"maqh\" : 819,
		\"name\" : \"Huyện Cái Bè\",
		\"type\" : \"Huyện\",
		\"matp\" : 82,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-cai-be\"
	},
	{
		\"maqh\" : 820,
		\"name\" : \"Huyện Cai Lậy\",
		\"type\" : \"Thị xã\",
		\"matp\" : 82,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-cai-lay\"
	},
	{
		\"maqh\" : 821,
		\"name\" : \"Huyện Châu Thành\",
		\"type\" : \"Huyện\",
		\"matp\" : 82,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-chau-thanh\"
	},
	{
		\"maqh\" : 822,
		\"name\" : \"Huyện Chợ Gạo\",
		\"type\" : \"Huyện\",
		\"matp\" : 82,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-cho-gao\"
	},
	{
		\"maqh\" : 823,
		\"name\" : \"Huyện Gò Công Tây\",
		\"type\" : \"Huyện\",
		\"matp\" : 82,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-go-cong-tay\"
	},
	{
		\"maqh\" : 824,
		\"name\" : \"Huyện Gò Công Đông\",
		\"type\" : \"Huyện\",
		\"matp\" : 82,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-go-cong-dong\"
	},
	{
		\"maqh\" : 825,
		\"name\" : \"Huyện Tân Phú Đông\",
		\"type\" : \"Huyện\",
		\"matp\" : 82,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-tan-phu-dong\"
	},
	{
		\"maqh\" : 829,
		\"name\" : \"Thành phố Bến Tre\",
		\"type\" : \"Thành phố\",
		\"matp\" : 83,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thanh-pho-ben-tre\"
	},
	{
		\"maqh\" : 831,
		\"name\" : \"Huyện Châu Thành\",
		\"type\" : \"Huyện\",
		\"matp\" : 83,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-chau-thanh\"
	},
	{
		\"maqh\" : 832,
		\"name\" : \"Huyện Chợ Lách\",
		\"type\" : \"Huyện\",
		\"matp\" : 83,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-cho-lach\"
	},
	{
		\"maqh\" : 833,
		\"name\" : \"Huyện Mỏ Cày Nam\",
		\"type\" : \"Huyện\",
		\"matp\" : 83,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-mo-cay-nam\"
	},
	{
		\"maqh\" : 834,
		\"name\" : \"Huyện Giồng Trôm\",
		\"type\" : \"Huyện\",
		\"matp\" : 83,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-giong-trom\"
	},
	{
		\"maqh\" : 835,
		\"name\" : \"Huyện Bình Đại\",
		\"type\" : \"Huyện\",
		\"matp\" : 83,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-binh-dai\"
	},
	{
		\"maqh\" : 836,
		\"name\" : \"Huyện Ba Tri\",
		\"type\" : \"Huyện\",
		\"matp\" : 83,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-ba-tri\"
	},
	{
		\"maqh\" : 837,
		\"name\" : \"Huyện Thạnh Phú\",
		\"type\" : \"Huyện\",
		\"matp\" : 83,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-thanh-phu\"
	},
	{
		\"maqh\" : 838,
		\"name\" : \"Huyện Mỏ Cày Bắc\",
		\"type\" : \"Huyện\",
		\"matp\" : 83,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-mo-cay-bac\"
	},
	{
		\"maqh\" : 842,
		\"name\" : \"Thành phố Trà Vinh\",
		\"type\" : \"Thành phố\",
		\"matp\" : 84,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thanh-pho-tra-vinh\"
	},
	{
		\"maqh\" : 844,
		\"name\" : \"Huyện Càng Long\",
		\"type\" : \"Huyện\",
		\"matp\" : 84,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-cang-long\"
	},
	{
		\"maqh\" : 845,
		\"name\" : \"Huyện Cầu Kè\",
		\"type\" : \"Huyện\",
		\"matp\" : 84,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-cau-ke\"
	},
	{
		\"maqh\" : 846,
		\"name\" : \"Huyện Tiểu Cần\",
		\"type\" : \"Huyện\",
		\"matp\" : 84,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-tieu-can\"
	},
	{
		\"maqh\" : 847,
		\"name\" : \"Huyện Châu Thành\",
		\"type\" : \"Huyện\",
		\"matp\" : 84,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-chau-thanh\"
	},
	{
		\"maqh\" : 848,
		\"name\" : \"Huyện Cầu Ngang\",
		\"type\" : \"Huyện\",
		\"matp\" : 84,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-cau-ngang\"
	},
	{
		\"maqh\" : 849,
		\"name\" : \"Huyện Trà Cú\",
		\"type\" : \"Huyện\",
		\"matp\" : 84,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-tra-cu\"
	},
	{
		\"maqh\" : 850,
		\"name\" : \"Huyện Duyên Hải\",
		\"type\" : \"Huyện\",
		\"matp\" : 84,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-duyen-hai\"
	},
	{
		\"maqh\" : 851,
		\"name\" : \"Thị xã Duyên Hải\",
		\"type\" : \"Thị xã\",
		\"matp\" : 84,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thi-xa-duyen-hai\"
	},
	{
		\"maqh\" : 855,
		\"name\" : \"Thành phố Vĩnh Long\",
		\"type\" : \"Thành phố\",
		\"matp\" : 86,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thanh-pho-vinh-long\"
	},
	{
		\"maqh\" : 857,
		\"name\" : \"Huyện Long Hồ\",
		\"type\" : \"Huyện\",
		\"matp\" : 86,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-long-ho\"
	},
	{
		\"maqh\" : 858,
		\"name\" : \"Huyện Mang Thít\",
		\"type\" : \"Huyện\",
		\"matp\" : 86,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-mang-thit\"
	},
	{
		\"maqh\" : 859,
		\"name\" : \"Huyện  Vũng Liêm\",
		\"type\" : \"Huyện\",
		\"matp\" : 86,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-vung-liem\"
	},
	{
		\"maqh\" : 860,
		\"name\" : \"Huyện Tam Bình\",
		\"type\" : \"Huyện\",
		\"matp\" : 86,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-tam-binh\"
	},
	{
		\"maqh\" : 861,
		\"name\" : \"Thị xã Bình Minh\",
		\"type\" : \"Thị xã\",
		\"matp\" : 86,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thi-xa-binh-minh\"
	},
	{
		\"maqh\" : 862,
		\"name\" : \"Huyện Trà Ôn\",
		\"type\" : \"Huyện\",
		\"matp\" : 86,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-tra-on\"
	},
	{
		\"maqh\" : 863,
		\"name\" : \"Huyện Bình Tân\",
		\"type\" : \"Huyện\",
		\"matp\" : 86,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-binh-tan\"
	},
	{
		\"maqh\" : 866,
		\"name\" : \"Thành phố Cao Lãnh\",
		\"type\" : \"Thành phố\",
		\"matp\" : 87,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thanh-pho-cao-lanh\"
	},
	{
		\"maqh\" : 867,
		\"name\" : \"Thành phố Sa Đéc\",
		\"type\" : \"Thành phố\",
		\"matp\" : 87,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thanh-pho-sa-dec\"
	},
	{
		\"maqh\" : 868,
		\"name\" : \"Thị xã Hồng Ngự\",
		\"type\" : \"Thị xã\",
		\"matp\" : 87,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thi-xa-hong-ngu\"
	},
	{
		\"maqh\" : 869,
		\"name\" : \"Huyện Tân Hồng\",
		\"type\" : \"Huyện\",
		\"matp\" : 87,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-tan-hong\"
	},
	{
		\"maqh\" : 870,
		\"name\" : \"Huyện Hồng Ngự\",
		\"type\" : \"Huyện\",
		\"matp\" : 87,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-hong-ngu\"
	},
	{
		\"maqh\" : 871,
		\"name\" : \"Huyện Tam Nông\",
		\"type\" : \"Huyện\",
		\"matp\" : 87,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-tam-nong\"
	},
	{
		\"maqh\" : 872,
		\"name\" : \"Huyện Tháp Mười\",
		\"type\" : \"Huyện\",
		\"matp\" : 87,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-thap-muoi\"
	},
	{
		\"maqh\" : 873,
		\"name\" : \"Huyện Cao Lãnh\",
		\"type\" : \"Huyện\",
		\"matp\" : 87,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-cao-lanh\"
	},
	{
		\"maqh\" : 874,
		\"name\" : \"Huyện Thanh Bình\",
		\"type\" : \"Huyện\",
		\"matp\" : 87,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-thanh-binh\"
	},
	{
		\"maqh\" : 875,
		\"name\" : \"Huyện Lấp Vò\",
		\"type\" : \"Huyện\",
		\"matp\" : 87,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-lap-vo\"
	},
	{
		\"maqh\" : 876,
		\"name\" : \"Huyện Lai Vung\",
		\"type\" : \"Huyện\",
		\"matp\" : 87,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-lai-vung\"
	},
	{
		\"maqh\" : 877,
		\"name\" : \"Huyện Châu Thành\",
		\"type\" : \"Huyện\",
		\"matp\" : 87,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-chau-thanh\"
	},
	{
		\"maqh\" : 883,
		\"name\" : \"Thành phố Long Xuyên\",
		\"type\" : \"Thành phố\",
		\"matp\" : 89,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thanh-pho-long-xuyen\"
	},
	{
		\"maqh\" : 884,
		\"name\" : \"Thành phố Châu Đốc\",
		\"type\" : \"Thành phố\",
		\"matp\" : 89,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thanh-pho-chau-doc\"
	},
	{
		\"maqh\" : 886,
		\"name\" : \"Huyện An Phú\",
		\"type\" : \"Huyện\",
		\"matp\" : 89,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-an-phu\"
	},
	{
		\"maqh\" : 887,
		\"name\" : \"Thị xã Tân Châu\",
		\"type\" : \"Thị xã\",
		\"matp\" : 89,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thi-xa-tan-chau\"
	},
	{
		\"maqh\" : 888,
		\"name\" : \"Huyện Phú Tân\",
		\"type\" : \"Huyện\",
		\"matp\" : 89,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-phu-tan\"
	},
	{
		\"maqh\" : 889,
		\"name\" : \"Huyện Châu Phú\",
		\"type\" : \"Huyện\",
		\"matp\" : 89,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-chau-phu\"
	},
	{
		\"maqh\" : 890,
		\"name\" : \"Huyện Tịnh Biên\",
		\"type\" : \"Huyện\",
		\"matp\" : 89,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-tinh-bien\"
	},
	{
		\"maqh\" : 891,
		\"name\" : \"Huyện Tri Tôn\",
		\"type\" : \"Huyện\",
		\"matp\" : 89,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-tri-ton\"
	},
	{
		\"maqh\" : 892,
		\"name\" : \"Huyện Châu Thành\",
		\"type\" : \"Huyện\",
		\"matp\" : 89,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-chau-thanh\"
	},
	{
		\"maqh\" : 893,
		\"name\" : \"Huyện Chợ Mới\",
		\"type\" : \"Huyện\",
		\"matp\" : 89,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-cho-moi\"
	},
	{
		\"maqh\" : 894,
		\"name\" : \"Huyện Thoại Sơn\",
		\"type\" : \"Huyện\",
		\"matp\" : 89,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-thoai-son\"
	},
	{
		\"maqh\" : 899,
		\"name\" : \"Thành phố Rạch Giá\",
		\"type\" : \"Thành phố\",
		\"matp\" : 91,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thanh-pho-rach-gia\"
	},
	{
		\"maqh\" : 900,
		\"name\" : \"Thị xã Hà Tiên\",
		\"type\" : \"Thị xã\",
		\"matp\" : 91,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thi-xa-ha-tien\"
	},
	{
		\"maqh\" : 902,
		\"name\" : \"Huyện Kiên Lương\",
		\"type\" : \"Huyện\",
		\"matp\" : 91,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-kien-luong\"
	},
	{
		\"maqh\" : 903,
		\"name\" : \"Huyện Hòn Đất\",
		\"type\" : \"Huyện\",
		\"matp\" : 91,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-hon-dat\"
	},
	{
		\"maqh\" : 904,
		\"name\" : \"Huyện Tân Hiệp\",
		\"type\" : \"Huyện\",
		\"matp\" : 91,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-tan-hiep\"
	},
	{
		\"maqh\" : 905,
		\"name\" : \"Huyện Châu Thành\",
		\"type\" : \"Huyện\",
		\"matp\" : 91,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-chau-thanh\"
	},
	{
		\"maqh\" : 906,
		\"name\" : \"Huyện Giồng Riềng\",
		\"type\" : \"Huyện\",
		\"matp\" : 91,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-giong-rieng\"
	},
	{
		\"maqh\" : 907,
		\"name\" : \"Huyện Gò Quao\",
		\"type\" : \"Huyện\",
		\"matp\" : 91,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-go-quao\"
	},
	{
		\"maqh\" : 908,
		\"name\" : \"Huyện An Biên\",
		\"type\" : \"Huyện\",
		\"matp\" : 91,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-an-bien\"
	},
	{
		\"maqh\" : 909,
		\"name\" : \"Huyện An Minh\",
		\"type\" : \"Huyện\",
		\"matp\" : 91,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-an-minh\"
	},
	{
		\"maqh\" : 910,
		\"name\" : \"Huyện Vĩnh Thuận\",
		\"type\" : \"Huyện\",
		\"matp\" : 91,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-vinh-thuan\"
	},
	{
		\"maqh\" : 911,
		\"name\" : \"Huyện Phú Quốc\",
		\"type\" : \"Huyện\",
		\"matp\" : 91,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-phu-quoc\"
	},
	{
		\"maqh\" : 912,
		\"name\" : \"Huyện Kiên Hải\",
		\"type\" : \"Huyện\",
		\"matp\" : 91,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-kien-hai\"
	},
	{
		\"maqh\" : 913,
		\"name\" : \"Huyện U Minh Thượng\",
		\"type\" : \"Huyện\",
		\"matp\" : 91,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-u-minh-thuong\"
	},
	{
		\"maqh\" : 914,
		\"name\" : \"Huyện Giang Thành\",
		\"type\" : \"Huyện\",
		\"matp\" : 91,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-giang-thanh\"
	},
	{
		\"maqh\" : 916,
		\"name\" : \"Quận Ninh Kiều\",
		\"type\" : \"Quận\",
		\"matp\" : 92,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"quan-ninh-kieu\"
	},
	{
		\"maqh\" : 917,
		\"name\" : \"Quận Ô Môn\",
		\"type\" : \"Quận\",
		\"matp\" : 92,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"quan-o-mon\"
	},
	{
		\"maqh\" : 918,
		\"name\" : \"Quận Bình Thuỷ\",
		\"type\" : \"Quận\",
		\"matp\" : 92,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"quan-binh-thuy\"
	},
	{
		\"maqh\" : 919,
		\"name\" : \"Quận Cái Răng\",
		\"type\" : \"Quận\",
		\"matp\" : 92,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"quan-cai-rang\"
	},
	{
		\"maqh\" : 923,
		\"name\" : \"Quận Thốt Nốt\",
		\"type\" : \"Quận\",
		\"matp\" : 92,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"quan-thot-not\"
	},
	{
		\"maqh\" : 924,
		\"name\" : \"Huyện Vĩnh Thạnh\",
		\"type\" : \"Huyện\",
		\"matp\" : 92,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-vinh-thanh\"
	},
	{
		\"maqh\" : 925,
		\"name\" : \"Huyện Cờ Đỏ\",
		\"type\" : \"Huyện\",
		\"matp\" : 92,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-co-do\"
	},
	{
		\"maqh\" : 926,
		\"name\" : \"Huyện Phong Điền\",
		\"type\" : \"Huyện\",
		\"matp\" : 92,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-phong-dien\"
	},
	{
		\"maqh\" : 927,
		\"name\" : \"Huyện Thới Lai\",
		\"type\" : \"Huyện\",
		\"matp\" : 92,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-thoi-lai\"
	},
	{
		\"maqh\" : 930,
		\"name\" : \"Thành phố Vị Thanh\",
		\"type\" : \"Thành phố\",
		\"matp\" : 93,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thanh-pho-vi-thanh\"
	},
	{
		\"maqh\" : 931,
		\"name\" : \"Thị xã Ngã Bảy\",
		\"type\" : \"Thị xã\",
		\"matp\" : 93,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thi-xa-nga-bay\"
	},
	{
		\"maqh\" : 932,
		\"name\" : \"Huyện Châu Thành A\",
		\"type\" : \"Huyện\",
		\"matp\" : 93,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-chau-thanh-a\"
	},
	{
		\"maqh\" : 933,
		\"name\" : \"Huyện Châu Thành\",
		\"type\" : \"Huyện\",
		\"matp\" : 93,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-chau-thanh\"
	},
	{
		\"maqh\" : 934,
		\"name\" : \"Huyện Phụng Hiệp\",
		\"type\" : \"Huyện\",
		\"matp\" : 93,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-phung-hiep\"
	},
	{
		\"maqh\" : 935,
		\"name\" : \"Huyện Vị Thuỷ\",
		\"type\" : \"Huyện\",
		\"matp\" : 93,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-vi-thuy\"
	},
	{
		\"maqh\" : 936,
		\"name\" : \"Huyện Long Mỹ\",
		\"type\" : \"Huyện\",
		\"matp\" : 93,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-long-my\"
	},
	{
		\"maqh\" : 937,
		\"name\" : \"Thị xã Long Mỹ\",
		\"type\" : \"Thị xã\",
		\"matp\" : 93,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thi-xa-long-my\"
	},
	{
		\"maqh\" : 941,
		\"name\" : \"Thành phố Sóc Trăng\",
		\"type\" : \"Thành phố\",
		\"matp\" : 94,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thanh-pho-soc-trang\"
	},
	{
		\"maqh\" : 942,
		\"name\" : \"Huyện Châu Thành\",
		\"type\" : \"Huyện\",
		\"matp\" : 94,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-chau-thanh\"
	},
	{
		\"maqh\" : 943,
		\"name\" : \"Huyện Kế Sách\",
		\"type\" : \"Huyện\",
		\"matp\" : 94,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-ke-sach\"
	},
	{
		\"maqh\" : 944,
		\"name\" : \"Huyện Mỹ Tú\",
		\"type\" : \"Huyện\",
		\"matp\" : 94,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-my-tu\"
	},
	{
		\"maqh\" : 945,
		\"name\" : \"Huyện Cù Lao Dung\",
		\"type\" : \"Huyện\",
		\"matp\" : 94,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-cu-lao-dung\"
	},
	{
		\"maqh\" : 946,
		\"name\" : \"Huyện Long Phú\",
		\"type\" : \"Huyện\",
		\"matp\" : 94,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-long-phu\"
	},
	{
		\"maqh\" : 947,
		\"name\" : \"Huyện Mỹ Xuyên\",
		\"type\" : \"Huyện\",
		\"matp\" : 94,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-my-xuyen\"
	},
	{
		\"maqh\" : 948,
		\"name\" : \"Thị xã Ngã Năm\",
		\"type\" : \"Thị xã\",
		\"matp\" : 94,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thi-xa-nga-nam\"
	},
	{
		\"maqh\" : 949,
		\"name\" : \"Huyện Thạnh Trị\",
		\"type\" : \"Huyện\",
		\"matp\" : 94,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-thanh-tri\"
	},
	{
		\"maqh\" : 950,
		\"name\" : \"Thị xã Vĩnh Châu\",
		\"type\" : \"Thị xã\",
		\"matp\" : 94,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thi-xa-vinh-chau\"
	},
	{
		\"maqh\" : 951,
		\"name\" : \"Huyện Trần Đề\",
		\"type\" : \"Huyện\",
		\"matp\" : 94,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-tran-de\"
	},
	{
		\"maqh\" : 954,
		\"name\" : \"Thành phố Bạc Liêu\",
		\"type\" : \"Thành phố\",
		\"matp\" : 95,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thanh-pho-bac-lieu\"
	},
	{
		\"maqh\" : 956,
		\"name\" : \"Huyện Hồng Dân\",
		\"type\" : \"Huyện\",
		\"matp\" : 95,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-hong-dan\"
	},
	{
		\"maqh\" : 957,
		\"name\" : \"Huyện Phước Long\",
		\"type\" : \"Huyện\",
		\"matp\" : 95,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-phuoc-long\"
	},
	{
		\"maqh\" : 958,
		\"name\" : \"Huyện Vĩnh Lợi\",
		\"type\" : \"Huyện\",
		\"matp\" : 95,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-vinh-loi\"
	},
	{
		\"maqh\" : 959,
		\"name\" : \"Thị xã Giá Rai\",
		\"type\" : \"Thị xã\",
		\"matp\" : 95,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thi-xa-gia-rai\"
	},
	{
		\"maqh\" : 960,
		\"name\" : \"Huyện Đông Hải\",
		\"type\" : \"Huyện\",
		\"matp\" : 95,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-dong-hai\"
	},
	{
		\"maqh\" : 961,
		\"name\" : \"Huyện Hoà Bình\",
		\"type\" : \"Huyện\",
		\"matp\" : 95,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-hoa-binh\"
	},
	{
		\"maqh\" : 964,
		\"name\" : \"Thành phố Cà Mau\",
		\"type\" : \"Thành phố\",
		\"matp\" : 96,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"thanh-pho-ca-mau\"
	},
	{
		\"maqh\" : 966,
		\"name\" : \"Huyện U Minh\",
		\"type\" : \"Huyện\",
		\"matp\" : 96,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-u-minh\"
	},
	{
		\"maqh\" : 967,
		\"name\" : \"Huyện Thới Bình\",
		\"type\" : \"Huyện\",
		\"matp\" : 96,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-thoi-binh\"
	},
	{
		\"maqh\" : 968,
		\"name\" : \"Huyện Trần Văn Thời\",
		\"type\" : \"Huyện\",
		\"matp\" : 96,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-tran-van-thoi\"
	},
	{
		\"maqh\" : 969,
		\"name\" : \"Huyện Cái Nước\",
		\"type\" : \"Huyện\",
		\"matp\" : 96,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-cai-nuoc\"
	},
	{
		\"maqh\" : 970,
		\"name\" : \"Huyện Đầm Dơi\",
		\"type\" : \"Huyện\",
		\"matp\" : 96,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-dam-doi\"
	},
	{
		\"maqh\" : 971,
		\"name\" : \"Huyện Năm Căn\",
		\"type\" : \"Huyện\",
		\"matp\" : 96,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-nam-can\"
	},
	{
		\"maqh\" : 972,
		\"name\" : \"Huyện Phú Tân\",
		\"type\" : \"Huyện\",
		\"matp\" : 96,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-phu-tan\"
	},
	{
		\"maqh\" : 973,
		\"name\" : \"Huyện Ngọc Hiển\",
		\"type\" : \"Huyện\",
		\"matp\" : 96,
		\"lat\" : null,
		\"lng\" : null,
		\"slug\" : \"huyen-ngoc-hien\"
	}
]}
");
        foreach ($data->district as $item) {
            \App\Models\District::create([
                'maqh' => $item->maqh,
                'name' => $item->name,
                'type' => $item->type,
                'matp' => $item->matp,
                'lat' => $item->lat,
                'lng' => $item->lng,
                'slug' => $item->slug,
            ]);
        }
    }
}
