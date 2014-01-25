<?php

class DashController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function show()
	{
		$users = User::all();
		$categories = Category::all();
        return View::make('admin/dashboard', array('users' => $users, 'categories' => $categories));
	}

	public function userDetail($id)
	{
		$user = User::find($id);
		//$bookmarks = User::find($id)->bookmarks;
		$b = DB::table('bookmarks')
					->join('categories', 'bookmarks.idcat','=', 'categories.id')
					->where('iduser', $user->id)
					->select('bookmarks.desc', 'categories.desc as cat')
					->get();

		if($user != null)
			return View::make('admin/detail')
							->with('user', $user)
							->with('bookmarks', $b);
		else
			return 'Unkwnown User';
	}

}