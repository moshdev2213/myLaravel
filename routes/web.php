<?php

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('hello');
// });
// Route::get('/hello',function(){
//     return view('hello');
// });
// Route::get('/user_form', function () {
//     $title2 = "Send User Info 02";
//     return view('user_form')->withTile($title2);
// });
// Route::post('get_userData', function (Request $req) {
//     // $name = $req->input('name');
//     // return 'your name is : '.$name;

//     //for handling redirection
//     return redirect('user_form')->with('message','Success!');
// });
// Route::get('users/{id}', function ($id) {
//     return $id;
// });

// Route::get('test-page/{id}/{type?}',function($id,$type=null){

// })->name('page');

// // Route::view(sample-page)

// //nested Routes
// Route::prefix('gallery')->group(function(){
//     Route::get('/',function(){
//         return '<h1>Index gallery</h1>';
//     });
//     Route::get('photos',function(){
//         return '<h1>photo</h1>';
//     });
//     Route::get('videos',function(){
//         return '<h1>video</h1>';
//     });
// });