<?php

use Illuminate\Database\Seeder;

class ProvinceTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        \DB::table('city')->delete();
        \DB::table('province')->delete();

        \DB::table('province')->insert(array (
            0 =>
            array (
                'province_id' => 1,
                'name' => 'Bali',
                'created_at' => '2019-08-04 04:52:54',
                'updated_at' => '2019-08-04 04:52:54',
            ),
            1 =>
            array (
                'province_id' => 2,
                'name' => 'Bangka Belitung',
                'created_at' => '2019-08-04 04:52:54',
                'updated_at' => '2019-08-04 04:52:54',
            ),
            2 =>
            array (
                'province_id' => 3,
                'name' => 'Banten',
                'created_at' => '2019-08-04 04:52:54',
                'updated_at' => '2019-08-04 04:52:54',
            ),
            3 =>
            array (
                'province_id' => 4,
                'name' => 'Bengkulu',
                'created_at' => '2019-08-04 04:52:54',
                'updated_at' => '2019-08-04 04:52:54',
            ),
            4 =>
            array (
                'province_id' => 5,
                'name' => 'DI Yogyakarta',
                'created_at' => '2019-08-04 04:52:54',
                'updated_at' => '2019-08-04 04:52:54',
            ),
            5 =>
            array (
                'province_id' => 6,
                'name' => 'DKI Jakarta',
                'created_at' => '2019-08-04 04:52:55',
                'updated_at' => '2019-08-04 04:52:55',
            ),
            6 =>
            array (
                'province_id' => 7,
                'name' => 'Gorontalo',
                'created_at' => '2019-08-04 04:52:55',
                'updated_at' => '2019-08-04 04:52:55',
            ),
            7 =>
            array (
                'province_id' => 8,
                'name' => 'Jambi',
                'created_at' => '2019-08-04 04:52:55',
                'updated_at' => '2019-08-04 04:52:55',
            ),
            8 =>
            array (
                'province_id' => 9,
                'name' => 'Jawa Barat',
                'created_at' => '2019-08-04 04:52:55',
                'updated_at' => '2019-08-04 04:52:55',
            ),
            9 =>
            array (
                'province_id' => 10,
                'name' => 'Jawa Tengah',
                'created_at' => '2019-08-04 04:52:55',
                'updated_at' => '2019-08-04 04:52:55',
            ),
            10 =>
            array (
                'province_id' => 11,
                'name' => 'Jawa Timur',
                'created_at' => '2019-08-04 04:52:55',
                'updated_at' => '2019-08-04 04:52:55',
            ),
            11 =>
            array (
                'province_id' => 12,
                'name' => 'Kalimantan Barat',
                'created_at' => '2019-08-04 04:52:55',
                'updated_at' => '2019-08-04 04:52:55',
            ),
            12 =>
            array (
                'province_id' => 13,
                'name' => 'Kalimantan Selatan',
                'created_at' => '2019-08-04 04:52:55',
                'updated_at' => '2019-08-04 04:52:55',
            ),
            13 =>
            array (
                'province_id' => 14,
                'name' => 'Kalimantan Tengah',
                'created_at' => '2019-08-04 04:52:55',
                'updated_at' => '2019-08-04 04:52:55',
            ),
            14 =>
            array (
                'province_id' => 15,
                'name' => 'Kalimantan Timur',
                'created_at' => '2019-08-04 04:52:55',
                'updated_at' => '2019-08-04 04:52:55',
            ),
            15 =>
            array (
                'province_id' => 16,
                'name' => 'Kalimantan Utara',
                'created_at' => '2019-08-04 04:52:55',
                'updated_at' => '2019-08-04 04:52:55',
            ),
            16 =>
            array (
                'province_id' => 17,
                'name' => 'Kepulauan Riau',
                'created_at' => '2019-08-04 04:52:55',
                'updated_at' => '2019-08-04 04:52:55',
            ),
            17 =>
            array (
                'province_id' => 18,
                'name' => 'Lampung',
                'created_at' => '2019-08-04 04:52:55',
                'updated_at' => '2019-08-04 04:52:55',
            ),
            18 =>
            array (
                'province_id' => 19,
                'name' => 'Maluku',
                'created_at' => '2019-08-04 04:52:56',
                'updated_at' => '2019-08-04 04:52:56',
            ),
            19 =>
            array (
                'province_id' => 20,
                'name' => 'Maluku Utara',
                'created_at' => '2019-08-04 04:52:56',
                'updated_at' => '2019-08-04 04:52:56',
            ),
            20 =>
            array (
                'province_id' => 21,
            'name' => 'Nanggroe Aceh Darussalam (NAD)',
                'created_at' => '2019-08-04 04:52:56',
                'updated_at' => '2019-08-04 04:52:56',
            ),
            21 =>
            array (
                'province_id' => 22,
            'name' => 'Nusa Tenggara Barat (NTB)',
                'created_at' => '2019-08-04 04:52:56',
                'updated_at' => '2019-08-04 04:52:56',
            ),
            22 =>
            array (
                'province_id' => 23,
            'name' => 'Nusa Tenggara Timur (NTT)',
                'created_at' => '2019-08-04 04:52:56',
                'updated_at' => '2019-08-04 04:52:56',
            ),
            23 =>
            array (
                'province_id' => 24,
                'name' => 'Papua',
                'created_at' => '2019-08-04 04:52:56',
                'updated_at' => '2019-08-04 04:52:56',
            ),
            24 =>
            array (
                'province_id' => 25,
                'name' => 'Papua Barat',
                'created_at' => '2019-08-04 04:52:56',
                'updated_at' => '2019-08-04 04:52:56',
            ),
            25 =>
            array (
                'province_id' => 26,
                'name' => 'Riau',
                'created_at' => '2019-08-04 04:52:56',
                'updated_at' => '2019-08-04 04:52:56',
            ),
            26 =>
            array (
                'province_id' => 27,
                'name' => 'Sulawesi Barat',
                'created_at' => '2019-08-04 04:52:56',
                'updated_at' => '2019-08-04 04:52:56',
            ),
            27 =>
            array (
                'province_id' => 28,
                'name' => 'Sulawesi Selatan',
                'created_at' => '2019-08-04 04:52:56',
                'updated_at' => '2019-08-04 04:52:56',
            ),
            28 =>
            array (
                'province_id' => 29,
                'name' => 'Sulawesi Tengah',
                'created_at' => '2019-08-04 04:52:56',
                'updated_at' => '2019-08-04 04:52:56',
            ),
            29 =>
            array (
                'province_id' => 30,
                'name' => 'Sulawesi Tenggara',
                'created_at' => '2019-08-04 04:52:56',
                'updated_at' => '2019-08-04 04:52:56',
            ),
            30 =>
            array (
                'province_id' => 31,
                'name' => 'Sulawesi Utara',
                'created_at' => '2019-08-04 04:52:56',
                'updated_at' => '2019-08-04 04:52:56',
            ),
            31 =>
            array (
                'province_id' => 32,
                'name' => 'Sumatera Barat',
                'created_at' => '2019-08-04 04:52:56',
                'updated_at' => '2019-08-04 04:52:56',
            ),
            32 =>
            array (
                'province_id' => 33,
                'name' => 'Sumatera Selatan',
                'created_at' => '2019-08-04 04:52:56',
                'updated_at' => '2019-08-04 04:52:56',
            ),
            33 =>
            array (
                'province_id' => 34,
                'name' => 'Sumatera Utara',
                'created_at' => '2019-08-04 04:52:56',
                'updated_at' => '2019-08-04 04:52:56',
            ),
        ));


    }
}
