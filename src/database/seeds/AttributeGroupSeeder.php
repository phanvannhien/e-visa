<?php

use Illuminate\Database\Seeder;

use App\AttributeGroup;

class AttributeGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run( $typeID )
    {
        $arr = [
            [
                'name' => json_encode([
                    'vi' => 'Cơ bản',
                    'en' => 'General'
                ]),
                'position' => 1,
                'is_user_defined' => 0,
                'type_id' => $typeID,
            ],
            [
                'name' => json_encode([
                    'vi' => 'Mô tả',
                    'en' => 'Description'
                ]),
                'position' => 2,
                'is_user_defined' => 0,
                'type_id' => $typeID,
            ],
            [
                'name' => json_encode([
                    'vi' => 'Mô tả SEO',
                    'en' => 'Meta Description'
                ]),
                'position' => 3,
                'is_user_defined' => 0,
                'type_id' => $typeID,
            ],
            [
                'name' => json_encode([
                    'vi' => 'Giá',
                    'en' => 'Price'
                ]),
                'position' => 4,
                'is_user_defined' => 0,
                'type_id' => $typeID,
            ],
            [
                'name' => json_encode([
                    'vi' => 'Shipping',
                    'en' => 'Shipping'
                ]),
                'position' => 5,
                'is_user_defined' => 0,
                'type_id' => $typeID,
            ]
        ];

        foreach ( $arr as $item){
            AttributeGroup::create( $item );
        }
    }
}
