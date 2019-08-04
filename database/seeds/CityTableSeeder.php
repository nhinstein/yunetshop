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
                'id' => 1,
                'name' => 'Aceh Barat',
                'province_id' => 21,
                'created_at' => '2019-08-04 04:53:58',
                'updated_at' => '2019-08-04 04:53:58',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Aceh Barat Daya',
                'province_id' => 21,
                'created_at' => '2019-08-04 04:53:58',
                'updated_at' => '2019-08-04 04:53:58',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Aceh Besar',
                'province_id' => 21,
                'created_at' => '2019-08-04 04:53:58',
                'updated_at' => '2019-08-04 04:53:58',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Aceh Jaya',
                'province_id' => 21,
                'created_at' => '2019-08-04 04:53:58',
                'updated_at' => '2019-08-04 04:53:58',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Aceh Selatan',
                'province_id' => 21,
                'created_at' => '2019-08-04 04:53:58',
                'updated_at' => '2019-08-04 04:53:58',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Aceh Singkil',
                'province_id' => 21,
                'created_at' => '2019-08-04 04:53:58',
                'updated_at' => '2019-08-04 04:53:58',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Aceh Tamiang',
                'province_id' => 21,
                'created_at' => '2019-08-04 04:53:58',
                'updated_at' => '2019-08-04 04:53:58',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Aceh Tengah',
                'province_id' => 21,
                'created_at' => '2019-08-04 04:53:58',
                'updated_at' => '2019-08-04 04:53:58',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Aceh Tenggara',
                'province_id' => 21,
                'created_at' => '2019-08-04 04:53:58',
                'updated_at' => '2019-08-04 04:53:58',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Aceh Timur',
                'province_id' => 21,
                'created_at' => '2019-08-04 04:53:58',
                'updated_at' => '2019-08-04 04:53:58',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Aceh Utara',
                'province_id' => 21,
                'created_at' => '2019-08-04 04:53:58',
                'updated_at' => '2019-08-04 04:53:58',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Agam',
                'province_id' => 32,
                'created_at' => '2019-08-04 04:53:59',
                'updated_at' => '2019-08-04 04:53:59',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Alor',
                'province_id' => 23,
                'created_at' => '2019-08-04 04:53:59',
                'updated_at' => '2019-08-04 04:53:59',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Ambon',
                'province_id' => 19,
                'created_at' => '2019-08-04 04:53:59',
                'updated_at' => '2019-08-04 04:53:59',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Asahan',
                'province_id' => 34,
                'created_at' => '2019-08-04 04:53:59',
                'updated_at' => '2019-08-04 04:53:59',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Asmat',
                'province_id' => 24,
                'created_at' => '2019-08-04 04:53:59',
                'updated_at' => '2019-08-04 04:53:59',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Badung',
                'province_id' => 1,
                'created_at' => '2019-08-04 04:54:00',
                'updated_at' => '2019-08-04 04:54:00',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Balangan',
                'province_id' => 13,
                'created_at' => '2019-08-04 04:54:00',
                'updated_at' => '2019-08-04 04:54:00',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Balikpapan',
                'province_id' => 15,
                'created_at' => '2019-08-04 04:54:00',
                'updated_at' => '2019-08-04 04:54:00',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Banda Aceh',
                'province_id' => 21,
                'created_at' => '2019-08-04 04:54:00',
                'updated_at' => '2019-08-04 04:54:00',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Bandar Lampung',
                'province_id' => 18,
                'created_at' => '2019-08-04 04:54:00',
                'updated_at' => '2019-08-04 04:54:00',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Bandung',
                'province_id' => 9,
                'created_at' => '2019-08-04 04:54:01',
                'updated_at' => '2019-08-04 04:54:01',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Bandung',
                'province_id' => 9,
                'created_at' => '2019-08-04 04:54:01',
                'updated_at' => '2019-08-04 04:54:01',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Bandung Barat',
                'province_id' => 9,
                'created_at' => '2019-08-04 04:54:01',
                'updated_at' => '2019-08-04 04:54:01',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Banggai',
                'province_id' => 29,
                'created_at' => '2019-08-04 04:54:01',
                'updated_at' => '2019-08-04 04:54:01',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Banggai Kepulauan',
                'province_id' => 29,
                'created_at' => '2019-08-04 04:54:01',
                'updated_at' => '2019-08-04 04:54:01',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Bangka',
                'province_id' => 2,
                'created_at' => '2019-08-04 04:54:01',
                'updated_at' => '2019-08-04 04:54:01',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Bangka Barat',
                'province_id' => 2,
                'created_at' => '2019-08-04 04:54:02',
                'updated_at' => '2019-08-04 04:54:02',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Bangka Selatan',
                'province_id' => 2,
                'created_at' => '2019-08-04 04:54:02',
                'updated_at' => '2019-08-04 04:54:02',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Bangka Tengah',
                'province_id' => 2,
                'created_at' => '2019-08-04 04:54:02',
                'updated_at' => '2019-08-04 04:54:02',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Bangkalan',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:02',
                'updated_at' => '2019-08-04 04:54:02',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'Bangli',
                'province_id' => 1,
                'created_at' => '2019-08-04 04:54:02',
                'updated_at' => '2019-08-04 04:54:02',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'Banjar',
                'province_id' => 13,
                'created_at' => '2019-08-04 04:54:02',
                'updated_at' => '2019-08-04 04:54:02',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'Banjar',
                'province_id' => 9,
                'created_at' => '2019-08-04 04:54:02',
                'updated_at' => '2019-08-04 04:54:02',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'Banjarbaru',
                'province_id' => 13,
                'created_at' => '2019-08-04 04:54:02',
                'updated_at' => '2019-08-04 04:54:02',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'Banjarmasin',
                'province_id' => 13,
                'created_at' => '2019-08-04 04:54:02',
                'updated_at' => '2019-08-04 04:54:02',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'Banjarnegara',
                'province_id' => 10,
                'created_at' => '2019-08-04 04:54:03',
                'updated_at' => '2019-08-04 04:54:03',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'Bantaeng',
                'province_id' => 28,
                'created_at' => '2019-08-04 04:54:03',
                'updated_at' => '2019-08-04 04:54:03',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'Bantul',
                'province_id' => 5,
                'created_at' => '2019-08-04 04:54:03',
                'updated_at' => '2019-08-04 04:54:03',
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'Banyuasin',
                'province_id' => 33,
                'created_at' => '2019-08-04 04:54:03',
                'updated_at' => '2019-08-04 04:54:03',
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'Banyumas',
                'province_id' => 10,
                'created_at' => '2019-08-04 04:54:03',
                'updated_at' => '2019-08-04 04:54:03',
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'Banyuwangi',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:03',
                'updated_at' => '2019-08-04 04:54:03',
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'Barito Kuala',
                'province_id' => 13,
                'created_at' => '2019-08-04 04:54:03',
                'updated_at' => '2019-08-04 04:54:03',
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'Barito Selatan',
                'province_id' => 14,
                'created_at' => '2019-08-04 04:54:03',
                'updated_at' => '2019-08-04 04:54:03',
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'Barito Timur',
                'province_id' => 14,
                'created_at' => '2019-08-04 04:54:03',
                'updated_at' => '2019-08-04 04:54:03',
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'Barito Utara',
                'province_id' => 14,
                'created_at' => '2019-08-04 04:54:03',
                'updated_at' => '2019-08-04 04:54:03',
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'Barru',
                'province_id' => 28,
                'created_at' => '2019-08-04 04:54:03',
                'updated_at' => '2019-08-04 04:54:03',
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'Batam',
                'province_id' => 17,
                'created_at' => '2019-08-04 04:54:03',
                'updated_at' => '2019-08-04 04:54:03',
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'Batang',
                'province_id' => 10,
                'created_at' => '2019-08-04 04:54:03',
                'updated_at' => '2019-08-04 04:54:03',
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'Batang Hari',
                'province_id' => 8,
                'created_at' => '2019-08-04 04:54:04',
                'updated_at' => '2019-08-04 04:54:04',
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'Batu',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:04',
                'updated_at' => '2019-08-04 04:54:04',
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'Batu Bara',
                'province_id' => 34,
                'created_at' => '2019-08-04 04:54:04',
                'updated_at' => '2019-08-04 04:54:04',
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'Bau-Bau',
                'province_id' => 30,
                'created_at' => '2019-08-04 04:54:04',
                'updated_at' => '2019-08-04 04:54:04',
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'Bekasi',
                'province_id' => 9,
                'created_at' => '2019-08-04 04:54:04',
                'updated_at' => '2019-08-04 04:54:04',
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'Bekasi',
                'province_id' => 9,
                'created_at' => '2019-08-04 04:54:04',
                'updated_at' => '2019-08-04 04:54:04',
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'Belitung',
                'province_id' => 2,
                'created_at' => '2019-08-04 04:54:04',
                'updated_at' => '2019-08-04 04:54:04',
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'Belitung Timur',
                'province_id' => 2,
                'created_at' => '2019-08-04 04:54:04',
                'updated_at' => '2019-08-04 04:54:04',
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'Belu',
                'province_id' => 23,
                'created_at' => '2019-08-04 04:54:04',
                'updated_at' => '2019-08-04 04:54:04',
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'Bener Meriah',
                'province_id' => 21,
                'created_at' => '2019-08-04 04:54:04',
                'updated_at' => '2019-08-04 04:54:04',
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'Bengkalis',
                'province_id' => 26,
                'created_at' => '2019-08-04 04:54:04',
                'updated_at' => '2019-08-04 04:54:04',
            ),
            60 => 
            array (
                'id' => 61,
                'name' => 'Bengkayang',
                'province_id' => 12,
                'created_at' => '2019-08-04 04:54:04',
                'updated_at' => '2019-08-04 04:54:04',
            ),
            61 => 
            array (
                'id' => 62,
                'name' => 'Bengkulu',
                'province_id' => 4,
                'created_at' => '2019-08-04 04:54:04',
                'updated_at' => '2019-08-04 04:54:04',
            ),
            62 => 
            array (
                'id' => 63,
                'name' => 'Bengkulu Selatan',
                'province_id' => 4,
                'created_at' => '2019-08-04 04:54:05',
                'updated_at' => '2019-08-04 04:54:05',
            ),
            63 => 
            array (
                'id' => 64,
                'name' => 'Bengkulu Tengah',
                'province_id' => 4,
                'created_at' => '2019-08-04 04:54:05',
                'updated_at' => '2019-08-04 04:54:05',
            ),
            64 => 
            array (
                'id' => 65,
                'name' => 'Bengkulu Utara',
                'province_id' => 4,
                'created_at' => '2019-08-04 04:54:05',
                'updated_at' => '2019-08-04 04:54:05',
            ),
            65 => 
            array (
                'id' => 66,
                'name' => 'Berau',
                'province_id' => 15,
                'created_at' => '2019-08-04 04:54:05',
                'updated_at' => '2019-08-04 04:54:05',
            ),
            66 => 
            array (
                'id' => 67,
                'name' => 'Biak Numfor',
                'province_id' => 24,
                'created_at' => '2019-08-04 04:54:05',
                'updated_at' => '2019-08-04 04:54:05',
            ),
            67 => 
            array (
                'id' => 68,
                'name' => 'Bima',
                'province_id' => 22,
                'created_at' => '2019-08-04 04:54:05',
                'updated_at' => '2019-08-04 04:54:05',
            ),
            68 => 
            array (
                'id' => 69,
                'name' => 'Bima',
                'province_id' => 22,
                'created_at' => '2019-08-04 04:54:05',
                'updated_at' => '2019-08-04 04:54:05',
            ),
            69 => 
            array (
                'id' => 70,
                'name' => 'Binjai',
                'province_id' => 34,
                'created_at' => '2019-08-04 04:54:05',
                'updated_at' => '2019-08-04 04:54:05',
            ),
            70 => 
            array (
                'id' => 71,
                'name' => 'Bintan',
                'province_id' => 17,
                'created_at' => '2019-08-04 04:54:05',
                'updated_at' => '2019-08-04 04:54:05',
            ),
            71 => 
            array (
                'id' => 72,
                'name' => 'Bireuen',
                'province_id' => 21,
                'created_at' => '2019-08-04 04:54:05',
                'updated_at' => '2019-08-04 04:54:05',
            ),
            72 => 
            array (
                'id' => 73,
                'name' => 'Bitung',
                'province_id' => 31,
                'created_at' => '2019-08-04 04:54:05',
                'updated_at' => '2019-08-04 04:54:05',
            ),
            73 => 
            array (
                'id' => 74,
                'name' => 'Blitar',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:05',
                'updated_at' => '2019-08-04 04:54:05',
            ),
            74 => 
            array (
                'id' => 75,
                'name' => 'Blitar',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:05',
                'updated_at' => '2019-08-04 04:54:05',
            ),
            75 => 
            array (
                'id' => 76,
                'name' => 'Blora',
                'province_id' => 10,
                'created_at' => '2019-08-04 04:54:06',
                'updated_at' => '2019-08-04 04:54:06',
            ),
            76 => 
            array (
                'id' => 77,
                'name' => 'Boalemo',
                'province_id' => 7,
                'created_at' => '2019-08-04 04:54:06',
                'updated_at' => '2019-08-04 04:54:06',
            ),
            77 => 
            array (
                'id' => 78,
                'name' => 'Bogor',
                'province_id' => 9,
                'created_at' => '2019-08-04 04:54:06',
                'updated_at' => '2019-08-04 04:54:06',
            ),
            78 => 
            array (
                'id' => 79,
                'name' => 'Bogor',
                'province_id' => 9,
                'created_at' => '2019-08-04 04:54:06',
                'updated_at' => '2019-08-04 04:54:06',
            ),
            79 => 
            array (
                'id' => 80,
                'name' => 'Bojonegoro',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:06',
                'updated_at' => '2019-08-04 04:54:06',
            ),
            80 => 
            array (
                'id' => 81,
            'name' => 'Bolaang Mongondow (Bolmong)',
                'province_id' => 31,
                'created_at' => '2019-08-04 04:54:06',
                'updated_at' => '2019-08-04 04:54:06',
            ),
            81 => 
            array (
                'id' => 82,
                'name' => 'Bolaang Mongondow Selatan',
                'province_id' => 31,
                'created_at' => '2019-08-04 04:54:06',
                'updated_at' => '2019-08-04 04:54:06',
            ),
            82 => 
            array (
                'id' => 83,
                'name' => 'Bolaang Mongondow Timur',
                'province_id' => 31,
                'created_at' => '2019-08-04 04:54:06',
                'updated_at' => '2019-08-04 04:54:06',
            ),
            83 => 
            array (
                'id' => 84,
                'name' => 'Bolaang Mongondow Utara',
                'province_id' => 31,
                'created_at' => '2019-08-04 04:54:06',
                'updated_at' => '2019-08-04 04:54:06',
            ),
            84 => 
            array (
                'id' => 85,
                'name' => 'Bombana',
                'province_id' => 30,
                'created_at' => '2019-08-04 04:54:06',
                'updated_at' => '2019-08-04 04:54:06',
            ),
            85 => 
            array (
                'id' => 86,
                'name' => 'Bondowoso',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:06',
                'updated_at' => '2019-08-04 04:54:06',
            ),
            86 => 
            array (
                'id' => 87,
                'name' => 'Bone',
                'province_id' => 28,
                'created_at' => '2019-08-04 04:54:06',
                'updated_at' => '2019-08-04 04:54:06',
            ),
            87 => 
            array (
                'id' => 88,
                'name' => 'Bone Bolango',
                'province_id' => 7,
                'created_at' => '2019-08-04 04:54:07',
                'updated_at' => '2019-08-04 04:54:07',
            ),
            88 => 
            array (
                'id' => 89,
                'name' => 'Bontang',
                'province_id' => 15,
                'created_at' => '2019-08-04 04:54:07',
                'updated_at' => '2019-08-04 04:54:07',
            ),
            89 => 
            array (
                'id' => 90,
                'name' => 'Boven Digoel',
                'province_id' => 24,
                'created_at' => '2019-08-04 04:54:07',
                'updated_at' => '2019-08-04 04:54:07',
            ),
            90 => 
            array (
                'id' => 91,
                'name' => 'Boyolali',
                'province_id' => 10,
                'created_at' => '2019-08-04 04:54:07',
                'updated_at' => '2019-08-04 04:54:07',
            ),
            91 => 
            array (
                'id' => 92,
                'name' => 'Brebes',
                'province_id' => 10,
                'created_at' => '2019-08-04 04:54:07',
                'updated_at' => '2019-08-04 04:54:07',
            ),
            92 => 
            array (
                'id' => 93,
                'name' => 'Bukittinggi',
                'province_id' => 32,
                'created_at' => '2019-08-04 04:54:07',
                'updated_at' => '2019-08-04 04:54:07',
            ),
            93 => 
            array (
                'id' => 94,
                'name' => 'Buleleng',
                'province_id' => 1,
                'created_at' => '2019-08-04 04:54:07',
                'updated_at' => '2019-08-04 04:54:07',
            ),
            94 => 
            array (
                'id' => 95,
                'name' => 'Bulukumba',
                'province_id' => 28,
                'created_at' => '2019-08-04 04:54:07',
                'updated_at' => '2019-08-04 04:54:07',
            ),
            95 => 
            array (
                'id' => 96,
            'name' => 'Bulungan (Bulongan)',
                'province_id' => 16,
                'created_at' => '2019-08-04 04:54:07',
                'updated_at' => '2019-08-04 04:54:07',
            ),
            96 => 
            array (
                'id' => 97,
                'name' => 'Bungo',
                'province_id' => 8,
                'created_at' => '2019-08-04 04:54:07',
                'updated_at' => '2019-08-04 04:54:07',
            ),
            97 => 
            array (
                'id' => 98,
                'name' => 'Buol',
                'province_id' => 29,
                'created_at' => '2019-08-04 04:54:07',
                'updated_at' => '2019-08-04 04:54:07',
            ),
            98 => 
            array (
                'id' => 99,
                'name' => 'Buru',
                'province_id' => 19,
                'created_at' => '2019-08-04 04:54:07',
                'updated_at' => '2019-08-04 04:54:07',
            ),
            99 => 
            array (
                'id' => 100,
                'name' => 'Buru Selatan',
                'province_id' => 19,
                'created_at' => '2019-08-04 04:54:07',
                'updated_at' => '2019-08-04 04:54:07',
            ),
            100 => 
            array (
                'id' => 101,
                'name' => 'Buton',
                'province_id' => 30,
                'created_at' => '2019-08-04 04:54:07',
                'updated_at' => '2019-08-04 04:54:07',
            ),
            101 => 
            array (
                'id' => 102,
                'name' => 'Buton Utara',
                'province_id' => 30,
                'created_at' => '2019-08-04 04:54:07',
                'updated_at' => '2019-08-04 04:54:07',
            ),
            102 => 
            array (
                'id' => 103,
                'name' => 'Ciamis',
                'province_id' => 9,
                'created_at' => '2019-08-04 04:54:07',
                'updated_at' => '2019-08-04 04:54:07',
            ),
            103 => 
            array (
                'id' => 104,
                'name' => 'Cianjur',
                'province_id' => 9,
                'created_at' => '2019-08-04 04:54:07',
                'updated_at' => '2019-08-04 04:54:07',
            ),
            104 => 
            array (
                'id' => 105,
                'name' => 'Cilacap',
                'province_id' => 10,
                'created_at' => '2019-08-04 04:54:08',
                'updated_at' => '2019-08-04 04:54:08',
            ),
            105 => 
            array (
                'id' => 106,
                'name' => 'Cilegon',
                'province_id' => 3,
                'created_at' => '2019-08-04 04:54:08',
                'updated_at' => '2019-08-04 04:54:08',
            ),
            106 => 
            array (
                'id' => 107,
                'name' => 'Cimahi',
                'province_id' => 9,
                'created_at' => '2019-08-04 04:54:08',
                'updated_at' => '2019-08-04 04:54:08',
            ),
            107 => 
            array (
                'id' => 108,
                'name' => 'Cirebon',
                'province_id' => 9,
                'created_at' => '2019-08-04 04:54:08',
                'updated_at' => '2019-08-04 04:54:08',
            ),
            108 => 
            array (
                'id' => 109,
                'name' => 'Cirebon',
                'province_id' => 9,
                'created_at' => '2019-08-04 04:54:08',
                'updated_at' => '2019-08-04 04:54:08',
            ),
            109 => 
            array (
                'id' => 110,
                'name' => 'Dairi',
                'province_id' => 34,
                'created_at' => '2019-08-04 04:54:08',
                'updated_at' => '2019-08-04 04:54:08',
            ),
            110 => 
            array (
                'id' => 111,
            'name' => 'Deiyai (Deliyai)',
                'province_id' => 24,
                'created_at' => '2019-08-04 04:54:08',
                'updated_at' => '2019-08-04 04:54:08',
            ),
            111 => 
            array (
                'id' => 112,
                'name' => 'Deli Serdang',
                'province_id' => 34,
                'created_at' => '2019-08-04 04:54:08',
                'updated_at' => '2019-08-04 04:54:08',
            ),
            112 => 
            array (
                'id' => 113,
                'name' => 'Demak',
                'province_id' => 10,
                'created_at' => '2019-08-04 04:54:08',
                'updated_at' => '2019-08-04 04:54:08',
            ),
            113 => 
            array (
                'id' => 114,
                'name' => 'Denpasar',
                'province_id' => 1,
                'created_at' => '2019-08-04 04:54:08',
                'updated_at' => '2019-08-04 04:54:08',
            ),
            114 => 
            array (
                'id' => 115,
                'name' => 'Depok',
                'province_id' => 9,
                'created_at' => '2019-08-04 04:54:08',
                'updated_at' => '2019-08-04 04:54:08',
            ),
            115 => 
            array (
                'id' => 116,
                'name' => 'Dharmasraya',
                'province_id' => 32,
                'created_at' => '2019-08-04 04:54:08',
                'updated_at' => '2019-08-04 04:54:08',
            ),
            116 => 
            array (
                'id' => 117,
                'name' => 'Dogiyai',
                'province_id' => 24,
                'created_at' => '2019-08-04 04:54:08',
                'updated_at' => '2019-08-04 04:54:08',
            ),
            117 => 
            array (
                'id' => 118,
                'name' => 'Dompu',
                'province_id' => 22,
                'created_at' => '2019-08-04 04:54:09',
                'updated_at' => '2019-08-04 04:54:09',
            ),
            118 => 
            array (
                'id' => 119,
                'name' => 'Donggala',
                'province_id' => 29,
                'created_at' => '2019-08-04 04:54:09',
                'updated_at' => '2019-08-04 04:54:09',
            ),
            119 => 
            array (
                'id' => 120,
                'name' => 'Dumai',
                'province_id' => 26,
                'created_at' => '2019-08-04 04:54:09',
                'updated_at' => '2019-08-04 04:54:09',
            ),
            120 => 
            array (
                'id' => 121,
                'name' => 'Empat Lawang',
                'province_id' => 33,
                'created_at' => '2019-08-04 04:54:09',
                'updated_at' => '2019-08-04 04:54:09',
            ),
            121 => 
            array (
                'id' => 122,
                'name' => 'Ende',
                'province_id' => 23,
                'created_at' => '2019-08-04 04:54:09',
                'updated_at' => '2019-08-04 04:54:09',
            ),
            122 => 
            array (
                'id' => 123,
                'name' => 'Enrekang',
                'province_id' => 28,
                'created_at' => '2019-08-04 04:54:09',
                'updated_at' => '2019-08-04 04:54:09',
            ),
            123 => 
            array (
                'id' => 124,
                'name' => 'Fakfak',
                'province_id' => 25,
                'created_at' => '2019-08-04 04:54:09',
                'updated_at' => '2019-08-04 04:54:09',
            ),
            124 => 
            array (
                'id' => 125,
                'name' => 'Flores Timur',
                'province_id' => 23,
                'created_at' => '2019-08-04 04:54:09',
                'updated_at' => '2019-08-04 04:54:09',
            ),
            125 => 
            array (
                'id' => 126,
                'name' => 'Garut',
                'province_id' => 9,
                'created_at' => '2019-08-04 04:54:09',
                'updated_at' => '2019-08-04 04:54:09',
            ),
            126 => 
            array (
                'id' => 127,
                'name' => 'Gayo Lues',
                'province_id' => 21,
                'created_at' => '2019-08-04 04:54:09',
                'updated_at' => '2019-08-04 04:54:09',
            ),
            127 => 
            array (
                'id' => 128,
                'name' => 'Gianyar',
                'province_id' => 1,
                'created_at' => '2019-08-04 04:54:09',
                'updated_at' => '2019-08-04 04:54:09',
            ),
            128 => 
            array (
                'id' => 129,
                'name' => 'Gorontalo',
                'province_id' => 7,
                'created_at' => '2019-08-04 04:54:09',
                'updated_at' => '2019-08-04 04:54:09',
            ),
            129 => 
            array (
                'id' => 130,
                'name' => 'Gorontalo',
                'province_id' => 7,
                'created_at' => '2019-08-04 04:54:09',
                'updated_at' => '2019-08-04 04:54:09',
            ),
            130 => 
            array (
                'id' => 131,
                'name' => 'Gorontalo Utara',
                'province_id' => 7,
                'created_at' => '2019-08-04 04:54:09',
                'updated_at' => '2019-08-04 04:54:09',
            ),
            131 => 
            array (
                'id' => 132,
                'name' => 'Gowa',
                'province_id' => 28,
                'created_at' => '2019-08-04 04:54:09',
                'updated_at' => '2019-08-04 04:54:09',
            ),
            132 => 
            array (
                'id' => 133,
                'name' => 'Gresik',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:10',
                'updated_at' => '2019-08-04 04:54:10',
            ),
            133 => 
            array (
                'id' => 134,
                'name' => 'Grobogan',
                'province_id' => 10,
                'created_at' => '2019-08-04 04:54:10',
                'updated_at' => '2019-08-04 04:54:10',
            ),
            134 => 
            array (
                'id' => 135,
                'name' => 'Gunung Kidul',
                'province_id' => 5,
                'created_at' => '2019-08-04 04:54:10',
                'updated_at' => '2019-08-04 04:54:10',
            ),
            135 => 
            array (
                'id' => 136,
                'name' => 'Gunung Mas',
                'province_id' => 14,
                'created_at' => '2019-08-04 04:54:10',
                'updated_at' => '2019-08-04 04:54:10',
            ),
            136 => 
            array (
                'id' => 137,
                'name' => 'Gunungsitoli',
                'province_id' => 34,
                'created_at' => '2019-08-04 04:54:10',
                'updated_at' => '2019-08-04 04:54:10',
            ),
            137 => 
            array (
                'id' => 138,
                'name' => 'Halmahera Barat',
                'province_id' => 20,
                'created_at' => '2019-08-04 04:54:10',
                'updated_at' => '2019-08-04 04:54:10',
            ),
            138 => 
            array (
                'id' => 139,
                'name' => 'Halmahera Selatan',
                'province_id' => 20,
                'created_at' => '2019-08-04 04:54:10',
                'updated_at' => '2019-08-04 04:54:10',
            ),
            139 => 
            array (
                'id' => 140,
                'name' => 'Halmahera Tengah',
                'province_id' => 20,
                'created_at' => '2019-08-04 04:54:10',
                'updated_at' => '2019-08-04 04:54:10',
            ),
            140 => 
            array (
                'id' => 141,
                'name' => 'Halmahera Timur',
                'province_id' => 20,
                'created_at' => '2019-08-04 04:54:10',
                'updated_at' => '2019-08-04 04:54:10',
            ),
            141 => 
            array (
                'id' => 142,
                'name' => 'Halmahera Utara',
                'province_id' => 20,
                'created_at' => '2019-08-04 04:54:10',
                'updated_at' => '2019-08-04 04:54:10',
            ),
            142 => 
            array (
                'id' => 143,
                'name' => 'Hulu Sungai Selatan',
                'province_id' => 13,
                'created_at' => '2019-08-04 04:54:10',
                'updated_at' => '2019-08-04 04:54:10',
            ),
            143 => 
            array (
                'id' => 144,
                'name' => 'Hulu Sungai Tengah',
                'province_id' => 13,
                'created_at' => '2019-08-04 04:54:10',
                'updated_at' => '2019-08-04 04:54:10',
            ),
            144 => 
            array (
                'id' => 145,
                'name' => 'Hulu Sungai Utara',
                'province_id' => 13,
                'created_at' => '2019-08-04 04:54:10',
                'updated_at' => '2019-08-04 04:54:10',
            ),
            145 => 
            array (
                'id' => 146,
                'name' => 'Humbang Hasundutan',
                'province_id' => 34,
                'created_at' => '2019-08-04 04:54:10',
                'updated_at' => '2019-08-04 04:54:10',
            ),
            146 => 
            array (
                'id' => 147,
                'name' => 'Indragiri Hilir',
                'province_id' => 26,
                'created_at' => '2019-08-04 04:54:10',
                'updated_at' => '2019-08-04 04:54:10',
            ),
            147 => 
            array (
                'id' => 148,
                'name' => 'Indragiri Hulu',
                'province_id' => 26,
                'created_at' => '2019-08-04 04:54:11',
                'updated_at' => '2019-08-04 04:54:11',
            ),
            148 => 
            array (
                'id' => 149,
                'name' => 'Indramayu',
                'province_id' => 9,
                'created_at' => '2019-08-04 04:54:11',
                'updated_at' => '2019-08-04 04:54:11',
            ),
            149 => 
            array (
                'id' => 150,
                'name' => 'Intan Jaya',
                'province_id' => 24,
                'created_at' => '2019-08-04 04:54:11',
                'updated_at' => '2019-08-04 04:54:11',
            ),
            150 => 
            array (
                'id' => 151,
                'name' => 'Jakarta Barat',
                'province_id' => 6,
                'created_at' => '2019-08-04 04:54:11',
                'updated_at' => '2019-08-04 04:54:11',
            ),
            151 => 
            array (
                'id' => 152,
                'name' => 'Jakarta Pusat',
                'province_id' => 6,
                'created_at' => '2019-08-04 04:54:11',
                'updated_at' => '2019-08-04 04:54:11',
            ),
            152 => 
            array (
                'id' => 153,
                'name' => 'Jakarta Selatan',
                'province_id' => 6,
                'created_at' => '2019-08-04 04:54:11',
                'updated_at' => '2019-08-04 04:54:11',
            ),
            153 => 
            array (
                'id' => 154,
                'name' => 'Jakarta Timur',
                'province_id' => 6,
                'created_at' => '2019-08-04 04:54:11',
                'updated_at' => '2019-08-04 04:54:11',
            ),
            154 => 
            array (
                'id' => 155,
                'name' => 'Jakarta Utara',
                'province_id' => 6,
                'created_at' => '2019-08-04 04:54:11',
                'updated_at' => '2019-08-04 04:54:11',
            ),
            155 => 
            array (
                'id' => 156,
                'name' => 'Jambi',
                'province_id' => 8,
                'created_at' => '2019-08-04 04:54:11',
                'updated_at' => '2019-08-04 04:54:11',
            ),
            156 => 
            array (
                'id' => 157,
                'name' => 'Jayapura',
                'province_id' => 24,
                'created_at' => '2019-08-04 04:54:11',
                'updated_at' => '2019-08-04 04:54:11',
            ),
            157 => 
            array (
                'id' => 158,
                'name' => 'Jayapura',
                'province_id' => 24,
                'created_at' => '2019-08-04 04:54:11',
                'updated_at' => '2019-08-04 04:54:11',
            ),
            158 => 
            array (
                'id' => 159,
                'name' => 'Jayawijaya',
                'province_id' => 24,
                'created_at' => '2019-08-04 04:54:11',
                'updated_at' => '2019-08-04 04:54:11',
            ),
            159 => 
            array (
                'id' => 160,
                'name' => 'Jember',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:11',
                'updated_at' => '2019-08-04 04:54:11',
            ),
            160 => 
            array (
                'id' => 161,
                'name' => 'Jembrana',
                'province_id' => 1,
                'created_at' => '2019-08-04 04:54:11',
                'updated_at' => '2019-08-04 04:54:11',
            ),
            161 => 
            array (
                'id' => 162,
                'name' => 'Jeneponto',
                'province_id' => 28,
                'created_at' => '2019-08-04 04:54:11',
                'updated_at' => '2019-08-04 04:54:11',
            ),
            162 => 
            array (
                'id' => 163,
                'name' => 'Jepara',
                'province_id' => 10,
                'created_at' => '2019-08-04 04:54:12',
                'updated_at' => '2019-08-04 04:54:12',
            ),
            163 => 
            array (
                'id' => 164,
                'name' => 'Jombang',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:12',
                'updated_at' => '2019-08-04 04:54:12',
            ),
            164 => 
            array (
                'id' => 165,
                'name' => 'Kaimana',
                'province_id' => 25,
                'created_at' => '2019-08-04 04:54:12',
                'updated_at' => '2019-08-04 04:54:12',
            ),
            165 => 
            array (
                'id' => 166,
                'name' => 'Kampar',
                'province_id' => 26,
                'created_at' => '2019-08-04 04:54:12',
                'updated_at' => '2019-08-04 04:54:12',
            ),
            166 => 
            array (
                'id' => 167,
                'name' => 'Kapuas',
                'province_id' => 14,
                'created_at' => '2019-08-04 04:54:12',
                'updated_at' => '2019-08-04 04:54:12',
            ),
            167 => 
            array (
                'id' => 168,
                'name' => 'Kapuas Hulu',
                'province_id' => 12,
                'created_at' => '2019-08-04 04:54:12',
                'updated_at' => '2019-08-04 04:54:12',
            ),
            168 => 
            array (
                'id' => 169,
                'name' => 'Karanganyar',
                'province_id' => 10,
                'created_at' => '2019-08-04 04:54:12',
                'updated_at' => '2019-08-04 04:54:12',
            ),
            169 => 
            array (
                'id' => 170,
                'name' => 'Karangasem',
                'province_id' => 1,
                'created_at' => '2019-08-04 04:54:12',
                'updated_at' => '2019-08-04 04:54:12',
            ),
            170 => 
            array (
                'id' => 171,
                'name' => 'Karawang',
                'province_id' => 9,
                'created_at' => '2019-08-04 04:54:12',
                'updated_at' => '2019-08-04 04:54:12',
            ),
            171 => 
            array (
                'id' => 172,
                'name' => 'Karimun',
                'province_id' => 17,
                'created_at' => '2019-08-04 04:54:12',
                'updated_at' => '2019-08-04 04:54:12',
            ),
            172 => 
            array (
                'id' => 173,
                'name' => 'Karo',
                'province_id' => 34,
                'created_at' => '2019-08-04 04:54:12',
                'updated_at' => '2019-08-04 04:54:12',
            ),
            173 => 
            array (
                'id' => 174,
                'name' => 'Katingan',
                'province_id' => 14,
                'created_at' => '2019-08-04 04:54:12',
                'updated_at' => '2019-08-04 04:54:12',
            ),
            174 => 
            array (
                'id' => 175,
                'name' => 'Kaur',
                'province_id' => 4,
                'created_at' => '2019-08-04 04:54:12',
                'updated_at' => '2019-08-04 04:54:12',
            ),
            175 => 
            array (
                'id' => 176,
                'name' => 'Kayong Utara',
                'province_id' => 12,
                'created_at' => '2019-08-04 04:54:12',
                'updated_at' => '2019-08-04 04:54:12',
            ),
            176 => 
            array (
                'id' => 177,
                'name' => 'Kebumen',
                'province_id' => 10,
                'created_at' => '2019-08-04 04:54:12',
                'updated_at' => '2019-08-04 04:54:12',
            ),
            177 => 
            array (
                'id' => 178,
                'name' => 'Kediri',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:12',
                'updated_at' => '2019-08-04 04:54:12',
            ),
            178 => 
            array (
                'id' => 179,
                'name' => 'Kediri',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:13',
                'updated_at' => '2019-08-04 04:54:13',
            ),
            179 => 
            array (
                'id' => 180,
                'name' => 'Keerom',
                'province_id' => 24,
                'created_at' => '2019-08-04 04:54:13',
                'updated_at' => '2019-08-04 04:54:13',
            ),
            180 => 
            array (
                'id' => 181,
                'name' => 'Kendal',
                'province_id' => 10,
                'created_at' => '2019-08-04 04:54:13',
                'updated_at' => '2019-08-04 04:54:13',
            ),
            181 => 
            array (
                'id' => 182,
                'name' => 'Kendari',
                'province_id' => 30,
                'created_at' => '2019-08-04 04:54:13',
                'updated_at' => '2019-08-04 04:54:13',
            ),
            182 => 
            array (
                'id' => 183,
                'name' => 'Kepahiang',
                'province_id' => 4,
                'created_at' => '2019-08-04 04:54:13',
                'updated_at' => '2019-08-04 04:54:13',
            ),
            183 => 
            array (
                'id' => 184,
                'name' => 'Kepulauan Anambas',
                'province_id' => 17,
                'created_at' => '2019-08-04 04:54:13',
                'updated_at' => '2019-08-04 04:54:13',
            ),
            184 => 
            array (
                'id' => 185,
                'name' => 'Kepulauan Aru',
                'province_id' => 19,
                'created_at' => '2019-08-04 04:54:13',
                'updated_at' => '2019-08-04 04:54:13',
            ),
            185 => 
            array (
                'id' => 186,
                'name' => 'Kepulauan Mentawai',
                'province_id' => 32,
                'created_at' => '2019-08-04 04:54:13',
                'updated_at' => '2019-08-04 04:54:13',
            ),
            186 => 
            array (
                'id' => 187,
                'name' => 'Kepulauan Meranti',
                'province_id' => 26,
                'created_at' => '2019-08-04 04:54:13',
                'updated_at' => '2019-08-04 04:54:13',
            ),
            187 => 
            array (
                'id' => 188,
                'name' => 'Kepulauan Sangihe',
                'province_id' => 31,
                'created_at' => '2019-08-04 04:54:13',
                'updated_at' => '2019-08-04 04:54:13',
            ),
            188 => 
            array (
                'id' => 189,
                'name' => 'Kepulauan Seribu',
                'province_id' => 6,
                'created_at' => '2019-08-04 04:54:13',
                'updated_at' => '2019-08-04 04:54:13',
            ),
            189 => 
            array (
                'id' => 190,
            'name' => 'Kepulauan Siau Tagulandang Biaro (Sitaro)',
                'province_id' => 31,
                'created_at' => '2019-08-04 04:54:13',
                'updated_at' => '2019-08-04 04:54:13',
            ),
            190 => 
            array (
                'id' => 191,
                'name' => 'Kepulauan Sula',
                'province_id' => 20,
                'created_at' => '2019-08-04 04:54:13',
                'updated_at' => '2019-08-04 04:54:13',
            ),
            191 => 
            array (
                'id' => 192,
                'name' => 'Kepulauan Talaud',
                'province_id' => 31,
                'created_at' => '2019-08-04 04:54:13',
                'updated_at' => '2019-08-04 04:54:13',
            ),
            192 => 
            array (
                'id' => 193,
            'name' => 'Kepulauan Yapen (Yapen Waropen)',
                'province_id' => 24,
                'created_at' => '2019-08-04 04:54:13',
                'updated_at' => '2019-08-04 04:54:13',
            ),
            193 => 
            array (
                'id' => 194,
                'name' => 'Kerinci',
                'province_id' => 8,
                'created_at' => '2019-08-04 04:54:14',
                'updated_at' => '2019-08-04 04:54:14',
            ),
            194 => 
            array (
                'id' => 195,
                'name' => 'Ketapang',
                'province_id' => 12,
                'created_at' => '2019-08-04 04:54:14',
                'updated_at' => '2019-08-04 04:54:14',
            ),
            195 => 
            array (
                'id' => 196,
                'name' => 'Klaten',
                'province_id' => 10,
                'created_at' => '2019-08-04 04:54:14',
                'updated_at' => '2019-08-04 04:54:14',
            ),
            196 => 
            array (
                'id' => 197,
                'name' => 'Klungkung',
                'province_id' => 1,
                'created_at' => '2019-08-04 04:54:14',
                'updated_at' => '2019-08-04 04:54:14',
            ),
            197 => 
            array (
                'id' => 198,
                'name' => 'Kolaka',
                'province_id' => 30,
                'created_at' => '2019-08-04 04:54:14',
                'updated_at' => '2019-08-04 04:54:14',
            ),
            198 => 
            array (
                'id' => 199,
                'name' => 'Kolaka Utara',
                'province_id' => 30,
                'created_at' => '2019-08-04 04:54:14',
                'updated_at' => '2019-08-04 04:54:14',
            ),
            199 => 
            array (
                'id' => 200,
                'name' => 'Konawe',
                'province_id' => 30,
                'created_at' => '2019-08-04 04:54:14',
                'updated_at' => '2019-08-04 04:54:14',
            ),
            200 => 
            array (
                'id' => 201,
                'name' => 'Konawe Selatan',
                'province_id' => 30,
                'created_at' => '2019-08-04 04:54:14',
                'updated_at' => '2019-08-04 04:54:14',
            ),
            201 => 
            array (
                'id' => 202,
                'name' => 'Konawe Utara',
                'province_id' => 30,
                'created_at' => '2019-08-04 04:54:14',
                'updated_at' => '2019-08-04 04:54:14',
            ),
            202 => 
            array (
                'id' => 203,
                'name' => 'Kotabaru',
                'province_id' => 13,
                'created_at' => '2019-08-04 04:54:14',
                'updated_at' => '2019-08-04 04:54:14',
            ),
            203 => 
            array (
                'id' => 204,
                'name' => 'Kotamobagu',
                'province_id' => 31,
                'created_at' => '2019-08-04 04:54:14',
                'updated_at' => '2019-08-04 04:54:14',
            ),
            204 => 
            array (
                'id' => 205,
                'name' => 'Kotawaringin Barat',
                'province_id' => 14,
                'created_at' => '2019-08-04 04:54:14',
                'updated_at' => '2019-08-04 04:54:14',
            ),
            205 => 
            array (
                'id' => 206,
                'name' => 'Kotawaringin Timur',
                'province_id' => 14,
                'created_at' => '2019-08-04 04:54:14',
                'updated_at' => '2019-08-04 04:54:14',
            ),
            206 => 
            array (
                'id' => 207,
                'name' => 'Kuantan Singingi',
                'province_id' => 26,
                'created_at' => '2019-08-04 04:54:14',
                'updated_at' => '2019-08-04 04:54:14',
            ),
            207 => 
            array (
                'id' => 208,
                'name' => 'Kubu Raya',
                'province_id' => 12,
                'created_at' => '2019-08-04 04:54:14',
                'updated_at' => '2019-08-04 04:54:14',
            ),
            208 => 
            array (
                'id' => 209,
                'name' => 'Kudus',
                'province_id' => 10,
                'created_at' => '2019-08-04 04:54:14',
                'updated_at' => '2019-08-04 04:54:14',
            ),
            209 => 
            array (
                'id' => 210,
                'name' => 'Kulon Progo',
                'province_id' => 5,
                'created_at' => '2019-08-04 04:54:14',
                'updated_at' => '2019-08-04 04:54:14',
            ),
            210 => 
            array (
                'id' => 211,
                'name' => 'Kuningan',
                'province_id' => 9,
                'created_at' => '2019-08-04 04:54:14',
                'updated_at' => '2019-08-04 04:54:14',
            ),
            211 => 
            array (
                'id' => 212,
                'name' => 'Kupang',
                'province_id' => 23,
                'created_at' => '2019-08-04 04:54:14',
                'updated_at' => '2019-08-04 04:54:14',
            ),
            212 => 
            array (
                'id' => 213,
                'name' => 'Kupang',
                'province_id' => 23,
                'created_at' => '2019-08-04 04:54:15',
                'updated_at' => '2019-08-04 04:54:15',
            ),
            213 => 
            array (
                'id' => 214,
                'name' => 'Kutai Barat',
                'province_id' => 15,
                'created_at' => '2019-08-04 04:54:15',
                'updated_at' => '2019-08-04 04:54:15',
            ),
            214 => 
            array (
                'id' => 215,
                'name' => 'Kutai Kartanegara',
                'province_id' => 15,
                'created_at' => '2019-08-04 04:54:15',
                'updated_at' => '2019-08-04 04:54:15',
            ),
            215 => 
            array (
                'id' => 216,
                'name' => 'Kutai Timur',
                'province_id' => 15,
                'created_at' => '2019-08-04 04:54:15',
                'updated_at' => '2019-08-04 04:54:15',
            ),
            216 => 
            array (
                'id' => 217,
                'name' => 'Labuhan Batu',
                'province_id' => 34,
                'created_at' => '2019-08-04 04:54:15',
                'updated_at' => '2019-08-04 04:54:15',
            ),
            217 => 
            array (
                'id' => 218,
                'name' => 'Labuhan Batu Selatan',
                'province_id' => 34,
                'created_at' => '2019-08-04 04:54:15',
                'updated_at' => '2019-08-04 04:54:15',
            ),
            218 => 
            array (
                'id' => 219,
                'name' => 'Labuhan Batu Utara',
                'province_id' => 34,
                'created_at' => '2019-08-04 04:54:15',
                'updated_at' => '2019-08-04 04:54:15',
            ),
            219 => 
            array (
                'id' => 220,
                'name' => 'Lahat',
                'province_id' => 33,
                'created_at' => '2019-08-04 04:54:15',
                'updated_at' => '2019-08-04 04:54:15',
            ),
            220 => 
            array (
                'id' => 221,
                'name' => 'Lamandau',
                'province_id' => 14,
                'created_at' => '2019-08-04 04:54:15',
                'updated_at' => '2019-08-04 04:54:15',
            ),
            221 => 
            array (
                'id' => 222,
                'name' => 'Lamongan',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:15',
                'updated_at' => '2019-08-04 04:54:15',
            ),
            222 => 
            array (
                'id' => 223,
                'name' => 'Lampung Barat',
                'province_id' => 18,
                'created_at' => '2019-08-04 04:54:15',
                'updated_at' => '2019-08-04 04:54:15',
            ),
            223 => 
            array (
                'id' => 224,
                'name' => 'Lampung Selatan',
                'province_id' => 18,
                'created_at' => '2019-08-04 04:54:15',
                'updated_at' => '2019-08-04 04:54:15',
            ),
            224 => 
            array (
                'id' => 225,
                'name' => 'Lampung Tengah',
                'province_id' => 18,
                'created_at' => '2019-08-04 04:54:15',
                'updated_at' => '2019-08-04 04:54:15',
            ),
            225 => 
            array (
                'id' => 226,
                'name' => 'Lampung Timur',
                'province_id' => 18,
                'created_at' => '2019-08-04 04:54:15',
                'updated_at' => '2019-08-04 04:54:15',
            ),
            226 => 
            array (
                'id' => 227,
                'name' => 'Lampung Utara',
                'province_id' => 18,
                'created_at' => '2019-08-04 04:54:15',
                'updated_at' => '2019-08-04 04:54:15',
            ),
            227 => 
            array (
                'id' => 228,
                'name' => 'Landak',
                'province_id' => 12,
                'created_at' => '2019-08-04 04:54:15',
                'updated_at' => '2019-08-04 04:54:15',
            ),
            228 => 
            array (
                'id' => 229,
                'name' => 'Langkat',
                'province_id' => 34,
                'created_at' => '2019-08-04 04:54:15',
                'updated_at' => '2019-08-04 04:54:15',
            ),
            229 => 
            array (
                'id' => 230,
                'name' => 'Langsa',
                'province_id' => 21,
                'created_at' => '2019-08-04 04:54:15',
                'updated_at' => '2019-08-04 04:54:15',
            ),
            230 => 
            array (
                'id' => 231,
                'name' => 'Lanny Jaya',
                'province_id' => 24,
                'created_at' => '2019-08-04 04:54:16',
                'updated_at' => '2019-08-04 04:54:16',
            ),
            231 => 
            array (
                'id' => 232,
                'name' => 'Lebak',
                'province_id' => 3,
                'created_at' => '2019-08-04 04:54:16',
                'updated_at' => '2019-08-04 04:54:16',
            ),
            232 => 
            array (
                'id' => 233,
                'name' => 'Lebong',
                'province_id' => 4,
                'created_at' => '2019-08-04 04:54:16',
                'updated_at' => '2019-08-04 04:54:16',
            ),
            233 => 
            array (
                'id' => 234,
                'name' => 'Lembata',
                'province_id' => 23,
                'created_at' => '2019-08-04 04:54:16',
                'updated_at' => '2019-08-04 04:54:16',
            ),
            234 => 
            array (
                'id' => 235,
                'name' => 'Lhokseumawe',
                'province_id' => 21,
                'created_at' => '2019-08-04 04:54:16',
                'updated_at' => '2019-08-04 04:54:16',
            ),
            235 => 
            array (
                'id' => 236,
                'name' => 'Lima Puluh Koto/Kota',
                'province_id' => 32,
                'created_at' => '2019-08-04 04:54:16',
                'updated_at' => '2019-08-04 04:54:16',
            ),
            236 => 
            array (
                'id' => 237,
                'name' => 'Lingga',
                'province_id' => 17,
                'created_at' => '2019-08-04 04:54:16',
                'updated_at' => '2019-08-04 04:54:16',
            ),
            237 => 
            array (
                'id' => 238,
                'name' => 'Lombok Barat',
                'province_id' => 22,
                'created_at' => '2019-08-04 04:54:16',
                'updated_at' => '2019-08-04 04:54:16',
            ),
            238 => 
            array (
                'id' => 239,
                'name' => 'Lombok Tengah',
                'province_id' => 22,
                'created_at' => '2019-08-04 04:54:16',
                'updated_at' => '2019-08-04 04:54:16',
            ),
            239 => 
            array (
                'id' => 240,
                'name' => 'Lombok Timur',
                'province_id' => 22,
                'created_at' => '2019-08-04 04:54:16',
                'updated_at' => '2019-08-04 04:54:16',
            ),
            240 => 
            array (
                'id' => 241,
                'name' => 'Lombok Utara',
                'province_id' => 22,
                'created_at' => '2019-08-04 04:54:16',
                'updated_at' => '2019-08-04 04:54:16',
            ),
            241 => 
            array (
                'id' => 242,
                'name' => 'Lubuk Linggau',
                'province_id' => 33,
                'created_at' => '2019-08-04 04:54:16',
                'updated_at' => '2019-08-04 04:54:16',
            ),
            242 => 
            array (
                'id' => 243,
                'name' => 'Lumajang',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:16',
                'updated_at' => '2019-08-04 04:54:16',
            ),
            243 => 
            array (
                'id' => 244,
                'name' => 'Luwu',
                'province_id' => 28,
                'created_at' => '2019-08-04 04:54:16',
                'updated_at' => '2019-08-04 04:54:16',
            ),
            244 => 
            array (
                'id' => 245,
                'name' => 'Luwu Timur',
                'province_id' => 28,
                'created_at' => '2019-08-04 04:54:17',
                'updated_at' => '2019-08-04 04:54:17',
            ),
            245 => 
            array (
                'id' => 246,
                'name' => 'Luwu Utara',
                'province_id' => 28,
                'created_at' => '2019-08-04 04:54:17',
                'updated_at' => '2019-08-04 04:54:17',
            ),
            246 => 
            array (
                'id' => 247,
                'name' => 'Madiun',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:17',
                'updated_at' => '2019-08-04 04:54:17',
            ),
            247 => 
            array (
                'id' => 248,
                'name' => 'Madiun',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:17',
                'updated_at' => '2019-08-04 04:54:17',
            ),
            248 => 
            array (
                'id' => 249,
                'name' => 'Magelang',
                'province_id' => 10,
                'created_at' => '2019-08-04 04:54:17',
                'updated_at' => '2019-08-04 04:54:17',
            ),
            249 => 
            array (
                'id' => 250,
                'name' => 'Magelang',
                'province_id' => 10,
                'created_at' => '2019-08-04 04:54:17',
                'updated_at' => '2019-08-04 04:54:17',
            ),
            250 => 
            array (
                'id' => 251,
                'name' => 'Magetan',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:17',
                'updated_at' => '2019-08-04 04:54:17',
            ),
            251 => 
            array (
                'id' => 252,
                'name' => 'Majalengka',
                'province_id' => 9,
                'created_at' => '2019-08-04 04:54:17',
                'updated_at' => '2019-08-04 04:54:17',
            ),
            252 => 
            array (
                'id' => 253,
                'name' => 'Majene',
                'province_id' => 27,
                'created_at' => '2019-08-04 04:54:17',
                'updated_at' => '2019-08-04 04:54:17',
            ),
            253 => 
            array (
                'id' => 254,
                'name' => 'Makassar',
                'province_id' => 28,
                'created_at' => '2019-08-04 04:54:17',
                'updated_at' => '2019-08-04 04:54:17',
            ),
            254 => 
            array (
                'id' => 255,
                'name' => 'Malang',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:18',
                'updated_at' => '2019-08-04 04:54:18',
            ),
            255 => 
            array (
                'id' => 256,
                'name' => 'Malang',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:18',
                'updated_at' => '2019-08-04 04:54:18',
            ),
            256 => 
            array (
                'id' => 257,
                'name' => 'Malinau',
                'province_id' => 16,
                'created_at' => '2019-08-04 04:54:18',
                'updated_at' => '2019-08-04 04:54:18',
            ),
            257 => 
            array (
                'id' => 258,
                'name' => 'Maluku Barat Daya',
                'province_id' => 19,
                'created_at' => '2019-08-04 04:54:18',
                'updated_at' => '2019-08-04 04:54:18',
            ),
            258 => 
            array (
                'id' => 259,
                'name' => 'Maluku Tengah',
                'province_id' => 19,
                'created_at' => '2019-08-04 04:54:18',
                'updated_at' => '2019-08-04 04:54:18',
            ),
            259 => 
            array (
                'id' => 260,
                'name' => 'Maluku Tenggara',
                'province_id' => 19,
                'created_at' => '2019-08-04 04:54:18',
                'updated_at' => '2019-08-04 04:54:18',
            ),
            260 => 
            array (
                'id' => 261,
                'name' => 'Maluku Tenggara Barat',
                'province_id' => 19,
                'created_at' => '2019-08-04 04:54:18',
                'updated_at' => '2019-08-04 04:54:18',
            ),
            261 => 
            array (
                'id' => 262,
                'name' => 'Mamasa',
                'province_id' => 27,
                'created_at' => '2019-08-04 04:54:18',
                'updated_at' => '2019-08-04 04:54:18',
            ),
            262 => 
            array (
                'id' => 263,
                'name' => 'Mamberamo Raya',
                'province_id' => 24,
                'created_at' => '2019-08-04 04:54:18',
                'updated_at' => '2019-08-04 04:54:18',
            ),
            263 => 
            array (
                'id' => 264,
                'name' => 'Mamberamo Tengah',
                'province_id' => 24,
                'created_at' => '2019-08-04 04:54:18',
                'updated_at' => '2019-08-04 04:54:18',
            ),
            264 => 
            array (
                'id' => 265,
                'name' => 'Mamuju',
                'province_id' => 27,
                'created_at' => '2019-08-04 04:54:18',
                'updated_at' => '2019-08-04 04:54:18',
            ),
            265 => 
            array (
                'id' => 266,
                'name' => 'Mamuju Utara',
                'province_id' => 27,
                'created_at' => '2019-08-04 04:54:18',
                'updated_at' => '2019-08-04 04:54:18',
            ),
            266 => 
            array (
                'id' => 267,
                'name' => 'Manado',
                'province_id' => 31,
                'created_at' => '2019-08-04 04:54:18',
                'updated_at' => '2019-08-04 04:54:18',
            ),
            267 => 
            array (
                'id' => 268,
                'name' => 'Mandailing Natal',
                'province_id' => 34,
                'created_at' => '2019-08-04 04:54:18',
                'updated_at' => '2019-08-04 04:54:18',
            ),
            268 => 
            array (
                'id' => 269,
                'name' => 'Manggarai',
                'province_id' => 23,
                'created_at' => '2019-08-04 04:54:18',
                'updated_at' => '2019-08-04 04:54:18',
            ),
            269 => 
            array (
                'id' => 270,
                'name' => 'Manggarai Barat',
                'province_id' => 23,
                'created_at' => '2019-08-04 04:54:19',
                'updated_at' => '2019-08-04 04:54:19',
            ),
            270 => 
            array (
                'id' => 271,
                'name' => 'Manggarai Timur',
                'province_id' => 23,
                'created_at' => '2019-08-04 04:54:19',
                'updated_at' => '2019-08-04 04:54:19',
            ),
            271 => 
            array (
                'id' => 272,
                'name' => 'Manokwari',
                'province_id' => 25,
                'created_at' => '2019-08-04 04:54:19',
                'updated_at' => '2019-08-04 04:54:19',
            ),
            272 => 
            array (
                'id' => 273,
                'name' => 'Manokwari Selatan',
                'province_id' => 25,
                'created_at' => '2019-08-04 04:54:19',
                'updated_at' => '2019-08-04 04:54:19',
            ),
            273 => 
            array (
                'id' => 274,
                'name' => 'Mappi',
                'province_id' => 24,
                'created_at' => '2019-08-04 04:54:19',
                'updated_at' => '2019-08-04 04:54:19',
            ),
            274 => 
            array (
                'id' => 275,
                'name' => 'Maros',
                'province_id' => 28,
                'created_at' => '2019-08-04 04:54:19',
                'updated_at' => '2019-08-04 04:54:19',
            ),
            275 => 
            array (
                'id' => 276,
                'name' => 'Mataram',
                'province_id' => 22,
                'created_at' => '2019-08-04 04:54:19',
                'updated_at' => '2019-08-04 04:54:19',
            ),
            276 => 
            array (
                'id' => 277,
                'name' => 'Maybrat',
                'province_id' => 25,
                'created_at' => '2019-08-04 04:54:19',
                'updated_at' => '2019-08-04 04:54:19',
            ),
            277 => 
            array (
                'id' => 278,
                'name' => 'Medan',
                'province_id' => 34,
                'created_at' => '2019-08-04 04:54:20',
                'updated_at' => '2019-08-04 04:54:20',
            ),
            278 => 
            array (
                'id' => 279,
                'name' => 'Melawi',
                'province_id' => 12,
                'created_at' => '2019-08-04 04:54:20',
                'updated_at' => '2019-08-04 04:54:20',
            ),
            279 => 
            array (
                'id' => 280,
                'name' => 'Merangin',
                'province_id' => 8,
                'created_at' => '2019-08-04 04:54:20',
                'updated_at' => '2019-08-04 04:54:20',
            ),
            280 => 
            array (
                'id' => 281,
                'name' => 'Merauke',
                'province_id' => 24,
                'created_at' => '2019-08-04 04:54:20',
                'updated_at' => '2019-08-04 04:54:20',
            ),
            281 => 
            array (
                'id' => 282,
                'name' => 'Mesuji',
                'province_id' => 18,
                'created_at' => '2019-08-04 04:54:20',
                'updated_at' => '2019-08-04 04:54:20',
            ),
            282 => 
            array (
                'id' => 283,
                'name' => 'Metro',
                'province_id' => 18,
                'created_at' => '2019-08-04 04:54:20',
                'updated_at' => '2019-08-04 04:54:20',
            ),
            283 => 
            array (
                'id' => 284,
                'name' => 'Mimika',
                'province_id' => 24,
                'created_at' => '2019-08-04 04:54:20',
                'updated_at' => '2019-08-04 04:54:20',
            ),
            284 => 
            array (
                'id' => 285,
                'name' => 'Minahasa',
                'province_id' => 31,
                'created_at' => '2019-08-04 04:54:20',
                'updated_at' => '2019-08-04 04:54:20',
            ),
            285 => 
            array (
                'id' => 286,
                'name' => 'Minahasa Selatan',
                'province_id' => 31,
                'created_at' => '2019-08-04 04:54:20',
                'updated_at' => '2019-08-04 04:54:20',
            ),
            286 => 
            array (
                'id' => 287,
                'name' => 'Minahasa Tenggara',
                'province_id' => 31,
                'created_at' => '2019-08-04 04:54:20',
                'updated_at' => '2019-08-04 04:54:20',
            ),
            287 => 
            array (
                'id' => 288,
                'name' => 'Minahasa Utara',
                'province_id' => 31,
                'created_at' => '2019-08-04 04:54:20',
                'updated_at' => '2019-08-04 04:54:20',
            ),
            288 => 
            array (
                'id' => 289,
                'name' => 'Mojokerto',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:20',
                'updated_at' => '2019-08-04 04:54:20',
            ),
            289 => 
            array (
                'id' => 290,
                'name' => 'Mojokerto',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:20',
                'updated_at' => '2019-08-04 04:54:20',
            ),
            290 => 
            array (
                'id' => 291,
                'name' => 'Morowali',
                'province_id' => 29,
                'created_at' => '2019-08-04 04:54:20',
                'updated_at' => '2019-08-04 04:54:20',
            ),
            291 => 
            array (
                'id' => 292,
                'name' => 'Muara Enim',
                'province_id' => 33,
                'created_at' => '2019-08-04 04:54:21',
                'updated_at' => '2019-08-04 04:54:21',
            ),
            292 => 
            array (
                'id' => 293,
                'name' => 'Muaro Jambi',
                'province_id' => 8,
                'created_at' => '2019-08-04 04:54:21',
                'updated_at' => '2019-08-04 04:54:21',
            ),
            293 => 
            array (
                'id' => 294,
                'name' => 'Muko Muko',
                'province_id' => 4,
                'created_at' => '2019-08-04 04:54:21',
                'updated_at' => '2019-08-04 04:54:21',
            ),
            294 => 
            array (
                'id' => 295,
                'name' => 'Muna',
                'province_id' => 30,
                'created_at' => '2019-08-04 04:54:21',
                'updated_at' => '2019-08-04 04:54:21',
            ),
            295 => 
            array (
                'id' => 296,
                'name' => 'Murung Raya',
                'province_id' => 14,
                'created_at' => '2019-08-04 04:54:21',
                'updated_at' => '2019-08-04 04:54:21',
            ),
            296 => 
            array (
                'id' => 297,
                'name' => 'Musi Banyuasin',
                'province_id' => 33,
                'created_at' => '2019-08-04 04:54:21',
                'updated_at' => '2019-08-04 04:54:21',
            ),
            297 => 
            array (
                'id' => 298,
                'name' => 'Musi Rawas',
                'province_id' => 33,
                'created_at' => '2019-08-04 04:54:21',
                'updated_at' => '2019-08-04 04:54:21',
            ),
            298 => 
            array (
                'id' => 299,
                'name' => 'Nabire',
                'province_id' => 24,
                'created_at' => '2019-08-04 04:54:21',
                'updated_at' => '2019-08-04 04:54:21',
            ),
            299 => 
            array (
                'id' => 300,
                'name' => 'Nagan Raya',
                'province_id' => 21,
                'created_at' => '2019-08-04 04:54:21',
                'updated_at' => '2019-08-04 04:54:21',
            ),
            300 => 
            array (
                'id' => 301,
                'name' => 'Nagekeo',
                'province_id' => 23,
                'created_at' => '2019-08-04 04:54:21',
                'updated_at' => '2019-08-04 04:54:21',
            ),
            301 => 
            array (
                'id' => 302,
                'name' => 'Natuna',
                'province_id' => 17,
                'created_at' => '2019-08-04 04:54:21',
                'updated_at' => '2019-08-04 04:54:21',
            ),
            302 => 
            array (
                'id' => 303,
                'name' => 'Nduga',
                'province_id' => 24,
                'created_at' => '2019-08-04 04:54:21',
                'updated_at' => '2019-08-04 04:54:21',
            ),
            303 => 
            array (
                'id' => 304,
                'name' => 'Ngada',
                'province_id' => 23,
                'created_at' => '2019-08-04 04:54:21',
                'updated_at' => '2019-08-04 04:54:21',
            ),
            304 => 
            array (
                'id' => 305,
                'name' => 'Nganjuk',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:21',
                'updated_at' => '2019-08-04 04:54:21',
            ),
            305 => 
            array (
                'id' => 306,
                'name' => 'Ngawi',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:21',
                'updated_at' => '2019-08-04 04:54:21',
            ),
            306 => 
            array (
                'id' => 307,
                'name' => 'Nias',
                'province_id' => 34,
                'created_at' => '2019-08-04 04:54:21',
                'updated_at' => '2019-08-04 04:54:21',
            ),
            307 => 
            array (
                'id' => 308,
                'name' => 'Nias Barat',
                'province_id' => 34,
                'created_at' => '2019-08-04 04:54:21',
                'updated_at' => '2019-08-04 04:54:21',
            ),
            308 => 
            array (
                'id' => 309,
                'name' => 'Nias Selatan',
                'province_id' => 34,
                'created_at' => '2019-08-04 04:54:22',
                'updated_at' => '2019-08-04 04:54:22',
            ),
            309 => 
            array (
                'id' => 310,
                'name' => 'Nias Utara',
                'province_id' => 34,
                'created_at' => '2019-08-04 04:54:22',
                'updated_at' => '2019-08-04 04:54:22',
            ),
            310 => 
            array (
                'id' => 311,
                'name' => 'Nunukan',
                'province_id' => 16,
                'created_at' => '2019-08-04 04:54:22',
                'updated_at' => '2019-08-04 04:54:22',
            ),
            311 => 
            array (
                'id' => 312,
                'name' => 'Ogan Ilir',
                'province_id' => 33,
                'created_at' => '2019-08-04 04:54:22',
                'updated_at' => '2019-08-04 04:54:22',
            ),
            312 => 
            array (
                'id' => 313,
                'name' => 'Ogan Komering Ilir',
                'province_id' => 33,
                'created_at' => '2019-08-04 04:54:22',
                'updated_at' => '2019-08-04 04:54:22',
            ),
            313 => 
            array (
                'id' => 314,
                'name' => 'Ogan Komering Ulu',
                'province_id' => 33,
                'created_at' => '2019-08-04 04:54:22',
                'updated_at' => '2019-08-04 04:54:22',
            ),
            314 => 
            array (
                'id' => 315,
                'name' => 'Ogan Komering Ulu Selatan',
                'province_id' => 33,
                'created_at' => '2019-08-04 04:54:22',
                'updated_at' => '2019-08-04 04:54:22',
            ),
            315 => 
            array (
                'id' => 316,
                'name' => 'Ogan Komering Ulu Timur',
                'province_id' => 33,
                'created_at' => '2019-08-04 04:54:22',
                'updated_at' => '2019-08-04 04:54:22',
            ),
            316 => 
            array (
                'id' => 317,
                'name' => 'Pacitan',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:22',
                'updated_at' => '2019-08-04 04:54:22',
            ),
            317 => 
            array (
                'id' => 318,
                'name' => 'Padang',
                'province_id' => 32,
                'created_at' => '2019-08-04 04:54:22',
                'updated_at' => '2019-08-04 04:54:22',
            ),
            318 => 
            array (
                'id' => 319,
                'name' => 'Padang Lawas',
                'province_id' => 34,
                'created_at' => '2019-08-04 04:54:22',
                'updated_at' => '2019-08-04 04:54:22',
            ),
            319 => 
            array (
                'id' => 320,
                'name' => 'Padang Lawas Utara',
                'province_id' => 34,
                'created_at' => '2019-08-04 04:54:22',
                'updated_at' => '2019-08-04 04:54:22',
            ),
            320 => 
            array (
                'id' => 321,
                'name' => 'Padang Panjang',
                'province_id' => 32,
                'created_at' => '2019-08-04 04:54:22',
                'updated_at' => '2019-08-04 04:54:22',
            ),
            321 => 
            array (
                'id' => 322,
                'name' => 'Padang Pariaman',
                'province_id' => 32,
                'created_at' => '2019-08-04 04:54:22',
                'updated_at' => '2019-08-04 04:54:22',
            ),
            322 => 
            array (
                'id' => 323,
                'name' => 'Padang Sidempuan',
                'province_id' => 34,
                'created_at' => '2019-08-04 04:54:22',
                'updated_at' => '2019-08-04 04:54:22',
            ),
            323 => 
            array (
                'id' => 324,
                'name' => 'Pagar Alam',
                'province_id' => 33,
                'created_at' => '2019-08-04 04:54:23',
                'updated_at' => '2019-08-04 04:54:23',
            ),
            324 => 
            array (
                'id' => 325,
                'name' => 'Pakpak Bharat',
                'province_id' => 34,
                'created_at' => '2019-08-04 04:54:23',
                'updated_at' => '2019-08-04 04:54:23',
            ),
            325 => 
            array (
                'id' => 326,
                'name' => 'Palangka Raya',
                'province_id' => 14,
                'created_at' => '2019-08-04 04:54:23',
                'updated_at' => '2019-08-04 04:54:23',
            ),
            326 => 
            array (
                'id' => 327,
                'name' => 'Palembang',
                'province_id' => 33,
                'created_at' => '2019-08-04 04:54:23',
                'updated_at' => '2019-08-04 04:54:23',
            ),
            327 => 
            array (
                'id' => 328,
                'name' => 'Palopo',
                'province_id' => 28,
                'created_at' => '2019-08-04 04:54:23',
                'updated_at' => '2019-08-04 04:54:23',
            ),
            328 => 
            array (
                'id' => 329,
                'name' => 'Palu',
                'province_id' => 29,
                'created_at' => '2019-08-04 04:54:23',
                'updated_at' => '2019-08-04 04:54:23',
            ),
            329 => 
            array (
                'id' => 330,
                'name' => 'Pamekasan',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:23',
                'updated_at' => '2019-08-04 04:54:23',
            ),
            330 => 
            array (
                'id' => 331,
                'name' => 'Pandeglang',
                'province_id' => 3,
                'created_at' => '2019-08-04 04:54:23',
                'updated_at' => '2019-08-04 04:54:23',
            ),
            331 => 
            array (
                'id' => 332,
                'name' => 'Pangandaran',
                'province_id' => 9,
                'created_at' => '2019-08-04 04:54:23',
                'updated_at' => '2019-08-04 04:54:23',
            ),
            332 => 
            array (
                'id' => 333,
                'name' => 'Pangkajene Kepulauan',
                'province_id' => 28,
                'created_at' => '2019-08-04 04:54:23',
                'updated_at' => '2019-08-04 04:54:23',
            ),
            333 => 
            array (
                'id' => 334,
                'name' => 'Pangkal Pinang',
                'province_id' => 2,
                'created_at' => '2019-08-04 04:54:23',
                'updated_at' => '2019-08-04 04:54:23',
            ),
            334 => 
            array (
                'id' => 335,
                'name' => 'Paniai',
                'province_id' => 24,
                'created_at' => '2019-08-04 04:54:23',
                'updated_at' => '2019-08-04 04:54:23',
            ),
            335 => 
            array (
                'id' => 336,
                'name' => 'Parepare',
                'province_id' => 28,
                'created_at' => '2019-08-04 04:54:23',
                'updated_at' => '2019-08-04 04:54:23',
            ),
            336 => 
            array (
                'id' => 337,
                'name' => 'Pariaman',
                'province_id' => 32,
                'created_at' => '2019-08-04 04:54:24',
                'updated_at' => '2019-08-04 04:54:24',
            ),
            337 => 
            array (
                'id' => 338,
                'name' => 'Parigi Moutong',
                'province_id' => 29,
                'created_at' => '2019-08-04 04:54:24',
                'updated_at' => '2019-08-04 04:54:24',
            ),
            338 => 
            array (
                'id' => 339,
                'name' => 'Pasaman',
                'province_id' => 32,
                'created_at' => '2019-08-04 04:54:24',
                'updated_at' => '2019-08-04 04:54:24',
            ),
            339 => 
            array (
                'id' => 340,
                'name' => 'Pasaman Barat',
                'province_id' => 32,
                'created_at' => '2019-08-04 04:54:24',
                'updated_at' => '2019-08-04 04:54:24',
            ),
            340 => 
            array (
                'id' => 341,
                'name' => 'Paser',
                'province_id' => 15,
                'created_at' => '2019-08-04 04:54:24',
                'updated_at' => '2019-08-04 04:54:24',
            ),
            341 => 
            array (
                'id' => 342,
                'name' => 'Pasuruan',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:24',
                'updated_at' => '2019-08-04 04:54:24',
            ),
            342 => 
            array (
                'id' => 343,
                'name' => 'Pasuruan',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:24',
                'updated_at' => '2019-08-04 04:54:24',
            ),
            343 => 
            array (
                'id' => 344,
                'name' => 'Pati',
                'province_id' => 10,
                'created_at' => '2019-08-04 04:54:24',
                'updated_at' => '2019-08-04 04:54:24',
            ),
            344 => 
            array (
                'id' => 345,
                'name' => 'Payakumbuh',
                'province_id' => 32,
                'created_at' => '2019-08-04 04:54:24',
                'updated_at' => '2019-08-04 04:54:24',
            ),
            345 => 
            array (
                'id' => 346,
                'name' => 'Pegunungan Arfak',
                'province_id' => 25,
                'created_at' => '2019-08-04 04:54:24',
                'updated_at' => '2019-08-04 04:54:24',
            ),
            346 => 
            array (
                'id' => 347,
                'name' => 'Pegunungan Bintang',
                'province_id' => 24,
                'created_at' => '2019-08-04 04:54:24',
                'updated_at' => '2019-08-04 04:54:24',
            ),
            347 => 
            array (
                'id' => 348,
                'name' => 'Pekalongan',
                'province_id' => 10,
                'created_at' => '2019-08-04 04:54:24',
                'updated_at' => '2019-08-04 04:54:24',
            ),
            348 => 
            array (
                'id' => 349,
                'name' => 'Pekalongan',
                'province_id' => 10,
                'created_at' => '2019-08-04 04:54:24',
                'updated_at' => '2019-08-04 04:54:24',
            ),
            349 => 
            array (
                'id' => 350,
                'name' => 'Pekanbaru',
                'province_id' => 26,
                'created_at' => '2019-08-04 04:54:25',
                'updated_at' => '2019-08-04 04:54:25',
            ),
            350 => 
            array (
                'id' => 351,
                'name' => 'Pelalawan',
                'province_id' => 26,
                'created_at' => '2019-08-04 04:54:25',
                'updated_at' => '2019-08-04 04:54:25',
            ),
            351 => 
            array (
                'id' => 352,
                'name' => 'Pemalang',
                'province_id' => 10,
                'created_at' => '2019-08-04 04:54:25',
                'updated_at' => '2019-08-04 04:54:25',
            ),
            352 => 
            array (
                'id' => 353,
                'name' => 'Pematang Siantar',
                'province_id' => 34,
                'created_at' => '2019-08-04 04:54:25',
                'updated_at' => '2019-08-04 04:54:25',
            ),
            353 => 
            array (
                'id' => 354,
                'name' => 'Penajam Paser Utara',
                'province_id' => 15,
                'created_at' => '2019-08-04 04:54:25',
                'updated_at' => '2019-08-04 04:54:25',
            ),
            354 => 
            array (
                'id' => 355,
                'name' => 'Pesawaran',
                'province_id' => 18,
                'created_at' => '2019-08-04 04:54:25',
                'updated_at' => '2019-08-04 04:54:25',
            ),
            355 => 
            array (
                'id' => 356,
                'name' => 'Pesisir Barat',
                'province_id' => 18,
                'created_at' => '2019-08-04 04:54:25',
                'updated_at' => '2019-08-04 04:54:25',
            ),
            356 => 
            array (
                'id' => 357,
                'name' => 'Pesisir Selatan',
                'province_id' => 32,
                'created_at' => '2019-08-04 04:54:25',
                'updated_at' => '2019-08-04 04:54:25',
            ),
            357 => 
            array (
                'id' => 358,
                'name' => 'Pidie',
                'province_id' => 21,
                'created_at' => '2019-08-04 04:54:25',
                'updated_at' => '2019-08-04 04:54:25',
            ),
            358 => 
            array (
                'id' => 359,
                'name' => 'Pidie Jaya',
                'province_id' => 21,
                'created_at' => '2019-08-04 04:54:25',
                'updated_at' => '2019-08-04 04:54:25',
            ),
            359 => 
            array (
                'id' => 360,
                'name' => 'Pinrang',
                'province_id' => 28,
                'created_at' => '2019-08-04 04:54:25',
                'updated_at' => '2019-08-04 04:54:25',
            ),
            360 => 
            array (
                'id' => 361,
                'name' => 'Pohuwato',
                'province_id' => 7,
                'created_at' => '2019-08-04 04:54:26',
                'updated_at' => '2019-08-04 04:54:26',
            ),
            361 => 
            array (
                'id' => 362,
                'name' => 'Polewali Mandar',
                'province_id' => 27,
                'created_at' => '2019-08-04 04:54:26',
                'updated_at' => '2019-08-04 04:54:26',
            ),
            362 => 
            array (
                'id' => 363,
                'name' => 'Ponorogo',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:26',
                'updated_at' => '2019-08-04 04:54:26',
            ),
            363 => 
            array (
                'id' => 364,
                'name' => 'Pontianak',
                'province_id' => 12,
                'created_at' => '2019-08-04 04:54:26',
                'updated_at' => '2019-08-04 04:54:26',
            ),
            364 => 
            array (
                'id' => 365,
                'name' => 'Pontianak',
                'province_id' => 12,
                'created_at' => '2019-08-04 04:54:26',
                'updated_at' => '2019-08-04 04:54:26',
            ),
            365 => 
            array (
                'id' => 366,
                'name' => 'Poso',
                'province_id' => 29,
                'created_at' => '2019-08-04 04:54:26',
                'updated_at' => '2019-08-04 04:54:26',
            ),
            366 => 
            array (
                'id' => 367,
                'name' => 'Prabumulih',
                'province_id' => 33,
                'created_at' => '2019-08-04 04:54:26',
                'updated_at' => '2019-08-04 04:54:26',
            ),
            367 => 
            array (
                'id' => 368,
                'name' => 'Pringsewu',
                'province_id' => 18,
                'created_at' => '2019-08-04 04:54:26',
                'updated_at' => '2019-08-04 04:54:26',
            ),
            368 => 
            array (
                'id' => 369,
                'name' => 'Probolinggo',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:26',
                'updated_at' => '2019-08-04 04:54:26',
            ),
            369 => 
            array (
                'id' => 370,
                'name' => 'Probolinggo',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:26',
                'updated_at' => '2019-08-04 04:54:26',
            ),
            370 => 
            array (
                'id' => 371,
                'name' => 'Pulang Pisau',
                'province_id' => 14,
                'created_at' => '2019-08-04 04:54:26',
                'updated_at' => '2019-08-04 04:54:26',
            ),
            371 => 
            array (
                'id' => 372,
                'name' => 'Pulau Morotai',
                'province_id' => 20,
                'created_at' => '2019-08-04 04:54:26',
                'updated_at' => '2019-08-04 04:54:26',
            ),
            372 => 
            array (
                'id' => 373,
                'name' => 'Puncak',
                'province_id' => 24,
                'created_at' => '2019-08-04 04:54:26',
                'updated_at' => '2019-08-04 04:54:26',
            ),
            373 => 
            array (
                'id' => 374,
                'name' => 'Puncak Jaya',
                'province_id' => 24,
                'created_at' => '2019-08-04 04:54:26',
                'updated_at' => '2019-08-04 04:54:26',
            ),
            374 => 
            array (
                'id' => 375,
                'name' => 'Purbalingga',
                'province_id' => 10,
                'created_at' => '2019-08-04 04:54:26',
                'updated_at' => '2019-08-04 04:54:26',
            ),
            375 => 
            array (
                'id' => 376,
                'name' => 'Purwakarta',
                'province_id' => 9,
                'created_at' => '2019-08-04 04:54:27',
                'updated_at' => '2019-08-04 04:54:27',
            ),
            376 => 
            array (
                'id' => 377,
                'name' => 'Purworejo',
                'province_id' => 10,
                'created_at' => '2019-08-04 04:54:27',
                'updated_at' => '2019-08-04 04:54:27',
            ),
            377 => 
            array (
                'id' => 378,
                'name' => 'Raja Ampat',
                'province_id' => 25,
                'created_at' => '2019-08-04 04:54:27',
                'updated_at' => '2019-08-04 04:54:27',
            ),
            378 => 
            array (
                'id' => 379,
                'name' => 'Rejang Lebong',
                'province_id' => 4,
                'created_at' => '2019-08-04 04:54:27',
                'updated_at' => '2019-08-04 04:54:27',
            ),
            379 => 
            array (
                'id' => 380,
                'name' => 'Rembang',
                'province_id' => 10,
                'created_at' => '2019-08-04 04:54:27',
                'updated_at' => '2019-08-04 04:54:27',
            ),
            380 => 
            array (
                'id' => 381,
                'name' => 'Rokan Hilir',
                'province_id' => 26,
                'created_at' => '2019-08-04 04:54:27',
                'updated_at' => '2019-08-04 04:54:27',
            ),
            381 => 
            array (
                'id' => 382,
                'name' => 'Rokan Hulu',
                'province_id' => 26,
                'created_at' => '2019-08-04 04:54:27',
                'updated_at' => '2019-08-04 04:54:27',
            ),
            382 => 
            array (
                'id' => 383,
                'name' => 'Rote Ndao',
                'province_id' => 23,
                'created_at' => '2019-08-04 04:54:27',
                'updated_at' => '2019-08-04 04:54:27',
            ),
            383 => 
            array (
                'id' => 384,
                'name' => 'Sabang',
                'province_id' => 21,
                'created_at' => '2019-08-04 04:54:27',
                'updated_at' => '2019-08-04 04:54:27',
            ),
            384 => 
            array (
                'id' => 385,
                'name' => 'Sabu Raijua',
                'province_id' => 23,
                'created_at' => '2019-08-04 04:54:27',
                'updated_at' => '2019-08-04 04:54:27',
            ),
            385 => 
            array (
                'id' => 386,
                'name' => 'Salatiga',
                'province_id' => 10,
                'created_at' => '2019-08-04 04:54:27',
                'updated_at' => '2019-08-04 04:54:27',
            ),
            386 => 
            array (
                'id' => 387,
                'name' => 'Samarinda',
                'province_id' => 15,
                'created_at' => '2019-08-04 04:54:27',
                'updated_at' => '2019-08-04 04:54:27',
            ),
            387 => 
            array (
                'id' => 388,
                'name' => 'Sambas',
                'province_id' => 12,
                'created_at' => '2019-08-04 04:54:27',
                'updated_at' => '2019-08-04 04:54:27',
            ),
            388 => 
            array (
                'id' => 389,
                'name' => 'Samosir',
                'province_id' => 34,
                'created_at' => '2019-08-04 04:54:27',
                'updated_at' => '2019-08-04 04:54:27',
            ),
            389 => 
            array (
                'id' => 390,
                'name' => 'Sampang',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:27',
                'updated_at' => '2019-08-04 04:54:27',
            ),
            390 => 
            array (
                'id' => 391,
                'name' => 'Sanggau',
                'province_id' => 12,
                'created_at' => '2019-08-04 04:54:27',
                'updated_at' => '2019-08-04 04:54:27',
            ),
            391 => 
            array (
                'id' => 392,
                'name' => 'Sarmi',
                'province_id' => 24,
                'created_at' => '2019-08-04 04:54:27',
                'updated_at' => '2019-08-04 04:54:27',
            ),
            392 => 
            array (
                'id' => 393,
                'name' => 'Sarolangun',
                'province_id' => 8,
                'created_at' => '2019-08-04 04:54:28',
                'updated_at' => '2019-08-04 04:54:28',
            ),
            393 => 
            array (
                'id' => 394,
                'name' => 'Sawah Lunto',
                'province_id' => 32,
                'created_at' => '2019-08-04 04:54:28',
                'updated_at' => '2019-08-04 04:54:28',
            ),
            394 => 
            array (
                'id' => 395,
                'name' => 'Sekadau',
                'province_id' => 12,
                'created_at' => '2019-08-04 04:54:28',
                'updated_at' => '2019-08-04 04:54:28',
            ),
            395 => 
            array (
                'id' => 396,
            'name' => 'Selayar (Kepulauan Selayar)',
                'province_id' => 28,
                'created_at' => '2019-08-04 04:54:28',
                'updated_at' => '2019-08-04 04:54:28',
            ),
            396 => 
            array (
                'id' => 397,
                'name' => 'Seluma',
                'province_id' => 4,
                'created_at' => '2019-08-04 04:54:28',
                'updated_at' => '2019-08-04 04:54:28',
            ),
            397 => 
            array (
                'id' => 398,
                'name' => 'Semarang',
                'province_id' => 10,
                'created_at' => '2019-08-04 04:54:28',
                'updated_at' => '2019-08-04 04:54:28',
            ),
            398 => 
            array (
                'id' => 399,
                'name' => 'Semarang',
                'province_id' => 10,
                'created_at' => '2019-08-04 04:54:28',
                'updated_at' => '2019-08-04 04:54:28',
            ),
            399 => 
            array (
                'id' => 400,
                'name' => 'Seram Bagian Barat',
                'province_id' => 19,
                'created_at' => '2019-08-04 04:54:28',
                'updated_at' => '2019-08-04 04:54:28',
            ),
            400 => 
            array (
                'id' => 401,
                'name' => 'Seram Bagian Timur',
                'province_id' => 19,
                'created_at' => '2019-08-04 04:54:28',
                'updated_at' => '2019-08-04 04:54:28',
            ),
            401 => 
            array (
                'id' => 402,
                'name' => 'Serang',
                'province_id' => 3,
                'created_at' => '2019-08-04 04:54:28',
                'updated_at' => '2019-08-04 04:54:28',
            ),
            402 => 
            array (
                'id' => 403,
                'name' => 'Serang',
                'province_id' => 3,
                'created_at' => '2019-08-04 04:54:28',
                'updated_at' => '2019-08-04 04:54:28',
            ),
            403 => 
            array (
                'id' => 404,
                'name' => 'Serdang Bedagai',
                'province_id' => 34,
                'created_at' => '2019-08-04 04:54:28',
                'updated_at' => '2019-08-04 04:54:28',
            ),
            404 => 
            array (
                'id' => 405,
                'name' => 'Seruyan',
                'province_id' => 14,
                'created_at' => '2019-08-04 04:54:29',
                'updated_at' => '2019-08-04 04:54:29',
            ),
            405 => 
            array (
                'id' => 406,
                'name' => 'Siak',
                'province_id' => 26,
                'created_at' => '2019-08-04 04:54:29',
                'updated_at' => '2019-08-04 04:54:29',
            ),
            406 => 
            array (
                'id' => 407,
                'name' => 'Sibolga',
                'province_id' => 34,
                'created_at' => '2019-08-04 04:54:29',
                'updated_at' => '2019-08-04 04:54:29',
            ),
            407 => 
            array (
                'id' => 408,
                'name' => 'Sidenreng Rappang/Rapang',
                'province_id' => 28,
                'created_at' => '2019-08-04 04:54:29',
                'updated_at' => '2019-08-04 04:54:29',
            ),
            408 => 
            array (
                'id' => 409,
                'name' => 'Sidoarjo',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:29',
                'updated_at' => '2019-08-04 04:54:29',
            ),
            409 => 
            array (
                'id' => 410,
                'name' => 'Sigi',
                'province_id' => 29,
                'created_at' => '2019-08-04 04:54:29',
                'updated_at' => '2019-08-04 04:54:29',
            ),
            410 => 
            array (
                'id' => 411,
            'name' => 'Sijunjung (Sawah Lunto Sijunjung)',
                'province_id' => 32,
                'created_at' => '2019-08-04 04:54:29',
                'updated_at' => '2019-08-04 04:54:29',
            ),
            411 => 
            array (
                'id' => 412,
                'name' => 'Sikka',
                'province_id' => 23,
                'created_at' => '2019-08-04 04:54:29',
                'updated_at' => '2019-08-04 04:54:29',
            ),
            412 => 
            array (
                'id' => 413,
                'name' => 'Simalungun',
                'province_id' => 34,
                'created_at' => '2019-08-04 04:54:29',
                'updated_at' => '2019-08-04 04:54:29',
            ),
            413 => 
            array (
                'id' => 414,
                'name' => 'Simeulue',
                'province_id' => 21,
                'created_at' => '2019-08-04 04:54:29',
                'updated_at' => '2019-08-04 04:54:29',
            ),
            414 => 
            array (
                'id' => 415,
                'name' => 'Singkawang',
                'province_id' => 12,
                'created_at' => '2019-08-04 04:54:29',
                'updated_at' => '2019-08-04 04:54:29',
            ),
            415 => 
            array (
                'id' => 416,
                'name' => 'Sinjai',
                'province_id' => 28,
                'created_at' => '2019-08-04 04:54:29',
                'updated_at' => '2019-08-04 04:54:29',
            ),
            416 => 
            array (
                'id' => 417,
                'name' => 'Sintang',
                'province_id' => 12,
                'created_at' => '2019-08-04 04:54:29',
                'updated_at' => '2019-08-04 04:54:29',
            ),
            417 => 
            array (
                'id' => 418,
                'name' => 'Situbondo',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:30',
                'updated_at' => '2019-08-04 04:54:30',
            ),
            418 => 
            array (
                'id' => 419,
                'name' => 'Sleman',
                'province_id' => 5,
                'created_at' => '2019-08-04 04:54:30',
                'updated_at' => '2019-08-04 04:54:30',
            ),
            419 => 
            array (
                'id' => 420,
                'name' => 'Solok',
                'province_id' => 32,
                'created_at' => '2019-08-04 04:54:30',
                'updated_at' => '2019-08-04 04:54:30',
            ),
            420 => 
            array (
                'id' => 421,
                'name' => 'Solok',
                'province_id' => 32,
                'created_at' => '2019-08-04 04:54:30',
                'updated_at' => '2019-08-04 04:54:30',
            ),
            421 => 
            array (
                'id' => 422,
                'name' => 'Solok Selatan',
                'province_id' => 32,
                'created_at' => '2019-08-04 04:54:30',
                'updated_at' => '2019-08-04 04:54:30',
            ),
            422 => 
            array (
                'id' => 423,
                'name' => 'Soppeng',
                'province_id' => 28,
                'created_at' => '2019-08-04 04:54:30',
                'updated_at' => '2019-08-04 04:54:30',
            ),
            423 => 
            array (
                'id' => 424,
                'name' => 'Sorong',
                'province_id' => 25,
                'created_at' => '2019-08-04 04:54:30',
                'updated_at' => '2019-08-04 04:54:30',
            ),
            424 => 
            array (
                'id' => 425,
                'name' => 'Sorong',
                'province_id' => 25,
                'created_at' => '2019-08-04 04:54:30',
                'updated_at' => '2019-08-04 04:54:30',
            ),
            425 => 
            array (
                'id' => 426,
                'name' => 'Sorong Selatan',
                'province_id' => 25,
                'created_at' => '2019-08-04 04:54:30',
                'updated_at' => '2019-08-04 04:54:30',
            ),
            426 => 
            array (
                'id' => 427,
                'name' => 'Sragen',
                'province_id' => 10,
                'created_at' => '2019-08-04 04:54:30',
                'updated_at' => '2019-08-04 04:54:30',
            ),
            427 => 
            array (
                'id' => 428,
                'name' => 'Subang',
                'province_id' => 9,
                'created_at' => '2019-08-04 04:54:30',
                'updated_at' => '2019-08-04 04:54:30',
            ),
            428 => 
            array (
                'id' => 429,
                'name' => 'Subulussalam',
                'province_id' => 21,
                'created_at' => '2019-08-04 04:54:30',
                'updated_at' => '2019-08-04 04:54:30',
            ),
            429 => 
            array (
                'id' => 430,
                'name' => 'Sukabumi',
                'province_id' => 9,
                'created_at' => '2019-08-04 04:54:30',
                'updated_at' => '2019-08-04 04:54:30',
            ),
            430 => 
            array (
                'id' => 431,
                'name' => 'Sukabumi',
                'province_id' => 9,
                'created_at' => '2019-08-04 04:54:30',
                'updated_at' => '2019-08-04 04:54:30',
            ),
            431 => 
            array (
                'id' => 432,
                'name' => 'Sukamara',
                'province_id' => 14,
                'created_at' => '2019-08-04 04:54:31',
                'updated_at' => '2019-08-04 04:54:31',
            ),
            432 => 
            array (
                'id' => 433,
                'name' => 'Sukoharjo',
                'province_id' => 10,
                'created_at' => '2019-08-04 04:54:31',
                'updated_at' => '2019-08-04 04:54:31',
            ),
            433 => 
            array (
                'id' => 434,
                'name' => 'Sumba Barat',
                'province_id' => 23,
                'created_at' => '2019-08-04 04:54:31',
                'updated_at' => '2019-08-04 04:54:31',
            ),
            434 => 
            array (
                'id' => 435,
                'name' => 'Sumba Barat Daya',
                'province_id' => 23,
                'created_at' => '2019-08-04 04:54:31',
                'updated_at' => '2019-08-04 04:54:31',
            ),
            435 => 
            array (
                'id' => 436,
                'name' => 'Sumba Tengah',
                'province_id' => 23,
                'created_at' => '2019-08-04 04:54:31',
                'updated_at' => '2019-08-04 04:54:31',
            ),
            436 => 
            array (
                'id' => 437,
                'name' => 'Sumba Timur',
                'province_id' => 23,
                'created_at' => '2019-08-04 04:54:31',
                'updated_at' => '2019-08-04 04:54:31',
            ),
            437 => 
            array (
                'id' => 438,
                'name' => 'Sumbawa',
                'province_id' => 22,
                'created_at' => '2019-08-04 04:54:31',
                'updated_at' => '2019-08-04 04:54:31',
            ),
            438 => 
            array (
                'id' => 439,
                'name' => 'Sumbawa Barat',
                'province_id' => 22,
                'created_at' => '2019-08-04 04:54:31',
                'updated_at' => '2019-08-04 04:54:31',
            ),
            439 => 
            array (
                'id' => 440,
                'name' => 'Sumedang',
                'province_id' => 9,
                'created_at' => '2019-08-04 04:54:31',
                'updated_at' => '2019-08-04 04:54:31',
            ),
            440 => 
            array (
                'id' => 441,
                'name' => 'Sumenep',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:31',
                'updated_at' => '2019-08-04 04:54:31',
            ),
            441 => 
            array (
                'id' => 442,
                'name' => 'Sungaipenuh',
                'province_id' => 8,
                'created_at' => '2019-08-04 04:54:31',
                'updated_at' => '2019-08-04 04:54:31',
            ),
            442 => 
            array (
                'id' => 443,
                'name' => 'Supiori',
                'province_id' => 24,
                'created_at' => '2019-08-04 04:54:31',
                'updated_at' => '2019-08-04 04:54:31',
            ),
            443 => 
            array (
                'id' => 444,
                'name' => 'Surabaya',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:31',
                'updated_at' => '2019-08-04 04:54:31',
            ),
            444 => 
            array (
                'id' => 445,
            'name' => 'Surakarta (Solo)',
                'province_id' => 10,
                'created_at' => '2019-08-04 04:54:31',
                'updated_at' => '2019-08-04 04:54:31',
            ),
            445 => 
            array (
                'id' => 446,
                'name' => 'Tabalong',
                'province_id' => 13,
                'created_at' => '2019-08-04 04:54:31',
                'updated_at' => '2019-08-04 04:54:31',
            ),
            446 => 
            array (
                'id' => 447,
                'name' => 'Tabanan',
                'province_id' => 1,
                'created_at' => '2019-08-04 04:54:31',
                'updated_at' => '2019-08-04 04:54:31',
            ),
            447 => 
            array (
                'id' => 448,
                'name' => 'Takalar',
                'province_id' => 28,
                'created_at' => '2019-08-04 04:54:32',
                'updated_at' => '2019-08-04 04:54:32',
            ),
            448 => 
            array (
                'id' => 449,
                'name' => 'Tambrauw',
                'province_id' => 25,
                'created_at' => '2019-08-04 04:54:32',
                'updated_at' => '2019-08-04 04:54:32',
            ),
            449 => 
            array (
                'id' => 450,
                'name' => 'Tana Tidung',
                'province_id' => 16,
                'created_at' => '2019-08-04 04:54:32',
                'updated_at' => '2019-08-04 04:54:32',
            ),
            450 => 
            array (
                'id' => 451,
                'name' => 'Tana Toraja',
                'province_id' => 28,
                'created_at' => '2019-08-04 04:54:32',
                'updated_at' => '2019-08-04 04:54:32',
            ),
            451 => 
            array (
                'id' => 452,
                'name' => 'Tanah Bumbu',
                'province_id' => 13,
                'created_at' => '2019-08-04 04:54:32',
                'updated_at' => '2019-08-04 04:54:32',
            ),
            452 => 
            array (
                'id' => 453,
                'name' => 'Tanah Datar',
                'province_id' => 32,
                'created_at' => '2019-08-04 04:54:32',
                'updated_at' => '2019-08-04 04:54:32',
            ),
            453 => 
            array (
                'id' => 454,
                'name' => 'Tanah Laut',
                'province_id' => 13,
                'created_at' => '2019-08-04 04:54:32',
                'updated_at' => '2019-08-04 04:54:32',
            ),
            454 => 
            array (
                'id' => 455,
                'name' => 'Tangerang',
                'province_id' => 3,
                'created_at' => '2019-08-04 04:54:32',
                'updated_at' => '2019-08-04 04:54:32',
            ),
            455 => 
            array (
                'id' => 456,
                'name' => 'Tangerang',
                'province_id' => 3,
                'created_at' => '2019-08-04 04:54:32',
                'updated_at' => '2019-08-04 04:54:32',
            ),
            456 => 
            array (
                'id' => 457,
                'name' => 'Tangerang Selatan',
                'province_id' => 3,
                'created_at' => '2019-08-04 04:54:32',
                'updated_at' => '2019-08-04 04:54:32',
            ),
            457 => 
            array (
                'id' => 458,
                'name' => 'Tanggamus',
                'province_id' => 18,
                'created_at' => '2019-08-04 04:54:33',
                'updated_at' => '2019-08-04 04:54:33',
            ),
            458 => 
            array (
                'id' => 459,
                'name' => 'Tanjung Balai',
                'province_id' => 34,
                'created_at' => '2019-08-04 04:54:33',
                'updated_at' => '2019-08-04 04:54:33',
            ),
            459 => 
            array (
                'id' => 460,
                'name' => 'Tanjung Jabung Barat',
                'province_id' => 8,
                'created_at' => '2019-08-04 04:54:33',
                'updated_at' => '2019-08-04 04:54:33',
            ),
            460 => 
            array (
                'id' => 461,
                'name' => 'Tanjung Jabung Timur',
                'province_id' => 8,
                'created_at' => '2019-08-04 04:54:33',
                'updated_at' => '2019-08-04 04:54:33',
            ),
            461 => 
            array (
                'id' => 462,
                'name' => 'Tanjung Pinang',
                'province_id' => 17,
                'created_at' => '2019-08-04 04:54:33',
                'updated_at' => '2019-08-04 04:54:33',
            ),
            462 => 
            array (
                'id' => 463,
                'name' => 'Tapanuli Selatan',
                'province_id' => 34,
                'created_at' => '2019-08-04 04:54:33',
                'updated_at' => '2019-08-04 04:54:33',
            ),
            463 => 
            array (
                'id' => 464,
                'name' => 'Tapanuli Tengah',
                'province_id' => 34,
                'created_at' => '2019-08-04 04:54:33',
                'updated_at' => '2019-08-04 04:54:33',
            ),
            464 => 
            array (
                'id' => 465,
                'name' => 'Tapanuli Utara',
                'province_id' => 34,
                'created_at' => '2019-08-04 04:54:33',
                'updated_at' => '2019-08-04 04:54:33',
            ),
            465 => 
            array (
                'id' => 466,
                'name' => 'Tapin',
                'province_id' => 13,
                'created_at' => '2019-08-04 04:54:33',
                'updated_at' => '2019-08-04 04:54:33',
            ),
            466 => 
            array (
                'id' => 467,
                'name' => 'Tarakan',
                'province_id' => 16,
                'created_at' => '2019-08-04 04:54:33',
                'updated_at' => '2019-08-04 04:54:33',
            ),
            467 => 
            array (
                'id' => 468,
                'name' => 'Tasikmalaya',
                'province_id' => 9,
                'created_at' => '2019-08-04 04:54:33',
                'updated_at' => '2019-08-04 04:54:33',
            ),
            468 => 
            array (
                'id' => 469,
                'name' => 'Tasikmalaya',
                'province_id' => 9,
                'created_at' => '2019-08-04 04:54:33',
                'updated_at' => '2019-08-04 04:54:33',
            ),
            469 => 
            array (
                'id' => 470,
                'name' => 'Tebing Tinggi',
                'province_id' => 34,
                'created_at' => '2019-08-04 04:54:33',
                'updated_at' => '2019-08-04 04:54:33',
            ),
            470 => 
            array (
                'id' => 471,
                'name' => 'Tebo',
                'province_id' => 8,
                'created_at' => '2019-08-04 04:54:33',
                'updated_at' => '2019-08-04 04:54:33',
            ),
            471 => 
            array (
                'id' => 472,
                'name' => 'Tegal',
                'province_id' => 10,
                'created_at' => '2019-08-04 04:54:33',
                'updated_at' => '2019-08-04 04:54:33',
            ),
            472 => 
            array (
                'id' => 473,
                'name' => 'Tegal',
                'province_id' => 10,
                'created_at' => '2019-08-04 04:54:33',
                'updated_at' => '2019-08-04 04:54:33',
            ),
            473 => 
            array (
                'id' => 474,
                'name' => 'Teluk Bintuni',
                'province_id' => 25,
                'created_at' => '2019-08-04 04:54:34',
                'updated_at' => '2019-08-04 04:54:34',
            ),
            474 => 
            array (
                'id' => 475,
                'name' => 'Teluk Wondama',
                'province_id' => 25,
                'created_at' => '2019-08-04 04:54:34',
                'updated_at' => '2019-08-04 04:54:34',
            ),
            475 => 
            array (
                'id' => 476,
                'name' => 'Temanggung',
                'province_id' => 10,
                'created_at' => '2019-08-04 04:54:34',
                'updated_at' => '2019-08-04 04:54:34',
            ),
            476 => 
            array (
                'id' => 477,
                'name' => 'Ternate',
                'province_id' => 20,
                'created_at' => '2019-08-04 04:54:34',
                'updated_at' => '2019-08-04 04:54:34',
            ),
            477 => 
            array (
                'id' => 478,
                'name' => 'Tidore Kepulauan',
                'province_id' => 20,
                'created_at' => '2019-08-04 04:54:34',
                'updated_at' => '2019-08-04 04:54:34',
            ),
            478 => 
            array (
                'id' => 479,
                'name' => 'Timor Tengah Selatan',
                'province_id' => 23,
                'created_at' => '2019-08-04 04:54:34',
                'updated_at' => '2019-08-04 04:54:34',
            ),
            479 => 
            array (
                'id' => 480,
                'name' => 'Timor Tengah Utara',
                'province_id' => 23,
                'created_at' => '2019-08-04 04:54:34',
                'updated_at' => '2019-08-04 04:54:34',
            ),
            480 => 
            array (
                'id' => 481,
                'name' => 'Toba Samosir',
                'province_id' => 34,
                'created_at' => '2019-08-04 04:54:34',
                'updated_at' => '2019-08-04 04:54:34',
            ),
            481 => 
            array (
                'id' => 482,
                'name' => 'Tojo Una-Una',
                'province_id' => 29,
                'created_at' => '2019-08-04 04:54:34',
                'updated_at' => '2019-08-04 04:54:34',
            ),
            482 => 
            array (
                'id' => 483,
                'name' => 'Toli-Toli',
                'province_id' => 29,
                'created_at' => '2019-08-04 04:54:34',
                'updated_at' => '2019-08-04 04:54:34',
            ),
            483 => 
            array (
                'id' => 484,
                'name' => 'Tolikara',
                'province_id' => 24,
                'created_at' => '2019-08-04 04:54:35',
                'updated_at' => '2019-08-04 04:54:35',
            ),
            484 => 
            array (
                'id' => 485,
                'name' => 'Tomohon',
                'province_id' => 31,
                'created_at' => '2019-08-04 04:54:35',
                'updated_at' => '2019-08-04 04:54:35',
            ),
            485 => 
            array (
                'id' => 486,
                'name' => 'Toraja Utara',
                'province_id' => 28,
                'created_at' => '2019-08-04 04:54:35',
                'updated_at' => '2019-08-04 04:54:35',
            ),
            486 => 
            array (
                'id' => 487,
                'name' => 'Trenggalek',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:35',
                'updated_at' => '2019-08-04 04:54:35',
            ),
            487 => 
            array (
                'id' => 488,
                'name' => 'Tual',
                'province_id' => 19,
                'created_at' => '2019-08-04 04:54:35',
                'updated_at' => '2019-08-04 04:54:35',
            ),
            488 => 
            array (
                'id' => 489,
                'name' => 'Tuban',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:35',
                'updated_at' => '2019-08-04 04:54:35',
            ),
            489 => 
            array (
                'id' => 490,
                'name' => 'Tulang Bawang',
                'province_id' => 18,
                'created_at' => '2019-08-04 04:54:35',
                'updated_at' => '2019-08-04 04:54:35',
            ),
            490 => 
            array (
                'id' => 491,
                'name' => 'Tulang Bawang Barat',
                'province_id' => 18,
                'created_at' => '2019-08-04 04:54:35',
                'updated_at' => '2019-08-04 04:54:35',
            ),
            491 => 
            array (
                'id' => 492,
                'name' => 'Tulungagung',
                'province_id' => 11,
                'created_at' => '2019-08-04 04:54:35',
                'updated_at' => '2019-08-04 04:54:35',
            ),
            492 => 
            array (
                'id' => 493,
                'name' => 'Wajo',
                'province_id' => 28,
                'created_at' => '2019-08-04 04:54:35',
                'updated_at' => '2019-08-04 04:54:35',
            ),
            493 => 
            array (
                'id' => 494,
                'name' => 'Wakatobi',
                'province_id' => 30,
                'created_at' => '2019-08-04 04:54:35',
                'updated_at' => '2019-08-04 04:54:35',
            ),
            494 => 
            array (
                'id' => 495,
                'name' => 'Waropen',
                'province_id' => 24,
                'created_at' => '2019-08-04 04:54:35',
                'updated_at' => '2019-08-04 04:54:35',
            ),
            495 => 
            array (
                'id' => 496,
                'name' => 'Way Kanan',
                'province_id' => 18,
                'created_at' => '2019-08-04 04:54:35',
                'updated_at' => '2019-08-04 04:54:35',
            ),
            496 => 
            array (
                'id' => 497,
                'name' => 'Wonogiri',
                'province_id' => 10,
                'created_at' => '2019-08-04 04:54:35',
                'updated_at' => '2019-08-04 04:54:35',
            ),
            497 => 
            array (
                'id' => 498,
                'name' => 'Wonosobo',
                'province_id' => 10,
                'created_at' => '2019-08-04 04:54:35',
                'updated_at' => '2019-08-04 04:54:35',
            ),
            498 => 
            array (
                'id' => 499,
                'name' => 'Yahukimo',
                'province_id' => 24,
                'created_at' => '2019-08-04 04:54:35',
                'updated_at' => '2019-08-04 04:54:35',
            ),
            499 => 
            array (
                'id' => 500,
                'name' => 'Yalimo',
                'province_id' => 24,
                'created_at' => '2019-08-04 04:54:35',
                'updated_at' => '2019-08-04 04:54:35',
            ),
        ));
        \DB::table('city')->insert(array (
            0 => 
            array (
                'id' => 501,
                'name' => 'Yogyakarta',
                'province_id' => 5,
                'created_at' => '2019-08-04 04:54:35',
                'updated_at' => '2019-08-04 04:54:35',
            ),
        ));
        
        
    }
}