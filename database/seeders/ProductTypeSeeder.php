<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $values = [
            ['name'=> 'Extended service contracts'],
            ['name'=> 'Physical damage insurance'],
            ['name'=> 'Guranteed asset protection'],
            ['name'=> 'Rental tracking'],
            ['name'=> 'Loss damage waivers']
        ];
        DB::table('product_types')->insert($values);   
    }
}
