<?php

namespace App\Http\Controllers;
use App\Models\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    function getdata($id=null){
       return $id ? student::find($id):student::all();
    }
}
