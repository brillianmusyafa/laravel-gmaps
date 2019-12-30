<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'setting_name' => 'app_name',
            'setting_value' => 'BS Maps'
        ]);
        DB::table('settings')->insert([
            'setting_name' => 'gmaps_api_key',
            'setting_value' => 'fill use your api key'
        ]);
        DB::table('settings')->insert([
            'setting_name' => 'latitude_centre',
            'setting_value' => '-6.987237'
        ]);
        DB::table('settings')->insert([
            'setting_name' => 'longitude_centre',
            'setting_value' => '109.103146'
        ]);
        DB::table('settings')->insert([
            'setting_name' => 'set_zoom',
            'setting_value' => '13'
        ]);
    }
}
