<?php

class CategoryController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$categories = Category::all();
		return View::make('categories.index', compact('categories'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('categories.create');
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
      'name'       => 'required'
    );

    $validator = Validator::make(Input::all(), $rules);

    // process the login
    if ($validator->fails()) {
      return Redirect::to('categories/create')->withErrors($validator);
    } else {
      // store
      $category = new Category;
      $category->name = Input::get('name');
      $category->save();

      // Redirect
      Session::flash('message', 'Successfully created Category!');
      return Redirect::to('categories');
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
		$category = Category::find($id);
    	return View::make('categories.edit', compact('category'));
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
      'name'       => 'required'
    );

    $validator = Validator::make(Input::all(), $rules);

    // process the login
    if ($validator->fails()) {
      return Redirect::to('categories/' . $id. '/edit')->withErrors($validator);
    } else {
      // store
      $category = Category::find($id);
      $category->name = Input::get('name');
      $category->save();

      // Redirect
      Session::flash('message', 'Successfully updated Categorias!');
      return Redirect::to('categories');
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
		$category = Category::find($id);
    $category->delete();
    
    Session::flash('message', 'Successfully deleted the Category!');
    return Redirect::to('categories');
	}


}
