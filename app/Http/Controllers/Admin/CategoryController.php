<?php namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller {

    function __construct()
    {
        $this->middleware('auth');
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $categories = Category::all()->toArray();
        return view('admin/category/categoryindex')->with('categories',$categories);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $categories = Category::all()->toArray();
        return view('admin/category/categorycreate')->with('categories',$categories);
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
	public function store(Request $request)
	{
        try{
            $this->validate($request, Category::$storeRules);

            $category = new Category();
            $category->title = Input::get('title');
            $category->description = Input::get('description');
            $category->parentid = Input::get('parentid');
            $category->save();

            return Redirect::to('admin/category');
        }
        catch(Exception $e) {
            return redirect('admin/category/create')->with('message','New category could not be created.');
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
        $category = Category::find($id);
        return view('admin/category/categoryshow')->with('category',$category);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $category = Category::find($id);
        $categories = Category::all();
        return view('admin/category/categoryedit')->with('category',$category)->with('categories', $categories);
	}

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @param Request $request
     * @return Response
     */
	public function update($id, Request $request)
	{
        try{
            $this->validate($request, Category::$updateRules);

            $category = Category::find($id);
            $category->title        = Input::get('title');
            $category->description  = Input::get('description');
            $category->parentid = Input::get('parentid');
            $category->save();

            return Redirect::to('admin/category');
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
        $category = Category::findOrFail($id);
        $category->delete();

        return Redirect::to('admin/category');
	}

}
