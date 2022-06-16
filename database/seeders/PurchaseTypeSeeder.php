<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PurchaseTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $values = [
            ['name'=> 'Renting'],
            ['name'=> 'Leasing'],
            ['name'=> 'Purchase']
        ];
        DB::table('purchase_types')->insert($values);   
    }
}
