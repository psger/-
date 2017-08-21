<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
        //
//dd($request->get('stu_id'));
        //$sure = DB::select('select stu_id from grade where stu_id=?,'[$request->get('stu_id')]);


        $user = DB::table('grade')->where('stu_id',$request->get('stu_id'))->first();
        if($user==null){
            $insert = DB::insert('insert into grade(stu_id,height,weight,gas,fm,jump,sit_flexion,em,sit_ups,bodyup,left_eye,right_eye) values(?,?,?,?,?,?,?,?,?,?,?,?)',
                [$request->get('stu_id'),$request->get('height'),$request->get('weight'),$request->get('gas'),$request->get('50m'),$request->get('jump'),
                    $request->get('sit_flexion'),$request->get('81m'),$request->get('sit_ups'),$request->get('bodyup'),$request->get('left_eye'),$request->get('right_eye')]);
            if($insert){
                return redirect()->back();
            }
        }else{
            $update = DB::update('update grade set height=?,weight=?,gas=?,fm=?,jump=?,sit_flexion=?,em=?,sit_ups=?,bodyup=?,left_eye=?,right_eye=? where stu_id=?',
                [$request->get('height'),$request->get('weight'),$request->get('gas'),$request->get('50m'),$request->get('jump'),
                    $request->get('sit_flexion'),$request->get('81m'),$request->get('sit_ups'),$request->get('bodyup'),$request->get('left_eye'),$request->get('right_eye'),$request->get('stu_id')]);
            if($update){
                return redirect()->back();
            }
        }



//        }else{
//
//        }


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
    public function destroy($id)
    {
        //
        dd('$id');
    }
}
