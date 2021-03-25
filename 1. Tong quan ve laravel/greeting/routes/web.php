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
    return view('welcome');
});

Route::get('/greeting/{name?}', function ($name = null) {

    if ($name) {

        echo 'Hello ' . $name . '!';
    } else {

        echo 'Hello World!';
    }
});

Route::get('/discount', function () {
    return view('discount-calculator');
});

Route::post('/discount', function (Illuminate\Http\Request $request) {
    $productDescription = $request->productDescription;
    $price              = $request->price;
    $discountPercent    = $request->discountPercent;
    $discountAmount     = ($price * $discountPercent * 0.1);
    $discountPrice      = $price - $discountAmount;
    return view('show_discount_amount', compact(['discountPrice', 'discountAmount', 'productDescription', 'price', 'discountPercent']));
});

Route::get('dictionary', function () {
    return view('dictionary');
});

Route::post('/dictionary', function (\Illuminate\Http\Request $request) {
    $arr['hello'] = 'Xin chào';
    $arr['bye']   = 'Tạm biệt';
    $keyword            = $request->keyword;
    foreach ($arr as $key => $value) {
        if ($keyword == $key) {
            $result = $value;
            return view('resultdictionary', compact(['result']));
        } else {
            $result = 'Từ điển không có từ này';
            return view('resultdictionary', compact(['result']));
        }
    }
});
