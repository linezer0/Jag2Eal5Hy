<?php

class AccessRequest extends \Eloquent {
	protected $fillable = ['nom', 'prenom', 'email','date_naissance', 'telephone', 'role', 'entreprise', 'justification', 'statut'];

	public static $rules = [
		'nom' => 'required|between:1,30',
		'prenom' => 'required|between:1,30',
		'email' => 'required|email|unique:users',
		'date_naissance' => 'required|date',
        'telephone' => 'required|between:5,25',
		'role' => 'required',
		'entreprise' => 'required',
		'justification' => 'required'
		];
}
