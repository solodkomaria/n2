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
        $arr = ['https://opt-1031816.ssl.1c-bitrix-cdn.ru/upload/resize_cache/iblock/bd5/750_400_1/donskoy_sfinks.jpg?152823742568663',
            'https://n1s2.hsmedia.ru/a3/20/dd/a320ddd39fa297d3248fe4a7cc0b7eb4/620x398_1_198c6c0aacad60890b36c97b8343b31a@4856x3116_0xc0a839a2_588295721487797442.jpeg',
            'https://zooclub.ru/attach/43000/43756.jpg',
            'https://petsi.net/images/catbreed/big/donskoy-sfinks.jpg'
        ];
        /*for ($i = 0; $i < 4; $i++)
            \App\Product::create([
                'name' => 'сфинкс' . $i,
                'description' => 'n1',
                'img_url' => $arr[$i],
                'price' => 111111,
                'current_count' => 111111,
                'summary_count' => 111111
            ]);*/
        $arr2=['cat1'];
        foreach ($arr2 as $key=>$val){
            $cat=\App\Category::create(
                ['title' => $val,
                'description' => 'n1',
                'img_url' =>'https://simple-fauna.ru/wp-content/uploads/2018/09/donskoj-sfinks.jpg'
                ]);
            for ($i = 0; $i < 4; $i++)
                $prod=\App\Product::create([
                    'name' => 'сфинкс' . $i,
                    'description' => 'n1',
                    'img_url' => $arr[$i],
                    'price' => 111111,
                    'current_count' => 111111,
                    'summary_count' => 111111,
                    'category_id' => $cat->id,

                ]);
            $cat->products()->attach($prod->id);
        }

    }
}
