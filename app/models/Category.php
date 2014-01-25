<?php

class Category extends Eloquent {

	protected $table = 'categories';

	public function bookmarks() {
		return $this->hasMany('Bookmark', 'idcat');
	}

}