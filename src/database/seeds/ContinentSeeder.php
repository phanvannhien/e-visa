<?php

use Illuminate\Database\Seeder;

use App\Models\Continents;

class ContinentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = json_decode("{
            \"continents\": [
                {
                    \"id\" : 1,
                    \"code\" : \"AF\",
                    \"name\" : \"Africa\"
                },
                {
                    \"id\" : 2,
                    \"code\" : \"AN\",
                    \"name\" : \"Antarctica\"
                },
                {
                    \"id\" : 3,
                    \"code\" : \"AS\",
                    \"name\" : \"Asia\"
                },
                {
                    \"id\" : 4,
                    \"code\" : \"EU\",
                    \"name\" : \"Europe\"
                },
                {
                    \"id\" : 5,
                    \"code\" : \"NA\",
                    \"name\" : \"North America\"
                },
                {
                    \"id\" : 6,
                    \"code\" : \"OC\",
                    \"name\" : \"Oceania\"
                },
                {
                    \"id\" : 7,
                    \"code\" : \"SA\",
                    \"name\" : \"South America\"
                }
            ]}
        ");

        foreach ( $data->continents as $continent ){
            Continents::create(array(
                'id' => $continent->id,
                'code' => $continent->code,
                'name' => $continent->name,
            ));
        }


    }
}
