<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdvertCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $categories = [
            ['name' => 'Tenders'],
            ['name' => 'Job Advert'],
            ['name' => 'Public Notices'],

        ];
        DB::table('advert_categories')->insert($categories);
    }
}
