<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GetPages;

Route::get('/', function () {
    return view('home1');
});

Route::get('/home',function(){
    return view('home',['name'=>'bharath']);
});

Route::get('aboutus',function(){
    return view('aboutUs', ['name'=>'About Us']);
});

Route::get('/data/getInfo/123', function(){
    $data = [
        'name' => 'bharath',
        'id' => 123456
    ];
    // response()->status(404);
    return response($data);
})->name('data')->middleware('isValidToken');

Route::get('/info',function(){
    return redirect()->route('data');
});

// ----------

// Route::get('/hotdeals',function(){
//     return view('hotDeals',['page'=>'Hot Deals']);
// });

// Route::get('/reviews',function(){
//     return view('reviews', ['page' => 'Reviews']);
// });

// Route::get('/contact',function(){
//     return view('contact',['page' => 'Contact Us']);
// });

Route::get('/hotdeals',[GetPages::class ,'getDeals']);

Route::get('/reviews',[GetPages::class,'getReviews']);

Route::get('/contact',[GetPages::class,'getContact']);
