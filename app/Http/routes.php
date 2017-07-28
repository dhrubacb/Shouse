
<?php

/*
|-------------------------------- ------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*

Route::get('/description/{id}/{types}', function ($id , $types) {
   
    // return $id;
    return view('project/description')
    			->with('id', $id)->with('types' , $types); 

});

*/


Route::get('/index' , function(){

return view('/project/index');

});


Route::get('/about' , function(){

return view('/project/about');

});

/*

Route::get('complete' , function(){

return view('project/complete');

});

*/

Route::get('running', ['as' => 'project.running', 'uses' => 'SoftController@running']);

Route::get('complete', ['as' => 'project.complete', 'uses' => 'SoftController@complete']);

Route::get('description/{id}/{types}/{table}' ,['as' => 'description' , 'uses' => 'SoftController@description'] );


Route::get('/contact' , function(){

return view('/project/contact');

});


Route::get('/request' , function(){

return view('/project/request_form');

});

?>