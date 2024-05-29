<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Validator;
class StudentController extends Controller
{
    
    public function create(){
        return view('student-create');
    }

    public function save(Request $req){
        $input = $req->all();
        $rules =['fullname' => 'required', 'rollnumber' => 'required', 'email' => 'required|email', 'class' => 'required', 'department' => 'required', 'dob' => 'required|date', 'gender' => 'required', 'parentname' => 'required', 'parentmobile' => 'required'];
        $validation = Validator::make($input, $rules);
          if($validation->fails()){
            return response()->json(['status' => 'validation', 'msg' => $validation->messages()->first()]);
    }

        $insert = new Student ();
        $insert->fullname = $input['fullname'];
        $insert->rollnumber =$input['rollnumber'];
        $insert->email = $input['email'];
        $insert->class = $input['class'];
        $insert->department = $input['department'];
        $insert->dob = $input['dob'];
        $insert->gender = $input['gender'];
        $insert->address = $input['address'];
        $insert->state = $input['state'];
        $insert->parentname =$input['parentname'];
        $insert->parentmobile = $input['parentmobile'];
        $insert->save();
        return response()->json(['status' => 'success', 'msg' => 'Student details saved successfully']);

    }

    public function view(){
        $records = Student::all();
        return view('student-view', compact('records'));
    }

    public function edit($id){
        $record = Student::find($id);
        return view('edit-student', compact('record'));
    }

    public function update(Request $req){
        $input = $req->all();
        $rules =['fullname' => 'required', 'rollnumber' => 'required', 'email' => 'required|email', 'class' => 'required', 'department' => 'required', 'dob' => 'required|date', 'gender' => 'required', 'parentname' => 'required', 'parentmobile' => 'required'];
        $validation = Validator::make($input, $rules);
          if($validation->fails()){
            return response()->json(['status' => 'validation', 'msg' => $validation->messages()->first()]);
    }
        $update = Student::find($input['editid']);
        $update->fullname = $input['fullname'];
        $update->rollnumber = $input['rollnumber'];
        $update->email = $input['email'];
        $update->class = $input['class'];
        $update->department = $input['department'];
        $update->dob = $input['dob'];
        $update->gender = $input['gender'];
        $update->address = $input['address'];
        $update->state = $input['state'];
        $update->parentname = $input['parentname'];
        $update->parentmobile = $input['parentmobile'];
        $update->save();
        return response()->json(['status' => 'success', 'msg' => 'Student details updated successfully']);

    }

    public function delete($id){
     Student::find($id)->delete();
       return back()->with('success' , 'Student details delete successfully');

    }
}
