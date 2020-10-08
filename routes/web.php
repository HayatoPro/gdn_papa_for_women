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
// // LP獲得用(1)
// Route::get('job', function () {
//     return view('gdn.check'); //提出用
//     // return redirect('https://fam-ad.com/ad/p/r?_site=64801&_article=16355'); //獲得用(1)_直LP遷移
// });

// LP獲得用(2)
Route::get('app', function () {
    return view('gdn.check2'); //提出用
    // return view('gdn.adult'); //LP獲得用 - 男性向け
    
    // return redirect('./os'); //獲得用OS識別
});

// LP確認用
Route::get('cccheck', function () {
    return view('gdn.adult'); //LP獲得用 - 男性向け
    // return redirect('https://fam-ad.com/ad/p/r?_site=64801&_article=16355'); //獲得用(1)_直LP遷移
});

// LP確認用2
Route::get('cccheck2', function () {
    return redirect('./os'); //獲得用OS識別
});

//OS識別
Route::get('os', 'AdController@os');