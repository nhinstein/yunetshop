<?php

use Illuminate\Database\Seeder;
use App\StatusOrder;

class StatusOrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    $list_status = ['Pending', 'Paid', 'Delivery', 
    'Completed'];

    foreach($list_status as $status){
    StatusOrder::create([
    'name' => $status,
    ]);
    }
    }
}
