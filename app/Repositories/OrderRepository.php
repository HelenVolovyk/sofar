<?php

namespace App\Repositories;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class OrderRepository extends CoreRepository
{
	protected function getModelClass()
	{
		return Order::class;
	}

	public function getList()
	{
		return $this->startConditios()
			->where('user_id', Auth::user()->id)
			->with('products:id,name')
			->orderByDesc('created_at')
			->get();
	}

	public function getId()
	{
		return $this->startConditios()
		->where('user_id', Auth::user()->id)
		->get();
	}
}