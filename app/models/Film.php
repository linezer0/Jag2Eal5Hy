<?php

class Film extends \Eloquent {
	protected $fillable = ['libelle', 'date_sortie', 'duree', 'nationalite', 'film_categorie_id'];

    public function filmCategorie() {
        return $this->hasOne('FilmCategorie');
    }
}