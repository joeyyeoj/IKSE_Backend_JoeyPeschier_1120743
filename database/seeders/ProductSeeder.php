<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => '15s-fq2400nd 15.6 inch full hd laptop',
            'brand' => 'HP',
            'price' => 499,
            'description' => 'Blijf verbonden met wat voor jou belangrijk is met een lange accuwerktijd en een dun en mobiel ontwerp met flinterdunne randen. De HP Laptop 15s-fq2400nd (15-inch) is ontwikkeld voor iedereen die overal productief wil blijven en optimaal van
            films en videos wil genieten en biedt betrouwbare prestaties met een groot display, waardoor je de hele dag kunt streamen, internetten en werken.',
            'imagePath' => 'https://images.wehkamp.nl/i/wehkamp/16674269_pb_01/hp-15s-fq2400nd-laptop-zilver-0195697223433.jpg?w=792',
        ]);

        DB::table('products')->insert([
            'name' => 'ideapad 5 14itl05 14 inch full hd laptop',
            'brand' => 'Lenovo',
            'price' => 649,
            'description' => 'De Lenovo IdeaPad 5 (82FE00M7MH) is een perfecte laptop om te gebruiken voor je studie of werk.  Het apparaat beschikt over een 14-inch Full HD scherm en heeft een stijlvol, slank en lichtgewicht ontwerp. Met een Intel Core i5-1135G7 processor, 8 GB RAM geheugen en 512 GB SSD opslag ben je verzekerd van een razend snelle laptop. De batterij van de laptop gaat zo’n 11 uur mee en dankzij een Active Area Ratio van 90% kun je optimaal gebruik maken van het scherm.',
            'imagePath' => 'https://images.wehkamp.nl/i/wehkamp/16710970_pb_01/lenovo-ideapad-5-14itl05-laptop-goud-0195713603843.jpg?w=792',
        ]);

        DB::table('products')->insert([
            'name' => 'nitro 5 an515-55-74k7 15.6 inch full hd gaming laptop',
            'brand' => 'Acer',
            'price' => 899,
            'description' => 'Ontdek gamen op een compleet nieuw niveau met de krachtige Acer Nitro 5. Het robuuste, ingetogen design bevat een bliksemsnel 144Hz FHD IPS-scherm en een reeks indrukwekkende technologieën die elk aspect van de gameplay verbeteren.',
            'imagePath' => 'https://images.wehkamp.nl/i/wehkamp/16651573_pb_01/acer-nitro-5-an515-55-74k7-gaming-laptop-zwart-4710180925111.jpg?w=792',
        ]);

        DB::table('products')->insert([
            'name' => 'vivobook d712da-bx186t 17.3 inch hd+ laptop',
            'brand' => 'Asus',
            'price' => 549,
            'description' => 'De Asus D712DA-BX186T VivoBook 17 gebruik je voor algemeen gebruik zoals internetten, e-mails versturen, series kijken op Netflix en Microsoft Office. Gebruik de laptop voor werk, studie of ontspanning.',
            'imagePath' => 'https://images.wehkamp.nl/i/wehkamp/16728569_pb_01/asus-vivobook-d712da-bx186t-laptop-zilver-4711081148814.jpg?w=792',
        ]);
    }
}
