<?php

class Film extends \Eloquent {
	protected $fillable = ['libelle', 'date_sortie', 'duree', 'nationalite', 'film_categorie_id'];
}