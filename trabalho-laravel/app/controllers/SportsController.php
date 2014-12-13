<?php

class SportsController extends \BaseController {

    protected $sports;
    
    function __construct (Sports $sports){
        $this->sports = $sports;
    }
    
	
	public function index()
	{
		$sports = $this->sports->all();
        return View::make('sports.index')->with('sports',$sports);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('sports.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$sports = new Sports();
        $sports->description = Input::get('description');
        $sports->save();
        
        return Redirect::route('sports.index');
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
		 $this->sports = $this->sports->find($id);
		return View::make('sports.edit')->withSports($this->sports);
	}


	public function update($id)
	{
		$this->sports = $this->sports->find($id);
        
        $input = Input::all();
        
        $this->sports->fill($input);       
        
       // if(!$this->sports->isValid()){
        //    return Redirect::back()->withInput()->withErrors($this->sports->errors);
       // }
        $this->sports->save();
        return Redirect::route('sports.index');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->sports = $this->sports->find($id);
        $this->sports->delete();
        
        return Redirect::route('sports.index');
	}


}
