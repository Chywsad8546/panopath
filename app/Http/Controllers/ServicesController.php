<?php


namespace App\Http\Controllers;
use App\Http\Requests;
use Request;
use Illuminate\Support\Facades\DB;
use App\Service;
class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (session()->has('username')) {
            $typeList = DB::select("select * from services");
            return view('services.index',[
                'typeList'=>$typeList,
            ]);
        }else{
            return view('log',[
                'faild'=>"请登录！",
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $typeList = DB::select("select * from type_of_service");
     /*   $bool=DB::insert("insert into services(id,name,bonus_rate,money)
			values(?,?,?,?)",[8,'小明',0,0]);*/

        return redirect('/services');
        // if (session()->has('username')) {
        //     $typeList = DB::select("select * from services");
        //     return view('services.index',[
        //         'typeList'=>$typeList,
        //     ]);
        // }else{
        //     return view('log',[
        //         'faild'=>"请登录！",
        //     ]);
        // }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $service = Service::findOrFail($id);
        return view('services.edit', compact('service'));
        // if (session()->has('username')) {
        //     $typeList = DB::select("select * from services");
        //     return view('services.index',[
        //         'typeList'=>$typeList,
        //     ]);
        // }else{
        //     return view('log',[
        //         'faild'=>"请登录！",
        //     ]);
        // }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return "It is working";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::find($id);
        $service->delete();
        return redirect('/services');
        // DB::delete('delete from type_of_service where id = ?', [$id]);
    }
}
