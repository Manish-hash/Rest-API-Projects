<?php

namespace App\Http\Controllers;
use App\Models\student;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    function add(Request $req){
        $student=new student;
        $student->name= $req->name;
        $student->email=$req->email;
        $result= $student->save();

        if($result){
            return ["Result"=> "Data saved successfully"];
        }
        else{
            return["Result"=> "Operation failed"];
        }

    }

    function update(Request $request){
        $student= student:: find($request->id);
        $student->name = $request->name;
        $student->email = $request->email;
        $result= $student->save();
        if($result){
            return ["result"=> "Data updated successfully"];
        }
        else{
            return ["data isn't found!!"];
        }


    }

    function search($name){
        return student::where("name", $name)->get();
    }

    function destroy($id){
        $student=student::find($id);
        $result=$student->delete();
        if($result){
            return ["Result"=> "The id $id is deleted"];
        }
        else{
            return ["not deleted"];
        }
        
    }
}
