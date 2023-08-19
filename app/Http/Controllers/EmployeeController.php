<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //employee create page
    public function create()
    {
        $employees = Employee::orderBy('created_at', 'desc')->get()->toArray();
        // dd($employees);
        return view('employee.create', compact('employees'));
    }

    //employee create
    public function employeeCreate(Request $request)
    {
        $data = $this->getEmployeeData($request);
        Employee::create($data);
        return redirect()->route('employee#createPage');
    }

    //employee delete page
    public function employeeDelete($id) {
        //dd($id);
        Employee::where('id',$id)->delete();
        return redirect()->route('employee#createPage');
    }

    //get employee data
    private function getEmployeeData($request)
    {
        $response = [
            'employee_name' => $request->employeeName,
            'employee_email' => $request->employeeEmail,
            'employee_phone' => $request->employeePhone,
            'employee_address' => $request->employeeAddress,
            'employee_description' => $request->employeeDescription
        ];
        return ($response);
    }
}
