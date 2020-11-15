<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user', function (Request $request) {
    $users = App\Models\User::all();
    return response()->json(['users' =>$users]);
});
Route::get('/user/{user}', function (App\Models\User $user) {
    return response()->json(['user' =>$user]);
});
Route::patch('/user/{user}', function(App\Models\User $user, Request $request){
    $user->update($request->user);
    return response()->json(['user' => $user]);
});
Route::delete('/user/{user}', function(App\Models\User $user){
    $user->delete();
    return response()->json(['message' => 'delete successfully']);
});