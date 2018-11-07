<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Order::create([
            'inv_id' => 'INV123419092018',
            'user_id' => 1,
            'audit_id' => 1,
            'auditor_id' => 1,
            'final_price' => 202250,
            'discount' => 10550,
            'workers' => 2000,
            'cf' => 8327,
            'audit_type' => 1,
            'manday' => 5,
            'confirmed' => 1,
            'status' => 'Unpaid',
        ]);
        App\Order::create([
            'inv_id' => 'INV234519092018',
            'user_id' => 1,
            'audit_id' => 2,
            'auditor_id' => 2,
            'final_price' => 315550,
            'discount' => 30750,
            'workers' => 3000,
            'cf' => 8327,
            'audit_type' => 1,
            'manday' => 5,
            'confirmed' => 1,
            'status' => 'Unpaid',
        ]);
        App\Order::create([
            'inv_id' => 'INV345619092018',
            'user_id' => 1,
            'audit_id' => 3,
            'auditor_id' => 3,
            'final_price' => 150750,
            'discount' => 10550,
            'workers' => 1500,
            'cf' => 8327,
            'audit_type' => 1,
            'manday' => 5,
            'confirmed' => 1,
            'status' => 'Unpaid',
        ]);

        App\Order::create([
            'inv_id' => 'INV123419092018',
            'user_id' => 2,
            'audit_id' => 1,
            'auditor_id' => 1,
            'final_price' => 202250,
            'discount' => 10550,
            'workers' => 2000,
            'cf' => 8327,
            'audit_type' => 1,
            'manday' => 5,
            'confirmed' => 1,
            'status' => 'Unpaid',
        ]);
        App\Order::create([
            'inv_id' => 'INV234519092018',
            'user_id' => 2,
            'audit_id' => 2,
            'auditor_id' => 2,
            'final_price' => 315550,
            'discount' => 30750,
            'workers' => 3000,
            'cf' => 8327,
            'audit_type' => 1,
            'manday' => 5,
            'confirmed' => 1,
            'status' => 'Unpaid',
        ]);
        App\Order::create([
            'inv_id' => 'INV345619092018',
            'user_id' => 2,
            'audit_id' => 3,
            'auditor_id' => 3,
            'final_price' => 150750,
            'discount' => 10550,
            'workers' => 1500,
            'cf' => 8327,
            'audit_type' => 1,
            'manday' => 5,
            'confirmed' => 1,
            'status' => 'Completed',
        ]);
    }
}
