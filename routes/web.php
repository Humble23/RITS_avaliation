<?php


use App\Mail\AlertOfNewsCandidates;
use Illuminate\Support\Facades\Mail;
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
    return redirect("admin");
});


Route::get('/send-mail', function () {

    Mail::to('newuser@example.com')->send(new AlertOfNewsCandidates()); 

    return 'A message has been sent to Mailtrap!';

});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
