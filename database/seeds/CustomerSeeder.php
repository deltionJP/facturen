<?php

use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('customers')->insert([
             'voorletter' => 'M',
             'achternaam' => 'Kraag',
             'tussenvoegsel' => '',
             'adres' => 'wegeweg 10',
             'postcode' => '7214PJ',
             'plaats' => 'Deventer',
             'email' => 'kraag@jordiepasman.nl',
         ]);
         DB::table('customers')->insert([
             'voorletter' => 'S',
             'achternaam' => 'Simons',
             'tussenvoegsel' => '',
             'adres' => 'wegeweg 10',
             'postcode' => '7214PJ',
             'plaats' => 'Deventer',
             'email' => 'kraag@Simons.nl',
         ]);
         DB::table('customers')->insert([
             'voorletter' => 'R',
             'achternaam' => 'Parel',
             'tussenvoegsel' => 'de',
             'adres' => 'snelweg 10',
             'postcode' => '7214PJ',
             'plaats' => 'Amsterdam',
             'email' => '',
         ]);

    }
}
