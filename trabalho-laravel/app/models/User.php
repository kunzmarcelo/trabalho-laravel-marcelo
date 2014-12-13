<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	protected $table = 'user';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');
    
    protected $fillable = ['email','password'];
    
    public $rules = [                        
            'email'=>'required|email',
            'password'=>'required'
        ];
    
    public $errors;
    
    public function isValid(){
        $validation = Validator::make($this->attributes, $this->rules);
        
        if($validation->passes()) return true;
        
        $this->errors = $validation->messages();
        
        return false;
    }
}
       
