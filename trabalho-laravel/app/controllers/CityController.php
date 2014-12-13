<?php

class CityController extends \BaseController {

    protected $city;
    
    function __construct (City $city){
        $this->city = $city;
    }
    
    
    
	public function index()
	{
		$city = $this->city->all();
        return View::make('city.index')->with('city',$city);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('city.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$city = new City;
        $city->name = Input::get('name');
        $city->save();
        
        return Redirect::route('city.index');
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
		 $this->city = $this->city->find($id);
		return View::make('city.edit')->withCity($this->city);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$this->city = $this->city->find($id);
        
        $input = Input::all();
        //$password = $this->user->password;        
        
        $this->city->fill($input);
        
       
        
     //   if(!$this->user->isValid()){
       //     return Redirect::back()->withInput()->withErrors($this->user->errors);
//        }
        $this->city->save();
        return Redirect::route('city.index');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->city = $this->city->find($id);
        $this->city->delete();
        
        return Redirect::route('city.index');
	}


}
