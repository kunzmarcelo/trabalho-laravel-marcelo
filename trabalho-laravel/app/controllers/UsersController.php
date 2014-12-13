<?php

class UsersController extends \BaseController {

	 protected $user;
    
    function __construct(User $user){
        //$this->beforeFilter('auth');
        $this->user = $user;
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $users = $this->user->all();
        
		return View::make('users.index')->with('users',$users); 
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
        $input = Input::all();
        
        $this->user->fill($input);
        
        if(!$this->user->isValid()){
            return Redirect::back()->withInput()->withErrors($this->user->errors);
        }
        
        $this->user->password = Hash::make($input['password']);
        $this->user->save();
        
        return Redirect::route('users.index');
        //var_dump(Input::all());
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $user = User::find($id);
        return View::make('users.show')->with('user', $user);
        //return User::find($id);
        
        
		//return "Mostra o objeto que tem o id ". $id . "como identificador";
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $this->user = $this->user->find($id);
		return View::make('users.edit')->withUser($this->user);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$this->user = $this->user->find($id);
        
        $input = Input::all();
        $password = $this->user->password;        
        
        $this->user->fill($input);
        
        if(!$input['password']){
            $this->user->password = $password;
        }else{
            $this->user->password = Hash::make($input['password']);
        }
        
        if(!$this->user->isValid()){
            return Redirect::back()->withInput()->withErrors($this->user->errors);
        }
        $this->user->save();
        return Redirect::route('users.index');
	}


	
	public function destroy($id)
	{
		$this->user = $this->user->find($id);
        $this->user->delete();
        
        return Redirect::route('users.index');
	}


}
