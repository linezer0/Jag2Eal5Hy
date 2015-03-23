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

    public function projections() {
        return $this->belongsToMany('Projection');
    }

    public function hasProjection($idProjection) {
        foreach($this->projections as $projection) {
            if($projection->id == $idProjection) return true;
        }
        return false;
    }

    public function assignProjection($projection) {
        $this->projections()->attach($projection);
    }

    public function removeProjection($projection) {
        $this->projections()->detach($projection);
    }

}
