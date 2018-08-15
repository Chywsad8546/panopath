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
class LogController extends Controller {

    public function verify()
    {
        $student = DB::select("select * from user ");

        return view('listPage',[
            'item'=>$student,
        ]);
    }
}
