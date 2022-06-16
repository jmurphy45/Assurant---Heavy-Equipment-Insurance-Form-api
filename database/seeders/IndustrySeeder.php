<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IndustrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $values = [
            ['name'=> 'Construction'],
            ['name'=> 'Agriculture'],
            ['name'=> 'Forestry'],
            ['name'=> 'Trucking']
        ];
        DB::table('industries')->insert($values);    
    }
}
