<?php
/**
 * Created by PhpStorm.
 * User: 18710
 * Date: 2018/8/14
 * Time: 10:54
 */

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
class UserController extends Controller {

    public function test1()
    {
        $student = DB::select("select * from user ");
        //返回一个二维数组  $student
        var_dump($student);
        //以节点树的形式输出结果
        dd($student);
 /*       return view('User',[
            'item'=>$student,
        ]);*/
    }
}

