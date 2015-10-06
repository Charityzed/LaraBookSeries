<?php

class RegistrationController extends \BaseController {

//show a form to register the user
	public function create()
	{
		return View::make('registration.create');


	}

public function store(){
	return Redirect::home();

}




}
