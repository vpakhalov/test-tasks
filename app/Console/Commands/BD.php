<?php

namespace App\Console\Commands;

use App\Models\Product;
use Illuminate\Console\Command;

class BD extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'DB';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Заполняет базу данных информацией от товарах';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $productsData = [
            [
                'name' => 'Club Double',
                'category' => 'настенный светильник',
                'brand' => 'Artemide',
                'price' => '23 560 ₽',
                'color' => 'чёрный',
                'color_image' => './assets/color/black.svg',
                'status' => 'скоро',
                'image' => './assets/product_img/club-double.png',
                'rendering_3d' => false,
            ],
            [
                'name' => 'Taccia',
                'category' => 'настенный светильник',
                'brand' => 'Axolight',
                'price' => '94 160 ₽',
                'color' => 'коричневый',
                'color_image' => './assets/color/brown.svg',
                'status' => '',
                'image' => './assets/product_img/taccia.png',
                'rendering_3d' => true,
            ],
            [
                'name' => 'Picabia',
                'category' => 'двухспальная кровать',
                'brand' => 'Bonaldo',
                'price' => '305 600 ₽',
                'color' => 'бежевый',
                'color_image' => './assets/color/beige.png',
                'status' => '',
                'image' => './assets/product_img/picabia.png',
                'rendering_3d' => true,
            ],
            [
                'name' => 'Allen',
                'category' => 'диван',
                'brand' => 'Bonaldo',
                'price' => '377 000 ₽',
                'color' => 'серый',
                'color_image' => './assets/color/gray.svg',
                'status' => 'скоро',
                'image' => './assets/product_img/allen.png',
                'rendering_3d' => false,
            ],
            [
                'name' => 'Benson',
                'category' => 'журнальный столик',
                'brand' => 'Artemide',
                'price' => '138 500 ₽',
                'color' => 'чёрный',
                'color_image' => './assets/color/black.svg',
                'status' => '',
                'image' => './assets/product_img/benson.png',
                'rendering_3d' => true,
            ],
            [
                'name' => 'Powell',
                'category' => 'двухспальная кровать',
                'brand' => 'Baxter',
                'price' => '246 500 ₽',
                'color' => 'серый',
                'color_image' => './assets/color/gray.svg',
                'status' => '',
                'image' => './assets/product_img/powell.png',
                'rendering_3d' => true,
            ],
            [
                'name' => 'Carnaby',
                'category' => 'кресло',
                'brand' => 'Bonaldo',
                'price' => '206 000₽',
                'color' => 'бежевый',
                'color_image' => './assets/color/beige.png',
                'status' => 'в наличии',
                'image' => './assets/product_img/carnaby.png',
                'rendering_3d' => true,
            ],
            [
                'name' => 'Halley outdoor',
                'category' => 'кресло',
                'brand' => 'Baxter',
                'price' => '191 000₽',
                'color' => 'серый',
                'color_image' => './assets/color/gray.svg',
                'status' => '',
                'image' => './assets/product_img/halley-outdoor.png',
                'rendering_3d' => true,
            ],
            [
                'name' => 'Dot',
                'category' => 'ваза',
                'brand' => 'Artemide',
                'price' => '4 860 ₽',
                'color' => 'белый',
                'color_image' => './assets/color/white.svg',
                'status' => 'в наличии',
                'image' => './assets/product_img/dot.png',
                'rendering_3d' => false,
            ],
            [
                'name' => 'Herman',
                'category' => 'стол',
                'brand' => 'Bonaldo',
                'price' => '47 920 ₽',
                'color' => 'чёрный',
                'color_image' => './assets/color/black.svg',
                'status' => 'в наличии',
                'image' => './assets/product_img/herman.png',
                'rendering_3d' => true,
            ],
            [
                'name' => 'Series 7 swiel',
                'category' => 'стул',
                'brand' => 'Baxter',
                'price' => '162 480 ₽',
                'color' => 'оранжевый',
                'color_image' => './assets/color/orange.svg',
                'status' => '',
                'image' => './assets/product_img/series-7-swivel.png',
                'rendering_3d' => true,
            ],
            [
                'name' => 'Socket pendant',
                'category' => 'подвес',
                'brand' => 'Axo light',
                'price' => '10 640 ₽',
                'color' => 'серый',
                'color_image' => './assets/color/gray.svg',
                'status' => 'в наличии',
                'image' => './assets/product_img/socket-pendant.png',
                'rendering_3d' => false,
            ],
        ];

        foreach ($productsData as $product) {
            Product::create($product);
        }

    }
}
