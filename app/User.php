<?php namespace App;

use App\DB\User\Traits\UserACL;
use App\DB\User\Traits\UserRelationShips;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'email', 'password'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

    /**
     * Input validation Rules.
     *
     * @var array
     */
    static $storeRules = array(
        'name'       => 'required',
        'email'      => 'required|email',
        'password' => 'required'
    );

    static $updateRules = array(
        'name'       => 'required',
        'email'      => 'required|email'
    );


}
