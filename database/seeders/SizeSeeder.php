<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $sizes = [
            ['name' => 'Full Page'],
            ['name' => 'Half Page'],
            ['name' => 'Quarter Page'],
            ['name' => '1/8 Pge'],
            ['name' => '25*3 Page Size'],
            ['name' => '25*4 Page Size'],
            ['name' => '20*3 Page Size'],
            ['name' => '33*4 Page Size'],
            ['name' => 'Front Strip'],
            ['name' => 'Back Strip'],

        ];
        DB::table('sizes')->insert($sizes);
    }
}
