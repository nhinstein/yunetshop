<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('product_images')->delete();
        \DB::table('products')->delete();
        \DB::table('categories')->delete();
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => '3D Silicone Cartoon',
                'slug' => 'YS-KnNyA181SAjnlsC',
                'created_at' => '2019-08-06 13:40:39',
                'updated_at' => '2019-08-06 13:40:39',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Asus Zenfone 2 5.5 ZE551ML ACC',
                'slug' => 'YS-OE0lfPKJIRwfNY2',
                'created_at' => '2019-08-06 13:40:42',
                'updated_at' => '2019-08-06 13:40:42',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'TEMPERED GLASS',
                'slug' => 'YS-mSvgDDhsBuYLryA',
                'created_at' => '2019-08-06 13:40:43',
                'updated_at' => '2019-08-06 13:40:43',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Zenfone Selfie ACC',
                'slug' => 'YS-JugIhci7Wm39GLH',
                'created_at' => '2019-08-06 13:40:44',
                'updated_at' => '2019-08-06 13:40:44',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'SAMSUNG A3 ACC',
                'slug' => 'YS-Szx3uGtzOKcHfVg',
                'created_at' => '2019-08-06 13:40:46',
                'updated_at' => '2019-08-06 13:40:46',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'SAMSUNG A5 ACC',
                'slug' => 'YS-nrko5UdDNiRRWlc',
                'created_at' => '2019-08-06 13:40:52',
                'updated_at' => '2019-08-06 13:40:52',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'SAMSUNG A7 A710 ACC',
                'slug' => 'YS-2vsxNXi3SzkH4IQ',
                'created_at' => '2019-08-06 13:40:53',
                'updated_at' => '2019-08-06 13:40:53',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'SAMSUNG A8 ACC',
                'slug' => 'YS-yv6udnSv3SSVYmN',
                'created_at' => '2019-08-06 13:41:10',
                'updated_at' => '2019-08-06 13:41:10',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'SAMSUNG A9 ACC',
                'slug' => 'YS-fyWNF0rMSdIAWln',
                'created_at' => '2019-08-06 13:41:12',
                'updated_at' => '2019-08-06 13:41:12',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'SAMSUNG E5 ACC',
                'slug' => 'YS-Z5G4EXenjIp5vMR',
                'created_at' => '2019-08-06 13:41:14',
                'updated_at' => '2019-08-06 13:41:14',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'SAMSUNG E7 ACC',
                'slug' => 'YS-IkEty664HEqBJ7v',
                'created_at' => '2019-08-06 13:41:16',
                'updated_at' => '2019-08-06 13:41:16',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'SAMSUNG GRAND 2 / G7106 / G7102 ACC',
                'slug' => 'YS-M2lodmSa9Jv9Yxb',
                'created_at' => '2019-08-06 13:41:18',
                'updated_at' => '2019-08-06 13:41:18',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'SAMSUNG GRAND PRIME ACC',
                'slug' => 'YS-RgujVpHpFLfxPvz',
                'created_at' => '2019-08-06 13:41:18',
                'updated_at' => '2019-08-06 13:41:18',
            ),
        ));
        
        
    }
}