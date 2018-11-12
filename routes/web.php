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
    return view('main');
});
Route::get('/galvenalappa', function () {
    return view('galvenalappa');
});

Route::get('/galerija', function () {
    return view('galerija');
});
Route::get('/kontakti', function () {
    return view('kontakti');
});
Route::get('/todo', function () {
    return view('todo');
});


//galvenalappa
///todo

Route::get('/galvenalappa', function () {

    $todosNoDatubazes = \App\Todo::orderBy('updated_at','desc')->get();




    return view('galvenalappa',[
        'todos'=>$todosNoDatubazes,
    ]);
        
  
});
// veido jaunus un saglaba
Route::any('/addnew', function () {

$jaunsTodo = new \App\Todo;

$jaunsTodo->title = \Request('note');
$jaunsTodo->body = 'Some default body';
$jaunsTodo->is_done =false;


$jaunsTodo->save();

return redirect('/galvenalappa');

});
//dzesh notus
Route::get('/delete/{id}', function($id){
    $todo = \App\Todo::find($id);

    if ($todo != null){
    $todo->delete();
    }
    return redirect('/galvenalappa');
});

Route::get('/update/{id}', function($id){

    $todo = \App\Todo::find($id);
    if ($todo->is_done==true){
        $todo->is_done=false;

    }else {
        $todo->is_done=true;
    }
    $todo->save();
    return redirect('/galvenalappa');


});
