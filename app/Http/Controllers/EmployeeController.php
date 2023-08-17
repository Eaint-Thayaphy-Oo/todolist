<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //employee create page
    public function create()
    {
        return view('employee.create');
    }

    //employee create
    public function employeeCreate(Request $request)
    {
        $data = $this->getEmployeeData($request);
        Employee::create($data);
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
