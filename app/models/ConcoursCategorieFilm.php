<?php

class ConcoursCategorieFilm extends \Eloquent {

	protected $table = 'concours_categorie_film';

	protected $fillable = ['concours_categorie_id', 'film_id'];
}