<?php

class FrontendController extends BaseController {

	public function index()
	{
		return View::make('home');
	}

}