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
// LP獲得用(1)
Route::get('info1', function () {
    // return view('gdn.check'); //提出用
    return view('gdn.job'); //単一案件訴求LP - ギフトチャット
    
    // return redirect('https://a-trade.jp/redirect/nijikano?media=G16531'); //にじげんカノジョ - Aトレード
    // return view('gdn.adult'); //LP獲得用 - 男性向け
    // return view('gdn.jobNew'); //ワクワク - P活LP
    // return view('gdn.job'); //単一案件訴求LP
    // return redirect('https://a-trade.jp/redirect/berry?media=G16531'); //ベリー直LP遷移
    // return view('gdn.clady'); //チャットレディーLP
    // return redirect('https://fam-ad.com/ad/p/r?_site=64801&_article=16355'); //獲得用(1)_直LP遷移
});

// LP確認用
Route::get('cccheck', function () {
    return view('gdn.job'); //単一案件訴求LP - ギフトチャット
    
    // return redirect('https://a-trade.jp/redirect/nijikano?media=G16531'); //にじげんカノジョ - Aトレード
    // return view('gdn.adult'); //LP獲得用 - 男性向け
    // return view('gdn.jobNew'); //ワクワク - P活LP
    // return redirect('https://a-trade.jp/redirect/berry?media=G16531'); //ベリー直LP遷移
    // return view('gdn.clady'); //チャットレディーLP
    // return view('gdn.adult2'); //LP獲得用 - 男性向け
    // return redirect('https://fam-ad.com/ad/p/r?_site=64801&_article=16355'); //獲得用(1)_直LP遷移
});

// LP獲得用(2)
Route::get('app', function () {
    return view('gdn.check2'); //提出用
    // return view('gdn.adult2'); //LP獲得用 - 男性向け
    
    // return view('gdn.adult'); //LP獲得用 - 男性向け
    // return redirect('./os'); //獲得用OS識別
});

// LP確認用2
Route::get('cccheck2', function () {
    return view('gdn.company'); //会社概要
    
    // return redirect('./os'); //獲得用OS識別
});

// 会社概要
Route::get('company', function () {
    return view('gdn.company'); //会社概要
});

//OS識別 - チャットレディー
Route::get('info', 'AdController@info');

//OS識別
Route::get('os', 'AdController@os');