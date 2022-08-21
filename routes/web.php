<?php

	use App\Http\Controllers\ListingController;
	use Illuminate\Support\Facades\Route;
	use App\Models\Listing;

//Route::get('/test', function () {
//	return response('<h1>Hello test</h1>', 200)
//		->header('Content-Type', 'text/plain')
//		->header('foo', 'bar');
//});
//
//Route::get('/posts/{id}', function ($id) {
////	ddd($id);
//	return response('Post ' . $id);
//})->where('id', '[0-9]+');
//
//Route::get('/search', function (Request $request) {
//	return $request->name . ' ' . $request->city;
//});

// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete listing

// All Listings
	Route::get('/', [ListingController::class, 'index']);


// Single Listing
	Route::get('/listings/{listing}', [ListingController::class, 'show']);



