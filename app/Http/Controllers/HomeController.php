<?php

namespace App\Http\Controllers;

use App\Product;
use App\Services\Basket;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.index', [
        	'products' => Product::all()
        ]);
    }

    public function addToBasket(Product $product, Basket $basket) {
		$basket->add($product);

		return $basket->getProducts();
    }

	public function getBasket(Basket $basket) {
    	return $basket->getProducts();
	}

	public function quantityProduct($id, $quantity, Basket $basket) {
		if($quantity < 1) {
			$basket->remove(Product::find($id));
		} else {
			$basket->updateQuantity( $id, $quantity );
		}

		return $basket->getProducts();
	}
}
