<?php

use Illuminate\Database\Seeder;

class ProductImagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_images')->delete();
        
        \DB::table('product_images')->insert(array (
            0 => 
            array (
                'id' => 1,
                'product_id' => 1,
                'src' => 'img/img/TP169849484-1.jpg',
                'created_at' => '2019-08-04 04:22:59',
                'updated_at' => '2019-08-04 04:22:59',
            ),
            1 => 
            array (
                'id' => 2,
                'product_id' => 2,
                'src' => 'img/img/TP43713645-1.jpg',
                'created_at' => '2019-08-04 04:22:59',
                'updated_at' => '2019-08-04 04:22:59',
            ),
            2 => 
            array (
                'id' => 3,
                'product_id' => 3,
                'src' => 'img/img/TP142250063-1.jpg',
                'created_at' => '2019-08-04 04:23:00',
                'updated_at' => '2019-08-04 04:23:00',
            ),
            3 => 
            array (
                'id' => 4,
                'product_id' => 4,
                'src' => 'img/img/TP43713277-1.jpg',
                'created_at' => '2019-08-04 04:23:00',
                'updated_at' => '2019-08-04 04:23:00',
            ),
            4 => 
            array (
                'id' => 5,
                'product_id' => 5,
                'src' => 'img/img/TP40209157-1.jpg',
                'created_at' => '2019-08-04 04:23:00',
                'updated_at' => '2019-08-04 04:23:00',
            ),
            5 => 
            array (
                'id' => 6,
                'product_id' => 6,
                'src' => 'img/img/TP100410286-1.jpg',
                'created_at' => '2019-08-04 04:23:01',
                'updated_at' => '2019-08-04 04:23:01',
            ),
            6 => 
            array (
                'id' => 7,
                'product_id' => 7,
                'src' => 'img/img/TP37964482-1.jpg',
                'created_at' => '2019-08-04 04:23:01',
                'updated_at' => '2019-08-04 04:23:01',
            ),
            7 => 
            array (
                'id' => 8,
                'product_id' => 8,
                'src' => 'img/img/TP35999959-1.jpg',
                'created_at' => '2019-08-04 04:23:01',
                'updated_at' => '2019-08-04 04:23:01',
            ),
            8 => 
            array (
                'id' => 9,
                'product_id' => 9,
                'src' => 'img/img/TP85839241-1.jpg',
                'created_at' => '2019-08-04 04:23:01',
                'updated_at' => '2019-08-04 04:23:01',
            ),
            9 => 
            array (
                'id' => 10,
                'product_id' => 10,
                'src' => 'img/img/TP100410610-1.jpg',
                'created_at' => '2019-08-04 04:23:02',
                'updated_at' => '2019-08-04 04:23:02',
            ),
            10 => 
            array (
                'id' => 11,
                'product_id' => 11,
                'src' => 'img/img/TP48639524-1.jpg',
                'created_at' => '2019-08-04 04:23:03',
                'updated_at' => '2019-08-04 04:23:03',
            ),
            11 => 
            array (
                'id' => 12,
                'product_id' => 12,
                'src' => 'img/img/TP36000964-1.jpg',
                'created_at' => '2019-08-04 04:23:03',
                'updated_at' => '2019-08-04 04:23:03',
            ),
            12 => 
            array (
                'id' => 13,
                'product_id' => 13,
                'src' => 'img/img/TP34065088-1.jpg',
                'created_at' => '2019-08-04 04:23:04',
                'updated_at' => '2019-08-04 04:23:04',
            ),
            13 => 
            array (
                'id' => 14,
                'product_id' => 14,
                'src' => 'img/img/TP109053512-1.jpg',
                'created_at' => '2019-08-04 04:23:04',
                'updated_at' => '2019-08-04 04:23:04',
            ),
            14 => 
            array (
                'id' => 15,
                'product_id' => 15,
                'src' => 'img/img/TP39681981-1.jpg',
                'created_at' => '2019-08-04 04:23:04',
                'updated_at' => '2019-08-04 04:23:04',
            ),
            15 => 
            array (
                'id' => 16,
                'product_id' => 16,
                'src' => 'img/img/TP39682340-1.jpg',
                'created_at' => '2019-08-04 04:23:05',
                'updated_at' => '2019-08-04 04:23:05',
            ),
            16 => 
            array (
                'id' => 17,
                'product_id' => 17,
                'src' => 'img/img/TP35523793-1.jpg',
                'created_at' => '2019-08-04 04:23:05',
                'updated_at' => '2019-08-04 04:23:05',
            ),
            17 => 
            array (
                'id' => 18,
                'product_id' => 18,
                'src' => 'img/img/TP48639176-1.jpg',
                'created_at' => '2019-08-04 04:23:07',
                'updated_at' => '2019-08-04 04:23:07',
            ),
            18 => 
            array (
                'id' => 19,
                'product_id' => 19,
                'src' => 'img/img/TP88978946-1.jpg',
                'created_at' => '2019-08-04 04:23:07',
                'updated_at' => '2019-08-04 04:23:07',
            ),
        ));
        
        
    }
}