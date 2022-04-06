<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'Spiderman Action Figure',
                "price"=>"949",
                "description"=>"Cute spiderman action figure.",
                "category"=>"Marvel",
                "gallery"=>"https://d9nvuahg4xykp.cloudfront.net/-5403113949493395486/452715142072503155.jpg"
            ],
            [
                'name'=>'Goku Action Figure',
                "price"=>"1090",
                "description"=>"Super saiyan goku fighting action figure",
                "category"=>"Anime",
                "gallery"=>"https://i5.walmartimages.com/asr/8566fea7-5425-450e-ac27-09dafb913315_1.9ff452fabd25ece2afd2825cbf9b42f6.jpeg?odnHeight=612&odnWidth=612&odnBg=FFFFFF"
            ],
            [
                'name'=>'Bumblebee Action Figure',
                "price"=>"3000",
                "description"=>"Bumblebee and its car form action figure",
                "category"=>"Transformers",
                "gallery"=>"https://cdn.shopify.com/s/files/1/0557/0992/5536/products/optimus_bumblebee_transformer_800x.jpg?v=1619649831"
            ],
            [
                'name'=>'Naruto Action Figure',
                "price"=>"999",
                "description"=>"Naruto and his team cute action figure",
                "category"=>"Anime",
                "gallery"=>"https://img.joomcdn.net/b14485f9ebd24c8dc4b8dff40262723050cb5d2f_original.jpeg"
            ],
            [
                'name'=>'Professor Action figure',
                "price"=>"399",
                "description"=>"Money heist professor action figure",
                "category"=>"Netflix",
                "gallery"=>"https://m.media-amazon.com/images/I/51J+B+zzD6L._SL1000_.jpg"
             ]
        ]);
    }
}