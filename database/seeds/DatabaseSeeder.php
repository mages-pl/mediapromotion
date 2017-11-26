<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        DB::table('products')->insert(
[
[
    'nazwa_produktu' => 'Komoda Meety I',
    'obrazek_produktu' => 'https://www.sfmeble.pl/product_picture/fit_in_1200x900/komoda-meety-i.jpg',
    'cena_produktu' => '1000'
    
],
[
    'nazwa_produktu' => 'Krzesło Dima ciemnoszare',
    'obrazek_produktu' => 'https://www.sfmeble.pl/product_picture/fit_in_1200x900/krzeslo-dima-ciemnoszare_4.jpg',
    'cena_produktu' => '240'
 
],
[
    'nazwa_produktu' => 'Krzesło Grace Bess białe nogi drewniane',
    'obrazek_produktu' => 'https://www.sfmeble.pl/product_picture/fit_in_1200x900/krzeslo-grace-bess-biale-nogi-drewniane_1.jpg',
    'cena_produktu' => '510'
 
] 
]);

    }
}
