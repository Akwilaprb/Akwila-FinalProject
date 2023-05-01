<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                "name"=>"Samsung Galaxy S23 Plus",
                "price"=>"Rp 17.999.000",
                "description"=>"Layar	Dynamic AMOLED 2X 6.6 inci
                Chipset	Qualcomm Snapdragon 8 Gen 2
                Memory Internal	256 GB, 512 GB
                Kamera	50 MP (wide) 10 MP (telephoto) 12 MP (ultrawide)
                Baterai	Li-Ion 4700 mAh",
                "category"=>"mobile phone",
                "gallery"=>"https://mdp.co.id/upload/pictures/product/SM4429.jpg"
            ],
            [
                "name"=>"Apple iPhone 14 Pro Max",
                "price"=>"Rp 24.999.000",
                "description"=>"Laya OLED Display 6,7 super retina, 2796 x 1290 piksel
                Chipset Apple A16 Bionic
                Memory Internal	128GB/256GB/512GB/1TB
                Kamera 48MP (wide), 12MP (ultrawide), dan 12MP (telephoto)",
                "category"=>"mobile phone",
                "gallery"=>"https://dorangadget.com/wp-content/uploads/2022/12/Apple-iPhone-14-Pro-Max-Space-Black-400x400.jpg"
            ],
            [
                "name"=>"Google Pixel 7 Pro",
                "price"=>"Rp 11.899.000",
                "description"=>"Layar Dynamic AMOLED 2X 6.6 inci
                Chipset	Google Tensor G2 Gen 2
                Memory Internal	128 GB, 256 GB, 512 GB
                Kamera	10.8 MP (ultrawide)
                Baterai	Li-Po 5000 mAh",
                "category"=>"Photography phone",
                "gallery"=>"https://images.tokopedia.net/img/cache/900/VqbcmM/2022/10/7/85755d07-b605-4675-8e99-4b72b623fcfb.jpg"
            ],
            [
                "name"=>"Asus ROG Phone 6 Pro",
                "price"=>"Rp 9.999.000",
                "description"=>"Layar  AMOLED 6.78 inci
                Chipset	Qualcomm Snapdragon 8+ Gen 1
                Memory Internal	512 GB
                Kamera  50 MP (wide),13 MP (ultrawide),5 MP (macro)
                Baterai	6000 mAh",
                "category"=>"Gaming phone",
                "gallery"=>"https://asset.kompas.com/crops/rbLqh2KzjKFTzdwGeI27Hc3E_FQ=/126x104:941x647/750x500/data/photo/2022/07/06/62c4d9a7a6623.jpg"
            ],
        ]);
    }
}
