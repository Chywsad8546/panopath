<?php
/**
 * Created by PhpStorm.
 * User: 18710
 * Date: 2018/8/16
 * Time: 17:16
 */

namespace App\Http\Controllers;
use App\Http\Requests;
use Request;
use Illuminate\Support\Facades\DB;

class TypeOfServiceController extends Controller
{
    public function list()
    {
        if (session()->has('username')) {

            $typeList = DB::select("select * from type_of_service");
            return view('serviceOflLstPage',[
                'typeList'=>$typeList,
            ]);
        }else{
            return view('log',[
                'faild'=>"请登录！",
            ]);
        }
    }

}