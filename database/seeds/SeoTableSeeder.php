<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('seo')->insert([
            'page' => "default_seo",
            'keyword' => '嘉鴻塑膠',
            'title' => '嘉鴻塑膠',
            'description' => '嘉鴻塑膠'
        ]);
    }
}
