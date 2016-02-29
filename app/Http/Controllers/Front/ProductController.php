<?php namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Product;
use App\ProductPicture;
use App\Category;

use Illuminate\Pagination\Paginator;

class ProductController extends Controller {

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
		//$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
        
        //    
        $products = Product::paginate(3);
        
       // var_dump($products);                       
       return view('products_list')->with('products',$products);        
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        $productpictures = ProductPicture::where('productid','=',$id)->get()->sortBy('order');
        $defaultproductpicture = ProductPicture::where('productid','=',$id)->where('isdefault','=',1)->get();
        return view('product')->with('product',$product)->with('productpictures',$productpictures)->with('defaultproductpicture', $defaultproductpicture[0]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}
