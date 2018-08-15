<?php
/**
 * Created by PhpStorm.
 * User: 18710
 * Date: 2018/8/15
 * Time: 15:25
 */

namespace App\Http\Controllers;


namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

//獲取參數
use App\Http\Requests;
use Request;
class LogController extends Controller {

    public function verify()
    {
        $student = DB::select("select * from user ");
        $input=Request::all();
       /* dd($input);*/
        $username= $input['username'];
        return view('listPage',[
            'username'=>$username,
        ]);
    }
}
