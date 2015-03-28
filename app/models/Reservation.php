<?php

class Reservation extends \Eloquent {
	protected $fillable = ['participant_id', 'chambre_id', 'date_debut', 'date_fin', 'duree', 'montant_total', 'created_at', 'updated_at'];

    public function participant() {
        $this->hasOne('Participant');
    }

    public function assignParticipant($participant) {
        $this->participant->attach($participant);
    }

    public function removeParticipant($participant) {
        $this->participant->detach($participant);
    }

    public function chambre() {
        return $this->belongsTo('Chambre');
    }

    public function assignChambre($chambre) {
        $this->chambres->attach($chambre);
    }

    public function removeChambre($chambre) {
        $this->chambres->detach($chambre);
    }

    public static function datesOk($date_debut, $date_fin) {
        $formatted_date_debut = new DateTime($date_debut);
        $formatted_date_fin =  new DateTime($date_fin);

        if($formatted_date_debut < $formatted_date_fin)
            return true;
        return false;
    }
}