<?php

class TeamController extends \BaseController {

    protected $team;
	 
    function __construct (Team $team){
        $this->team = $team;
    }
    
	public function index()
	{
		$team = $this->team->all();
        return View::make('team.index')->with('team',$team);
	}


	
	public function create()
	{
		return View::make('team.create');
	}


	public function store()
	{
		$team = new Team();
        $team->name = Input::get('name');
        $team->responsable = Input::get('responsable');
        $team->sports = Input::get('sports');
        $team->save();
        
        return Redirect::route('team.index');
	}


	
	public function show($id)
	{
		//
	}


	
	public function edit($id)
	{
		$this->team = $this->team->find($id);
		return View::make('team.edit')->withTeam($this->team);
	}


	public function update($id)
	{
		$this->team = $this->team->find($id);
        
        $input = Input::all();
       
        
        $this->team->fill($input);
        
       
        
        if(!$this->team->isValid()){
            return Redirect::back()->withInput()->withErrors($this->team->errors);
        }
        $this->team->save();
        return Redirect::route('team.index');
	}


	
	public function destroy($id)
	{
        $this->team = $this->team->find($id);
        $this->team->delete();
        
        return Redirect::route('team.index');
	}


}
