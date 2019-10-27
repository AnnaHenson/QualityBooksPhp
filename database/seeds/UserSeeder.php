<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new App\User([
            'name' => 'User',
            'email' => 'user@email.com',
            'email_verified_at' => now(),
            'password' => bcrypt('P@ssw0rd')
        ]);
        $user->save();
    }
}
