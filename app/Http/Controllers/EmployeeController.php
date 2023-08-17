<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //employee home page
    public function home() {
        return view('employee.create');
    }
}
