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


        DB::table('sliders')->insert(
[
[
'nazwa_slidera' => 'Slider1',
'opis_slidera' => 'opis 1',
'obrazek_slidera' => '1.jpg',
'status_slidera' => 1
],
[
    'nazwa_slidera' => 'Slider2',
    'opis_slidera' => 'opis 2',
    'obrazek_slidera' => '2.jpg',
    'status_slidera' => 1
    ],
    [
        'nazwa_slidera' => 'Slider3',
        'opis_slidera' => 'opis 3',
        'obrazek_slidera' => '3.jpg',
        'status_slidera' => 1
        ],



]
        );

        DB::table('roles')->insert([
            [
            'nazwa_roli' => 'User',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
         ],
            [
                'nazwa_roli' => 'Moderator',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
             
            ],
            [
                'nazwa_roli' => 'Admin',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
             
            ]
        ]
    
    
    );


DB::table('users')->insert(
[
'name' => 'admin',
'email' => '1@1.pl',
'password' => bcrypt('1'),
'status_uzytkownika' => 1,
'role_id' => 3
]
);

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


DB::table('categories')->insert([
    [
        'nazwa_kategorii' => 'Meble',
        'glowna' => '1',
        'status_kategorii' => '1',
        'id_glownej_kategorii' => '0',	
        'tag_kategorii' => 'meble'
        
    ],
    [
        'nazwa_kategorii' => 'Oświetlenie',
        'glowna' => '1',
        'status_kategorii' => '1',
        'id_glownej_kategorii' => '0',	
        'tag_kategorii' => 'oswietlenie'
        
    ],
    [
        'nazwa_kategorii' => 'Dodatki',
        'glowna' => '1',
        'status_kategorii' => '1',
        'id_glownej_kategorii' => '0',	
        'tag_kategorii' => 'dodatki'
        
    ],
    
    
    
    [
        'nazwa_kategorii' => 'Komody',
        'glowna' => '0',
        'status_kategorii' => '1',
        'id_glownej_kategorii' => '1',	
        'tag_kategorii' => 'komody'
        
    ],
    
    [
        'nazwa_kategorii' => 'Regały',
        'glowna' => '0',
        'status_kategorii' => '1',
        'id_glownej_kategorii' => '1',	
        'tag_kategorii' => 'regaly'
        
    ],
    
    
    [
        'nazwa_kategorii' => 'Witryny',
        'glowna' => '0',
        'status_kategorii' => '1',
        'id_glownej_kategorii' => '1',	
        'tag_kategorii' => 'witryny'
        
    ],
    
    
    [
        'nazwa_kategorii' => 'Kredensy',
        'glowna' => '0',
        'status_kategorii' => '1',
        'id_glownej_kategorii' => '1',	
        'tag_kategorii' => 'kredensy'
        
    ],
    
    
    [
        'nazwa_kategorii' => 'Szafy',
        'glowna' => '0',
        'status_kategorii' => '1',
        'id_glownej_kategorii' => '1',	
        'tag_kategorii' => 'szafy'
        
    ],
    
    
    [
        'nazwa_kategorii' => 'Pólki',
        'glowna' => '0',
        'status_kategorii' => '1',
        'id_glownej_kategorii' => '1',	
        'tag_kategorii' => 'polki'
        
    ],
    
    
    [
        'nazwa_kategorii' => 'Stoły',
        'glowna' => '0',
        'status_kategorii' => '1',
        'id_glownej_kategorii' => '1',	
        'tag_kategorii' => 'stoly'
        
    ],
    
    
    [
        'nazwa_kategorii' => 'Krzesła',
        'glowna' => '0',
        'status_kategorii' => '1',
        'id_glownej_kategorii' => '1',	
        'tag_kategorii' => 'krzesla'
        
    ],
    
    
    [
        'nazwa_kategorii' => 'Łózka',
        'glowna' => '0',
        'status_kategorii' => '1',
        'id_glownej_kategorii' => '1',	
        'tag_kategorii' => 'lozka'
        
    ],
    
    
    [
        'nazwa_kategorii' => 'Skrzynie',
        'glowna' => '0',
        'status_kategorii' => '1',
        'id_glownej_kategorii' => '1',	
        'tag_kategorii' => 'skrzynie'
        
    ],
    [
        'nazwa_kategorii' => 'Skrzynie',
        'glowna' => '0',
        'status_kategorii' => '1',
        'id_glownej_kategorii' => '1',	
        'tag_kategorii' => 'skrzynie'
        
    ],
    [
        'nazwa_kategorii' => 'Organizery',
        'glowna' => '0',
        'status_kategorii' => '1',
        'id_glownej_kategorii' => '1',	
        'tag_kategorii' => 'organizery'
        
    ],
    [
        'nazwa_kategorii' => 'Stoliki',
        'glowna' => '0',
        'status_kategorii' => '1',
        'id_glownej_kategorii' => '1',	
        'tag_kategorii' => 'stoliki'
        
    ],
    [
        'nazwa_kategorii' => 'Biurka',
        'glowna' => '0',
        'status_kategorii' => '1',
        'id_glownej_kategorii' => '1',	
        'tag_kategorii' => 'biurka'
        
    ],
    [
        'nazwa_kategorii' => 'Toaletki',
        'glowna' => '0',
        'status_kategorii' => '1',
        'id_glownej_kategorii' => '1',	
        'tag_kategorii' => 'Toaletki'
        
    ],
    [
        'nazwa_kategorii' => 'Komody RTV',
        'glowna' => '0',
        'status_kategorii' => '1',
        'id_glownej_kategorii' => '1',	
        'tag_kategorii' => 'komody-rtv'
        
    ],
    
    [
        'nazwa_kategorii' => 'Mebloscianki',
        'glowna' => '0',
        'status_kategorii' => '1',
        'id_glownej_kategorii' => '1',	
        'tag_kategorii' => 'mebloscianki'
        
    ],
    [
        'nazwa_kategorii' => 'Meble łazienkowe',
        'glowna' => '0',
        'status_kategorii' => '1',
        'id_glownej_kategorii' => '1',	
        'tag_kategorii' => 'meble-lazienkowe'
        
    ],
    [
        'nazwa_kategorii' => 'Lustra',
        'glowna' => '0',
        'status_kategorii' => '1',
        'id_glownej_kategorii' => '1',	
        'tag_kategorii' => 'lustra'
        
    ],
    
    [
        'nazwa_kategorii' => 'Fotele',
        'glowna' => '0',
        'status_kategorii' => '1',
        'id_glownej_kategorii' => '1',	
        'tag_kategorii' => 'fotele'
        
    ],
    
    [
        'nazwa_kategorii' => 'Szafki nocne',
        'glowna' => '0',
        'status_kategorii' => '1',
        'id_glownej_kategorii' => '1',	
        'tag_kategorii' => 'szafki-nocne'
        
    ],
    
    
    [
        'nazwa_kategorii' => 'Stoły i krzesła',
        'glowna' => '0',
        'status_kategorii' => '1',
        'id_glownej_kategorii' => '1',	
        'tag_kategorii' => 'stoly-krzesla'
        
    ],
    
    [
        'nazwa_kategorii' => 'Zestawy',
        'glowna' => '0',
        'status_kategorii' => '1',
        'id_glownej_kategorii' => '1',	
        'tag_kategorii' => 'zestawy'
        
    ],
    
    
    
    
    [
        'nazwa_kategorii' => 'Lampy stołowe',
        'glowna' => '0',
        'status_kategorii' => '1',
        'id_glownej_kategorii' => '2',	
        'tag_kategorii' => 'lampy-stolowe'
        
    ],
    
    
    [
        'nazwa_kategorii' => 'Żyrandole',
        'glowna' => '0',
        'status_kategorii' => '1',
        'id_glownej_kategorii' => '2',	
        'tag_kategorii' => 'zyrandole'
        
    ],
    
    
    [
        'nazwa_kategorii' => 'Kinkiety',
        'glowna' => '0',
        'status_kategorii' => '1',
        'id_glownej_kategorii' => '2',	
        'tag_kategorii' => 'kinkiety'
        
    ],
    
    
    [
        'nazwa_kategorii' => 'Klosze',
        'glowna' => '0',
        'status_kategorii' => '1',
        'id_glownej_kategorii' => '2',	
        'tag_kategorii' => 'klosze'
        
    ],
    
    
    [
        'nazwa_kategorii' => 'Oswietlenie LED',
        'glowna' => '0',
        'status_kategorii' => '1',
        'id_glownej_kategorii' => '2',	
        'tag_kategorii' => 'oswietlenie-led'
        
    ],
    
    
    [
        'nazwa_kategorii' => 'Lampy wiszące',
        'glowna' => '0',
        'status_kategorii' => '1',
        'id_glownej_kategorii' => '2',	
        'tag_kategorii' => 'lampy-wiszace'
        
    ],
    
    
    
    [
        'nazwa_kategorii' => 'Lampy podłogowe',
        'glowna' => '0',
        'status_kategorii' => '1',
        'id_glownej_kategorii' => '2',	
        'tag_kategorii' => 'lampy-podlogowe'
        
    ],
    
    
    
    [
        'nazwa_kategorii' => 'Akcesoria oswietleniowe',
        'glowna' => '0',
        'status_kategorii' => '1',
        'id_glownej_kategorii' => '2',	
        'tag_kategorii' => 'akcesoria-oswietleniowe'
        
    ],
    
    
    
    
    
    [
        'nazwa_kategorii' => 'Poduszki',
        'glowna' => '0',
        'status_kategorii' => '1',
        'id_glownej_kategorii' => '3',	
        'tag_kategorii' => 'poduszki'
        
    ],
    
    
    
    [
        'nazwa_kategorii' => 'Ramki',
        'glowna' => '0',
        'status_kategorii' => '1',
        'id_glownej_kategorii' => '3',	
        'tag_kategorii' => 'ramki'
        
    ],
    
    
    
    [
        'nazwa_kategorii' => 'Dywany',
        'glowna' => '0',
        'status_kategorii' => '1',
        'id_glownej_kategorii' => '3',	
        'tag_kategorii' => 'dywany'
        
    ],
    
    
    
    [
        'nazwa_kategorii' => 'Zegary',
        'glowna' => '0',
        'status_kategorii' => '1',
        'id_glownej_kategorii' => '3',	
        'tag_kategorii' => 'zegary'
        
    ],
    
    
    
    [
        'nazwa_kategorii' => 'Swieczniki',
        'glowna' => '0',
        'status_kategorii' => '1',
        'id_glownej_kategorii' => '3',	
        'tag_kategorii' => 'swieczniki'
        
    ],
    
    [
        'nazwa_kategorii' => 'Ceramika',
        'glowna' => '0',
        'status_kategorii' => '1',
        'id_glownej_kategorii' => '3',	
        'tag_kategorii' => 'ceramika'
        
    ],
    
    [
        'nazwa_kategorii' => 'Obrazy',
        'glowna' => '0',
        'status_kategorii' => '1',
        'id_glownej_kategorii' => '3',	
        'tag_kategorii' => 'obrazy'
        
    ],
    [
        'nazwa_kategorii' => 'Wieszaki',
        'glowna' => '0',
        'status_kategorii' => '1',
        'id_glownej_kategorii' => '3',	
        'tag_kategorii' => 'wieszaki'
        
    ],
    
    
    [
        'nazwa_kategorii' => 'Pozostałe',
        'glowna' => '0',
        'status_kategorii' => '1',
        'id_glownej_kategorii' => '3',	
        'tag_kategorii' => 'pozostale'
        
    ],
    
    
    
    [
        'nazwa_kategorii' => 'Akcesoria oswietleniowe',
        'glowna' => '0',
        'status_kategorii' => '1',
        'id_glownej_kategorii' => '2',	
        'tag_kategorii' => 'akcesoria-oswietleniowe'
        
    ],
    
    
    
    [
        'nazwa_kategorii' => 'Akcesoria oswietleniowe',
        'glowna' => '0',
        'status_kategorii' => '1',
        'id_glownej_kategorii' => '2',	
        'tag_kategorii' => 'akcesoria-oswietleniowe'
        
    ],
            ]);

            DB::table('shops')->insert(
                [
                'nazwa_sklepu' => 'Patiomeble',
                'opis_sklepu' => 'Patiomeble',
                'link_sklepu' => 'https://patiomeble.eu',
                'xml_sklepu' => 'http://www.patiomeble.eu/dostepnosci/patiomeble-dostepnosci.xml',
                'user_id' => 1
                ]
                        );
                
                        DB::table('settings')->insert(
                            [
                        'user_id' => 1
                        ]);
    
                    }
    
}
