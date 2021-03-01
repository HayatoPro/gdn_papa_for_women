<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdController extends Controller
{
    //
    public function info(Request $request) {
        $user_agent =  $request->header('User-Agent');
        if ((strpos($user_agent, 'iPhone') !== false)) {
            // return redirect('https://a-trade.jp/redirect/giftchat?media=G16531'); //ギフトチャット - Aトレード
            return redirect('https://a-trade.jp/redirect/popo?media=G16531'); //PoPo - Aトレード
        }
        // return redirect('https://a-trade.jp/redirect/giftchat?media=G16531'); //ギフトチャット - Aトレード
        return redirect('https://trading-ad.net/lp/livede55/lady01/?pf=atrade&b=G16531'); //ライブでゴーゴー - Aトレード
    }
    
    public function os(Request $request) {
        $user_agent =  $request->header('User-Agent');
        if ((strpos($user_agent, 'iPhone') !== false)) {
            return redirect('https://fam-ad.com/ad/p/r?_site=64802&_article=16786'); //ワクワク - fam
            // return redirect('https://a-trade.jp/redirect/oasis-ios?media=G16531	'); //OASIS - Aトレード
        }
        return redirect('https://fam-ad.com/ad/p/r?_site=64802&_article=16345'); //ワクワクweb - fam
        // return redirect('https://a-trade.jp/redirect/oasis-ios?media=G16531	'); //OASIS - Aトレード
    }
}
