<?php
/**
 * Created by PhpStorm.
 * User: 18710
 * Date: 2018/8/15
 * Time: 15:33
 */

namespace App\Http\Controllers;


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

        if (session()->has('username')) {
            return view('listPage',[

            ]);
        }else{
            return view('log',[
                'faild'=>"请登录！",
            ]);
        }
            //


    }
}