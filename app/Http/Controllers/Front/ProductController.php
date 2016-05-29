<?php namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Product;
use App\ProductPicture;
use App\Category;
use DB;

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

        $footer_categories = DB::table('categories')->take(4)->get();  
        $products = Product::paginate(2);   
        $prod_features = DB::table('products')
            ->Join('productpictures', 'productpictures.product_id', '=', 'products.id')
            ->select('products.*','productpictures.filename_thumb')
            ->where('featured',1)
            ->get();
        //var_dump($products);    
        //$products->setPath('product');                   
       return view('products_list')->with('products',$products)->with('footer_categories',$footer_categories)->with('featured_products', $prod_features);        
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
        /** 
        *for the footer catagories
        *
        */
        $footer_categories = DB::table('categories')->take(4)->get();
        

        /**

        * featured product and related product display

        */

        $prod_features = DB::table('products')
            ->Join('productpictures', 'productpictures.product_id', '=', 'products.id')
            ->select('products.*','productpictures.filename_thumb')
            ->where('featured',1)
            ->get();

        $product = Product::find($id);

        $productpictures = ProductPicture::where('product_id','=',$id)->get()->sortBy('order');

        $defaultproductpicture = ProductPicture::where('product_id','=',$id)->get();
        
        return view('product')->with('product',$product)->with('productpictures',$productpictures)->with('defaultproductpicture', $defaultproductpicture[0])->with('footer_categories',$footer_categories)->with('prod_features',$prod_features);

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
