<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //student create page
    public function create()
    {
        $students = Student::orderBy('created_at','desc')->get()->toArray();
        // $students = Student::all()->toArray();
        // dd($students[0]['name']);
        return view('student.create', compact('students'));
    }

    //student create
    public function studentCreate(Request $request)
    {
        // dd($request->all());
        // $data = [
        //     'name' => $request->studentName,
        //     'email' => $request->studentEmail,
        //     'address' => $request->studentAddress
        // ];
        // dd($data);
        $data = $this->getStudentData($request);
        Student::create($data);
        return redirect()->route('student#createPage');
    }

    //get student data
    private function getStudentData($request)
    {
        // dd("this is private function call test");
        $response = [
            'name' => $request->studentName,
            'email' => $request->studentEmail,
            'address' => $request->studentAddress
        ];
        return ($response);
    }
}
