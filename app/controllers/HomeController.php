<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function showHome()
	{
		return View::make('homepage');
	}

	public function showLogin()
	{
		return View::make('login');
	}

	public function doLogin() 
	{

		$rules = array(
			'email'    => 'required|email', // make sure the email is an actual email
			'password' => 'required|alphaNum|min:6' // password can only be alphanumeric and has to be greater than 6 characters
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::to('login')
				->withErrors($validator) // send back all errors to the login form
				->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
		} 

		else 
		{

			// create our user data for the authentication
			$userdata = array(
				'email' 	=> Input::get('email'),
				'password' 	=> Input::get('password')
			);

			if (Auth::attempt($userdata)) 
			{
		    	return Redirect::intended('/posts');
			}
			
			else
			{
				Session::flash('errorMessage', 'There were errors submitting your form.  Did you include all fields?');
				return Redirect::to('login')->withInput()->withErrors($validator);;
			}
		}
	}

	public function doLogout()
	{
		Auth::logout(); // log the user out of our application
		return Redirect::action('HomeController@showHome'); // redirect the user to the homepage
	}


	public function showResume()
	{
		return View::make('resume');
	}

	public function showPortfolio() 
	{
		return View::make('portfolio');
	}

}