<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PriceRangeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $values = [
            ['range'=> '$0-$999'],
            ['range'=> '$1000-$4999'],
            ['range'=> '$5000-$9999'],
            ['range'=> '$10000+']
        ];
        DB::table('price_ranges')->insert($values);    
    }
}
