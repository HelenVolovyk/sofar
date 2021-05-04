<?php

namespace App\Jobs;

use App\Services\WishlistService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class PostAfterDeleteWishistJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;


	 private $result;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(WishlistService $result)
    {
        $this->result = $result;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        logs()->warning("удален wishist [{$this->Cart::instance('wishlist')}]");
    }
}
