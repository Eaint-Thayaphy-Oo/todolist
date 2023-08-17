@extends('employee.master')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-5">
                <div class="p-3">
                    <form action="{{ route('employee#create') }}" method="post">
                        @csrf
                        <div class="text-group mb-3">
                            <label for="">Employee Name</label>
                            <input type="text" name="employeeName" class="form-control"
                                placeholder="Enter Employee Name..." required>
                        </div>
                        <div class="text-group mb-3">
                            <label for="">Employee Email</label>
                            <input type="text" name="employeeEmail" class="form-control"
                                placeholder="Enter Employee Email..." required>
                        </div>
                        <div class="text-group mb-3">
                            <label for="">Employee Phone</label>
                            <input type="number" name="employeePhone" class="form-control"
                                placeholder="Enter Employee Phone Number..." required>
                        </div>
                        <div class="text-group mb-3">
                            <label for="">Employee Address</label>
                            <input type="text" name="employeeAddress" class="form-control"
                                placeholder="Enter Employee Address..." required>
                        </div>
                        <div class="text-group mb-3">
                            <label for="">Employee Description</label>
                            <textarea name="employeeDescription" cols="54" rows="10" placeholder="Enter Employee Description..." required></textarea>
                        </div>
                        <input type="submit" value="Create" class="btn btn-danger">
                    </form>
                </div>
            </div>
            <div class="col-7">
                <div class="data-container">
                    <div class="post p-3 shadow-sm mb-4">
                        <h5>Name</h5>
                        <h5>Email</h5>
                        <h5>Phone</h5>
                        <h5>Address</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore repellendus officiis nisi
                            doloribus ut quisquam minima cum laboriosam obcaecati inventore corrupti tempora, eveniet
                            mollitia recusandae? Ea dolores veritatis qui nesciunt.</p>
                        <div class="text-end">
                            <a href="">
                                <button class="btn btn-sm btn-danger"><i class="fa-solid fa-trash">ဖျက်ရန်</i></button>
                            </a>
                            <a href="">
                                <button class="btn btn-sm btn-primary"><i
                                        class="fa-solid fa-file-lines">အပြည့်အစုံဖတ်ရန်</i></button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
