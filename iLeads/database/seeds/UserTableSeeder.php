<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\User::class, 1)->create(['role' => 'admin','email'=>'admin@gmail.com','name'=>'Admin']);
        factory(App\User::class, 4)->create(['role' => 'user']);
    }
}
