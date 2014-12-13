<?php
class AthleteController  extends \BaseController {
    
    protected $athlete;
    
    function __construct (Athlete $athlete){
        $this->athlete = $athlete;
    }
    
    public function index(){
        $athletes = $this->athlete->all();
        return View::make('athlete.index')->with('athletes',$athletes);
    }
    
    public function create(){
      //  $client_optons = DB::table('clients')->orderBy('client_name', 'asc')->lists('client_name','id');

    //return View::make('projects.create', array('client_options' => $client_options));
       // $cities = DB::table('city')->orderBy('name', 'asc')->lists('id','name');

    //    return View::make('athlete.create', array('city' => $cities));
        
        
       $cities = City::all();
       return View::make('athlete.create')->with('cities',$cities);;
        
    }
    
    
    
	public function store()
	{
        
        $validation = Validator::make(Input::all(),[
            'name'=>'required',
            'address'=>'required',
            'birth_date'=>'required',
            'phone'=>'required',
            'email'=>'required|email',
            'CPF'=>'required',
            'RG'=>'required', 
            'burg'=>'required', 
            'sex'=>'required', 
            'name_father'=>'required',
            'name_mother'=>'required',
            'team'=>'required',
            'city'=>'required' 
        ]);
        
        if($validation->fails()){
            return Redirect::back()->withErrors($validation->messages());
        }
      
        $athlete = new Athlete();
        $athlete->name = Input::get('name');
        $athlete->address = Input::get('address');
        $athlete->birth_date = Input::get('birth_date');
        $athlete->phone = Input::get('phone');
        $athlete->email = Input::get('email');
        $athlete->CPF = Input::get('CPF');
        $athlete->RG = Input::get('RG');
        $athlete->burg = Input::get('burg');
        $athlete->sex = Input::get('sex');
        $athlete->name_father = Input::get('name_father');
        $athlete->name_mother = Input::get('name_mother');
        $athlete->team =Input::get('team');
        $athlete->city = Input::get('city');
        $athlete->save();

        //var_dump(Input::all());
        
        //return "chegou aqui";
        return Redirect::route('athlete.index');
        
        /*
        $input = Input::all();
        
        $this->user->fill($input);
        
        if(!$this->user->isValid()){
            return Redirect::back()->withInput()->withErrors($this->user->errors);
        }
        
        $this->user->password = Hash::make($input['password']);
        $this->user->save();
        
        return Redirect::route('users.index');
        //var_dump(Input::all());
        */
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $athlete = Athlete::find($id);
        return View::make('athlete.show')->with('athlete', $athlete);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        
         $this->athlete = $this->athlete->find($id);
		return View::make('athlete.edit')->withAthlete($this->athlete);
        /*
        $this->user = $this->user->find($id);
		return View::make('users.edit')->withUser($this->user);
        */
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
       $this->athlete = $this->athlete->find($id);
        
        $input = Input::all();        
        $this->athlete->fill($input);      
        
        if(!$this->athlete->isValid()){
            return Redirect::back()->withInput()->withErrors($this->athlete->errors);
        }
        $this->athlete->save();
        return Redirect::route('athlete.index');
	}


	
	public function destroy($id)
	{
        $this->athlete = $this->athlete->find($id);
        $this->athlete->delete();
        
        return Redirect::route('athlete.index');
	}


}

    