<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Editacademy;

class AcademychangeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

                $this->validate($request, [
                    'class_id' => 'required', // 必填
                    'class_name' => 'required',
                    'academy_name' =>'required'// 必填
                ]);

        switch($request->get('academy_name')){
            case '信息工程学院':$academy_id=7;break;
            case '商学院':$academy_id=2;break;
            case '文法与外语学院':$academy_id=3;break;
            case '艺术设计学院':$academy_id=4;break;
            case '城建学院':$academy_id=5;break;
            case '护理学院':$academy_id=6;break;
        }

        //dd($request->get('class_id'));
         $insert = DB::insert('insert into academy(academy_id,academy_name,class_id,class_name) values(?,?,?,?)',[$academy_id,$request->get('academy_name'),$request->get('class_id'),$request->get('class_name')]);
         if($insert){
             return redirect()->back();
         }
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
        $Class = DB::select('select * from academy where academy_id= ?',[$id]);

        //$Class = App\Editacademy::where('academy_id', $id)->get();
        //dd($Class);
        return view('/newclass')->with(compact('Class'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($name)
    {
        //
        $delete = DB::delete('delete from academy where class_name = ?',[$name]);
        if($delete){
            return redirect()->back()->withErrors('删除成功！');
        }
    }
}
