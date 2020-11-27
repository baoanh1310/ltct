<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([[
            'contact_name'=>'Facebook',
            'contact_value'=>'https://facebook.com',
            'icon'=>'fab fa-facebook',
            'color'=>'#0000FF'
        ],[
            'contact_name'=>'Youtube',
            'contact_value'=>'https://youtube.com',
            'icon'=>'fab fa-youtube',
            'color'=>'#FF0000'
        ]]);
    }
}
