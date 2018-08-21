<?php
/**
 * Created by PhpStorm.
 * User: 18710
 * Date: 2018/8/15
 * Time: 15:25
 */

namespace App\Http\Controllers;


namespace App\Http\Controllers;
use http\Env\Url;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;


//獲取參數
use App\Http\Requests;
use Request;
class LogController extends Controller {

    public function verify()
    {

        $requestAll=Request::all();
        /* dd($input);*/
        $username= $requestAll['username'];
        $pwd = $requestAll['pwd'];


        if ($pwd == 'admin' && $username == 'admin'){

            //用户储存到session
            session(['username'=> $username]);

            return redirect('/list');
        }else{
            return view('log',[
                'faild'=>"用户名密码错误！",
            ]);
        }

    }


    public function logOut()
    {
        session()->forget('username');
        return view('log',[
            'faild'=>"",
        ]);
    }
}
