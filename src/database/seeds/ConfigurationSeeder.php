<?php

use Illuminate\Database\Seeder;

use App\Models\Configuration;

class ConfigurationSeeder extends Seeder
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
                'label' => 'Site title',
                'name' => 'site_title',
                'value' => 'Company name',
                'type' => 'text',
            ],
            [
                'label' => 'Site keywords',
                'name' => 'site_keywords',
                'value' => 'keywords 1',
                'type' => 'text',
            ],
            [
                'label' => 'Phone',
                'name' => 'phone',
                'value' => '0902181852',
                'type' => 'text',
            ],
            [
                'label' => 'Email',
                'name' => 'email',
                'value' => 'phanvannhien@gmail.com',
                'type' => 'text',
            ],
            [
                'label' => 'Facebook App ID',
                'name' => 'facebook_app_id',
                'value' => '',
                'type' => 'text',
            ],
            [
                'label' => 'Facebook Secret',
                'name' => 'facebook_secret',
                'value' => '',
                'type' => 'text',
            ],
            [
                'label' => 'Google client ID',
                'name' => 'google_client_id',
                'value' => '',
                'type' => 'text',
            ],
            [
                'label' => 'Google client ecret',
                'name' => 'google_client_secret',
                'value' => '',
                'type' => 'text',
            ],
            [
                'label' => 'Goole API Key',
                'name' => 'google_api_key',
                'value' => '',
                'type' => 'text',
            ],
            [
                'label' => 'Facebook Page Url',
                'name' => 'facebook_page_url',
                'value' => '',
                'type' => 'text',
            ],
            [
                'label' => 'Twitter Url',
                'name' => 'twitter_url',
                'value' => '',
                'type' => 'text',
            ],
            [
                'label' => 'Instagram Url',
                'name' => 'instagram_url',
                'value' => '',
                'type' => 'text',
            ],
            [
                'label' => 'Pinterest Url',
                'name' => 'pinterest_url',
                'value' => '',
                'type' => 'text',
            ],
            [
                'label' => 'Google Plus Url',
                'name' => 'google_plus_url',
                'value' => '',
                'type' => 'text',
            ],
            [
                'label' => 'Linkedin Url',
                'name' => 'linkedin_url',
                'value' => '',
                'type' => 'text',
            ]
            ,
            [
                'label' => 'Youtube Url',
                'name' => 'youtube_url',
                'value' => '',
                'type' => 'text',
            ]

        ];

        foreach ( $arr as $item ){
            Configuration::create($item);
        }
    }
}
