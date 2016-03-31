<?php namespace App\Http\Controllers\Front;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Inquiry;

/** 
* is needed for using input
*/
use Illuminate\Support\Facades\Input;

/**
* is needed for using redirect
*/
use Illuminate\Support\Facades\Redirect;


/**
* I have added this controller for the insertion of inquiry
* as inquirycontroller in the admin was in accessable
* @samundra  
*/

class InquiryController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
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
		//inquiry model was added
		 $inquiry = new Inquiry();
                $inquiry->name = Input::get('name');
                $inquiry->productid = Input::get('productid');
                $inquiry->email = Input::get('email');
                $inquiry->phoneno = Input::get('phoneno');
                $inquiry->description = Input::get('description');                       
                $inquiry->save(); 

         return redirect('contact');
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
