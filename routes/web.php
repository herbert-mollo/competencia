<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return view('layouts.principal');
    
    $user=Auth::user();
    
    if($user && $user->esAdmin()){
        return view('/home');
    }else{
        return view('layouts.principal');
    }

});


// return view('welcome');
//Route::get('/contacto', 'contactmessageController@show');
Route::post('/contacto', 'ContactMessageController@formulariocontacto');
Route::resource('services','ServicesController');
Route::resource('about','AboutController');
Route::resource('home','HomeController');
Route::resource('galleri','GalleriController');
Route::resource('testimonials','testimonialsController');
Route::resource('contact','contactController');
Route::resource('blog','blogController');
Route::resource('user','UserController');
route::resource('prueba','pruebaController');


Route::get('/error404',function () {
    return view('plantilla.error404');
});
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['role:1']], function () {
    Route::resource('services','ServicesController');
    Route::resource('about','AboutController');
    Route::resource('galleri','GalleriController');
    Route::resource('testimonials','testimonialsController');
    Route::resource('contact','contactController');
    Route::resource('blog','blogController');
    Route::resource('user','UserController');
    Route::resource('home','HomeController');

});

Route::get('/', function () { 
    $home= \DB::table('homes')->select('titulo','descripcion','imagen')->get();
    $about= \DB::table('abouts')->select('descripcion','imagen')->get();
    $services= \DB::table('services')->select('descripcion','titulo_imagen','descripcion_imagen','imagen')->get();
    $galleri= \DB::table('galleris')->select('descripcion','Nombre_imagen','imagen')->get();
    $testimonials= \DB::table('testimonials')->select('descripcion_titulo','imagen','nombre_cli')->get();
    $blog= \DB::table('blogs')->select('nombre','cargo','imagen')->get();
    $contact= \DB::table('contacts')->select('direccion','telefono','email')->get();

    return view('layouts.principal', compact(['home','about','services','galleri','testimonials','blog','contact']));
});

// Route::get('/', function () { 
//     $about= \DB::table('abouts')->select('descripcion','imagen')->get();
//     return view('layouts.principal', compact('about'));
// });



// // $email = DB::table('users')->where('name', 'John')->value('email');
// // return view('user.index', ['users' => $users]);
// Route::get('/prueba', function () {
//     return view('prueba', ['name' => 'James']);
// });

// Route::get('/sinpermiso', function(){
//     echo 'hola';
// });

// Route::get('/conpermiso', function(){
//     echo 'hola';
// })->middleware('role:1');

