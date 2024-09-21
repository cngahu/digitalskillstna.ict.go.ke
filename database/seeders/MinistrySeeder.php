<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MinistrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $ministries = [
            ['name' => 'OFFICE OF THE PRIME CABINET SECRETARY & MINISTRY OF FOREIGN AND DIASPORA AFFAIRS'],
            ['name' => 'MINISTRY OF INTERIOR AND NATIONAL ADMINISTRATION'],
            ['name' => 'MINISTRY OF DEFENCE'],
            ['name' => 'THE NATIONAL TREASURY AND ECONOMIC PLANNING'],
            ['name' => 'MINISTRY OF PUBLIC SERVICE, PERFORMANCE AND DELIVERY MANAGEMENT'],
            ['name' => 'MINISTRY OF ROADS AND TRANSPORT'],
            ['name' => 'MINISTRY OF LANDS, PUBLIC WORKS, HOUSING AND URBAN DEVELOPMENT'],
            ['name' => 'MINISTRY OF INFORMATION, COMMUNICATIONS AND THE DIGITAL ECONOMY'],
            ['name' => 'MINISTRY OF HEALTH'],
            ['name' => 'MINISTRY OF EDUCATION'],
            ['name' => 'MINISTRY OF AGRICULTURE AND LIVESTOCK DEVELOPMENT'],
            ['name' => 'MINISTRY OF INVESTMENTS, TRADE AND INDUSTRY'],
            ['name' => 'MINISTRY OF CO-OPERATIVES AND MICRO, SMALL AND MEDIUM ENTERPRISES (MSMEs) DEVELOPMENT'],
            ['name' => 'MINISTRY OF YOUTH AFFAIRS, CREATIVE ECONOMY AND SPORTS'],
            ['name' => 'MINISTRY OF ENVIRONMENT, CLIMATE CHANGE AND FORESTRY'],
            ['name' => 'MINISTRY OF TOURISM AND WILDLIFE'],
            ['name' => 'MINISTRY OF GENDER, CULTURE, THE ARTS & HERITAGE'],
            ['name' => 'MINISTRY OF WATER, SANITATION AND IRRIGATION'],
            ['name' => 'MINISTRY OF ENERGY AND PETROLEUM'],
            ['name' => 'MINISTRY OF LABOUR AND SOCIAL PROTECTION'],
            ['name' => 'MINISTRY OF EAST AFRICAN COMMUNITY (EAC), THE ASALs AND REGIONAL DEVELOPMENT'],
            ['name' => 'MINISTRY OF MINING, BLUE ECONOMY AND MARITIME AFFAIRS'],
            ['name' => 'THE STATE LAW OFFICE'],

        ];
        DB::table('ministries')->insert($ministries);
    }
}
