<?php
 
class HomeController extends BaseController {
 
    public function getIndex()
    {
        return View::make('hello');
    }
 
    public function getEntrar()
    {
        return View::make('login');
    }
 
    public function postEntrar()
    {
        // Opção de lembrar do usuário
        $remember = false;
        if(Input::get('remember'))
        {
            $remember = true;
        }
        
        // Autenticação
        if (Auth::attempt(array(
            'email' => Input::get('email'), 
            'password' => Input::get('password')
            ), $remember))
        {
            return Redirect::to('home');
        }
        else
        {
            return Redirect::to('login')
                ->with('flash_error', 1)
                ->withInput();
        }
    }
    
    public function getSair()
    {
        Auth::logout();
        return Redirect::to('login');
    }
}