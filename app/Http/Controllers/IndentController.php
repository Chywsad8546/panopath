<?php
/**
 * Created by PhpStorm.
 * User: 18710
 * Date: 2018/8/15
 * Time: 15:33
 */

namespace App\Http\Controllers;
use App\Http\Requests;
use Request;
use Illuminate\Support\Facades\DB;
class IndentController extends Controller {

    public function detail()
    {
        if (session()->has('username')) {
            return view('detail',[

            ]);
        }else{
            return view('log',[
                'faild'=>"请登录！",
            ]);
        }
    }


    public function list()
    {
        //$input=Request::all();

        $pindex =Request::input('pageIndex',1);
        $star = 8*($pindex-1);
        $qrcode = DB::select("select * from qrcodes limit $star ,8");

        if (session()->has('username')) {
            return view('listPage',[
                'qrcode'=>$qrcode,
            ]);
        }else{
            return view('log',[
                'faild'=>"请登录！",
            ]);
        }

    }
}