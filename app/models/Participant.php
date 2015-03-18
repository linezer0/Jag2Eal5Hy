<?php

class Participant extends \Eloquent {
	protected $fillable = ['nom', 'prenom', 'email', 'date_naissance', 'telephone', 'role', 'niveau_accreditation'];

    public static $rules = [
        'nom' => 'required|between:1,30',
        'prenom' => 'required|between:1,30',
        'email' => 'required|email|unique:participants',
        'date_naissance' => 'required|date',
        'telephone' => 'between:5,25'
    ];

    public static $roles = [
        'employe_media' => "Employé média",
        'employe_film' => 'Employé film',
        'jury' => 'Jury',
        'invite' => 'Invité',
        'autre' => 'Autre'
    ];

    public static $niveaux_accreditation = [0, 1, 2, 3, 4, 5, 6];
}
