<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Editclass;
class AcademyController extends Controller
{
    /**
     * display the class of each academy.
     *
     * @return Response
     */
    public function index($id){
//        $class = DB::select('select class_name，class_id from academy where academy_id= ?',[$id]);
//        //dd($class);
//        return view('/newclass')->with(compact('class'));
        return view('/newclass')->with(App\EditClass::where('academy_id', $id)->get());
    }

    public function show($id){
        return view('/newclass')->withClass(App\Editclass::where('academy_id', $id)->get());
    }
    public function changeClass(){

    }

}
