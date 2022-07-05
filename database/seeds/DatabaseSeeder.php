<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $user = new \App\User();
        $user->name = 'Admin';
        $user->email = 'test@gmail.com';
        $user->password = bcrypt('123456');
        $user->save();
    }
}
