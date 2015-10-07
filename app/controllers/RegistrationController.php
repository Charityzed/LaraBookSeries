<?php
use Larabook\Forms\RegistrationForm;
use \Larabook\Core\CommandBus;
use \Larabook\Registration\RegisterUserCommand;

class RegistrationController extends BaseController {

    use CommandBus;


	function __construct(RegistrationForm $registrationForm) {
		$this->registrationForm=$registrationForm;
	}
//show a form to register the user
	public function create()
	{
		return View::make('registration.create');


	}

    /**
     * @return mixed
     * @throws \Laracasts\Validation\FormValidationException
     */
    public function store(){

	$this->registrationForm->validate(Input::all());

    extract(Input::only('username', 'email', 'password'));
    $user=$this->execute(
//     new  RegisterUserCommand($username, $email, $password)
        new RegisterUserCommand($username,$email,$password)
    );


    Auth::login($user);
	return Redirect::home();
}





}
