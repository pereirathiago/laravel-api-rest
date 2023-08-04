<?php

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('test', function(Request $request) {

    // dd($request->headers->get('Authorization'));
    // dd($request->headers->all());

    $response = new Response(['msg' => 'Minha primeira resposta de APi']);
    $response->header('Content-Type', 'application/json');
    return $response;
});

// Products route
Route::get('/products', function() {
    return Product::all();
});
