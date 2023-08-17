<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //home page
    public function home() {
        return view('student.create');
    }

    //student create page
    public function create() {
        return view('student.create');
    }

    //student create
    public function studentCreate(Request $request) {
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
    private function getStudentData($request) {
        // dd("this is private function call test");
        $response = [
            'name' => $request->studentName,
            'email' => $request->studentEmail,
            'address' => $request->studentAddress
        ];
        return($response);
    }
}
