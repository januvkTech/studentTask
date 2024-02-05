<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class ShowStudentController extends Controller
{
    public function showStudent(){
        $data=Student::all();
        return view('home',compact('data'));
    }
    //
}
