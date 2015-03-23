<?php

class Reservation extends \Eloquent {
	protected $fillable = ['participant_id', 'hebergement_id', 'date_debut', 'date_fin', 'duree', 'montant_total', 'nombre_personnes', 'created_at', 'updated_at'];

    public function participant() {
        $this->hasOne('Participant');
    }

    public function assignParticipant($participant) {
        $this->participant->attach($participant);
    }

    public function removeParticipant($participant) {
        $this->participant->detach($participant);
    }

    public function hebergement() {
        $this->hasOne('Hebergement');
    }

    public function assignHebergement($hebergement) {
        $this->hebergement->attach($hebergement);
    }

    public function removeHebergement($hebergement) {
        $this->hebergement->detach($hebergement);
    }

    public function chambres() {
        $this->belongsToMany('Chambre');
    }

    public function assignChambre($chambre) {
        $this->chambres->attach($chambre);
    }

    public function removeChambre($chambre) {
        $this->chambres->detach($chambre);
    }
}