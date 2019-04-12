<?php

use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = json_decode("{
\"cities\": [
	{
		\"matp\" : 1,
		\"name\" : \"Thành phố Hà Nội\",
		\"type\" : \"Thành phố Trung ương\",
		\"slug\" : \"thanh-pho-ha-noi\"
	},
	{
		\"matp\" : 2,
		\"name\" : \"Tỉnh Hà Giang\",
		\"type\" : \"Tỉnh\",
		\"slug\" : \"tinh-ha-giang\"
	},
	{
		\"matp\" : 4,
		\"name\" : \"Tỉnh Cao Bằng\",
		\"type\" : \"Tỉnh\",
		\"slug\" : \"tinh-cao-bang\"
	},
	{
		\"matp\" : 6,
		\"name\" : \"Tỉnh Bắc Kạn\",
		\"type\" : \"Tỉnh\",
		\"slug\" : \"tinh-bac-kan\"
	},
	{
		\"matp\" : 8,
		\"name\" : \"Tỉnh Tuyên Quang\",
		\"type\" : \"Tỉnh\",
		\"slug\" : \"tinh-tuyen-quang\"
	},
	{
		\"matp\" : 10,
		\"name\" : \"Tỉnh Lào Cai\",
		\"type\" : \"Tỉnh\",
		\"slug\" : \"tinh-lao-cai\"
	},
	{
		\"matp\" : 11,
		\"name\" : \"Tỉnh Điện Biên\",
		\"type\" : \"Tỉnh\",
		\"slug\" : \"tinh-dien-bien\"
	},
	{
		\"matp\" : 12,
		\"name\" : \"Tỉnh Lai Châu\",
		\"type\" : \"Tỉnh\",
		\"slug\" : \"tinh-lai-chau\"
	},
	{
		\"matp\" : 14,
		\"name\" : \"Tỉnh Sơn La\",
		\"type\" : \"Tỉnh\",
		\"slug\" : \"tinh-son-la\"
	},
	{
		\"matp\" : 15,
		\"name\" : \"Tỉnh Yên Bái\",
		\"type\" : \"Tỉnh\",
		\"slug\" : \"tinh-yen-bai\"
	},
	{
		\"matp\" : 17,
		\"name\" : \"Tỉnh Hoà Bình\",
		\"type\" : \"Tỉnh\",
		\"slug\" : \"tinh-hoa-binh\"
	},
	{
		\"matp\" : 19,
		\"name\" : \"Tỉnh Thái Nguyên\",
		\"type\" : \"Tỉnh\",
		\"slug\" : \"tinh-thai-nguyen\"
	},
	{
		\"matp\" : 20,
		\"name\" : \"Tỉnh Lạng Sơn\",
		\"type\" : \"Tỉnh\",
		\"slug\" : \"tinh-lang-son\"
	},
	{
		\"matp\" : 22,
		\"name\" : \"Tỉnh Quảng Ninh\",
		\"type\" : \"Tỉnh\",
		\"slug\" : \"tinh-quang-ninh\"
	},
	{
		\"matp\" : 24,
		\"name\" : \"Tỉnh Bắc Giang\",
		\"type\" : \"Tỉnh\",
		\"slug\" : \"tinh-bac-giang\"
	},
	{
		\"matp\" : 25,
		\"name\" : \"Tỉnh Phú Thọ\",
		\"type\" : \"Tỉnh\",
		\"slug\" : \"tinh-phu-tho\"
	},
	{
		\"matp\" : 26,
		\"name\" : \"Tỉnh Vĩnh Phúc\",
		\"type\" : \"Tỉnh\",
		\"slug\" : \"tinh-vinh-phuc\"
	},
	{
		\"matp\" : 27,
		\"name\" : \"Tỉnh Bắc Ninh\",
		\"type\" : \"Tỉnh\",
		\"slug\" : \"tinh-bac-ninh\"
	},
	{
		\"matp\" : 30,
		\"name\" : \"Tỉnh Hải Dương\",
		\"type\" : \"Tỉnh\",
		\"slug\" : \"tinh-hai-duong\"
	},
	{
		\"matp\" : 31,
		\"name\" : \"Thành phố Hải Phòng\",
		\"type\" : \"Thành phố Trung ương\",
		\"slug\" : \"thanh-pho-hai-phong\"
	},
	{
		\"matp\" : 33,
		\"name\" : \"Tỉnh Hưng Yên\",
		\"type\" : \"Tỉnh\",
		\"slug\" : \"tinh-hung-yen\"
	},
	{
		\"matp\" : 34,
		\"name\" : \"Tỉnh Thái Bình\",
		\"type\" : \"Tỉnh\",
		\"slug\" : \"tinh-thai-binh\"
	},
	{
		\"matp\" : 35,
		\"name\" : \"Tỉnh Hà Nam\",
		\"type\" : \"Tỉnh\",
		\"slug\" : \"tinh-ha-nam\"
	},
	{
		\"matp\" : 36,
		\"name\" : \"Tỉnh Nam Định\",
		\"type\" : \"Tỉnh\",
		\"slug\" : \"tinh-nam-dinh\"
	},
	{
		\"matp\" : 37,
		\"name\" : \"Tỉnh Ninh Bình\",
		\"type\" : \"Tỉnh\",
		\"slug\" : \"tinh-ninh-binh\"
	},
	{
		\"matp\" : 38,
		\"name\" : \"Tỉnh Thanh Hóa\",
		\"type\" : \"Tỉnh\",
		\"slug\" : \"tinh-thanh-hoa\"
	},
	{
		\"matp\" : 40,
		\"name\" : \"Tỉnh Nghệ An\",
		\"type\" : \"Tỉnh\",
		\"slug\" : \"tinh-nghe-an\"
	},
	{
		\"matp\" : 42,
		\"name\" : \"Tỉnh Hà Tĩnh\",
		\"type\" : \"Tỉnh\",
		\"slug\" : \"tinh-ha-tinh\"
	},
	{
		\"matp\" : 44,
		\"name\" : \"Tỉnh Quảng Bình\",
		\"type\" : \"Tỉnh\",
		\"slug\" : \"tinh-quang-binh\"
	},
	{
		\"matp\" : 45,
		\"name\" : \"Tỉnh Quảng Trị\",
		\"type\" : \"Tỉnh\",
		\"slug\" : \"tinh-quang-tri\"
	},
	{
		\"matp\" : 46,
		\"name\" : \"Tỉnh Thừa Thiên Huế\",
		\"type\" : \"Tỉnh\",
		\"slug\" : \"tinh-thua-thien-hue\"
	},
	{
		\"matp\" : 48,
		\"name\" : \"Thành phố Đà Nẵng\",
		\"type\" : \"Thành phố Trung ương\",
		\"slug\" : \"thanh-pho-da-nang\"
	},
	{
		\"matp\" : 49,
		\"name\" : \"Tỉnh Quảng Nam\",
		\"type\" : \"Tỉnh\",
		\"slug\" : \"tinh-quang-nam\"
	},
	{
		\"matp\" : 51,
		\"name\" : \"Tỉnh Quảng Ngãi\",
		\"type\" : \"Tỉnh\",
		\"slug\" : \"tinh-quang-ngai\"
	},
	{
		\"matp\" : 52,
		\"name\" : \"Tỉnh Bình Định\",
		\"type\" : \"Tỉnh\",
		\"slug\" : \"tinh-binh-dinh\"
	},
	{
		\"matp\" : 54,
		\"name\" : \"Tỉnh Phú Yên\",
		\"type\" : \"Tỉnh\",
		\"slug\" : \"tinh-phu-yen\"
	},
	{
		\"matp\" : 56,
		\"name\" : \"Tỉnh Khánh Hòa\",
		\"type\" : \"Tỉnh\",
		\"slug\" : \"tinh-khanh-hoa\"
	},
	{
		\"matp\" : 58,
		\"name\" : \"Tỉnh Ninh Thuận\",
		\"type\" : \"Tỉnh\",
		\"slug\" : \"tinh-ninh-thuan\"
	},
	{
		\"matp\" : 60,
		\"name\" : \"Tỉnh Bình Thuận\",
		\"type\" : \"Tỉnh\",
		\"slug\" : \"tinh-binh-thuan\"
	},
	{
		\"matp\" : 62,
		\"name\" : \"Tỉnh Kon Tum\",
		\"type\" : \"Tỉnh\",
		\"slug\" : \"tinh-kon-tum\"
	},
	{
		\"matp\" : 64,
		\"name\" : \"Tỉnh Gia Lai\",
		\"type\" : \"Tỉnh\",
		\"slug\" : \"tinh-gia-lai\"
	},
	{
		\"matp\" : 66,
		\"name\" : \"Tỉnh Đắk Lắk\",
		\"type\" : \"Tỉnh\",
		\"slug\" : \"tinh-dak-lak\"
	},
	{
		\"matp\" : 67,
		\"name\" : \"Tỉnh Đắk Nông\",
		\"type\" : \"Tỉnh\",
		\"slug\" : \"tinh-dak-nong\"
	},
	{
		\"matp\" : 68,
		\"name\" : \"Tỉnh Lâm Đồng\",
		\"type\" : \"Tỉnh\",
		\"slug\" : \"tinh-lam-dong\"
	},
	{
		\"matp\" : 70,
		\"name\" : \"Tỉnh Bình Phước\",
		\"type\" : \"Tỉnh\",
		\"slug\" : \"tinh-binh-phuoc\"
	},
	{
		\"matp\" : 72,
		\"name\" : \"Tỉnh Tây Ninh\",
		\"type\" : \"Tỉnh\",
		\"slug\" : \"tinh-tay-ninh\"
	},
	{
		\"matp\" : 74,
		\"name\" : \"Tỉnh Bình Dương\",
		\"type\" : \"Tỉnh\",
		\"slug\" : \"tinh-binh-duong\"
	},
	{
		\"matp\" : 75,
		\"name\" : \"Tỉnh Đồng Nai\",
		\"type\" : \"Tỉnh\",
		\"slug\" : \"tinh-dong-nai\"
	},
	{
		\"matp\" : 77,
		\"name\" : \"Tỉnh Bà Rịa - Vũng Tàu\",
		\"type\" : \"Tỉnh\",
		\"slug\" : \"tinh-ba-ria-vung-tau\"
	},
	{
		\"matp\" : 79,
		\"name\" : \"Thành phố Hồ Chí Minh\",
		\"type\" : \"Thành phố Trung ương\",
		\"slug\" : \"thanh-pho-ho-chi-minh\"
	},
	{
		\"matp\" : 80,
		\"name\" : \"Tỉnh Long An\",
		\"type\" : \"Tỉnh\",
		\"slug\" : \"tinh-long-an\"
	},
	{
		\"matp\" : 82,
		\"name\" : \"Tỉnh Tiền Giang\",
		\"type\" : \"Tỉnh\",
		\"slug\" : \"tinh-tien-giang\"
	},
	{
		\"matp\" : 83,
		\"name\" : \"Tỉnh Bến Tre\",
		\"type\" : \"Tỉnh\",
		\"slug\" : \"tinh-ben-tre\"
	},
	{
		\"matp\" : 84,
		\"name\" : \"Tỉnh Trà Vinh\",
		\"type\" : \"Tỉnh\",
		\"slug\" : \"tinh-tra-vinh\"
	},
	{
		\"matp\" : 86,
		\"name\" : \"Tỉnh Vĩnh Long\",
		\"type\" : \"Tỉnh\",
		\"slug\" : \"tinh-vinh-long\"
	},
	{
		\"matp\" : 87,
		\"name\" : \"Tỉnh Đồng Tháp\",
		\"type\" : \"Tỉnh\",
		\"slug\" : \"tinh-dong-thap\"
	},
	{
		\"matp\" : 89,
		\"name\" : \"Tỉnh An Giang\",
		\"type\" : \"Tỉnh\",
		\"slug\" : \"tinh-an-giang\"
	},
	{
		\"matp\" : 91,
		\"name\" : \"Tỉnh Kiên Giang\",
		\"type\" : \"Tỉnh\",
		\"slug\" : \"tinh-kien-giang\"
	},
	{
		\"matp\" : 92,
		\"name\" : \"Thành phố Cần Thơ\",
		\"type\" : \"Thành phố Trung ương\",
		\"slug\" : \"thanh-pho-can-tho\"
	},
	{
		\"matp\" : 93,
		\"name\" : \"Tỉnh Hậu Giang\",
		\"type\" : \"Tỉnh\",
		\"slug\" : \"tinh-hau-giang\"
	},
	{
		\"matp\" : 94,
		\"name\" : \"Tỉnh Sóc Trăng\",
		\"type\" : \"Tỉnh\",
		\"slug\" : \"tinh-soc-trang\"
	},
	{
		\"matp\" : 95,
		\"name\" : \"Tỉnh Bạc Liêu\",
		\"type\" : \"Tỉnh\",
		\"slug\" : \"tinh-bac-lieu\"
	},
	{
		\"matp\" : 96,
		\"name\" : \"Tỉnh Cà Mau\",
		\"type\" : \"Tỉnh\",
		\"slug\" : \"tinh-ca-mau\"
	}
]}
");

        foreach( $data->cities as $item ){
            \App\Models\Cities::create([
                'matp' => $item->matp,
                'name' => $item->name,
                'type' => $item->type,
                'slug' => $item->slug
            ]);
        }
    }
}
