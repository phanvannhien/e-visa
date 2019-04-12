<?php

return [
    'client_id' => env('PAYPAL_CLIENT_ID','AdExFjkHRub940LXpUlad5eYhO2B7tbs9-A2BEUlxpX_5NCMe_hmsh6e0uAS-gXXzT5XR-bJpqk05kT-'),
    'secret' => env('PAYPAL_SECRET','EH_VwDs-ni0EHOOqJqzXwhTf7NwvG6GfoVAdwCWxq-WS4ulxDWtkXz_nvQ0k0axbT3-RfLmMPjtJTjcV'),
    'settings' => array(
        'mode' => env('PAYPAL_MODE','sandbox'),
        'http.ConnectionTimeOut' => 60,
        'log.LogEnabled' => true,
        'log.FileName' => storage_path() . '/logs/paypal.log',
        'log.LogLevel' => 'ERROR'
    ),
];