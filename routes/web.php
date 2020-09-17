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
// LP獲得用
Route::get('job', function () {
    return view('gdn.check'); //提出用
    // return redirect('https://fam-ad.com/ad/p/r?_site=64801&_article=16355'); //獲得用(1)_直LP遷移
});

// LP確認用
Route::get('cccheck', function () {
    return redirect('https://fam-ad.com/ad/p/r?_site=64801&_article=16355'); //獲得用(1)_直LP遷移
});