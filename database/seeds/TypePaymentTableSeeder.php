<?php

use Illuminate\Database\Seeder;
use App\TypePayment;

class TypePaymentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list_status = ['Bank Transfer', 'Paypal'];
        foreach($list_status as $status){
        TypePayment::create([
        'name' => $status,]);
        }
    }
}
