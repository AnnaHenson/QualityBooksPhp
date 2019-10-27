<?php

use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $order = new \App\order([
           'first_name' => 'Test',
            'last_name' => 'Tester',
            'city' => 'Auckland',
            'postal_code' => '2312',
            'country' => 'New Zealand',
            'phone' => '123-3456',
            'total' => 100,
            'gst' => 15,
            'grand_total' => 115,
            'user_id' => 2
        ]);

        $order->save();
    }
}
