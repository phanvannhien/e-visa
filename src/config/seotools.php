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
            'google'    => '',
            'bing'      => '',
            'alexa'     => null,
            'pinterest' => '',
            'yandex'    => '70f55b2112c5b29a',
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
          'site'        => '@Evisa',
        ],
    ],
];
