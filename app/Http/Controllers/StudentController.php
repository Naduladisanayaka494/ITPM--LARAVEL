<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Helper;
use App\Models\Student;
use App\Models\Product;
use App\Models\Req;
use Validator;

class StudentController extends Controller
{
    function index(){

       

        $data = ['students'=>Student::all()];
        return view('home.index',$data);
    }
    function save(Request $request){
        /** Validate name field */
        $request->validate([
            'name'=>'required',
        ]);

        $student_name = $request->name;
        $student_id = Helper::IDGenerator(new Student, 'student_id', 2, 'ODR'); /** Generate id */
        $q = new Student;
        $q->student_id = $student_id;
        $q->name = $student_name;
        $save =  $q->save();

        if($save){
            return back()->with('success','new order id generated');
        }else{
            return back()->with('faile','order id not found');
        }


    }
}
