<?php

return [
    'price_suffix' => 'VND',
    'type' => [
        'simple',
        'configurable'
    ],
    'attribute_type' => [
        'text','textarea','boolean','select','date','json','password','tel'
    ],
    'order' => [
        'title' => [
            'asc' => 'Tên A-Z',
            'desc' => 'Tên Z-A'
        ],
        'price' => [
            'asc' => 'Giá tăng dần',
            'desc' => 'Giá giảm dần'
        ],
        'created_at' => [
            'desc' => 'Mới nhất',
            'asc' => 'Cũ nhất'
        ],
        'viewed' => [
            'desc' => 'Xem nhiều'
        ],
    ]
];