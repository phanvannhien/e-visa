<?php

return [
    'meta'      => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => "India Visa on Arrival - India visa Online", // set false to total remove
            'description'  => 'India Visa On Arrival - we wish to bring safer, faster and cheaper India visa service to customers, help you apply for a business or tourist visa on arrival', // set false to total remove
            'separator'    => ' - ',
            'keywords'     => ['E Visa',''],
            'canonical'    => false, // Set null for using Url::current(), set false to total remove
        ],

        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => 'Vs8HiKSpvEzgmyWHmD33MwJlFY-RLDd-2jKAhB1Hrrg',
            'bing'      => '5704D520D8E838ABF38F6AF2FCB4478F',
            'alexa'     => null,
            'pinterest' => '33d714c20826c7ee552f11eadd7df8a6',
            'yandex'    => '461ecaf782077905',
        ],
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => 'India Visa on Arrival - India visa Online', // set false to total remove
            'description' => 'India Visa On Arrival - we wish to bring safer, faster and cheaper India visa service to customers, help you apply for a business or tourist visa on arrival', // set false to total remove
            'url'         => false, // Set null for using Url::current(), set false to total remove
            'type'        => false,
            'site_name'   => false,
            'images'      => [],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
          'card'        => 'summary',
          'site'        => '@NhienPhanVan',
        ],
    ],
];
