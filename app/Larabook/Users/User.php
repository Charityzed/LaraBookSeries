<?php  namespace Larabook\Users;
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Eloquent, Hash;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * which fields may be mass assigned
	 */
	protected $fillable=['username', 'email', 'password'];
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

    public function setPasswordAttribute($password){
      $this->attributes['password']=Hash::make($password);
    }
	/**
	 * reigister a new user
	 * @param $username
	 * @param $email
	 * @param $password
	 *
	 */
	public static function register($username, $email, $password) {
		$user=new static(compact('username', 'email', 'password'));
return $user;
		//raise an event
	}
}
