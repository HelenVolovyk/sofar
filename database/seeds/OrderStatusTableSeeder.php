<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = config('order_status');
        if (!empty($statuses)) {
            foreach ($statuses as $status) {
					 $createStatus[] = ['type' => $status];
					 //\App\Models\OrdersStatus::create(['type' => $status]);
            }

           // dd($createStatus);
            DB::table('orders_statuses')->insert($createStatus);
        }
    }
}
