<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('facturen')->insert([
           'factuurnummer'=> 201900,
           'customer_id'=> 15000,
           'factuurdatum'=>Carbon::now()->format('Y-m-d H:i:s'),
           'factuurtijd'=>Carbon::now()->format('H:i:s'),
           'timestamp'=>Carbon::now()
      ]);
         DB::table('facturen')->insert([
           'factuurnummer'=> 201901,
           'customer_id'=> 15002,
           'factuurdatum'=>Carbon::now()->format('Y-m-d H:i:s'),
           'factuurtijd'=>Carbon::now()->format('H:i:s'),
           'timestamp'=>Carbon::now()
      ]);
    }
}
