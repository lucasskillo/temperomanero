<?php

class ProductController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$products = Product::all();
		return View::make('products.index', compact('products'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$categories = Category::lists('name','id');
		return View::make('products.create', compact('categories'));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// Validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'name'          => 'required|max:200',
            'category_id'   => 'required',
            'unidade_medida'            => 'required|max:15'
        );

        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('products/create')->withErrors($validator);
        } else {
            // store
            $product = new Product;
            $product->name = Input::get('name');
            $product->category_id = Input::get('category_id');
            $product->unidade_medida = Input::get('unidade_medida');
            $product->save();

            // Redirect
            Session::flash('message', 'Successfully created Product!');
            return Redirect::to('products');
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
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$product = Product::find($id);
    	$categories = Category::lists('name','id');
    	return View::make('products.edit', compact('product', 'categories'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		// Validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'name'          => 'required|max:200',
            'category_id'   => 'required',
            'unidade_medida'            => 'required|max:10'
        );

        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('products/'.$id.'/create')->withErrors($validator);
        } else {
            // store
            $product = Product::fund($id);
     	    $product->name = Input::get('name');
            $product->category_id = Input::get('category_id');
            $product->unidade_medida = Input::get('unidade_medida');
            $product->save();

            // Redirect
            Session::flash('message', 'Successfully update Products!');
            return Redirect::to('products');
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
		$product = Product::find($id);
    	$product->delete();
    	Session::flash('message', 'Successfully deleted the Product!');
    	return Redirect::to('products');
	}


}
