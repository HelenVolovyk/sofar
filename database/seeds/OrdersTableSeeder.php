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
       
       factory(\App\Models\Order::class, 5)->create()->each(function(\App\Models\Order $order){
      //   factory(\App\Models\Order::class, 5)->make()->each(function(\App\Models\Order $order){
           $countOfProduct = rand(1,3);
           for($i = 0; $i < $countOfProduct; $i++){
              $quantity= rand(1,5);
              $product = \App\Models\Product::all()->random();
           }
        
            $order->products()->attach($order, [
                'quantity' => $quantity,
                'price' => $product->price,
                
           ]);
        });
    }
}
