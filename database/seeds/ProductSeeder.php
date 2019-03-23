<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('productbestellingen')->insert([
            'factuurnummer'=> 201900,
            'omschrijving' => 'Ronde balen',
            'prijsperstuk' => 2.55,
            'aantal' => 2,
            'timestamp'=>Carbon::now()

            // 'customer_id' => 15000,
        ]);
        DB::table('productbestellingen')->insert([
            'factuurnummer'=> 201901,
            'omschrijving' => 'Ronde balen',
            'prijsperstuk' => 150,
            'aantal' => 2,
            'timestamp'=>Carbon::now()

            // 'customer_id' => 15002,
        ]);
        DB::table('productbestellingen')->insert([
            'factuurnummer'=> 201901,
            'omschrijving' => 'Ronde balen',
            'prijsperstuk' => 2.55,
            'aantal' => 22,
            'timestamp'=>Carbon::now()

        ]);
    }
}
