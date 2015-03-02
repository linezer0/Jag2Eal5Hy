<?php

class RoleUser extends \Eloquent {
	protected $fillable = ['role_id', 'user_id'];

	protected $table='role_user';
}
