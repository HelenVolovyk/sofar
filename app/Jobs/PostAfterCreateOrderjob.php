<?php

namespace App\Jobs;

use App\Models\Order;
use App\Models\Post;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class PostAfterCreateOrderjob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;


	 private $order;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Order $order)
    {
		  $this->order = $order;

		  //* название очереди
		  //$this->onQueue('orders');
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        logs()->info("coздан новый заказ[{$this->order->id}]");
    }
}
