<?php
/**
 * Created by PhpStorm.
 * User: 18710
 * Date: 2018/8/15
 * Time: 15:33
 */

namespace App\Http\Controllers;


namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
class IndentController extends Controller {

    public function detail()
    {
        return view('detail',[
        ]);
    }


    public function list()
    {
        return view('listPage',[
        ]);
    }
}