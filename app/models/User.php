<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	public $fillable = ['prenom', 'nom', 'email','date_naissance', 'password'];

	public static $rules = [
		'nom' => 'required|between:1,30',
		'prenom' => 'required|between:1,30',
		'email' => 'required|email|unique:users',
		'date_naissance' => 'required|date',
		'password' => 'required|min:8|confirmed'
	];

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

	public function roles() {
		return $this->belongsToMany('Role');
	}

	public function hasRole($name) {
		foreach($this->roles as $role) {
			if($role->name == $name) return true;
		}
		return false;
	}

	public function assignRole($role) {
		$this->roles()->attach($role);
	}

	public function removeRole($role) {
		$this->roles()->detach($role);
	}
}
