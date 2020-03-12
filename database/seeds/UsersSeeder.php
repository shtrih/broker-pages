<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\User::class)->create([
            'name' => 'Admin',
            'email' => 'it@a-b63.ru',
            'password' => Hash::make("11Fkrjujkbr"),
        ]);
    }
}
