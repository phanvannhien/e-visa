<?php

use Illuminate\Database\Seeder;

use App\TypeAttributeGroup;


class AttributeGroupRelationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr = [
            [
                'attribute_id' => 1, // sku
                'attribute_group_id' => 1,
                'position' => 1
            ],
            [
                'attribute_id' => 2, // name
                'attribute_group_id' => 1,
                'position' => 2
            ],
            [
                'attribute_id' => 4, // url
                'attribute_group_id' => 1,
                'position' => 3
            ],
            [
                'attribute_id' => 5, // is_new
                'attribute_group_id' => 1,
                'position' => 4
            ],
            [
                'attribute_id' => 6, // featured
                'attribute_group_id' => 1,
                'position' => 5
            ],
            [
                'attribute_id' => 7, // visible
                'attribute_group_id' => 1,
                'position' => 6
            ],
            [
                'attribute_id' => 8, // status
                'attribute_group_id' => 1,
                'position' => 7
            ],

            [
                'attribute_id' => 9, // sort desc
                'attribute_group_id' => 2, // description
                'position' => 1
            ],
            [
                'attribute_id' => 10, // desc
                'attribute_group_id' => 2, // description
                'position' => 2
            ],
            [
                'attribute_id' => 3, // price
                'attribute_group_id' => 4, // price
                'position' => 1
            ]
            ,
            [
                'attribute_id' => 11, // sale
                'attribute_group_id' => 4, // price
                'position' => 2
            ],
            [
                'attribute_id' => 12, // sale from
                'attribute_group_id' => 4, // price
                'position' => 3
            ],
            [
                'attribute_id' => 13, // sale to
                'attribute_group_id' => 4, // price
                'position' => 4
            ],
            [
                'attribute_id' => 14, // width
                'attribute_group_id' => 5, // ship
                'position' => 1
            ],
            [
                'attribute_id' => 15, // height
                'attribute_group_id' => 5, // ship
                'position' => 2
            ],
            [
                'attribute_id' => 16, // depth
                'attribute_group_id' => 5, // ship
                'position' => 3
            ]
            ,
            [
                'attribute_id' => 17, // weight
                'attribute_group_id' => 5, // ship
                'position' => 4
            ]
        ];

        foreach ( $arr as $item ){
            TypeAttributeGroup::create($item);
        }
    }
}
