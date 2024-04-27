<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    // 4. getSesアクションが起動
    public function getSes(Request $request)
    {
        // 5. session()->get()で値を取得
        $data = $request->session()->get('txt');
        return view('/session', ['data' => $data]);
    }
    // 1. viewで入力された値が送信されるとpostSesアクションが起動
    public function postSes(Request $request)
    {
        $txt = $request->input;
        // 2. session()->put()で入力された値を保存
        $request->session()->put('txt', $txt);
        // 3. /session にリダイレクト
        return redirect('/session');
    }
}