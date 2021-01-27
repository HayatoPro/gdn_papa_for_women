<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdController extends Controller
{
    //
    public function os(Request $request) {
        $user_agent =  $request->header('User-Agent');
        if ((strpos($user_agent, 'iPhone') !== false)) {
            return redirect('https://a-trade.jp/redirect/oasis-ios?media=G16531	'); //OASIS - Aトレード
        }
        return redirect('https://a-trade.jp/redirect/oasis-ios?media=G16531	'); //OASIS - Aトレード
    }
}
