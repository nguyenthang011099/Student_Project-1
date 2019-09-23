<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
        public function list(){
        //$students=Student::all();
        $students =DB::table('students');

        return view('list',['students'=>$students]);
    }
}
