<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ProvinceTableSeeder::class);
        $this->call(CityTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(ProductImagesTableSeeder::class);
        $this->call(StatusOrdersTableSeeder::class);
        $this->call(StatusTransaksiTableSeeder::class);
        $this->call(TypePaymentTableSeeder::class);
    }
}
