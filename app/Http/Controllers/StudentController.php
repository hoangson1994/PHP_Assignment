<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Validation\Rules\In;
use Request;
use Illuminate\Support\Facades\Input;
use View;

class StudentController extends Controller
{
    public function viewAdd(){
        return View::make('students.form-add-new');
    }
    public function listStudent(){
        $students = Student::all();

        return View::make('students.form-students')->with('list_students',$students);
    }

    public function saveStudent(){
        $student = new Student();
        $student->name = Input::get('full_name');
        $student->rollNumber = Input::get('roll_number');
        $student->phone = Input::get('phone');
        $student->email = Input::get('email');
//        $student->address = Input::get('address');
        $student->save();

        return View::make('students.form-add-new')->with('success', 'Add New Success');
//        return 'success';
    }

    public function updateStudent($id){
        $student = Student::find($id);
        if($student == null){
            return 'student not found';
        }
        $student->name = Input::get('full_name');
        $student->rollNumber = Input::get("roll_number");
        $student->phone = Input::get("phone");
        $student->email = Input::get("email");
        $student->address = Input::get("address");
        $student->save();
        return 'Success';
    }

    public function deleteStudent($id){
        $student = Student::find($id);
        if($student == null){
            return 'student not found';
        }
        $student->delete();
        return 'success';
    }
}
