<?php

use Illuminate\Http\Request;

Route::get('/', function () {
	$categories = App\Category::whereHas('books', function($query){
		$query->where('status', 'public');
	})->get();
    return view('relacion', compact('categories'));
});

Route::delete('destroy', function(Request $request){
	$ids = $request->get('ids');
	if(count($ids)){
		App\Book::destroy($ids);
	}
	return back();
});

Route::get('many-to-many', function() {
	$users = App\User::all();
	return view('relaciones/many', compact('users'));
});