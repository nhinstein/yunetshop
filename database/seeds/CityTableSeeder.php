<?php

use Illuminate\Database\Seeder;

class CityTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('city')->delete();
        
        \DB::table('city')->insert(array (
            0 => 
            array (
                'city_id' => 1,
                'name' => 'Aceh Barat',
                'province_id' => 21,
                'created_at' => '2019-08-04 04:53:58',
                'updated_at' => '2019-08-04 04:53:58',
            ),
            1 => 
            array (
                'city_id' => 2,
                'name' => 'Aceh Barat Daya',
                'province_id' => 21,
                'created_at' => '2019-08-04 04:53:58',
                'updated_at' => '2019-08-04 04:53:58',
            ),
            2 => 
            array (
                'city_id' => 3,
                'name' => 'Aceh Besar',
                'province_id' => 21,
                'created_at' => '2019-08-04 04:53:58',
                'updated_at' => '2019-08-04 04:53:58',
            ),
            3 => 
            array (
                'city_id' => 4,
                'name' => 'Aceh Jaya',
                'province_id' => 21,
                'created_at' => '2019-08-04 04:53:58',
                'updated_at' => '2019-08-04 04:53:58',
            ),
            4 => 
            array (
                'city_id' => 5,
                'name' => 'Aceh Selatan',
                'province_id' => 21,
                'created_at' => '2019-08-04 04:53:58',
                'updated_at' => '2019-08-04 04:53:58',
            ),
            5 => 
            array (
                'city_id' => 6,
                'name' => 'Aceh Singkil',
                'province_id' => 21,
                'created_at' => '2019-08-04 04:53:58',
                'updated_at' => '2019-08-04 04:53:58',
            ),
            6 => 
            array (
                'city_id' => 7,
                'name' => 'Aceh Tamiang',
                'province_id' => 21,
                'created_at' => '2019-08-04 04:53:58',
                'updated_at' => '2019-08-04 04:53:58',
            ),
            7 => 
            array (
                'city_id' => 8,
                'name' => 'Aceh Tengah',
                'province_id' => 21,
                'created_at' => '2019-08-04 04:53:58',
                'updated_at' => '2019-08-04 04:53:58',
            ),
            8 => 
            array (
                'city_id' => 9,
                'name' => 'Aceh Tenggara',
                'province_id' => 21,
                'created_at' => '2019-08-04 04:53:58',
                'updated_at' => '2019-08-04 04:53:58',
            ),
            9 => 
            array (
                'city_id' => 10,
                'name' => 'Aceh Timur',
                'province_id' => 21,
                'created_at' => '2019-08-04 04:53:58',
                'updated_at' => '2019-08-04 04:53:58',
            ),
            10 => 
            array (
                'city_id' => 11,
                'name' => 'Aceh Utara',
                'province_id' => 21,
                'created_at' => '2019-08-04 04:53:58',
                'updated_at' => '2019-08-04 04:53:58',
            ),
            11 => 
            array (
                'city_id' => 12,
                'name' => 'Agam',
                'province_id' => 32,
                'created_at' => '2019-08-04 04:53:59',
                'updated_at' => '2019-08-04 04:53:59',
            ),
            12 => 
            array (
                'city_id' => 13,
                'name' => 'Alor',
                'province_id' => 23,
                'created_at' => '2019-08-04 04:53:59',
                'updated_at' => '2019-08-04 04:53:59',
            ),
            13 => 
            array (
                'city_id' => 14,
                'name' => 'Ambon',
                'province_id' => 19,
                'created_at' => '2019-08-04 04:53:59',
                'updated_at' => '2019-08-04 04:53:59',
            ),
            14 => 
            array (
                'city_id' => 15,
                'name' => 'Asahan',
                'province_id' => 34,
                'created_at' => '2019-08-04 04:53:59',
                'updated_at' => '2019-08-04 04:53:59',
            ),
            15 => 
            array (
                'city_id' => 16,
                'name' => 'Asmat',
                'province_id' => 24,
                'created_at' => '2019-08-04 04:53:59',
                'updated_at' => '2019-08-04 04:53:59',
            ),
            16 => 
            array (
                'city_id' => 17,
                'name' => 'Badung',
                'province_id' => 1,
                'created_at' => '2019-08-04 04:54:00',
                'updated_at' => '2019-08-04 04:54:00',
            ),
            17 => 
            array (
                'city_id' => 18,
                'name' => 'Balangan',
                'province_id' => 13,
                'created_at' => '2019-08-04 04:54:00',
                'updated_at' => '2019-08-04 04:54:00',
            ),
            18 => 
            array (
                'city_id' => 19,
                'name' => 'Balikpapan',
                'province_id' => 15,
                'created_at' => '2019-08-04 04:54:00',
                'updated_at' => '2019-08-04 04:54:00',
            ),
            19 => 
            array (
                'city_id' => 20,
                'name' => 'Banda Aceh',
                'province_id' => 21,
                'created_at' => '2019-08-04 04:54:00',
                'updated_at' => '2019-08-04 04:54:00',
            ),
            20 => 
            array (
                'city_id' => 21,
                'name' => 'Bandar Lampung',
                'province_id' => 18,
                'created_at' => '2019-08-04 04:54:00',
                'updated_at' => '2019-08-04 04:54:00',
            ),
            21 => 
            array (
                'city_id' => 22,
                'name' => 'Bandung',
                'province_id' => 9,
                'created_at' => '2019-08-04 04:54:01',
                'updated_at' => '2019-08-04 04:54:01',
            ),
            22 => 
            array (
                'city_id' => 23,
                'name' => 'Bandung',
                'province_id' => 9,
                'created_at' => '2019-08-04 04:54:01',
                'updated_at' => '2019-08-04 04:54:01',
            ),
            23 => 
            array (
                'city_id' => 24,
                'name' => 'Bandung Barat',
                'province_id' => 9,
                'created_at' => '2019-08-04 04:54:01',
                'updated_at' => '2019-08-04 04:54:01',
            ),
            24 => 
            array (
                'city_id' => 25,
                'name' => 'Banggai',
                'province_id' => 29,
                'created_at' => '2019-08-04 04:54:01',
                'updated_at' => '2019-08-04 04:54:01',
            ),
            25 => 
            array (
                'city_id' => 26,
                'name' => 'Banggai Kepulauan',
                'province_id' => 29,
                'created_at' => '2019-08-04 04:54:01',
                'updated_at' => '2019-08-04 04:54:01',
            ),
            26 => 
            array (
                'city_id' => 27,
                'name' => 'Bangka',
                'province_id' => 2,
                'created_at' => '2019-08-04 04:54:01',
                'updated_at' => '2019-08-04 04:54:01',
            ),
            27 => 
            array (
                'city_id' => 28,
                'name' => 'Bangka Barat',
                'province_id' => 2,
                'created_at' => '2019-08-04 04:54:02',
                'updated_at' => '2019-08-04 04:54:02',
            ),
            28 => 
            array (
                'city_id' => 29,
                'name' => 'Bangka Selatan',
                'province_id' => 2,
                'created_at' => '2019-08-04 04:54:02',
                'updated_at' => '2019-08-04 04:54:02',
            ),
            29 => 
            array (
                'city_id' => 30,
                'name' => 'Bangka Tengah',
                'province_id' => 2,
                'created_at' => '2019-08-04 04:54:02',
                'updated_at' => '2019-08-04 04:54:02',
            ),
            30 => 
            array (
                'city_id' => 31,
                'name' => 'Bangkalan',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:02',
                'updated_at' => '2019-08-04 04:54:02',
            ),
            31 => 
            array (
                'city_id' => 32,
                'name' => 'Bangli',
                'province_id' => 1,
                'created_at' => '2019-08-04 04:54:02',
                'updated_at' => '2019-08-04 04:54:02',
            ),
            32 => 
            array (
                'city_id' => 33,
                'name' => 'Banjar',
                'province_id' => 13,
                'created_at' => '2019-08-04 04:54:02',
                'updated_at' => '2019-08-04 04:54:02',
            ),
            33 => 
            array (
                'city_id' => 34,
                'name' => 'Banjar',
                'province_id' => 9,
                'created_at' => '2019-08-04 04:54:02',
                'updated_at' => '2019-08-04 04:54:02',
            ),
            34 => 
            array (
                'city_id' => 35,
                'name' => 'Banjarbaru',
                'province_id' => 13,
                'created_at' => '2019-08-04 04:54:02',
                'updated_at' => '2019-08-04 04:54:02',
            ),
            35 => 
            array (
                'city_id' => 36,
                'name' => 'Banjarmasin',
                'province_id' => 13,
                'created_at' => '2019-08-04 04:54:02',
                'updated_at' => '2019-08-04 04:54:02',
            ),
            36 => 
            array (
                'city_id' => 37,
                'name' => 'Banjarnegara',
                'province_id' => 10,
                'created_at' => '2019-08-04 04:54:03',
                'updated_at' => '2019-08-04 04:54:03',
            ),
            37 => 
            array (
                'city_id' => 38,
                'name' => 'Bantaeng',
                'province_id' => 28,
                'created_at' => '2019-08-04 04:54:03',
                'updated_at' => '2019-08-04 04:54:03',
            ),
            38 => 
            array (
                'city_id' => 39,
                'name' => 'Bantul',
                'province_id' => 5,
                'created_at' => '2019-08-04 04:54:03',
                'updated_at' => '2019-08-04 04:54:03',
            ),
            39 => 
            array (
                'city_id' => 40,
                'name' => 'Banyuasin',
                'province_id' => 33,
                'created_at' => '2019-08-04 04:54:03',
                'updated_at' => '2019-08-04 04:54:03',
            ),
            40 => 
            array (
                'city_id' => 41,
                'name' => 'Banyumas',
                'province_id' => 10,
                'created_at' => '2019-08-04 04:54:03',
                'updated_at' => '2019-08-04 04:54:03',
            ),
            41 => 
            array (
                'city_id' => 42,
                'name' => 'Banyuwangi',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:03',
                'updated_at' => '2019-08-04 04:54:03',
            ),
            42 => 
            array (
                'city_id' => 43,
                'name' => 'Barito Kuala',
                'province_id' => 13,
                'created_at' => '2019-08-04 04:54:03',
                'updated_at' => '2019-08-04 04:54:03',
            ),
            43 => 
            array (
                'city_id' => 44,
                'name' => 'Barito Selatan',
                'province_id' => 14,
                'created_at' => '2019-08-04 04:54:03',
                'updated_at' => '2019-08-04 04:54:03',
            ),
            44 => 
            array (
                'city_id' => 45,
                'name' => 'Barito Timur',
                'province_id' => 14,
                'created_at' => '2019-08-04 04:54:03',
                'updated_at' => '2019-08-04 04:54:03',
            ),
            45 => 
            array (
                'city_id' => 46,
                'name' => 'Barito Utara',
                'province_id' => 14,
                'created_at' => '2019-08-04 04:54:03',
                'updated_at' => '2019-08-04 04:54:03',
            ),
            46 => 
            array (
                'city_id' => 47,
                'name' => 'Barru',
                'province_id' => 28,
                'created_at' => '2019-08-04 04:54:03',
                'updated_at' => '2019-08-04 04:54:03',
            ),
            47 => 
            array (
                'city_id' => 48,
                'name' => 'Batam',
                'province_id' => 17,
                'created_at' => '2019-08-04 04:54:03',
                'updated_at' => '2019-08-04 04:54:03',
            ),
            48 => 
            array (
                'city_id' => 49,
                'name' => 'Batang',
                'province_id' => 10,
                'created_at' => '2019-08-04 04:54:03',
                'updated_at' => '2019-08-04 04:54:03',
            ),
            49 => 
            array (
                'city_id' => 50,
                'name' => 'Batang Hari',
                'province_id' => 8,
                'created_at' => '2019-08-04 04:54:04',
                'updated_at' => '2019-08-04 04:54:04',
            ),
            50 => 
            array (
                'city_id' => 51,
                'name' => 'Batu',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:04',
                'updated_at' => '2019-08-04 04:54:04',
            ),
            51 => 
            array (
                'city_id' => 52,
                'name' => 'Batu Bara',
                'province_id' => 34,
                'created_at' => '2019-08-04 04:54:04',
                'updated_at' => '2019-08-04 04:54:04',
            ),
            52 => 
            array (
                'city_id' => 53,
                'name' => 'Bau-Bau',
                'province_id' => 30,
                'created_at' => '2019-08-04 04:54:04',
                'updated_at' => '2019-08-04 04:54:04',
            ),
            53 => 
            array (
                'city_id' => 54,
                'name' => 'Bekasi',
                'province_id' => 9,
                'created_at' => '2019-08-04 04:54:04',
                'updated_at' => '2019-08-04 04:54:04',
            ),
            54 => 
            array (
                'city_id' => 55,
                'name' => 'Bekasi',
                'province_id' => 9,
                'created_at' => '2019-08-04 04:54:04',
                'updated_at' => '2019-08-04 04:54:04',
            ),
            55 => 
            array (
                'city_id' => 56,
                'name' => 'Belitung',
                'province_id' => 2,
                'created_at' => '2019-08-04 04:54:04',
                'updated_at' => '2019-08-04 04:54:04',
            ),
            56 => 
            array (
                'city_id' => 57,
                'name' => 'Belitung Timur',
                'province_id' => 2,
                'created_at' => '2019-08-04 04:54:04',
                'updated_at' => '2019-08-04 04:54:04',
            ),
            57 => 
            array (
                'city_id' => 58,
                'name' => 'Belu',
                'province_id' => 23,
                'created_at' => '2019-08-04 04:54:04',
                'updated_at' => '2019-08-04 04:54:04',
            ),
            58 => 
            array (
                'city_id' => 59,
                'name' => 'Bener Meriah',
                'province_id' => 21,
                'created_at' => '2019-08-04 04:54:04',
                'updated_at' => '2019-08-04 04:54:04',
            ),
            59 => 
            array (
                'city_id' => 60,
                'name' => 'Bengkalis',
                'province_id' => 26,
                'created_at' => '2019-08-04 04:54:04',
                'updated_at' => '2019-08-04 04:54:04',
            ),
            60 => 
            array (
                'city_id' => 61,
                'name' => 'Bengkayang',
                'province_id' => 12,
                'created_at' => '2019-08-04 04:54:04',
                'updated_at' => '2019-08-04 04:54:04',
            ),
            61 => 
            array (
                'city_id' => 62,
                'name' => 'Bengkulu',
                'province_id' => 4,
                'created_at' => '2019-08-04 04:54:04',
                'updated_at' => '2019-08-04 04:54:04',
            ),
            62 => 
            array (
                'city_id' => 63,
                'name' => 'Bengkulu Selatan',
                'province_id' => 4,
                'created_at' => '2019-08-04 04:54:05',
                'updated_at' => '2019-08-04 04:54:05',
            ),
            63 => 
            array (
                'city_id' => 64,
                'name' => 'Bengkulu Tengah',
                'province_id' => 4,
                'created_at' => '2019-08-04 04:54:05',
                'updated_at' => '2019-08-04 04:54:05',
            ),
            64 => 
            array (
                'city_id' => 65,
                'name' => 'Bengkulu Utara',
                'province_id' => 4,
                'created_at' => '2019-08-04 04:54:05',
                'updated_at' => '2019-08-04 04:54:05',
            ),
            65 => 
            array (
                'city_id' => 66,
                'name' => 'Berau',
                'province_id' => 15,
                'created_at' => '2019-08-04 04:54:05',
                'updated_at' => '2019-08-04 04:54:05',
            ),
            66 => 
            array (
                'city_id' => 67,
                'name' => 'Biak Numfor',
                'province_id' => 24,
                'created_at' => '2019-08-04 04:54:05',
                'updated_at' => '2019-08-04 04:54:05',
            ),
            67 => 
            array (
                'city_id' => 68,
                'name' => 'Bima',
                'province_id' => 22,
                'created_at' => '2019-08-04 04:54:05',
                'updated_at' => '2019-08-04 04:54:05',
            ),
            68 => 
            array (
                'city_id' => 69,
                'name' => 'Bima',
                'province_id' => 22,
                'created_at' => '2019-08-04 04:54:05',
                'updated_at' => '2019-08-04 04:54:05',
            ),
            69 => 
            array (
                'city_id' => 70,
                'name' => 'Binjai',
                'province_id' => 34,
                'created_at' => '2019-08-04 04:54:05',
                'updated_at' => '2019-08-04 04:54:05',
            ),
            70 => 
            array (
                'city_id' => 71,
                'name' => 'Bintan',
                'province_id' => 17,
                'created_at' => '2019-08-04 04:54:05',
                'updated_at' => '2019-08-04 04:54:05',
            ),
            71 => 
            array (
                'city_id' => 72,
                'name' => 'Bireuen',
                'province_id' => 21,
                'created_at' => '2019-08-04 04:54:05',
                'updated_at' => '2019-08-04 04:54:05',
            ),
            72 => 
            array (
                'city_id' => 73,
                'name' => 'Bitung',
                'province_id' => 31,
                'created_at' => '2019-08-04 04:54:05',
                'updated_at' => '2019-08-04 04:54:05',
            ),
            73 => 
            array (
                'city_id' => 74,
                'name' => 'Blitar',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:05',
                'updated_at' => '2019-08-04 04:54:05',
            ),
            74 => 
            array (
                'city_id' => 75,
                'name' => 'Blitar',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:05',
                'updated_at' => '2019-08-04 04:54:05',
            ),
            75 => 
            array (
                'city_id' => 76,
                'name' => 'Blora',
                'province_id' => 10,
                'created_at' => '2019-08-04 04:54:06',
                'updated_at' => '2019-08-04 04:54:06',
            ),
            76 => 
            array (
                'city_id' => 77,
                'name' => 'Boalemo',
                'province_id' => 7,
                'created_at' => '2019-08-04 04:54:06',
                'updated_at' => '2019-08-04 04:54:06',
            ),
            77 => 
            array (
                'city_id' => 78,
                'name' => 'Bogor',
                'province_id' => 9,
                'created_at' => '2019-08-04 04:54:06',
                'updated_at' => '2019-08-04 04:54:06',
            ),
            78 => 
            array (
                'city_id' => 79,
                'name' => 'Bogor',
                'province_id' => 9,
                'created_at' => '2019-08-04 04:54:06',
                'updated_at' => '2019-08-04 04:54:06',
            ),
            79 => 
            array (
                'city_id' => 80,
                'name' => 'Bojonegoro',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:06',
                'updated_at' => '2019-08-04 04:54:06',
            ),
            80 => 
            array (
                'city_id' => 81,
            'name' => 'Bolaang Mongondow (Bolmong)',
                'province_id' => 31,
                'created_at' => '2019-08-04 04:54:06',
                'updated_at' => '2019-08-04 04:54:06',
            ),
            81 => 
            array (
                'city_id' => 82,
                'name' => 'Bolaang Mongondow Selatan',
                'province_id' => 31,
                'created_at' => '2019-08-04 04:54:06',
                'updated_at' => '2019-08-04 04:54:06',
            ),
            82 => 
            array (
                'city_id' => 83,
                'name' => 'Bolaang Mongondow Timur',
                'province_id' => 31,
                'created_at' => '2019-08-04 04:54:06',
                'updated_at' => '2019-08-04 04:54:06',
            ),
            83 => 
            array (
                'city_id' => 84,
                'name' => 'Bolaang Mongondow Utara',
                'province_id' => 31,
                'created_at' => '2019-08-04 04:54:06',
                'updated_at' => '2019-08-04 04:54:06',
            ),
            84 => 
            array (
                'city_id' => 85,
                'name' => 'Bombana',
                'province_id' => 30,
                'created_at' => '2019-08-04 04:54:06',
                'updated_at' => '2019-08-04 04:54:06',
            ),
            85 => 
            array (
                'city_id' => 86,
                'name' => 'Bondowoso',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:06',
                'updated_at' => '2019-08-04 04:54:06',
            ),
            86 => 
            array (
                'city_id' => 87,
                'name' => 'Bone',
                'province_id' => 28,
                'created_at' => '2019-08-04 04:54:06',
                'updated_at' => '2019-08-04 04:54:06',
            ),
            87 => 
            array (
                'city_id' => 88,
                'name' => 'Bone Bolango',
                'province_id' => 7,
                'created_at' => '2019-08-04 04:54:07',
                'updated_at' => '2019-08-04 04:54:07',
            ),
            88 => 
            array (
                'city_id' => 89,
                'name' => 'Bontang',
                'province_id' => 15,
                'created_at' => '2019-08-04 04:54:07',
                'updated_at' => '2019-08-04 04:54:07',
            ),
            89 => 
            array (
                'city_id' => 90,
                'name' => 'Boven Digoel',
                'province_id' => 24,
                'created_at' => '2019-08-04 04:54:07',
                'updated_at' => '2019-08-04 04:54:07',
            ),
            90 => 
            array (
                'city_id' => 91,
                'name' => 'Boyolali',
                'province_id' => 10,
                'created_at' => '2019-08-04 04:54:07',
                'updated_at' => '2019-08-04 04:54:07',
            ),
            91 => 
            array (
                'city_id' => 92,
                'name' => 'Brebes',
                'province_id' => 10,
                'created_at' => '2019-08-04 04:54:07',
                'updated_at' => '2019-08-04 04:54:07',
            ),
            92 => 
            array (
                'city_id' => 93,
                'name' => 'Bukittinggi',
                'province_id' => 32,
                'created_at' => '2019-08-04 04:54:07',
                'updated_at' => '2019-08-04 04:54:07',
            ),
            93 => 
            array (
                'city_id' => 94,
                'name' => 'Buleleng',
                'province_id' => 1,
                'created_at' => '2019-08-04 04:54:07',
                'updated_at' => '2019-08-04 04:54:07',
            ),
            94 => 
            array (
                'city_id' => 95,
                'name' => 'Bulukumba',
                'province_id' => 28,
                'created_at' => '2019-08-04 04:54:07',
                'updated_at' => '2019-08-04 04:54:07',
            ),
            95 => 
            array (
                'city_id' => 96,
            'name' => 'Bulungan (Bulongan)',
                'province_id' => 16,
                'created_at' => '2019-08-04 04:54:07',
                'updated_at' => '2019-08-04 04:54:07',
            ),
            96 => 
            array (
                'city_id' => 97,
                'name' => 'Bungo',
                'province_id' => 8,
                'created_at' => '2019-08-04 04:54:07',
                'updated_at' => '2019-08-04 04:54:07',
            ),
            97 => 
            array (
                'city_id' => 98,
                'name' => 'Buol',
                'province_id' => 29,
                'created_at' => '2019-08-04 04:54:07',
                'updated_at' => '2019-08-04 04:54:07',
            ),
            98 => 
            array (
                'city_id' => 99,
                'name' => 'Buru',
                'province_id' => 19,
                'created_at' => '2019-08-04 04:54:07',
                'updated_at' => '2019-08-04 04:54:07',
            ),
            99 => 
            array (
                'city_id' => 100,
                'name' => 'Buru Selatan',
                'province_id' => 19,
                'created_at' => '2019-08-04 04:54:07',
                'updated_at' => '2019-08-04 04:54:07',
            ),
            100 => 
            array (
                'city_id' => 101,
                'name' => 'Buton',
                'province_id' => 30,
                'created_at' => '2019-08-04 04:54:07',
                'updated_at' => '2019-08-04 04:54:07',
            ),
            101 => 
            array (
                'city_id' => 102,
                'name' => 'Buton Utara',
                'province_id' => 30,
                'created_at' => '2019-08-04 04:54:07',
                'updated_at' => '2019-08-04 04:54:07',
            ),
            102 => 
            array (
                'city_id' => 103,
                'name' => 'Ciamis',
                'province_id' => 9,
                'created_at' => '2019-08-04 04:54:07',
                'updated_at' => '2019-08-04 04:54:07',
            ),
            103 => 
            array (
                'city_id' => 104,
                'name' => 'Cianjur',
                'province_id' => 9,
                'created_at' => '2019-08-04 04:54:07',
                'updated_at' => '2019-08-04 04:54:07',
            ),
            104 => 
            array (
                'city_id' => 105,
                'name' => 'Cilacap',
                'province_id' => 10,
                'created_at' => '2019-08-04 04:54:08',
                'updated_at' => '2019-08-04 04:54:08',
            ),
            105 => 
            array (
                'city_id' => 106,
                'name' => 'Cilegon',
                'province_id' => 3,
                'created_at' => '2019-08-04 04:54:08',
                'updated_at' => '2019-08-04 04:54:08',
            ),
            106 => 
            array (
                'city_id' => 107,
                'name' => 'Cimahi',
                'province_id' => 9,
                'created_at' => '2019-08-04 04:54:08',
                'updated_at' => '2019-08-04 04:54:08',
            ),
            107 => 
            array (
                'city_id' => 108,
                'name' => 'Cirebon',
                'province_id' => 9,
                'created_at' => '2019-08-04 04:54:08',
                'updated_at' => '2019-08-04 04:54:08',
            ),
            108 => 
            array (
                'city_id' => 109,
                'name' => 'Cirebon',
                'province_id' => 9,
                'created_at' => '2019-08-04 04:54:08',
                'updated_at' => '2019-08-04 04:54:08',
            ),
            109 => 
            array (
                'city_id' => 110,
                'name' => 'Dairi',
                'province_id' => 34,
                'created_at' => '2019-08-04 04:54:08',
                'updated_at' => '2019-08-04 04:54:08',
            ),
            110 => 
            array (
                'city_id' => 111,
            'name' => 'Deiyai (Deliyai)',
                'province_id' => 24,
                'created_at' => '2019-08-04 04:54:08',
                'updated_at' => '2019-08-04 04:54:08',
            ),
            111 => 
            array (
                'city_id' => 112,
                'name' => 'Deli Serdang',
                'province_id' => 34,
                'created_at' => '2019-08-04 04:54:08',
                'updated_at' => '2019-08-04 04:54:08',
            ),
            112 => 
            array (
                'city_id' => 113,
                'name' => 'Demak',
                'province_id' => 10,
                'created_at' => '2019-08-04 04:54:08',
                'updated_at' => '2019-08-04 04:54:08',
            ),
            113 => 
            array (
                'city_id' => 114,
                'name' => 'Denpasar',
                'province_id' => 1,
                'created_at' => '2019-08-04 04:54:08',
                'updated_at' => '2019-08-04 04:54:08',
            ),
            114 => 
            array (
                'city_id' => 115,
                'name' => 'Depok',
                'province_id' => 9,
                'created_at' => '2019-08-04 04:54:08',
                'updated_at' => '2019-08-04 04:54:08',
            ),
            115 => 
            array (
                'city_id' => 116,
                'name' => 'Dharmasraya',
                'province_id' => 32,
                'created_at' => '2019-08-04 04:54:08',
                'updated_at' => '2019-08-04 04:54:08',
            ),
            116 => 
            array (
                'city_id' => 117,
                'name' => 'Dogiyai',
                'province_id' => 24,
                'created_at' => '2019-08-04 04:54:08',
                'updated_at' => '2019-08-04 04:54:08',
            ),
            117 => 
            array (
                'city_id' => 118,
                'name' => 'Dompu',
                'province_id' => 22,
                'created_at' => '2019-08-04 04:54:09',
                'updated_at' => '2019-08-04 04:54:09',
            ),
            118 => 
            array (
                'city_id' => 119,
                'name' => 'Donggala',
                'province_id' => 29,
                'created_at' => '2019-08-04 04:54:09',
                'updated_at' => '2019-08-04 04:54:09',
            ),
            119 => 
            array (
                'city_id' => 120,
                'name' => 'Dumai',
                'province_id' => 26,
                'created_at' => '2019-08-04 04:54:09',
                'updated_at' => '2019-08-04 04:54:09',
            ),
            120 => 
            array (
                'city_id' => 121,
                'name' => 'Empat Lawang',
                'province_id' => 33,
                'created_at' => '2019-08-04 04:54:09',
                'updated_at' => '2019-08-04 04:54:09',
            ),
            121 => 
            array (
                'city_id' => 122,
                'name' => 'Ende',
                'province_id' => 23,
                'created_at' => '2019-08-04 04:54:09',
                'updated_at' => '2019-08-04 04:54:09',
            ),
            122 => 
            array (
                'city_id' => 123,
                'name' => 'Enrekang',
                'province_id' => 28,
                'created_at' => '2019-08-04 04:54:09',
                'updated_at' => '2019-08-04 04:54:09',
            ),
            123 => 
            array (
                'city_id' => 124,
                'name' => 'Fakfak',
                'province_id' => 25,
                'created_at' => '2019-08-04 04:54:09',
                'updated_at' => '2019-08-04 04:54:09',
            ),
            124 => 
            array (
                'city_id' => 125,
                'name' => 'Flores Timur',
                'province_id' => 23,
                'created_at' => '2019-08-04 04:54:09',
                'updated_at' => '2019-08-04 04:54:09',
            ),
            125 => 
            array (
                'city_id' => 126,
                'name' => 'Garut',
                'province_id' => 9,
                'created_at' => '2019-08-04 04:54:09',
                'updated_at' => '2019-08-04 04:54:09',
            ),
            126 => 
            array (
                'city_id' => 127,
                'name' => 'Gayo Lues',
                'province_id' => 21,
                'created_at' => '2019-08-04 04:54:09',
                'updated_at' => '2019-08-04 04:54:09',
            ),
            127 => 
            array (
                'city_id' => 128,
                'name' => 'Gianyar',
                'province_id' => 1,
                'created_at' => '2019-08-04 04:54:09',
                'updated_at' => '2019-08-04 04:54:09',
            ),
            128 => 
            array (
                'city_id' => 129,
                'name' => 'Gorontalo',
                'province_id' => 7,
                'created_at' => '2019-08-04 04:54:09',
                'updated_at' => '2019-08-04 04:54:09',
            ),
            129 => 
            array (
                'city_id' => 130,
                'name' => 'Gorontalo',
                'province_id' => 7,
                'created_at' => '2019-08-04 04:54:09',
                'updated_at' => '2019-08-04 04:54:09',
            ),
            130 => 
            array (
                'city_id' => 131,
                'name' => 'Gorontalo Utara',
                'province_id' => 7,
                'created_at' => '2019-08-04 04:54:09',
                'updated_at' => '2019-08-04 04:54:09',
            ),
            131 => 
            array (
                'city_id' => 132,
                'name' => 'Gowa',
                'province_id' => 28,
                'created_at' => '2019-08-04 04:54:09',
                'updated_at' => '2019-08-04 04:54:09',
            ),
            132 => 
            array (
                'city_id' => 133,
                'name' => 'Gresik',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:10',
                'updated_at' => '2019-08-04 04:54:10',
            ),
            133 => 
            array (
                'city_id' => 134,
                'name' => 'Grobogan',
                'province_id' => 10,
                'created_at' => '2019-08-04 04:54:10',
                'updated_at' => '2019-08-04 04:54:10',
            ),
            134 => 
            array (
                'city_id' => 135,
                'name' => 'Gunung Kidul',
                'province_id' => 5,
                'created_at' => '2019-08-04 04:54:10',
                'updated_at' => '2019-08-04 04:54:10',
            ),
            135 => 
            array (
                'city_id' => 136,
                'name' => 'Gunung Mas',
                'province_id' => 14,
                'created_at' => '2019-08-04 04:54:10',
                'updated_at' => '2019-08-04 04:54:10',
            ),
            136 => 
            array (
                'city_id' => 137,
                'name' => 'Gunungsitoli',
                'province_id' => 34,
                'created_at' => '2019-08-04 04:54:10',
                'updated_at' => '2019-08-04 04:54:10',
            ),
            137 => 
            array (
                'city_id' => 138,
                'name' => 'Halmahera Barat',
                'province_id' => 20,
                'created_at' => '2019-08-04 04:54:10',
                'updated_at' => '2019-08-04 04:54:10',
            ),
            138 => 
            array (
                'city_id' => 139,
                'name' => 'Halmahera Selatan',
                'province_id' => 20,
                'created_at' => '2019-08-04 04:54:10',
                'updated_at' => '2019-08-04 04:54:10',
            ),
            139 => 
            array (
                'city_id' => 140,
                'name' => 'Halmahera Tengah',
                'province_id' => 20,
                'created_at' => '2019-08-04 04:54:10',
                'updated_at' => '2019-08-04 04:54:10',
            ),
            140 => 
            array (
                'city_id' => 141,
                'name' => 'Halmahera Timur',
                'province_id' => 20,
                'created_at' => '2019-08-04 04:54:10',
                'updated_at' => '2019-08-04 04:54:10',
            ),
            141 => 
            array (
                'city_id' => 142,
                'name' => 'Halmahera Utara',
                'province_id' => 20,
                'created_at' => '2019-08-04 04:54:10',
                'updated_at' => '2019-08-04 04:54:10',
            ),
            142 => 
            array (
                'city_id' => 143,
                'name' => 'Hulu Sungai Selatan',
                'province_id' => 13,
                'created_at' => '2019-08-04 04:54:10',
                'updated_at' => '2019-08-04 04:54:10',
            ),
            143 => 
            array (
                'city_id' => 144,
                'name' => 'Hulu Sungai Tengah',
                'province_id' => 13,
                'created_at' => '2019-08-04 04:54:10',
                'updated_at' => '2019-08-04 04:54:10',
            ),
            144 => 
            array (
                'city_id' => 145,
                'name' => 'Hulu Sungai Utara',
                'province_id' => 13,
                'created_at' => '2019-08-04 04:54:10',
                'updated_at' => '2019-08-04 04:54:10',
            ),
            145 => 
            array (
                'city_id' => 146,
                'name' => 'Humbang Hasundutan',
                'province_id' => 34,
                'created_at' => '2019-08-04 04:54:10',
                'updated_at' => '2019-08-04 04:54:10',
            ),
            146 => 
            array (
                'city_id' => 147,
                'name' => 'Indragiri Hilir',
                'province_id' => 26,
                'created_at' => '2019-08-04 04:54:10',
                'updated_at' => '2019-08-04 04:54:10',
            ),
            147 => 
            array (
                'city_id' => 148,
                'name' => 'Indragiri Hulu',
                'province_id' => 26,
                'created_at' => '2019-08-04 04:54:11',
                'updated_at' => '2019-08-04 04:54:11',
            ),
            148 => 
            array (
                'city_id' => 149,
                'name' => 'Indramayu',
                'province_id' => 9,
                'created_at' => '2019-08-04 04:54:11',
                'updated_at' => '2019-08-04 04:54:11',
            ),
            149 => 
            array (
                'city_id' => 150,
                'name' => 'Intan Jaya',
                'province_id' => 24,
                'created_at' => '2019-08-04 04:54:11',
                'updated_at' => '2019-08-04 04:54:11',
            ),
            150 => 
            array (
                'city_id' => 151,
                'name' => 'Jakarta Barat',
                'province_id' => 6,
                'created_at' => '2019-08-04 04:54:11',
                'updated_at' => '2019-08-04 04:54:11',
            ),
            151 => 
            array (
                'city_id' => 152,
                'name' => 'Jakarta Pusat',
                'province_id' => 6,
                'created_at' => '2019-08-04 04:54:11',
                'updated_at' => '2019-08-04 04:54:11',
            ),
            152 => 
            array (
                'city_id' => 153,
                'name' => 'Jakarta Selatan',
                'province_id' => 6,
                'created_at' => '2019-08-04 04:54:11',
                'updated_at' => '2019-08-04 04:54:11',
            ),
            153 => 
            array (
                'city_id' => 154,
                'name' => 'Jakarta Timur',
                'province_id' => 6,
                'created_at' => '2019-08-04 04:54:11',
                'updated_at' => '2019-08-04 04:54:11',
            ),
            154 => 
            array (
                'city_id' => 155,
                'name' => 'Jakarta Utara',
                'province_id' => 6,
                'created_at' => '2019-08-04 04:54:11',
                'updated_at' => '2019-08-04 04:54:11',
            ),
            155 => 
            array (
                'city_id' => 156,
                'name' => 'Jambi',
                'province_id' => 8,
                'created_at' => '2019-08-04 04:54:11',
                'updated_at' => '2019-08-04 04:54:11',
            ),
            156 => 
            array (
                'city_id' => 157,
                'name' => 'Jayapura',
                'province_id' => 24,
                'created_at' => '2019-08-04 04:54:11',
                'updated_at' => '2019-08-04 04:54:11',
            ),
            157 => 
            array (
                'city_id' => 158,
                'name' => 'Jayapura',
                'province_id' => 24,
                'created_at' => '2019-08-04 04:54:11',
                'updated_at' => '2019-08-04 04:54:11',
            ),
            158 => 
            array (
                'city_id' => 159,
                'name' => 'Jayawijaya',
                'province_id' => 24,
                'created_at' => '2019-08-04 04:54:11',
                'updated_at' => '2019-08-04 04:54:11',
            ),
            159 => 
            array (
                'city_id' => 160,
                'name' => 'Jember',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:11',
                'updated_at' => '2019-08-04 04:54:11',
            ),
            160 => 
            array (
                'city_id' => 161,
                'name' => 'Jembrana',
                'province_id' => 1,
                'created_at' => '2019-08-04 04:54:11',
                'updated_at' => '2019-08-04 04:54:11',
            ),
            161 => 
            array (
                'city_id' => 162,
                'name' => 'Jeneponto',
                'province_id' => 28,
                'created_at' => '2019-08-04 04:54:11',
                'updated_at' => '2019-08-04 04:54:11',
            ),
            162 => 
            array (
                'city_id' => 163,
                'name' => 'Jepara',
                'province_id' => 10,
                'created_at' => '2019-08-04 04:54:12',
                'updated_at' => '2019-08-04 04:54:12',
            ),
            163 => 
            array (
                'city_id' => 164,
                'name' => 'Jombang',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:12',
                'updated_at' => '2019-08-04 04:54:12',
            ),
            164 => 
            array (
                'city_id' => 165,
                'name' => 'Kaimana',
                'province_id' => 25,
                'created_at' => '2019-08-04 04:54:12',
                'updated_at' => '2019-08-04 04:54:12',
            ),
            165 => 
            array (
                'city_id' => 166,
                'name' => 'Kampar',
                'province_id' => 26,
                'created_at' => '2019-08-04 04:54:12',
                'updated_at' => '2019-08-04 04:54:12',
            ),
            166 => 
            array (
                'city_id' => 167,
                'name' => 'Kapuas',
                'province_id' => 14,
                'created_at' => '2019-08-04 04:54:12',
                'updated_at' => '2019-08-04 04:54:12',
            ),
            167 => 
            array (
                'city_id' => 168,
                'name' => 'Kapuas Hulu',
                'province_id' => 12,
                'created_at' => '2019-08-04 04:54:12',
                'updated_at' => '2019-08-04 04:54:12',
            ),
            168 => 
            array (
                'city_id' => 169,
                'name' => 'Karanganyar',
                'province_id' => 10,
                'created_at' => '2019-08-04 04:54:12',
                'updated_at' => '2019-08-04 04:54:12',
            ),
            169 => 
            array (
                'city_id' => 170,
                'name' => 'Karangasem',
                'province_id' => 1,
                'created_at' => '2019-08-04 04:54:12',
                'updated_at' => '2019-08-04 04:54:12',
            ),
            170 => 
            array (
                'city_id' => 171,
                'name' => 'Karawang',
                'province_id' => 9,
                'created_at' => '2019-08-04 04:54:12',
                'updated_at' => '2019-08-04 04:54:12',
            ),
            171 => 
            array (
                'city_id' => 172,
                'name' => 'Karimun',
                'province_id' => 17,
                'created_at' => '2019-08-04 04:54:12',
                'updated_at' => '2019-08-04 04:54:12',
            ),
            172 => 
            array (
                'city_id' => 173,
                'name' => 'Karo',
                'province_id' => 34,
                'created_at' => '2019-08-04 04:54:12',
                'updated_at' => '2019-08-04 04:54:12',
            ),
            173 => 
            array (
                'city_id' => 174,
                'name' => 'Katingan',
                'province_id' => 14,
                'created_at' => '2019-08-04 04:54:12',
                'updated_at' => '2019-08-04 04:54:12',
            ),
            174 => 
            array (
                'city_id' => 175,
                'name' => 'Kaur',
                'province_id' => 4,
                'created_at' => '2019-08-04 04:54:12',
                'updated_at' => '2019-08-04 04:54:12',
            ),
            175 => 
            array (
                'city_id' => 176,
                'name' => 'Kayong Utara',
                'province_id' => 12,
                'created_at' => '2019-08-04 04:54:12',
                'updated_at' => '2019-08-04 04:54:12',
            ),
            176 => 
            array (
                'city_id' => 177,
                'name' => 'Kebumen',
                'province_id' => 10,
                'created_at' => '2019-08-04 04:54:12',
                'updated_at' => '2019-08-04 04:54:12',
            ),
            177 => 
            array (
                'city_id' => 178,
                'name' => 'Kediri',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:12',
                'updated_at' => '2019-08-04 04:54:12',
            ),
            178 => 
            array (
                'city_id' => 179,
                'name' => 'Kediri',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:13',
                'updated_at' => '2019-08-04 04:54:13',
            ),
            179 => 
            array (
                'city_id' => 180,
                'name' => 'Keerom',
                'province_id' => 24,
                'created_at' => '2019-08-04 04:54:13',
                'updated_at' => '2019-08-04 04:54:13',
            ),
            180 => 
            array (
                'city_id' => 181,
                'name' => 'Kendal',
                'province_id' => 10,
                'created_at' => '2019-08-04 04:54:13',
                'updated_at' => '2019-08-04 04:54:13',
            ),
            181 => 
            array (
                'city_id' => 182,
                'name' => 'Kendari',
                'province_id' => 30,
                'created_at' => '2019-08-04 04:54:13',
                'updated_at' => '2019-08-04 04:54:13',
            ),
            182 => 
            array (
                'city_id' => 183,
                'name' => 'Kepahiang',
                'province_id' => 4,
                'created_at' => '2019-08-04 04:54:13',
                'updated_at' => '2019-08-04 04:54:13',
            ),
            183 => 
            array (
                'city_id' => 184,
                'name' => 'Kepulauan Anambas',
                'province_id' => 17,
                'created_at' => '2019-08-04 04:54:13',
                'updated_at' => '2019-08-04 04:54:13',
            ),
            184 => 
            array (
                'city_id' => 185,
                'name' => 'Kepulauan Aru',
                'province_id' => 19,
                'created_at' => '2019-08-04 04:54:13',
                'updated_at' => '2019-08-04 04:54:13',
            ),
            185 => 
            array (
                'city_id' => 186,
                'name' => 'Kepulauan Mentawai',
                'province_id' => 32,
                'created_at' => '2019-08-04 04:54:13',
                'updated_at' => '2019-08-04 04:54:13',
            ),
            186 => 
            array (
                'city_id' => 187,
                'name' => 'Kepulauan Meranti',
                'province_id' => 26,
                'created_at' => '2019-08-04 04:54:13',
                'updated_at' => '2019-08-04 04:54:13',
            ),
            187 => 
            array (
                'city_id' => 188,
                'name' => 'Kepulauan Sangihe',
                'province_id' => 31,
                'created_at' => '2019-08-04 04:54:13',
                'updated_at' => '2019-08-04 04:54:13',
            ),
            188 => 
            array (
                'city_id' => 189,
                'name' => 'Kepulauan Seribu',
                'province_id' => 6,
                'created_at' => '2019-08-04 04:54:13',
                'updated_at' => '2019-08-04 04:54:13',
            ),
            189 => 
            array (
                'city_id' => 190,
            'name' => 'Kepulauan Siau Tagulandang Biaro (Sitaro)',
                'province_id' => 31,
                'created_at' => '2019-08-04 04:54:13',
                'updated_at' => '2019-08-04 04:54:13',
            ),
            190 => 
            array (
                'city_id' => 191,
                'name' => 'Kepulauan Sula',
                'province_id' => 20,
                'created_at' => '2019-08-04 04:54:13',
                'updated_at' => '2019-08-04 04:54:13',
            ),
            191 => 
            array (
                'city_id' => 192,
                'name' => 'Kepulauan Talaud',
                'province_id' => 31,
                'created_at' => '2019-08-04 04:54:13',
                'updated_at' => '2019-08-04 04:54:13',
            ),
            192 => 
            array (
                'city_id' => 193,
            'name' => 'Kepulauan Yapen (Yapen Waropen)',
                'province_id' => 24,
                'created_at' => '2019-08-04 04:54:13',
                'updated_at' => '2019-08-04 04:54:13',
            ),
            193 => 
            array (
                'city_id' => 194,
                'name' => 'Kerinci',
                'province_id' => 8,
                'created_at' => '2019-08-04 04:54:14',
                'updated_at' => '2019-08-04 04:54:14',
            ),
            194 => 
            array (
                'city_id' => 195,
                'name' => 'Ketapang',
                'province_id' => 12,
                'created_at' => '2019-08-04 04:54:14',
                'updated_at' => '2019-08-04 04:54:14',
            ),
            195 => 
            array (
                'city_id' => 196,
                'name' => 'Klaten',
                'province_id' => 10,
                'created_at' => '2019-08-04 04:54:14',
                'updated_at' => '2019-08-04 04:54:14',
            ),
            196 => 
            array (
                'city_id' => 197,
                'name' => 'Klungkung',
                'province_id' => 1,
                'created_at' => '2019-08-04 04:54:14',
                'updated_at' => '2019-08-04 04:54:14',
            ),
            197 => 
            array (
                'city_id' => 198,
                'name' => 'Kolaka',
                'province_id' => 30,
                'created_at' => '2019-08-04 04:54:14',
                'updated_at' => '2019-08-04 04:54:14',
            ),
            198 => 
            array (
                'city_id' => 199,
                'name' => 'Kolaka Utara',
                'province_id' => 30,
                'created_at' => '2019-08-04 04:54:14',
                'updated_at' => '2019-08-04 04:54:14',
            ),
            199 => 
            array (
                'city_id' => 200,
                'name' => 'Konawe',
                'province_id' => 30,
                'created_at' => '2019-08-04 04:54:14',
                'updated_at' => '2019-08-04 04:54:14',
            ),
            200 => 
            array (
                'city_id' => 201,
                'name' => 'Konawe Selatan',
                'province_id' => 30,
                'created_at' => '2019-08-04 04:54:14',
                'updated_at' => '2019-08-04 04:54:14',
            ),
            201 => 
            array (
                'city_id' => 202,
                'name' => 'Konawe Utara',
                'province_id' => 30,
                'created_at' => '2019-08-04 04:54:14',
                'updated_at' => '2019-08-04 04:54:14',
            ),
            202 => 
            array (
                'city_id' => 203,
                'name' => 'Kotabaru',
                'province_id' => 13,
                'created_at' => '2019-08-04 04:54:14',
                'updated_at' => '2019-08-04 04:54:14',
            ),
            203 => 
            array (
                'city_id' => 204,
                'name' => 'Kotamobagu',
                'province_id' => 31,
                'created_at' => '2019-08-04 04:54:14',
                'updated_at' => '2019-08-04 04:54:14',
            ),
            204 => 
            array (
                'city_id' => 205,
                'name' => 'Kotawaringin Barat',
                'province_id' => 14,
                'created_at' => '2019-08-04 04:54:14',
                'updated_at' => '2019-08-04 04:54:14',
            ),
            205 => 
            array (
                'city_id' => 206,
                'name' => 'Kotawaringin Timur',
                'province_id' => 14,
                'created_at' => '2019-08-04 04:54:14',
                'updated_at' => '2019-08-04 04:54:14',
            ),
            206 => 
            array (
                'city_id' => 207,
                'name' => 'Kuantan Singingi',
                'province_id' => 26,
                'created_at' => '2019-08-04 04:54:14',
                'updated_at' => '2019-08-04 04:54:14',
            ),
            207 => 
            array (
                'city_id' => 208,
                'name' => 'Kubu Raya',
                'province_id' => 12,
                'created_at' => '2019-08-04 04:54:14',
                'updated_at' => '2019-08-04 04:54:14',
            ),
            208 => 
            array (
                'city_id' => 209,
                'name' => 'Kudus',
                'province_id' => 10,
                'created_at' => '2019-08-04 04:54:14',
                'updated_at' => '2019-08-04 04:54:14',
            ),
            209 => 
            array (
                'city_id' => 210,
                'name' => 'Kulon Progo',
                'province_id' => 5,
                'created_at' => '2019-08-04 04:54:14',
                'updated_at' => '2019-08-04 04:54:14',
            ),
            210 => 
            array (
                'city_id' => 211,
                'name' => 'Kuningan',
                'province_id' => 9,
                'created_at' => '2019-08-04 04:54:14',
                'updated_at' => '2019-08-04 04:54:14',
            ),
            211 => 
            array (
                'city_id' => 212,
                'name' => 'Kupang',
                'province_id' => 23,
                'created_at' => '2019-08-04 04:54:14',
                'updated_at' => '2019-08-04 04:54:14',
            ),
            212 => 
            array (
                'city_id' => 213,
                'name' => 'Kupang',
                'province_id' => 23,
                'created_at' => '2019-08-04 04:54:15',
                'updated_at' => '2019-08-04 04:54:15',
            ),
            213 => 
            array (
                'city_id' => 214,
                'name' => 'Kutai Barat',
                'province_id' => 15,
                'created_at' => '2019-08-04 04:54:15',
                'updated_at' => '2019-08-04 04:54:15',
            ),
            214 => 
            array (
                'city_id' => 215,
                'name' => 'Kutai Kartanegara',
                'province_id' => 15,
                'created_at' => '2019-08-04 04:54:15',
                'updated_at' => '2019-08-04 04:54:15',
            ),
            215 => 
            array (
                'city_id' => 216,
                'name' => 'Kutai Timur',
                'province_id' => 15,
                'created_at' => '2019-08-04 04:54:15',
                'updated_at' => '2019-08-04 04:54:15',
            ),
            216 => 
            array (
                'city_id' => 217,
                'name' => 'Labuhan Batu',
                'province_id' => 34,
                'created_at' => '2019-08-04 04:54:15',
                'updated_at' => '2019-08-04 04:54:15',
            ),
            217 => 
            array (
                'city_id' => 218,
                'name' => 'Labuhan Batu Selatan',
                'province_id' => 34,
                'created_at' => '2019-08-04 04:54:15',
                'updated_at' => '2019-08-04 04:54:15',
            ),
            218 => 
            array (
                'city_id' => 219,
                'name' => 'Labuhan Batu Utara',
                'province_id' => 34,
                'created_at' => '2019-08-04 04:54:15',
                'updated_at' => '2019-08-04 04:54:15',
            ),
            219 => 
            array (
                'city_id' => 220,
                'name' => 'Lahat',
                'province_id' => 33,
                'created_at' => '2019-08-04 04:54:15',
                'updated_at' => '2019-08-04 04:54:15',
            ),
            220 => 
            array (
                'city_id' => 221,
                'name' => 'Lamandau',
                'province_id' => 14,
                'created_at' => '2019-08-04 04:54:15',
                'updated_at' => '2019-08-04 04:54:15',
            ),
            221 => 
            array (
                'city_id' => 222,
                'name' => 'Lamongan',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:15',
                'updated_at' => '2019-08-04 04:54:15',
            ),
            222 => 
            array (
                'city_id' => 223,
                'name' => 'Lampung Barat',
                'province_id' => 18,
                'created_at' => '2019-08-04 04:54:15',
                'updated_at' => '2019-08-04 04:54:15',
            ),
            223 => 
            array (
                'city_id' => 224,
                'name' => 'Lampung Selatan',
                'province_id' => 18,
                'created_at' => '2019-08-04 04:54:15',
                'updated_at' => '2019-08-04 04:54:15',
            ),
            224 => 
            array (
                'city_id' => 225,
                'name' => 'Lampung Tengah',
                'province_id' => 18,
                'created_at' => '2019-08-04 04:54:15',
                'updated_at' => '2019-08-04 04:54:15',
            ),
            225 => 
            array (
                'city_id' => 226,
                'name' => 'Lampung Timur',
                'province_id' => 18,
                'created_at' => '2019-08-04 04:54:15',
                'updated_at' => '2019-08-04 04:54:15',
            ),
            226 => 
            array (
                'city_id' => 227,
                'name' => 'Lampung Utara',
                'province_id' => 18,
                'created_at' => '2019-08-04 04:54:15',
                'updated_at' => '2019-08-04 04:54:15',
            ),
            227 => 
            array (
                'city_id' => 228,
                'name' => 'Landak',
                'province_id' => 12,
                'created_at' => '2019-08-04 04:54:15',
                'updated_at' => '2019-08-04 04:54:15',
            ),
            228 => 
            array (
                'city_id' => 229,
                'name' => 'Langkat',
                'province_id' => 34,
                'created_at' => '2019-08-04 04:54:15',
                'updated_at' => '2019-08-04 04:54:15',
            ),
            229 => 
            array (
                'city_id' => 230,
                'name' => 'Langsa',
                'province_id' => 21,
                'created_at' => '2019-08-04 04:54:15',
                'updated_at' => '2019-08-04 04:54:15',
            ),
            230 => 
            array (
                'city_id' => 231,
                'name' => 'Lanny Jaya',
                'province_id' => 24,
                'created_at' => '2019-08-04 04:54:16',
                'updated_at' => '2019-08-04 04:54:16',
            ),
            231 => 
            array (
                'city_id' => 232,
                'name' => 'Lebak',
                'province_id' => 3,
                'created_at' => '2019-08-04 04:54:16',
                'updated_at' => '2019-08-04 04:54:16',
            ),
            232 => 
            array (
                'city_id' => 233,
                'name' => 'Lebong',
                'province_id' => 4,
                'created_at' => '2019-08-04 04:54:16',
                'updated_at' => '2019-08-04 04:54:16',
            ),
            233 => 
            array (
                'city_id' => 234,
                'name' => 'Lembata',
                'province_id' => 23,
                'created_at' => '2019-08-04 04:54:16',
                'updated_at' => '2019-08-04 04:54:16',
            ),
            234 => 
            array (
                'city_id' => 235,
                'name' => 'Lhokseumawe',
                'province_id' => 21,
                'created_at' => '2019-08-04 04:54:16',
                'updated_at' => '2019-08-04 04:54:16',
            ),
            235 => 
            array (
                'city_id' => 236,
                'name' => 'Lima Puluh Koto/Kota',
                'province_id' => 32,
                'created_at' => '2019-08-04 04:54:16',
                'updated_at' => '2019-08-04 04:54:16',
            ),
            236 => 
            array (
                'city_id' => 237,
                'name' => 'Lingga',
                'province_id' => 17,
                'created_at' => '2019-08-04 04:54:16',
                'updated_at' => '2019-08-04 04:54:16',
            ),
            237 => 
            array (
                'city_id' => 238,
                'name' => 'Lombok Barat',
                'province_id' => 22,
                'created_at' => '2019-08-04 04:54:16',
                'updated_at' => '2019-08-04 04:54:16',
            ),
            238 => 
            array (
                'city_id' => 239,
                'name' => 'Lombok Tengah',
                'province_id' => 22,
                'created_at' => '2019-08-04 04:54:16',
                'updated_at' => '2019-08-04 04:54:16',
            ),
            239 => 
            array (
                'city_id' => 240,
                'name' => 'Lombok Timur',
                'province_id' => 22,
                'created_at' => '2019-08-04 04:54:16',
                'updated_at' => '2019-08-04 04:54:16',
            ),
            240 => 
            array (
                'city_id' => 241,
                'name' => 'Lombok Utara',
                'province_id' => 22,
                'created_at' => '2019-08-04 04:54:16',
                'updated_at' => '2019-08-04 04:54:16',
            ),
            241 => 
            array (
                'city_id' => 242,
                'name' => 'Lubuk Linggau',
                'province_id' => 33,
                'created_at' => '2019-08-04 04:54:16',
                'updated_at' => '2019-08-04 04:54:16',
            ),
            242 => 
            array (
                'city_id' => 243,
                'name' => 'Lumajang',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:16',
                'updated_at' => '2019-08-04 04:54:16',
            ),
            243 => 
            array (
                'city_id' => 244,
                'name' => 'Luwu',
                'province_id' => 28,
                'created_at' => '2019-08-04 04:54:16',
                'updated_at' => '2019-08-04 04:54:16',
            ),
            244 => 
            array (
                'city_id' => 245,
                'name' => 'Luwu Timur',
                'province_id' => 28,
                'created_at' => '2019-08-04 04:54:17',
                'updated_at' => '2019-08-04 04:54:17',
            ),
            245 => 
            array (
                'city_id' => 246,
                'name' => 'Luwu Utara',
                'province_id' => 28,
                'created_at' => '2019-08-04 04:54:17',
                'updated_at' => '2019-08-04 04:54:17',
            ),
            246 => 
            array (
                'city_id' => 247,
                'name' => 'Madiun',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:17',
                'updated_at' => '2019-08-04 04:54:17',
            ),
            247 => 
            array (
                'city_id' => 248,
                'name' => 'Madiun',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:17',
                'updated_at' => '2019-08-04 04:54:17',
            ),
            248 => 
            array (
                'city_id' => 249,
                'name' => 'Magelang',
                'province_id' => 10,
                'created_at' => '2019-08-04 04:54:17',
                'updated_at' => '2019-08-04 04:54:17',
            ),
            249 => 
            array (
                'city_id' => 250,
                'name' => 'Magelang',
                'province_id' => 10,
                'created_at' => '2019-08-04 04:54:17',
                'updated_at' => '2019-08-04 04:54:17',
            ),
            250 => 
            array (
                'city_id' => 251,
                'name' => 'Magetan',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:17',
                'updated_at' => '2019-08-04 04:54:17',
            ),
            251 => 
            array (
                'city_id' => 252,
                'name' => 'Majalengka',
                'province_id' => 9,
                'created_at' => '2019-08-04 04:54:17',
                'updated_at' => '2019-08-04 04:54:17',
            ),
            252 => 
            array (
                'city_id' => 253,
                'name' => 'Majene',
                'province_id' => 27,
                'created_at' => '2019-08-04 04:54:17',
                'updated_at' => '2019-08-04 04:54:17',
            ),
            253 => 
            array (
                'city_id' => 254,
                'name' => 'Makassar',
                'province_id' => 28,
                'created_at' => '2019-08-04 04:54:17',
                'updated_at' => '2019-08-04 04:54:17',
            ),
            254 => 
            array (
                'city_id' => 255,
                'name' => 'Malang',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:18',
                'updated_at' => '2019-08-04 04:54:18',
            ),
            255 => 
            array (
                'city_id' => 256,
                'name' => 'Malang',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:18',
                'updated_at' => '2019-08-04 04:54:18',
            ),
            256 => 
            array (
                'city_id' => 257,
                'name' => 'Malinau',
                'province_id' => 16,
                'created_at' => '2019-08-04 04:54:18',
                'updated_at' => '2019-08-04 04:54:18',
            ),
            257 => 
            array (
                'city_id' => 258,
                'name' => 'Maluku Barat Daya',
                'province_id' => 19,
                'created_at' => '2019-08-04 04:54:18',
                'updated_at' => '2019-08-04 04:54:18',
            ),
            258 => 
            array (
                'city_id' => 259,
                'name' => 'Maluku Tengah',
                'province_id' => 19,
                'created_at' => '2019-08-04 04:54:18',
                'updated_at' => '2019-08-04 04:54:18',
            ),
            259 => 
            array (
                'city_id' => 260,
                'name' => 'Maluku Tenggara',
                'province_id' => 19,
                'created_at' => '2019-08-04 04:54:18',
                'updated_at' => '2019-08-04 04:54:18',
            ),
            260 => 
            array (
                'city_id' => 261,
                'name' => 'Maluku Tenggara Barat',
                'province_id' => 19,
                'created_at' => '2019-08-04 04:54:18',
                'updated_at' => '2019-08-04 04:54:18',
            ),
            261 => 
            array (
                'city_id' => 262,
                'name' => 'Mamasa',
                'province_id' => 27,
                'created_at' => '2019-08-04 04:54:18',
                'updated_at' => '2019-08-04 04:54:18',
            ),
            262 => 
            array (
                'city_id' => 263,
                'name' => 'Mamberamo Raya',
                'province_id' => 24,
                'created_at' => '2019-08-04 04:54:18',
                'updated_at' => '2019-08-04 04:54:18',
            ),
            263 => 
            array (
                'city_id' => 264,
                'name' => 'Mamberamo Tengah',
                'province_id' => 24,
                'created_at' => '2019-08-04 04:54:18',
                'updated_at' => '2019-08-04 04:54:18',
            ),
            264 => 
            array (
                'city_id' => 265,
                'name' => 'Mamuju',
                'province_id' => 27,
                'created_at' => '2019-08-04 04:54:18',
                'updated_at' => '2019-08-04 04:54:18',
            ),
            265 => 
            array (
                'city_id' => 266,
                'name' => 'Mamuju Utara',
                'province_id' => 27,
                'created_at' => '2019-08-04 04:54:18',
                'updated_at' => '2019-08-04 04:54:18',
            ),
            266 => 
            array (
                'city_id' => 267,
                'name' => 'Manado',
                'province_id' => 31,
                'created_at' => '2019-08-04 04:54:18',
                'updated_at' => '2019-08-04 04:54:18',
            ),
            267 => 
            array (
                'city_id' => 268,
                'name' => 'Mandailing Natal',
                'province_id' => 34,
                'created_at' => '2019-08-04 04:54:18',
                'updated_at' => '2019-08-04 04:54:18',
            ),
            268 => 
            array (
                'city_id' => 269,
                'name' => 'Manggarai',
                'province_id' => 23,
                'created_at' => '2019-08-04 04:54:18',
                'updated_at' => '2019-08-04 04:54:18',
            ),
            269 => 
            array (
                'city_id' => 270,
                'name' => 'Manggarai Barat',
                'province_id' => 23,
                'created_at' => '2019-08-04 04:54:19',
                'updated_at' => '2019-08-04 04:54:19',
            ),
            270 => 
            array (
                'city_id' => 271,
                'name' => 'Manggarai Timur',
                'province_id' => 23,
                'created_at' => '2019-08-04 04:54:19',
                'updated_at' => '2019-08-04 04:54:19',
            ),
            271 => 
            array (
                'city_id' => 272,
                'name' => 'Manokwari',
                'province_id' => 25,
                'created_at' => '2019-08-04 04:54:19',
                'updated_at' => '2019-08-04 04:54:19',
            ),
            272 => 
            array (
                'city_id' => 273,
                'name' => 'Manokwari Selatan',
                'province_id' => 25,
                'created_at' => '2019-08-04 04:54:19',
                'updated_at' => '2019-08-04 04:54:19',
            ),
            273 => 
            array (
                'city_id' => 274,
                'name' => 'Mappi',
                'province_id' => 24,
                'created_at' => '2019-08-04 04:54:19',
                'updated_at' => '2019-08-04 04:54:19',
            ),
            274 => 
            array (
                'city_id' => 275,
                'name' => 'Maros',
                'province_id' => 28,
                'created_at' => '2019-08-04 04:54:19',
                'updated_at' => '2019-08-04 04:54:19',
            ),
            275 => 
            array (
                'city_id' => 276,
                'name' => 'Mataram',
                'province_id' => 22,
                'created_at' => '2019-08-04 04:54:19',
                'updated_at' => '2019-08-04 04:54:19',
            ),
            276 => 
            array (
                'city_id' => 277,
                'name' => 'Maybrat',
                'province_id' => 25,
                'created_at' => '2019-08-04 04:54:19',
                'updated_at' => '2019-08-04 04:54:19',
            ),
            277 => 
            array (
                'city_id' => 278,
                'name' => 'Medan',
                'province_id' => 34,
                'created_at' => '2019-08-04 04:54:20',
                'updated_at' => '2019-08-04 04:54:20',
            ),
            278 => 
            array (
                'city_id' => 279,
                'name' => 'Melawi',
                'province_id' => 12,
                'created_at' => '2019-08-04 04:54:20',
                'updated_at' => '2019-08-04 04:54:20',
            ),
            279 => 
            array (
                'city_id' => 280,
                'name' => 'Merangin',
                'province_id' => 8,
                'created_at' => '2019-08-04 04:54:20',
                'updated_at' => '2019-08-04 04:54:20',
            ),
            280 => 
            array (
                'city_id' => 281,
                'name' => 'Merauke',
                'province_id' => 24,
                'created_at' => '2019-08-04 04:54:20',
                'updated_at' => '2019-08-04 04:54:20',
            ),
            281 => 
            array (
                'city_id' => 282,
                'name' => 'Mesuji',
                'province_id' => 18,
                'created_at' => '2019-08-04 04:54:20',
                'updated_at' => '2019-08-04 04:54:20',
            ),
            282 => 
            array (
                'city_id' => 283,
                'name' => 'Metro',
                'province_id' => 18,
                'created_at' => '2019-08-04 04:54:20',
                'updated_at' => '2019-08-04 04:54:20',
            ),
            283 => 
            array (
                'city_id' => 284,
                'name' => 'Mimika',
                'province_id' => 24,
                'created_at' => '2019-08-04 04:54:20',
                'updated_at' => '2019-08-04 04:54:20',
            ),
            284 => 
            array (
                'city_id' => 285,
                'name' => 'Minahasa',
                'province_id' => 31,
                'created_at' => '2019-08-04 04:54:20',
                'updated_at' => '2019-08-04 04:54:20',
            ),
            285 => 
            array (
                'city_id' => 286,
                'name' => 'Minahasa Selatan',
                'province_id' => 31,
                'created_at' => '2019-08-04 04:54:20',
                'updated_at' => '2019-08-04 04:54:20',
            ),
            286 => 
            array (
                'city_id' => 287,
                'name' => 'Minahasa Tenggara',
                'province_id' => 31,
                'created_at' => '2019-08-04 04:54:20',
                'updated_at' => '2019-08-04 04:54:20',
            ),
            287 => 
            array (
                'city_id' => 288,
                'name' => 'Minahasa Utara',
                'province_id' => 31,
                'created_at' => '2019-08-04 04:54:20',
                'updated_at' => '2019-08-04 04:54:20',
            ),
            288 => 
            array (
                'city_id' => 289,
                'name' => 'Mojokerto',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:20',
                'updated_at' => '2019-08-04 04:54:20',
            ),
            289 => 
            array (
                'city_id' => 290,
                'name' => 'Mojokerto',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:20',
                'updated_at' => '2019-08-04 04:54:20',
            ),
            290 => 
            array (
                'city_id' => 291,
                'name' => 'Morowali',
                'province_id' => 29,
                'created_at' => '2019-08-04 04:54:20',
                'updated_at' => '2019-08-04 04:54:20',
            ),
            291 => 
            array (
                'city_id' => 292,
                'name' => 'Muara Enim',
                'province_id' => 33,
                'created_at' => '2019-08-04 04:54:21',
                'updated_at' => '2019-08-04 04:54:21',
            ),
            292 => 
            array (
                'city_id' => 293,
                'name' => 'Muaro Jambi',
                'province_id' => 8,
                'created_at' => '2019-08-04 04:54:21',
                'updated_at' => '2019-08-04 04:54:21',
            ),
            293 => 
            array (
                'city_id' => 294,
                'name' => 'Muko Muko',
                'province_id' => 4,
                'created_at' => '2019-08-04 04:54:21',
                'updated_at' => '2019-08-04 04:54:21',
            ),
            294 => 
            array (
                'city_id' => 295,
                'name' => 'Muna',
                'province_id' => 30,
                'created_at' => '2019-08-04 04:54:21',
                'updated_at' => '2019-08-04 04:54:21',
            ),
            295 => 
            array (
                'city_id' => 296,
                'name' => 'Murung Raya',
                'province_id' => 14,
                'created_at' => '2019-08-04 04:54:21',
                'updated_at' => '2019-08-04 04:54:21',
            ),
            296 => 
            array (
                'city_id' => 297,
                'name' => 'Musi Banyuasin',
                'province_id' => 33,
                'created_at' => '2019-08-04 04:54:21',
                'updated_at' => '2019-08-04 04:54:21',
            ),
            297 => 
            array (
                'city_id' => 298,
                'name' => 'Musi Rawas',
                'province_id' => 33,
                'created_at' => '2019-08-04 04:54:21',
                'updated_at' => '2019-08-04 04:54:21',
            ),
            298 => 
            array (
                'city_id' => 299,
                'name' => 'Nabire',
                'province_id' => 24,
                'created_at' => '2019-08-04 04:54:21',
                'updated_at' => '2019-08-04 04:54:21',
            ),
            299 => 
            array (
                'city_id' => 300,
                'name' => 'Nagan Raya',
                'province_id' => 21,
                'created_at' => '2019-08-04 04:54:21',
                'updated_at' => '2019-08-04 04:54:21',
            ),
            300 => 
            array (
                'city_id' => 301,
                'name' => 'Nagekeo',
                'province_id' => 23,
                'created_at' => '2019-08-04 04:54:21',
                'updated_at' => '2019-08-04 04:54:21',
            ),
            301 => 
            array (
                'city_id' => 302,
                'name' => 'Natuna',
                'province_id' => 17,
                'created_at' => '2019-08-04 04:54:21',
                'updated_at' => '2019-08-04 04:54:21',
            ),
            302 => 
            array (
                'city_id' => 303,
                'name' => 'Nduga',
                'province_id' => 24,
                'created_at' => '2019-08-04 04:54:21',
                'updated_at' => '2019-08-04 04:54:21',
            ),
            303 => 
            array (
                'city_id' => 304,
                'name' => 'Ngada',
                'province_id' => 23,
                'created_at' => '2019-08-04 04:54:21',
                'updated_at' => '2019-08-04 04:54:21',
            ),
            304 => 
            array (
                'city_id' => 305,
                'name' => 'Nganjuk',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:21',
                'updated_at' => '2019-08-04 04:54:21',
            ),
            305 => 
            array (
                'city_id' => 306,
                'name' => 'Ngawi',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:21',
                'updated_at' => '2019-08-04 04:54:21',
            ),
            306 => 
            array (
                'city_id' => 307,
                'name' => 'Nias',
                'province_id' => 34,
                'created_at' => '2019-08-04 04:54:21',
                'updated_at' => '2019-08-04 04:54:21',
            ),
            307 => 
            array (
                'city_id' => 308,
                'name' => 'Nias Barat',
                'province_id' => 34,
                'created_at' => '2019-08-04 04:54:21',
                'updated_at' => '2019-08-04 04:54:21',
            ),
            308 => 
            array (
                'city_id' => 309,
                'name' => 'Nias Selatan',
                'province_id' => 34,
                'created_at' => '2019-08-04 04:54:22',
                'updated_at' => '2019-08-04 04:54:22',
            ),
            309 => 
            array (
                'city_id' => 310,
                'name' => 'Nias Utara',
                'province_id' => 34,
                'created_at' => '2019-08-04 04:54:22',
                'updated_at' => '2019-08-04 04:54:22',
            ),
            310 => 
            array (
                'city_id' => 311,
                'name' => 'Nunukan',
                'province_id' => 16,
                'created_at' => '2019-08-04 04:54:22',
                'updated_at' => '2019-08-04 04:54:22',
            ),
            311 => 
            array (
                'city_id' => 312,
                'name' => 'Ogan Ilir',
                'province_id' => 33,
                'created_at' => '2019-08-04 04:54:22',
                'updated_at' => '2019-08-04 04:54:22',
            ),
            312 => 
            array (
                'city_id' => 313,
                'name' => 'Ogan Komering Ilir',
                'province_id' => 33,
                'created_at' => '2019-08-04 04:54:22',
                'updated_at' => '2019-08-04 04:54:22',
            ),
            313 => 
            array (
                'city_id' => 314,
                'name' => 'Ogan Komering Ulu',
                'province_id' => 33,
                'created_at' => '2019-08-04 04:54:22',
                'updated_at' => '2019-08-04 04:54:22',
            ),
            314 => 
            array (
                'city_id' => 315,
                'name' => 'Ogan Komering Ulu Selatan',
                'province_id' => 33,
                'created_at' => '2019-08-04 04:54:22',
                'updated_at' => '2019-08-04 04:54:22',
            ),
            315 => 
            array (
                'city_id' => 316,
                'name' => 'Ogan Komering Ulu Timur',
                'province_id' => 33,
                'created_at' => '2019-08-04 04:54:22',
                'updated_at' => '2019-08-04 04:54:22',
            ),
            316 => 
            array (
                'city_id' => 317,
                'name' => 'Pacitan',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:22',
                'updated_at' => '2019-08-04 04:54:22',
            ),
            317 => 
            array (
                'city_id' => 318,
                'name' => 'Padang',
                'province_id' => 32,
                'created_at' => '2019-08-04 04:54:22',
                'updated_at' => '2019-08-04 04:54:22',
            ),
            318 => 
            array (
                'city_id' => 319,
                'name' => 'Padang Lawas',
                'province_id' => 34,
                'created_at' => '2019-08-04 04:54:22',
                'updated_at' => '2019-08-04 04:54:22',
            ),
            319 => 
            array (
                'city_id' => 320,
                'name' => 'Padang Lawas Utara',
                'province_id' => 34,
                'created_at' => '2019-08-04 04:54:22',
                'updated_at' => '2019-08-04 04:54:22',
            ),
            320 => 
            array (
                'city_id' => 321,
                'name' => 'Padang Panjang',
                'province_id' => 32,
                'created_at' => '2019-08-04 04:54:22',
                'updated_at' => '2019-08-04 04:54:22',
            ),
            321 => 
            array (
                'city_id' => 322,
                'name' => 'Padang Pariaman',
                'province_id' => 32,
                'created_at' => '2019-08-04 04:54:22',
                'updated_at' => '2019-08-04 04:54:22',
            ),
            322 => 
            array (
                'city_id' => 323,
                'name' => 'Padang Sidempuan',
                'province_id' => 34,
                'created_at' => '2019-08-04 04:54:22',
                'updated_at' => '2019-08-04 04:54:22',
            ),
            323 => 
            array (
                'city_id' => 324,
                'name' => 'Pagar Alam',
                'province_id' => 33,
                'created_at' => '2019-08-04 04:54:23',
                'updated_at' => '2019-08-04 04:54:23',
            ),
            324 => 
            array (
                'city_id' => 325,
                'name' => 'Pakpak Bharat',
                'province_id' => 34,
                'created_at' => '2019-08-04 04:54:23',
                'updated_at' => '2019-08-04 04:54:23',
            ),
            325 => 
            array (
                'city_id' => 326,
                'name' => 'Palangka Raya',
                'province_id' => 14,
                'created_at' => '2019-08-04 04:54:23',
                'updated_at' => '2019-08-04 04:54:23',
            ),
            326 => 
            array (
                'city_id' => 327,
                'name' => 'Palembang',
                'province_id' => 33,
                'created_at' => '2019-08-04 04:54:23',
                'updated_at' => '2019-08-04 04:54:23',
            ),
            327 => 
            array (
                'city_id' => 328,
                'name' => 'Palopo',
                'province_id' => 28,
                'created_at' => '2019-08-04 04:54:23',
                'updated_at' => '2019-08-04 04:54:23',
            ),
            328 => 
            array (
                'city_id' => 329,
                'name' => 'Palu',
                'province_id' => 29,
                'created_at' => '2019-08-04 04:54:23',
                'updated_at' => '2019-08-04 04:54:23',
            ),
            329 => 
            array (
                'city_id' => 330,
                'name' => 'Pamekasan',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:23',
                'updated_at' => '2019-08-04 04:54:23',
            ),
            330 => 
            array (
                'city_id' => 331,
                'name' => 'Pandeglang',
                'province_id' => 3,
                'created_at' => '2019-08-04 04:54:23',
                'updated_at' => '2019-08-04 04:54:23',
            ),
            331 => 
            array (
                'city_id' => 332,
                'name' => 'Pangandaran',
                'province_id' => 9,
                'created_at' => '2019-08-04 04:54:23',
                'updated_at' => '2019-08-04 04:54:23',
            ),
            332 => 
            array (
                'city_id' => 333,
                'name' => 'Pangkajene Kepulauan',
                'province_id' => 28,
                'created_at' => '2019-08-04 04:54:23',
                'updated_at' => '2019-08-04 04:54:23',
            ),
            333 => 
            array (
                'city_id' => 334,
                'name' => 'Pangkal Pinang',
                'province_id' => 2,
                'created_at' => '2019-08-04 04:54:23',
                'updated_at' => '2019-08-04 04:54:23',
            ),
            334 => 
            array (
                'city_id' => 335,
                'name' => 'Paniai',
                'province_id' => 24,
                'created_at' => '2019-08-04 04:54:23',
                'updated_at' => '2019-08-04 04:54:23',
            ),
            335 => 
            array (
                'city_id' => 336,
                'name' => 'Parepare',
                'province_id' => 28,
                'created_at' => '2019-08-04 04:54:23',
                'updated_at' => '2019-08-04 04:54:23',
            ),
            336 => 
            array (
                'city_id' => 337,
                'name' => 'Pariaman',
                'province_id' => 32,
                'created_at' => '2019-08-04 04:54:24',
                'updated_at' => '2019-08-04 04:54:24',
            ),
            337 => 
            array (
                'city_id' => 338,
                'name' => 'Parigi Moutong',
                'province_id' => 29,
                'created_at' => '2019-08-04 04:54:24',
                'updated_at' => '2019-08-04 04:54:24',
            ),
            338 => 
            array (
                'city_id' => 339,
                'name' => 'Pasaman',
                'province_id' => 32,
                'created_at' => '2019-08-04 04:54:24',
                'updated_at' => '2019-08-04 04:54:24',
            ),
            339 => 
            array (
                'city_id' => 340,
                'name' => 'Pasaman Barat',
                'province_id' => 32,
                'created_at' => '2019-08-04 04:54:24',
                'updated_at' => '2019-08-04 04:54:24',
            ),
            340 => 
            array (
                'city_id' => 341,
                'name' => 'Paser',
                'province_id' => 15,
                'created_at' => '2019-08-04 04:54:24',
                'updated_at' => '2019-08-04 04:54:24',
            ),
            341 => 
            array (
                'city_id' => 342,
                'name' => 'Pasuruan',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:24',
                'updated_at' => '2019-08-04 04:54:24',
            ),
            342 => 
            array (
                'city_id' => 343,
                'name' => 'Pasuruan',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:24',
                'updated_at' => '2019-08-04 04:54:24',
            ),
            343 => 
            array (
                'city_id' => 344,
                'name' => 'Pati',
                'province_id' => 10,
                'created_at' => '2019-08-04 04:54:24',
                'updated_at' => '2019-08-04 04:54:24',
            ),
            344 => 
            array (
                'city_id' => 345,
                'name' => 'Payakumbuh',
                'province_id' => 32,
                'created_at' => '2019-08-04 04:54:24',
                'updated_at' => '2019-08-04 04:54:24',
            ),
            345 => 
            array (
                'city_id' => 346,
                'name' => 'Pegunungan Arfak',
                'province_id' => 25,
                'created_at' => '2019-08-04 04:54:24',
                'updated_at' => '2019-08-04 04:54:24',
            ),
            346 => 
            array (
                'city_id' => 347,
                'name' => 'Pegunungan Bintang',
                'province_id' => 24,
                'created_at' => '2019-08-04 04:54:24',
                'updated_at' => '2019-08-04 04:54:24',
            ),
            347 => 
            array (
                'city_id' => 348,
                'name' => 'Pekalongan',
                'province_id' => 10,
                'created_at' => '2019-08-04 04:54:24',
                'updated_at' => '2019-08-04 04:54:24',
            ),
            348 => 
            array (
                'city_id' => 349,
                'name' => 'Pekalongan',
                'province_id' => 10,
                'created_at' => '2019-08-04 04:54:24',
                'updated_at' => '2019-08-04 04:54:24',
            ),
            349 => 
            array (
                'city_id' => 350,
                'name' => 'Pekanbaru',
                'province_id' => 26,
                'created_at' => '2019-08-04 04:54:25',
                'updated_at' => '2019-08-04 04:54:25',
            ),
            350 => 
            array (
                'city_id' => 351,
                'name' => 'Pelalawan',
                'province_id' => 26,
                'created_at' => '2019-08-04 04:54:25',
                'updated_at' => '2019-08-04 04:54:25',
            ),
            351 => 
            array (
                'city_id' => 352,
                'name' => 'Pemalang',
                'province_id' => 10,
                'created_at' => '2019-08-04 04:54:25',
                'updated_at' => '2019-08-04 04:54:25',
            ),
            352 => 
            array (
                'city_id' => 353,
                'name' => 'Pematang Siantar',
                'province_id' => 34,
                'created_at' => '2019-08-04 04:54:25',
                'updated_at' => '2019-08-04 04:54:25',
            ),
            353 => 
            array (
                'city_id' => 354,
                'name' => 'Penajam Paser Utara',
                'province_id' => 15,
                'created_at' => '2019-08-04 04:54:25',
                'updated_at' => '2019-08-04 04:54:25',
            ),
            354 => 
            array (
                'city_id' => 355,
                'name' => 'Pesawaran',
                'province_id' => 18,
                'created_at' => '2019-08-04 04:54:25',
                'updated_at' => '2019-08-04 04:54:25',
            ),
            355 => 
            array (
                'city_id' => 356,
                'name' => 'Pesisir Barat',
                'province_id' => 18,
                'created_at' => '2019-08-04 04:54:25',
                'updated_at' => '2019-08-04 04:54:25',
            ),
            356 => 
            array (
                'city_id' => 357,
                'name' => 'Pesisir Selatan',
                'province_id' => 32,
                'created_at' => '2019-08-04 04:54:25',
                'updated_at' => '2019-08-04 04:54:25',
            ),
            357 => 
            array (
                'city_id' => 358,
                'name' => 'Pidie',
                'province_id' => 21,
                'created_at' => '2019-08-04 04:54:25',
                'updated_at' => '2019-08-04 04:54:25',
            ),
            358 => 
            array (
                'city_id' => 359,
                'name' => 'Pidie Jaya',
                'province_id' => 21,
                'created_at' => '2019-08-04 04:54:25',
                'updated_at' => '2019-08-04 04:54:25',
            ),
            359 => 
            array (
                'city_id' => 360,
                'name' => 'Pinrang',
                'province_id' => 28,
                'created_at' => '2019-08-04 04:54:25',
                'updated_at' => '2019-08-04 04:54:25',
            ),
            360 => 
            array (
                'city_id' => 361,
                'name' => 'Pohuwato',
                'province_id' => 7,
                'created_at' => '2019-08-04 04:54:26',
                'updated_at' => '2019-08-04 04:54:26',
            ),
            361 => 
            array (
                'city_id' => 362,
                'name' => 'Polewali Mandar',
                'province_id' => 27,
                'created_at' => '2019-08-04 04:54:26',
                'updated_at' => '2019-08-04 04:54:26',
            ),
            362 => 
            array (
                'city_id' => 363,
                'name' => 'Ponorogo',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:26',
                'updated_at' => '2019-08-04 04:54:26',
            ),
            363 => 
            array (
                'city_id' => 364,
                'name' => 'Pontianak',
                'province_id' => 12,
                'created_at' => '2019-08-04 04:54:26',
                'updated_at' => '2019-08-04 04:54:26',
            ),
            364 => 
            array (
                'city_id' => 365,
                'name' => 'Pontianak',
                'province_id' => 12,
                'created_at' => '2019-08-04 04:54:26',
                'updated_at' => '2019-08-04 04:54:26',
            ),
            365 => 
            array (
                'city_id' => 366,
                'name' => 'Poso',
                'province_id' => 29,
                'created_at' => '2019-08-04 04:54:26',
                'updated_at' => '2019-08-04 04:54:26',
            ),
            366 => 
            array (
                'city_id' => 367,
                'name' => 'Prabumulih',
                'province_id' => 33,
                'created_at' => '2019-08-04 04:54:26',
                'updated_at' => '2019-08-04 04:54:26',
            ),
            367 => 
            array (
                'city_id' => 368,
                'name' => 'Pringsewu',
                'province_id' => 18,
                'created_at' => '2019-08-04 04:54:26',
                'updated_at' => '2019-08-04 04:54:26',
            ),
            368 => 
            array (
                'city_id' => 369,
                'name' => 'Probolinggo',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:26',
                'updated_at' => '2019-08-04 04:54:26',
            ),
            369 => 
            array (
                'city_id' => 370,
                'name' => 'Probolinggo',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:26',
                'updated_at' => '2019-08-04 04:54:26',
            ),
            370 => 
            array (
                'city_id' => 371,
                'name' => 'Pulang Pisau',
                'province_id' => 14,
                'created_at' => '2019-08-04 04:54:26',
                'updated_at' => '2019-08-04 04:54:26',
            ),
            371 => 
            array (
                'city_id' => 372,
                'name' => 'Pulau Morotai',
                'province_id' => 20,
                'created_at' => '2019-08-04 04:54:26',
                'updated_at' => '2019-08-04 04:54:26',
            ),
            372 => 
            array (
                'city_id' => 373,
                'name' => 'Puncak',
                'province_id' => 24,
                'created_at' => '2019-08-04 04:54:26',
                'updated_at' => '2019-08-04 04:54:26',
            ),
            373 => 
            array (
                'city_id' => 374,
                'name' => 'Puncak Jaya',
                'province_id' => 24,
                'created_at' => '2019-08-04 04:54:26',
                'updated_at' => '2019-08-04 04:54:26',
            ),
            374 => 
            array (
                'city_id' => 375,
                'name' => 'Purbalingga',
                'province_id' => 10,
                'created_at' => '2019-08-04 04:54:26',
                'updated_at' => '2019-08-04 04:54:26',
            ),
            375 => 
            array (
                'city_id' => 376,
                'name' => 'Purwakarta',
                'province_id' => 9,
                'created_at' => '2019-08-04 04:54:27',
                'updated_at' => '2019-08-04 04:54:27',
            ),
            376 => 
            array (
                'city_id' => 377,
                'name' => 'Purworejo',
                'province_id' => 10,
                'created_at' => '2019-08-04 04:54:27',
                'updated_at' => '2019-08-04 04:54:27',
            ),
            377 => 
            array (
                'city_id' => 378,
                'name' => 'Raja Ampat',
                'province_id' => 25,
                'created_at' => '2019-08-04 04:54:27',
                'updated_at' => '2019-08-04 04:54:27',
            ),
            378 => 
            array (
                'city_id' => 379,
                'name' => 'Rejang Lebong',
                'province_id' => 4,
                'created_at' => '2019-08-04 04:54:27',
                'updated_at' => '2019-08-04 04:54:27',
            ),
            379 => 
            array (
                'city_id' => 380,
                'name' => 'Rembang',
                'province_id' => 10,
                'created_at' => '2019-08-04 04:54:27',
                'updated_at' => '2019-08-04 04:54:27',
            ),
            380 => 
            array (
                'city_id' => 381,
                'name' => 'Rokan Hilir',
                'province_id' => 26,
                'created_at' => '2019-08-04 04:54:27',
                'updated_at' => '2019-08-04 04:54:27',
            ),
            381 => 
            array (
                'city_id' => 382,
                'name' => 'Rokan Hulu',
                'province_id' => 26,
                'created_at' => '2019-08-04 04:54:27',
                'updated_at' => '2019-08-04 04:54:27',
            ),
            382 => 
            array (
                'city_id' => 383,
                'name' => 'Rote Ndao',
                'province_id' => 23,
                'created_at' => '2019-08-04 04:54:27',
                'updated_at' => '2019-08-04 04:54:27',
            ),
            383 => 
            array (
                'city_id' => 384,
                'name' => 'Sabang',
                'province_id' => 21,
                'created_at' => '2019-08-04 04:54:27',
                'updated_at' => '2019-08-04 04:54:27',
            ),
            384 => 
            array (
                'city_id' => 385,
                'name' => 'Sabu Raijua',
                'province_id' => 23,
                'created_at' => '2019-08-04 04:54:27',
                'updated_at' => '2019-08-04 04:54:27',
            ),
            385 => 
            array (
                'city_id' => 386,
                'name' => 'Salatiga',
                'province_id' => 10,
                'created_at' => '2019-08-04 04:54:27',
                'updated_at' => '2019-08-04 04:54:27',
            ),
            386 => 
            array (
                'city_id' => 387,
                'name' => 'Samarinda',
                'province_id' => 15,
                'created_at' => '2019-08-04 04:54:27',
                'updated_at' => '2019-08-04 04:54:27',
            ),
            387 => 
            array (
                'city_id' => 388,
                'name' => 'Sambas',
                'province_id' => 12,
                'created_at' => '2019-08-04 04:54:27',
                'updated_at' => '2019-08-04 04:54:27',
            ),
            388 => 
            array (
                'city_id' => 389,
                'name' => 'Samosir',
                'province_id' => 34,
                'created_at' => '2019-08-04 04:54:27',
                'updated_at' => '2019-08-04 04:54:27',
            ),
            389 => 
            array (
                'city_id' => 390,
                'name' => 'Sampang',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:27',
                'updated_at' => '2019-08-04 04:54:27',
            ),
            390 => 
            array (
                'city_id' => 391,
                'name' => 'Sanggau',
                'province_id' => 12,
                'created_at' => '2019-08-04 04:54:27',
                'updated_at' => '2019-08-04 04:54:27',
            ),
            391 => 
            array (
                'city_id' => 392,
                'name' => 'Sarmi',
                'province_id' => 24,
                'created_at' => '2019-08-04 04:54:27',
                'updated_at' => '2019-08-04 04:54:27',
            ),
            392 => 
            array (
                'city_id' => 393,
                'name' => 'Sarolangun',
                'province_id' => 8,
                'created_at' => '2019-08-04 04:54:28',
                'updated_at' => '2019-08-04 04:54:28',
            ),
            393 => 
            array (
                'city_id' => 394,
                'name' => 'Sawah Lunto',
                'province_id' => 32,
                'created_at' => '2019-08-04 04:54:28',
                'updated_at' => '2019-08-04 04:54:28',
            ),
            394 => 
            array (
                'city_id' => 395,
                'name' => 'Sekadau',
                'province_id' => 12,
                'created_at' => '2019-08-04 04:54:28',
                'updated_at' => '2019-08-04 04:54:28',
            ),
            395 => 
            array (
                'city_id' => 396,
            'name' => 'Selayar (Kepulauan Selayar)',
                'province_id' => 28,
                'created_at' => '2019-08-04 04:54:28',
                'updated_at' => '2019-08-04 04:54:28',
            ),
            396 => 
            array (
                'city_id' => 397,
                'name' => 'Seluma',
                'province_id' => 4,
                'created_at' => '2019-08-04 04:54:28',
                'updated_at' => '2019-08-04 04:54:28',
            ),
            397 => 
            array (
                'city_id' => 398,
                'name' => 'Semarang',
                'province_id' => 10,
                'created_at' => '2019-08-04 04:54:28',
                'updated_at' => '2019-08-04 04:54:28',
            ),
            398 => 
            array (
                'city_id' => 399,
                'name' => 'Semarang',
                'province_id' => 10,
                'created_at' => '2019-08-04 04:54:28',
                'updated_at' => '2019-08-04 04:54:28',
            ),
            399 => 
            array (
                'city_id' => 400,
                'name' => 'Seram Bagian Barat',
                'province_id' => 19,
                'created_at' => '2019-08-04 04:54:28',
                'updated_at' => '2019-08-04 04:54:28',
            ),
            400 => 
            array (
                'city_id' => 401,
                'name' => 'Seram Bagian Timur',
                'province_id' => 19,
                'created_at' => '2019-08-04 04:54:28',
                'updated_at' => '2019-08-04 04:54:28',
            ),
            401 => 
            array (
                'city_id' => 402,
                'name' => 'Serang',
                'province_id' => 3,
                'created_at' => '2019-08-04 04:54:28',
                'updated_at' => '2019-08-04 04:54:28',
            ),
            402 => 
            array (
                'city_id' => 403,
                'name' => 'Serang',
                'province_id' => 3,
                'created_at' => '2019-08-04 04:54:28',
                'updated_at' => '2019-08-04 04:54:28',
            ),
            403 => 
            array (
                'city_id' => 404,
                'name' => 'Serdang Bedagai',
                'province_id' => 34,
                'created_at' => '2019-08-04 04:54:28',
                'updated_at' => '2019-08-04 04:54:28',
            ),
            404 => 
            array (
                'city_id' => 405,
                'name' => 'Seruyan',
                'province_id' => 14,
                'created_at' => '2019-08-04 04:54:29',
                'updated_at' => '2019-08-04 04:54:29',
            ),
            405 => 
            array (
                'city_id' => 406,
                'name' => 'Siak',
                'province_id' => 26,
                'created_at' => '2019-08-04 04:54:29',
                'updated_at' => '2019-08-04 04:54:29',
            ),
            406 => 
            array (
                'city_id' => 407,
                'name' => 'Sibolga',
                'province_id' => 34,
                'created_at' => '2019-08-04 04:54:29',
                'updated_at' => '2019-08-04 04:54:29',
            ),
            407 => 
            array (
                'city_id' => 408,
                'name' => 'Sidenreng Rappang/Rapang',
                'province_id' => 28,
                'created_at' => '2019-08-04 04:54:29',
                'updated_at' => '2019-08-04 04:54:29',
            ),
            408 => 
            array (
                'city_id' => 409,
                'name' => 'Sidoarjo',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:29',
                'updated_at' => '2019-08-04 04:54:29',
            ),
            409 => 
            array (
                'city_id' => 410,
                'name' => 'Sigi',
                'province_id' => 29,
                'created_at' => '2019-08-04 04:54:29',
                'updated_at' => '2019-08-04 04:54:29',
            ),
            410 => 
            array (
                'city_id' => 411,
            'name' => 'Sijunjung (Sawah Lunto Sijunjung)',
                'province_id' => 32,
                'created_at' => '2019-08-04 04:54:29',
                'updated_at' => '2019-08-04 04:54:29',
            ),
            411 => 
            array (
                'city_id' => 412,
                'name' => 'Sikka',
                'province_id' => 23,
                'created_at' => '2019-08-04 04:54:29',
                'updated_at' => '2019-08-04 04:54:29',
            ),
            412 => 
            array (
                'city_id' => 413,
                'name' => 'Simalungun',
                'province_id' => 34,
                'created_at' => '2019-08-04 04:54:29',
                'updated_at' => '2019-08-04 04:54:29',
            ),
            413 => 
            array (
                'city_id' => 414,
                'name' => 'Simeulue',
                'province_id' => 21,
                'created_at' => '2019-08-04 04:54:29',
                'updated_at' => '2019-08-04 04:54:29',
            ),
            414 => 
            array (
                'city_id' => 415,
                'name' => 'Singkawang',
                'province_id' => 12,
                'created_at' => '2019-08-04 04:54:29',
                'updated_at' => '2019-08-04 04:54:29',
            ),
            415 => 
            array (
                'city_id' => 416,
                'name' => 'Sinjai',
                'province_id' => 28,
                'created_at' => '2019-08-04 04:54:29',
                'updated_at' => '2019-08-04 04:54:29',
            ),
            416 => 
            array (
                'city_id' => 417,
                'name' => 'Sintang',
                'province_id' => 12,
                'created_at' => '2019-08-04 04:54:29',
                'updated_at' => '2019-08-04 04:54:29',
            ),
            417 => 
            array (
                'city_id' => 418,
                'name' => 'Situbondo',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:30',
                'updated_at' => '2019-08-04 04:54:30',
            ),
            418 => 
            array (
                'city_id' => 419,
                'name' => 'Sleman',
                'province_id' => 5,
                'created_at' => '2019-08-04 04:54:30',
                'updated_at' => '2019-08-04 04:54:30',
            ),
            419 => 
            array (
                'city_id' => 420,
                'name' => 'Solok',
                'province_id' => 32,
                'created_at' => '2019-08-04 04:54:30',
                'updated_at' => '2019-08-04 04:54:30',
            ),
            420 => 
            array (
                'city_id' => 421,
                'name' => 'Solok',
                'province_id' => 32,
                'created_at' => '2019-08-04 04:54:30',
                'updated_at' => '2019-08-04 04:54:30',
            ),
            421 => 
            array (
                'city_id' => 422,
                'name' => 'Solok Selatan',
                'province_id' => 32,
                'created_at' => '2019-08-04 04:54:30',
                'updated_at' => '2019-08-04 04:54:30',
            ),
            422 => 
            array (
                'city_id' => 423,
                'name' => 'Soppeng',
                'province_id' => 28,
                'created_at' => '2019-08-04 04:54:30',
                'updated_at' => '2019-08-04 04:54:30',
            ),
            423 => 
            array (
                'city_id' => 424,
                'name' => 'Sorong',
                'province_id' => 25,
                'created_at' => '2019-08-04 04:54:30',
                'updated_at' => '2019-08-04 04:54:30',
            ),
            424 => 
            array (
                'city_id' => 425,
                'name' => 'Sorong',
                'province_id' => 25,
                'created_at' => '2019-08-04 04:54:30',
                'updated_at' => '2019-08-04 04:54:30',
            ),
            425 => 
            array (
                'city_id' => 426,
                'name' => 'Sorong Selatan',
                'province_id' => 25,
                'created_at' => '2019-08-04 04:54:30',
                'updated_at' => '2019-08-04 04:54:30',
            ),
            426 => 
            array (
                'city_id' => 427,
                'name' => 'Sragen',
                'province_id' => 10,
                'created_at' => '2019-08-04 04:54:30',
                'updated_at' => '2019-08-04 04:54:30',
            ),
            427 => 
            array (
                'city_id' => 428,
                'name' => 'Subang',
                'province_id' => 9,
                'created_at' => '2019-08-04 04:54:30',
                'updated_at' => '2019-08-04 04:54:30',
            ),
            428 => 
            array (
                'city_id' => 429,
                'name' => 'Subulussalam',
                'province_id' => 21,
                'created_at' => '2019-08-04 04:54:30',
                'updated_at' => '2019-08-04 04:54:30',
            ),
            429 => 
            array (
                'city_id' => 430,
                'name' => 'Sukabumi',
                'province_id' => 9,
                'created_at' => '2019-08-04 04:54:30',
                'updated_at' => '2019-08-04 04:54:30',
            ),
            430 => 
            array (
                'city_id' => 431,
                'name' => 'Sukabumi',
                'province_id' => 9,
                'created_at' => '2019-08-04 04:54:30',
                'updated_at' => '2019-08-04 04:54:30',
            ),
            431 => 
            array (
                'city_id' => 432,
                'name' => 'Sukamara',
                'province_id' => 14,
                'created_at' => '2019-08-04 04:54:31',
                'updated_at' => '2019-08-04 04:54:31',
            ),
            432 => 
            array (
                'city_id' => 433,
                'name' => 'Sukoharjo',
                'province_id' => 10,
                'created_at' => '2019-08-04 04:54:31',
                'updated_at' => '2019-08-04 04:54:31',
            ),
            433 => 
            array (
                'city_id' => 434,
                'name' => 'Sumba Barat',
                'province_id' => 23,
                'created_at' => '2019-08-04 04:54:31',
                'updated_at' => '2019-08-04 04:54:31',
            ),
            434 => 
            array (
                'city_id' => 435,
                'name' => 'Sumba Barat Daya',
                'province_id' => 23,
                'created_at' => '2019-08-04 04:54:31',
                'updated_at' => '2019-08-04 04:54:31',
            ),
            435 => 
            array (
                'city_id' => 436,
                'name' => 'Sumba Tengah',
                'province_id' => 23,
                'created_at' => '2019-08-04 04:54:31',
                'updated_at' => '2019-08-04 04:54:31',
            ),
            436 => 
            array (
                'city_id' => 437,
                'name' => 'Sumba Timur',
                'province_id' => 23,
                'created_at' => '2019-08-04 04:54:31',
                'updated_at' => '2019-08-04 04:54:31',
            ),
            437 => 
            array (
                'city_id' => 438,
                'name' => 'Sumbawa',
                'province_id' => 22,
                'created_at' => '2019-08-04 04:54:31',
                'updated_at' => '2019-08-04 04:54:31',
            ),
            438 => 
            array (
                'city_id' => 439,
                'name' => 'Sumbawa Barat',
                'province_id' => 22,
                'created_at' => '2019-08-04 04:54:31',
                'updated_at' => '2019-08-04 04:54:31',
            ),
            439 => 
            array (
                'city_id' => 440,
                'name' => 'Sumedang',
                'province_id' => 9,
                'created_at' => '2019-08-04 04:54:31',
                'updated_at' => '2019-08-04 04:54:31',
            ),
            440 => 
            array (
                'city_id' => 441,
                'name' => 'Sumenep',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:31',
                'updated_at' => '2019-08-04 04:54:31',
            ),
            441 => 
            array (
                'city_id' => 442,
                'name' => 'Sungaipenuh',
                'province_id' => 8,
                'created_at' => '2019-08-04 04:54:31',
                'updated_at' => '2019-08-04 04:54:31',
            ),
            442 => 
            array (
                'city_id' => 443,
                'name' => 'Supiori',
                'province_id' => 24,
                'created_at' => '2019-08-04 04:54:31',
                'updated_at' => '2019-08-04 04:54:31',
            ),
            443 => 
            array (
                'city_id' => 444,
                'name' => 'Surabaya',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:31',
                'updated_at' => '2019-08-04 04:54:31',
            ),
            444 => 
            array (
                'city_id' => 445,
            'name' => 'Surakarta (Solo)',
                'province_id' => 10,
                'created_at' => '2019-08-04 04:54:31',
                'updated_at' => '2019-08-04 04:54:31',
            ),
            445 => 
            array (
                'city_id' => 446,
                'name' => 'Tabalong',
                'province_id' => 13,
                'created_at' => '2019-08-04 04:54:31',
                'updated_at' => '2019-08-04 04:54:31',
            ),
            446 => 
            array (
                'city_id' => 447,
                'name' => 'Tabanan',
                'province_id' => 1,
                'created_at' => '2019-08-04 04:54:31',
                'updated_at' => '2019-08-04 04:54:31',
            ),
            447 => 
            array (
                'city_id' => 448,
                'name' => 'Takalar',
                'province_id' => 28,
                'created_at' => '2019-08-04 04:54:32',
                'updated_at' => '2019-08-04 04:54:32',
            ),
            448 => 
            array (
                'city_id' => 449,
                'name' => 'Tambrauw',
                'province_id' => 25,
                'created_at' => '2019-08-04 04:54:32',
                'updated_at' => '2019-08-04 04:54:32',
            ),
            449 => 
            array (
                'city_id' => 450,
                'name' => 'Tana Tidung',
                'province_id' => 16,
                'created_at' => '2019-08-04 04:54:32',
                'updated_at' => '2019-08-04 04:54:32',
            ),
            450 => 
            array (
                'city_id' => 451,
                'name' => 'Tana Toraja',
                'province_id' => 28,
                'created_at' => '2019-08-04 04:54:32',
                'updated_at' => '2019-08-04 04:54:32',
            ),
            451 => 
            array (
                'city_id' => 452,
                'name' => 'Tanah Bumbu',
                'province_id' => 13,
                'created_at' => '2019-08-04 04:54:32',
                'updated_at' => '2019-08-04 04:54:32',
            ),
            452 => 
            array (
                'city_id' => 453,
                'name' => 'Tanah Datar',
                'province_id' => 32,
                'created_at' => '2019-08-04 04:54:32',
                'updated_at' => '2019-08-04 04:54:32',
            ),
            453 => 
            array (
                'city_id' => 454,
                'name' => 'Tanah Laut',
                'province_id' => 13,
                'created_at' => '2019-08-04 04:54:32',
                'updated_at' => '2019-08-04 04:54:32',
            ),
            454 => 
            array (
                'city_id' => 455,
                'name' => 'Tangerang',
                'province_id' => 3,
                'created_at' => '2019-08-04 04:54:32',
                'updated_at' => '2019-08-04 04:54:32',
            ),
            455 => 
            array (
                'city_id' => 456,
                'name' => 'Tangerang',
                'province_id' => 3,
                'created_at' => '2019-08-04 04:54:32',
                'updated_at' => '2019-08-04 04:54:32',
            ),
            456 => 
            array (
                'city_id' => 457,
                'name' => 'Tangerang Selatan',
                'province_id' => 3,
                'created_at' => '2019-08-04 04:54:32',
                'updated_at' => '2019-08-04 04:54:32',
            ),
            457 => 
            array (
                'city_id' => 458,
                'name' => 'Tanggamus',
                'province_id' => 18,
                'created_at' => '2019-08-04 04:54:33',
                'updated_at' => '2019-08-04 04:54:33',
            ),
            458 => 
            array (
                'city_id' => 459,
                'name' => 'Tanjung Balai',
                'province_id' => 34,
                'created_at' => '2019-08-04 04:54:33',
                'updated_at' => '2019-08-04 04:54:33',
            ),
            459 => 
            array (
                'city_id' => 460,
                'name' => 'Tanjung Jabung Barat',
                'province_id' => 8,
                'created_at' => '2019-08-04 04:54:33',
                'updated_at' => '2019-08-04 04:54:33',
            ),
            460 => 
            array (
                'city_id' => 461,
                'name' => 'Tanjung Jabung Timur',
                'province_id' => 8,
                'created_at' => '2019-08-04 04:54:33',
                'updated_at' => '2019-08-04 04:54:33',
            ),
            461 => 
            array (
                'city_id' => 462,
                'name' => 'Tanjung Pinang',
                'province_id' => 17,
                'created_at' => '2019-08-04 04:54:33',
                'updated_at' => '2019-08-04 04:54:33',
            ),
            462 => 
            array (
                'city_id' => 463,
                'name' => 'Tapanuli Selatan',
                'province_id' => 34,
                'created_at' => '2019-08-04 04:54:33',
                'updated_at' => '2019-08-04 04:54:33',
            ),
            463 => 
            array (
                'city_id' => 464,
                'name' => 'Tapanuli Tengah',
                'province_id' => 34,
                'created_at' => '2019-08-04 04:54:33',
                'updated_at' => '2019-08-04 04:54:33',
            ),
            464 => 
            array (
                'city_id' => 465,
                'name' => 'Tapanuli Utara',
                'province_id' => 34,
                'created_at' => '2019-08-04 04:54:33',
                'updated_at' => '2019-08-04 04:54:33',
            ),
            465 => 
            array (
                'city_id' => 466,
                'name' => 'Tapin',
                'province_id' => 13,
                'created_at' => '2019-08-04 04:54:33',
                'updated_at' => '2019-08-04 04:54:33',
            ),
            466 => 
            array (
                'city_id' => 467,
                'name' => 'Tarakan',
                'province_id' => 16,
                'created_at' => '2019-08-04 04:54:33',
                'updated_at' => '2019-08-04 04:54:33',
            ),
            467 => 
            array (
                'city_id' => 468,
                'name' => 'Tasikmalaya',
                'province_id' => 9,
                'created_at' => '2019-08-04 04:54:33',
                'updated_at' => '2019-08-04 04:54:33',
            ),
            468 => 
            array (
                'city_id' => 469,
                'name' => 'Tasikmalaya',
                'province_id' => 9,
                'created_at' => '2019-08-04 04:54:33',
                'updated_at' => '2019-08-04 04:54:33',
            ),
            469 => 
            array (
                'city_id' => 470,
                'name' => 'Tebing Tinggi',
                'province_id' => 34,
                'created_at' => '2019-08-04 04:54:33',
                'updated_at' => '2019-08-04 04:54:33',
            ),
            470 => 
            array (
                'city_id' => 471,
                'name' => 'Tebo',
                'province_id' => 8,
                'created_at' => '2019-08-04 04:54:33',
                'updated_at' => '2019-08-04 04:54:33',
            ),
            471 => 
            array (
                'city_id' => 472,
                'name' => 'Tegal',
                'province_id' => 10,
                'created_at' => '2019-08-04 04:54:33',
                'updated_at' => '2019-08-04 04:54:33',
            ),
            472 => 
            array (
                'city_id' => 473,
                'name' => 'Tegal',
                'province_id' => 10,
                'created_at' => '2019-08-04 04:54:33',
                'updated_at' => '2019-08-04 04:54:33',
            ),
            473 => 
            array (
                'city_id' => 474,
                'name' => 'Teluk Bintuni',
                'province_id' => 25,
                'created_at' => '2019-08-04 04:54:34',
                'updated_at' => '2019-08-04 04:54:34',
            ),
            474 => 
            array (
                'city_id' => 475,
                'name' => 'Teluk Wondama',
                'province_id' => 25,
                'created_at' => '2019-08-04 04:54:34',
                'updated_at' => '2019-08-04 04:54:34',
            ),
            475 => 
            array (
                'city_id' => 476,
                'name' => 'Temanggung',
                'province_id' => 10,
                'created_at' => '2019-08-04 04:54:34',
                'updated_at' => '2019-08-04 04:54:34',
            ),
            476 => 
            array (
                'city_id' => 477,
                'name' => 'Ternate',
                'province_id' => 20,
                'created_at' => '2019-08-04 04:54:34',
                'updated_at' => '2019-08-04 04:54:34',
            ),
            477 => 
            array (
                'city_id' => 478,
                'name' => 'Tidore Kepulauan',
                'province_id' => 20,
                'created_at' => '2019-08-04 04:54:34',
                'updated_at' => '2019-08-04 04:54:34',
            ),
            478 => 
            array (
                'city_id' => 479,
                'name' => 'Timor Tengah Selatan',
                'province_id' => 23,
                'created_at' => '2019-08-04 04:54:34',
                'updated_at' => '2019-08-04 04:54:34',
            ),
            479 => 
            array (
                'city_id' => 480,
                'name' => 'Timor Tengah Utara',
                'province_id' => 23,
                'created_at' => '2019-08-04 04:54:34',
                'updated_at' => '2019-08-04 04:54:34',
            ),
            480 => 
            array (
                'city_id' => 481,
                'name' => 'Toba Samosir',
                'province_id' => 34,
                'created_at' => '2019-08-04 04:54:34',
                'updated_at' => '2019-08-04 04:54:34',
            ),
            481 => 
            array (
                'city_id' => 482,
                'name' => 'Tojo Una-Una',
                'province_id' => 29,
                'created_at' => '2019-08-04 04:54:34',
                'updated_at' => '2019-08-04 04:54:34',
            ),
            482 => 
            array (
                'city_id' => 483,
                'name' => 'Toli-Toli',
                'province_id' => 29,
                'created_at' => '2019-08-04 04:54:34',
                'updated_at' => '2019-08-04 04:54:34',
            ),
            483 => 
            array (
                'city_id' => 484,
                'name' => 'Tolikara',
                'province_id' => 24,
                'created_at' => '2019-08-04 04:54:35',
                'updated_at' => '2019-08-04 04:54:35',
            ),
            484 => 
            array (
                'city_id' => 485,
                'name' => 'Tomohon',
                'province_id' => 31,
                'created_at' => '2019-08-04 04:54:35',
                'updated_at' => '2019-08-04 04:54:35',
            ),
            485 => 
            array (
                'city_id' => 486,
                'name' => 'Toraja Utara',
                'province_id' => 28,
                'created_at' => '2019-08-04 04:54:35',
                'updated_at' => '2019-08-04 04:54:35',
            ),
            486 => 
            array (
                'city_id' => 487,
                'name' => 'Trenggalek',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:35',
                'updated_at' => '2019-08-04 04:54:35',
            ),
            487 => 
            array (
                'city_id' => 488,
                'name' => 'Tual',
                'province_id' => 19,
                'created_at' => '2019-08-04 04:54:35',
                'updated_at' => '2019-08-04 04:54:35',
            ),
            488 => 
            array (
                'city_id' => 489,
                'name' => 'Tuban',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:35',
                'updated_at' => '2019-08-04 04:54:35',
            ),
            489 => 
            array (
                'city_id' => 490,
                'name' => 'Tulang Bawang',
                'province_id' => 18,
                'created_at' => '2019-08-04 04:54:35',
                'updated_at' => '2019-08-04 04:54:35',
            ),
            490 => 
            array (
                'city_id' => 491,
                'name' => 'Tulang Bawang Barat',
                'province_id' => 18,
                'created_at' => '2019-08-04 04:54:35',
                'updated_at' => '2019-08-04 04:54:35',
            ),
            491 => 
            array (
                'city_id' => 492,
                'name' => 'Tulungagung',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:35',
                'updated_at' => '2019-08-04 04:54:35',
            ),
            492 => 
            array (
                'city_id' => 493,
                'name' => 'Wajo',
                'province_id' => 28,
                'created_at' => '2019-08-04 04:54:35',
                'updated_at' => '2019-08-04 04:54:35',
            ),
            493 => 
            array (
                'city_id' => 494,
                'name' => 'Wakatobi',
                'province_id' => 30,
                'created_at' => '2019-08-04 04:54:35',
                'updated_at' => '2019-08-04 04:54:35',
            ),
            494 => 
            array (
                'city_id' => 495,
                'name' => 'Waropen',
                'province_id' => 24,
                'created_at' => '2019-08-04 04:54:35',
                'updated_at' => '2019-08-04 04:54:35',
            ),
            495 => 
            array (
                'city_id' => 496,
                'name' => 'Way Kanan',
                'province_id' => 18,
                'created_at' => '2019-08-04 04:54:35',
                'updated_at' => '2019-08-04 04:54:35',
            ),
            496 => 
            array (
                'city_id' => 497,
                'name' => 'Wonogiri',
                'province_id' => 10,
                'created_at' => '2019-08-04 04:54:35',
                'updated_at' => '2019-08-04 04:54:35',
            ),
            497 => 
            array (
                'city_id' => 498,
                'name' => 'Wonosobo',
                'province_id' => 10,
                'created_at' => '2019-08-04 04:54:35',
                'updated_at' => '2019-08-04 04:54:35',
            ),
            498 => 
            array (
                'city_id' => 499,
                'name' => 'Yahukimo',
                'province_id' => 24,
                'created_at' => '2019-08-04 04:54:35',
                'updated_at' => '2019-08-04 04:54:35',
            ),
            499 => 
            array (
                'city_id' => 500,
                'name' => 'Yalimo',
                'province_id' => 24,
                'created_at' => '2019-08-04 04:54:35',
                'updated_at' => '2019-08-04 04:54:35',
            ),
        ));
        \DB::table('city')->insert(array (
            0 => 
            array (
                'city_id' => 501,
                'name' => 'Yogyakarta',
                'province_id' => 5,
                'created_at' => '2019-08-04 04:54:35',
                'updated_at' => '2019-08-04 04:54:35',
            ),
        ));
        
        
    }
}