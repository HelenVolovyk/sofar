<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOrderRequest;
use App\Jobs\PostAfterCreateOrder;
use App\Jobs\PostAfterCreateOrderjob;
use App\Jobs\PostAfterCreateUser;
use App\Mail\OrderCreated;
use App\Models\Order;
use App\Models\Product;
use App\Repositories\OrderRepository;
use App\Models\OrderStatus;
use App\Models\User;
use Gloudemans\Shoppingcart\Cart as ShoppingcartCart;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{

	private $orderRepository;

	public function __construct(OrderRepository $orderRepository)
	{
		$this->orderRepository = $orderRepository;
	}

	public function getOrderByUser(Order $order, $locale, Product $product)
	{
		$orders = $this->orderRepository->getList();

		return view('user.orders', compact('orders'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create(CreateOrderRequest $request, $locale)
	{
		
		$user = auth()->user();
		$cartTotal = (float) Cart::instance('cart')->total(2, '.', '');
		$cartItem = Cart::instance('cart')->content();
		
		
		if ($cartTotal > auth()->user()->balance) {
				return redirect()->back()->with(['customeError' => 'You don`t have enough money on your balance']);
		}

		$fields = $request->validated();
		$status = OrderStatus::where('type', '=', config('order_status.in_process'))->first();

		
		$order  = Order::create([
				'user_id'      => $user->id,
				'user_name'    => $fields['name'],
				'user_surname' => $fields['surname'],
				'user_email'   => $fields['email'],
				'user_phone'   => $fields['phone'],
				'country'      => $fields['country'],
				'city'         => $fields['city'],
				'address'      => $fields['address'],
				'total'        => $cartTotal,
				'status_id'    => $status->id
		]);

		if ($order) {
			$job = new PostAfterCreateOrderjob($order);
			$this->dispatch($job);
		}

		$user->update([
			'balance' => $user->balance - $cartTotal
		]);

		foreach ($cartItem as $item) {

			 $product = Product::where('webname', $item->id)->first();
			
			$item->id = Product::where('webname', $item->id)->value('id');
	
			$order->products()->attach($item->id, [
				'quantity'   => (int) $item->qty,
				'price'      => $item->price
			]);

		$product->update([
			'quantity' => $product->quantity - (int) $item->qty
		]);
			
		}
		
	//dd(	Cart::instance('cart')->content());
		
		//Cart::instance('cart')->restore($user->instanceCartName());
		Cart::instance('cart')->destroy();
	//	Mail::to()->send(new OrderCreated($name, $order));
		return redirect()->route('thankyou', compact('locale', 'order'));
	}


}