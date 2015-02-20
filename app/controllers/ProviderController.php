<?php

class ProviderController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$providers = Provider::all();
		return View::make('providers.index', compact('providers'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('providers.create');
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
      return Redirect::to('providers/create')->withErrors($validator);
    } else {
      // store
      $provider = new Provider;
      $provider->name       = Input::get('name');
      $provider->cnpj       = Input::get('cnpj');
      $provider->ie         = Input::get('ie');
      $provider->street     = Input::get('street');
      $provider->city       = Input::get('city');
      $provider->state      = Input::get('state');
      $provider->country    = Input::get('country');
      $provider->number     = Input::get('number');
      $provider->phone      = Input::get('phone');
      $provider->cell_phone = Input::get('cell_phone');
      $provider->email      = Input::get('email');
      $provider->website    = Input::get('website');
      $provider->contact    = Input::get('contact');
      $provider->name       = Input::get('activity');
      $provider->save();

      // Redirect
      Session::flash('message', 'Successfully created Provider!');
      return Redirect::to('providers');
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
		$provider = Provider::find($id);
    	return View::make('providers.edit', compact('Provider'));
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
      return Redirect::to('providers/' . $id. '/edit')->withErrors($validator);
    } else {
      // store
      $provider = Provider::find($id);
      $provider->name       = Input::get('name');
      $provider->cnpj       = Input::get('cnpj');
      $provider->ie         = Input::get('ie');
      $provider->street     = Input::get('street');
      $provider->city       = Input::get('city');
      $provider->state      = Input::get('state');
      $provider->country    = Input::get('country');
      $provider->number     = Input::get('number');
      $provider->phone      = Input::get('phone');
      $provider->cell_phone = Input::get('cell_phone');
      $provider->email      = Input::get('email');
      $provider->website    = Input::get('website');
      $provider->contact    = Input::get('contact');
      $provider->name       = Input::get('activity');
      $provider->save();

      // Redirect
      Session::flash('message', 'Successfully updated Providers!');
      return Redirect::to('providers');
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
		$provider = Provider::find($id);
    	$provider->delete();
    
    	Session::flash('message', 'Successfully deleted the Category!');
    	return Redirect::to('providers');
	}
	}


}
