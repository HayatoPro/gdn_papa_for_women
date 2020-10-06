<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdController extends Controller
{
    //
    public function os(Request $request) {
        $user_agent =  $request->header('User-Agent');
        if ((strpos($user_agent, 'iPhone') !== false)) {
            return redirect('https://preaf.jp/pa.do?s=v04031&o=47137&guid=ON'); //モモチャ - Preaf    
        }
        return redirect('https://fam-ad.com/ad/p/r?_site=64801&_article=16216'); //トリトモ - fam
    }
}
