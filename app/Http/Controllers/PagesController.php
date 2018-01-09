<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
    	//
    }

    public function about(){

    }

    public function contact(){

    }

    public function showLogin(){
    	return View::make('login'); 
    }

    public function doLogin(Request $request){
    	$rules = array(
    		'username' => 'required|min:3',
    		'password' => 'required|alphaNum|min:8'
    	);

    	$validator = Validator::make($request->all(), $rules);

    	if($validator->fails()){
    		return Redirect::to('login')
    			   ->withErrors($validator)
    			   ->withInput($request->except('password'));
    	}else{
    		$userdata = new Array(
    			'username' => $request->input('username'),
    			'password' => $request->input('password')
    		);

    		if(Auth::attempt($userdata)){
    			echo 'Success'
    		}else{
    			return Redirect::to('login');
    		}
    	}
    }

}
