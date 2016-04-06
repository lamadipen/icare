<?php namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Product;
use DB;

class HomePageController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{

	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		 $prod_features = DB::table('products')
            ->Join('productpictures', 'productpictures.product_id', '=', 'products.id')
            ->select('products.*','productpictures.filename_thumb')
            ->where('featured',1)
            ->get();

		//$products = Product::where('featured',1)->get();
		//var_dump($products);
            var_dump($prod_features);
        return view('welcome')->with('products', $prod_features);
	}

}
