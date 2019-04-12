<?php

return [
    'cash_on_delivery' => [
        'code' => 'cash_on_delivery',
        'title'=> 'Thanh toán khi nhận hàng',
        'description' =>  'Thanh toán khi nhận hàng',
        'class' => 'App\Payment\CashOnDelivery',
        'active' => true
    ],

    'money_transfer' => [
        'code' => 'money_transfer',
        'title' =>  'Thanh toán chuyển khoản ngân hàng',
        'description' => 'Money Transfer',
        'class' => 'App\Payment\MoneyTransfer',
        'active' => true
    ],

    'momo' => [
        'code' => 'moo',
        'title' => 'Thanh toán qua MoMo',
        'description' => '',
        'class' => 'App\Payment\MoMo',
        'active' => true,
        'fields' => [
            'sandbox' => [
                'type' => 'text',
                'value' => true
            ],
            'partner_code' => [
                'type' => 'text',
                'value' => 'MOMOWUYZ20190221'
            ],
            'access_key' => [
                'type' => 'text',
                'value' => 'nwXF4kJmoFUG8aGx'
            ],
            'secret_key' => [
                'type' => 'text',
                'value' => 'eYYFKlI5HymwJhLpU0atrELfT7132tmo'
            ],
            'end_point_test' => [
                'type' => 'text',
                'value' => 'https://test-payment.momo.vn/gw_payment/transactionProcessor',
            ],
            'end_point_production' => [
                'type' => 'text',
                'value' => 'https://payment.momo.vn'
            ]

        ]

    ],

];

?>