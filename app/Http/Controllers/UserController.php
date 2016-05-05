<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    
	public function postSignUp(Request $request){
		
		$this->validate($request, [
		     'first_name'=> 'required|max:120',
			 'last_name'=> 'required|max:120',
			 'username'=> 'required|unique:users',
			 'email'=> 'required|email|unique:users',
			 'password'=>'required|min:4',
			 'birth_date'=>'required',
			 'gender'=> 'required'
			 
		]);
		$first_name = $request['first_name'];
		$last_name = $request['last_name'];
		$username = $request['username'];
		$email = $request['email'];
		$password = bcrypt($request['password']);
		$birth_date = $request['birth_date'];
		$gender = $request['gender'];
		
		$user = new User();
		
		$user->first_name = $first_name;
		$user->last_name = $last_name;
		$user->username = $username;
		$user->email = $email;
		$user->password = $password;
		$user->birth_date = $birth_date;
		$user->gender = $gender;
		
		$user->save();
		Auth::login($user);
		
		return redirect()->route('dashboard');
	}
	
	public function postSignIn(Request $request){
		
	     $this->validate($request,[
		      'username'=>'required',
			  'password'=>'required'
		 ]);
		
		if(Auth::attempt(['username'=>$request['username'], 'password'=>$request['password']]))
		{
			return redirect()->route('dashboard');
		}
		return redirect()->back();
	}
	
	public function getDashboard(Request $request){
		
		return view('dashboard');
	}
}
