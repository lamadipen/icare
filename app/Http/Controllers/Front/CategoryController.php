<?php namespace App\Http\Controllers\Front;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;
use DB;
use Illuminate\Http\Request;

class CategoryController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		$footer_categories = DB::table('categories')->take(4)->get();
        $categories = Category::getCategoriesAndProducts();
        $categories = DB::table('categories')
            ->leftJoin('products', 'users.id', '=', 'contacts.user_id')
            ->join('orders', 'users.id', '=', 'orders.user_id')
            ->select('users.*', 'contacts.phone', 'orders.price')
            ->get();
        return view('categories')->with('categories',$categories)->with('footer_categories',$footer_categories);
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
		//
		 //$Category = Category::find($id);
		// $products = Product::where('cat_id','=',$id)->get()->sortBy('order')->paginate(2); 
        //$defaultproductpicture = ProductPicture::where('product_id','=',$id)->where('isdefault','=',1)->get();
        //return view('product')->with('catagory',$category)->with('products',$products);


		/**

		* For getting the title of the category which was not fetched with
		* the query after this due to similar column name

		*/
		$cat_title = Category::find($id);

		/**
		
		* gets the catagories for the footer

		*/
		$footer_categories = DB::table('categories')->take(4)->get();



		/**
		
		* Gets the product in the category gien catagory

		*/

        $categories = DB::table('categories')
            ->Join('Products', 'cat_id', '=', 'categories.id')
            ->join('ProductPictures', 'Product_id', '=', 'Products.id')
            ->where('cat_id','=',$id)
            ->get();

         /**
         * calls the view with these variables
         */
        return view('categories')->with('categories',$categories)->with('cat_title',$cat_title)->with('footer_categories',$footer_categories);
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
