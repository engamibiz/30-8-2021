<?php

use Illuminate\Support\Facades\Route;
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
  //  echo 'welcome from routes';
    return view('welcome');
});
Route::get('ahmed',function (){
   // echo  'welcome from ahmed route';
    $name='Mohamed';
    return view('ahmedview',['name'=>$name]);
});
// Route::get('test/{name}',[\App\Http\Controllers\testController::class,'index']);
Route::get('test/create',[\App\Http\Controllers\testController::class,'create'])->name('test.create');
Route::post("test",[\App\Http\Controllers\testController::class,'store'])->name('test.store');
Route::get("test",[\App\Http\Controllers\testController::class,'index'])->name('test.index');

Route::get("test/{id}/edit",[\App\Http\Controllers\testController::class,'edit'])->name('test.edit');
Route::DELETE("test/{id}",[\App\Http\Controllers\testController::class,'delete'])->name('test.delete');
Route::get("test/{id}",[\App\Http\Controllers\testController::class,'view'])->name('test.view');


// index -      view   - create -    insert -           edit -         update - delete
// test(get) - test/id - test/create - test(Post) - test/id/edit  - test/id(put) - test/id(delete)
