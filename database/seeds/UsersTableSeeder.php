<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \DB::table('users')->delete();

      User::create([
      'name' => 'Uni',
      'email' => 'nhinstein@gmail.com',
      'password' => 1,
      'role' => 'customer'
    ]);

      User::create([
      'name' => 'Admin',
      'email' => 'admin@gmail.com',
      'password' => 1,
      'role' => 'admin'
    ]);

    $list_name = ['Nana', 'Dian', 'Saras', 'Lilia',
          'Jajang', 'Yani'];

    foreach($list_name as $name){
      User::create([
      'name' => $name,
      'email' =>$name.'@gmail.com',
      'password' => 1,
      'role' => 'customer'
    ]);

    }
    }
}
