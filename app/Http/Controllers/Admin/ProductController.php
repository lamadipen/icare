<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

use App\Product;
use App\Category;
use App\ProductPicture;

class ProductController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//    
        $products = Product::all()->toArray();               
        return view('admin/product/productindex')->with('products',$products);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
	   //
       $categories = Category::all()->toArray();   
       return view('admin/product/productcreate')->with('categories',$categories);     
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{

		//
         try{            

            $this->validate($request, Product::$storeRules);
            if($request->hasFile('thumb') && $request->hasFile('mid') && $request->hasFile('big')) {     
                
                $product = new Product();
                $product->title = Input::get('title');
                $product->description = Input::get('description');
                $product->slug = Input::get('slug');
                $product->cat_id = Input::get('category_id');
                $product->weight = Input::get('weight');
                $product->price = Input::get('price');
                $product->description = Input::get('description'); 

                //for determining wether it is featured or not
                $product->featured = Input::get('featured');                      
                $product->save();    
            
                //Getting Last inserted id            
                $insertedId = $product->id;

                $product_pic = new ProductPicture();
                $product_pic->caption = Input::get('caption');
                $product_pic->isdefault = Input::get('is_default');
                $product_pic->product_id = $insertedId;                
                $product_pic->order = Input::get('order');
                
                $timestamp = strtotime(date('Y-m-d'));
                
                $file_thumb = Input::file('thumb');
                $file_mid = Input::file('mid');
                $file_big = Input::file('big');
           
                $name_thumb = $timestamp. '_' .$file_thumb->getClientOriginalName();
                $name_mid = $timestamp. '_' .$file_mid->getClientOriginalName();
                $name_big = $timestamp. '_' .$file_big->getClientOriginalName();
                
                 
                $product_pic->filename_thumb = $name_thumb;
                $product_pic->filename_mid =  $name_mid ;
                $product_pic->filename_big = $name_big;
            
                $product_pic->save();
                
                
                echo $name_thumb." <br/>";
                echo $name_mid." <br/>";
                echo $name_big." <br/>";
                                        
                $file_thumb->move(public_path().'/productimages/', $name_thumb);
                $file_mid->move(public_path().'/productimages/', $name_mid);
                $file_big->move(public_path().'/productimages/', $name_big);
           
            }
            else
            {
                echo "Please upload required images";
            }

            return Redirect::to('admin/product');
        }
        catch(Exception $e) {
            return redirect('admin/product/create')->with('message','New product could not be created.');
        }
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
        $product = Product::find($id);
        return view('admin/product/productshow')->with('product',$product);
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
        $product = Product::find($id);
        $categories = Category::all();
        return view('admin/product/productedit')->with('product',$product)->with('categories', $categories);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		//
        try{
            $this->validate($request, Product::$updateRules);

            $product = Product::find($id);
            $product->title = Input::get('title');
            $product->description = Input::get('description');
            $product->slug = Input::get('slug');
            $product->cat_id = Input::get('category_id');
            $product->weight = Input::get('weight');
            $product->price = Input::get('price');
            $product->description = Input::get('description');
            $product->featured = Input::get('featured'); 
            $product->save();

            return Redirect::to('admin/product');
        }
        catch(Exception $e) {
            return redirect()->back();
        }
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
        $product = Product::findOrFail($id);              
        $product->forceDelete();
        
        return Redirect::to('admin/product');
	}

}
