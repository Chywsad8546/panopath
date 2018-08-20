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


        $sql = "select * from qrcodes LEFT JOIN sales_amount ON qrcodes.id = sales_amount.qrCodeId WHERE 1=1";
        $requestAll=Request::all();

        $pindex =Request::input('pageIndex',1);
        $star = 8*($pindex-1);

        $username =Request::input('userName',null);
        if ($username!=null){
            $sql=$sql." and username like '%$username%'";
        }

        $serviceType =Request::input('service_type',"0");
        if ($serviceType=="1"){
            $sql=$sql." and type_id != 4 ";
        }else if ($serviceType=="2"){
            $sql=$sql." and type_id = 4 ";
        }else if ($serviceType=="3"){
            $sql=$sql." and type_id is null ";
        }

        $countsql = str_replace("*","count(*) as cou",$sql);
        $count = DB::select($countsql)[0]->cou;
        $pageend =$count%8==0?$count/8:$count/8+1;

        $sql=$sql." limit  $star ,8";

        $qrcode = DB::select($sql);

        if (session()->has('username')) {
            return view('listPage',[
                'qrcode'=>$qrcode,
                'requestAll'=>$requestAll,
                'pageend'=>floor($pageend),
                'pageindex'=>$pindex,
            ]);
        }else{
            return view('log',[
                'faild'=>"请登录！",
            ]);
        }
            //


    }
}