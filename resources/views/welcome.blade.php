@extends('layouts.master')

@section('title')
     Welcome!
@endsection

@section('content')
     @if(count($errors)>0)
        <div class="row">
	        <div class="col-md-6">
		         <ul>
				     @foreach($errors->all() as $error)
					     <li>{{$error }}</li>
					 @endforeach
			     </ul>
		     </div><!--For error that occurs in form filling-->
	    </div>
     @endif
      <div class="row">
	     <div class="col-md-6">
		     <form action="{{route('signup') }}" method="post">
			     <h3>Registers</h3>
			     <div class="form-group">
				     <div class="form-group{{$errors->has('first_name')? ' has-error':''}}">
			              <input class="form-control" type="text" name="first_name" id="first_name" placeholder="First Name" value={{Request::old('first_name')}}>
					      @if ($errors->has('first_name'))
                             <span class="help-block">{{$errors->first('first_name')}}</span>
                          @endif
                     </div>
					 
					<div class="form-group{{$errors->has('last_name')? ' has-error':''}}"> 
					     <input class="form-control" type="text" name="last_name" id="last_name" placeholder="Last Name" value={{Request::old('last_name')}}>
						  @if ($errors->has('last_name'))
                             <span class="help-block">{{$errors->first('last_name')}}</span>
                          @endif
                     </div>
					 <div class="form-group{{$errors->has('username')? ' has-error':''}}"> 
					     <input class="form-control" type="text" name="username" id="username" placeholder="User Name" value={{Request::old('username')}}>
					      @if ($errors->has('username'))
                             <span class="help-block">{{$errors->first('username')}}</span>
                          @endif
                     </div>
					 <div class="form-group{{$errors->has('email')? ' has-error':''}}"> 
					     <input class="form-control" type="email" name="email" id="email" placeholder="Email Adress" value={{Request::old('email')}}>
						  @if ($errors->has('email'))
                             <span class="help-block">{{$errors->first('email')}}</span>
                          @endif
                     </div>
					 <div class="form-group{{$errors->has('password')? ' has-error':''}}"> 
					     <input class="form-control" type="password" name="password" id="password" placeholder="Password" value={{Request::old('password')}}>
						  @if ($errors->has('password'))
                             <span class="help-block">{{$errors->first('password')}}</span>
                          @endif
                     </div>
			         <input class="form-control" type="password" name="confurm_password" id="confurm_password" placeholder="Confurm Password">
					 <div class="form-group{{$errors->has('birth_date')? ' has-error':''}}"> 
					     <label for="birth_date">Birth Date</label>
					     <input class="form-control" type="date" name="birth_date" id="birth_date" value={{Request::old('birth_date')}}>
						  @if ($errors->has('birth_date'))
                             <span class="help-block">{{$errors->first('birth_date')}}</span>
                          @endif
                     </div>
					<div class="form-group{{$errors->has('gender')? ' has-error':''}}"> 
					     <input class="form-control" type="radio" name="gender" id="gender" value="m">Male
					     <input class="form-control" type="radio" name="gender" id="gender" value="f">Female
					     <input class="form-control" type="radio" name="gender" id="gender" value="o">Other
                          @if ($errors->has('gender'))
                             <span class="help-block">{{$errors->first('gender')}}</span>
                          @endif
                     </div>
				 </div>
                  <button type="submit" class="btn btn-default navbar-btn">Register</button>
				  <input type="hidden" name="_token" value="{{Session::token() }}" >
                  
			 </form>
			
		 </div><!--end signup form-->
		 <div class="col-md-6">
		     <form action="{{route('signin') }}" method="post">
			     <h3>Log In</h3>
			     <div class="form-group">
				    <div class="form-group{{$errors->has('username')? ' has-error':''}}"> 
				         <label for="username">User Name</label>
					     <input class="form-control" type="text" name="username" id="username" value={{Request::old('username')}}>
						  @if ($errors->has('username'))
                             <span class="help-block">{{$errors->first('username')}}</span>
                          @endif
                     </div>
				     <div class="form-group{{$errors->has('password')? ' has-error':''}}"> 
					     <label for="last_name">Password</label>
					     <input class="form-control" type="password" name="password" id="password" value={{Request::old('password')}}>
					     @if ($errors->has('password'))
                             <span class="help-block">{{$errors->first('password')}}</span>
                          @endif
                     </div>
                 </div>
				 
                  <button type="submit" class="btn btn-default navbar-btn">Submit</button>
				  <input type="hidden" name="_token" value="{{Session::token() }}" >
                 
			 </form>
			
		 </div><!--end signin form-->
	 <div>
@endsection