@extends('master')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-6 offset-3">
                <div class="my-3">
                    <a href="" class="text-decoration-none text-black"><i class="fa-solid fa-arrow-left"></i>back</a>
                </div>
                <form action="{{ route('employee#update') }}" method="post">
                    @csrf
                    <label>Employee Name</label>
                    <input type="hidden" name="employeeId" value="{{ $employee['id'] }}">
                    <input type="text" name="employeeName" class="form-control my-3"
                        value="{{ $employee['employee_name'] }}" placeholder="Enter employee name..." required>
                    <label>Employee Email</label>
                    <input type="text" name="employeeEmail" class="form-control my-3"
                        value="{{ $employee['employee_email'] }}" placeholder="Enter employee name..." required>
                    <label>Employee Phone</label>
                    <input type="text" name="employeePhone" class="form-control my-3"
                        value="{{ $employee['employee_phone'] }}" placeholder="Enter employee name..." required>
                    <label>Employee Address</label>
                    <input type="text" name="employeeAddress" class="form-control my-3"
                        value="{{ $employee['employee_address'] }}" placeholder="Enter employee name..." required>
                    <label>Employee Description</label>
                    <input type="text" name="employeeDescription" class="form-control my-3"
                        value="{{ $employee['employee_description'] }}" placeholder="Enter employee name..." required>
                    <input type="submit" value="Update" class="btn bg-dark text-white my-3 float-end">
                </form>
            </div>
        </div>
    </div>
@endsection
