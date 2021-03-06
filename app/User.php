<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable {
	use Notifiable;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */

	protected $fillable = [
		'name',
		'email',
		'password',
		'facebook_id',
		'access_token',
		'is_active',
		'role_id',
		'first_name',
		'age_range',
		'link',
		'gender',
		'locale',
		'picture',
		'user_likes',
	];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'password', 'remember_token',
	];

	public function role() {
		return $this->belongsTo('App\Role');
	}

	public function isAdmin() {
		if ($this->role->name == 'administrator' && $this->is_active == 1) {
			return true;
		} else {
			return false;
		}
	}

	function getFacebookUserId() {
		$uid = Request::input('uid');
		$fbUser = User::findOrFail($uid);
		return $fbUser;
	}
}
