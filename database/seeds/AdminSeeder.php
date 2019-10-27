<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new App\User([
            'name' => 'Admin',
            'email' => 'admin@email.com',
            'is_admin' => 1,
            'email_verified_at' => now(),
            'password' => bcrypt('P@ssw0rd')
        ]);
        $user->save();
    }
}
