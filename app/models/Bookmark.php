<?php

class Bookmark extends Eloquent {

	protected $table = 'bookmarks';

	public function category() { 
		return $this->belongsTo('Category');
	}

	public function user() {
		return $this->belongsTo('User');
	}

}