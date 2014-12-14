<?php

class SessionsController extends \BaseController {

	public function create()
	{
        
		return View::make('sessions.create');
	}
	
	public function store()
	{
        $auth = Auth::attempt([
            'email' =>Input::get('email'),
            'password' =>Input::get('password')
        ]);
        
        if($auth)
            return Redirect::intended('/')->withErrors('Usuário, '. Auth::user()->name .' Logado com sucesso');
        else 
            return Redirect::back()->withInput()->withInput()->withErrors("Usuario e senha incorretos");
        
		//return Input::all();
	}
	
	public function destroy()
	{
		Auth::logout();
        return Redirect::intended('/')->withErrors("usuario deslogado");
	}


}
