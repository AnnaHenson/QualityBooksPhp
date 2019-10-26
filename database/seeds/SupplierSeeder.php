<?php

use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $supplier = new \App\supplier(['supplier_name' => 'Fred\'s books',
            'email' =>  'test@test.com', 'work_number' => '55-55-555']);
        $supplier->save();

    }
}
