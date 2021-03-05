<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdController extends Controller
{
    //
    public function adult(Request $request) {
        $user_agent =  $request->header('User-Agent');
        if ((strpos($user_agent, 'iPhone') !== false)) {
            return redirect('https://preaf.jp/pa.do?s=v04380&o=45765&guid=ON'); //トークウィズ - Preaf
        }
        // return redirect('https://fam-ad.com/ad/p/r?_site=64801&_article=16216'); //トリトモ - fam
        return redirect('https://a-trade.jp/redirect/connect?media=G16531'); //CONNECT - Aトレード
    }
    
    public function papa(Request $request) {
        $user_agent =  $request->header('User-Agent');
        if ((strpos($user_agent, 'iPhone') !== false)) {
            return redirect('https://fam-ad.com/ad/p/r?_site=64802&_article=16786'); //ワクワク - fam
        }
        return redirect('https://fam-ad.com/ad/p/r?_site=64802&_article=16345'); //ワクワクweb - fam
    }
    
    public function info(Request $request) {
        $user_agent =  $request->header('User-Agent');
        if ((strpos($user_agent, 'iPhone') !== false)) {
            // return redirect('https://a-trade.jp/redirect/giftchat?media=G16531'); //ギフトチャット - Aトレード
            return redirect('https://a-trade.jp/redirect/popo?media=G16531'); //PoPo - Aトレード
        }
        // return redirect('https://a-trade.jp/redirect/giftchat?media=G16531'); //ギフトチャット - Aトレード
        return redirect('https://trading-ad.net/lp/livede55/lady01/?pf=atrade&b=G16531'); //ライブでゴーゴー - Aトレード
    }
}
