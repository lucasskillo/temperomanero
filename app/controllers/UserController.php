<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::all();
		return View::make('users.index', compact('users'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('users.create');
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
      'name'       => 'required',
      'email'      => 'required'	
    );

    $validator = Validator::make(Input::all(), $rules);

    // process the login
    if ($validator->fails()) {
      return Redirect::to('users/create')->withErrors($validator);
    } else {
      // store
      $user = new User;
      $user->name = Input::get('name');
      $user->email = Input::get('email');
      if(Input::get('password'))
        {
            $user->password = Hash::make(Input::get('password'));
        }
      $user->save();

      // Redirect
      Session::flash('message', 'Successfully created User!');
      return Redirect::to('users');
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
		$user = User::find($id);
    	return View::make('users.edit', compact('user'));
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
      'name'       => 'required',
      'email'      => 'required'	
    );

    $validator = Validator::make(Input::all(), $rules);

    // process the login
    if ($validator->fails()) {
      return Redirect::to('users/' . $id. '/edit')->withErrors($validator);
    } else {
      // store
      $user = User::find($id);
      $user->name = Input::get('name');
      $user->email = Input::get('email');
      if(Input::get('password'))
        {
            $user->password = Hash::make(Input::get('password'));
        }
      $user->save();

      // Redirect
      Session::flash('message', 'Successfully updated Users!');
      return Redirect::to('users');
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
	$user = User::find($id);
    $user->delete();
    
    Session::flash('message', 'Successfully deleted the User!');
    return Redirect::to('users');
	}


}
