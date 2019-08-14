<?php

use Illuminate\Database\Seeder;
use App\StatusTransaksi;

class StatusTransaksiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $list_status = ['Pending', 'Accepted', 'Rejected'];

    foreach($list_status as $status){
    StatusTransaksi::create([
    'name' => $status,]);
        }
    }
}
