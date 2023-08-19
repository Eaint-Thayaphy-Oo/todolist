@extends('student.master')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-5">
                <div class="p-3">
                    <form action="{{ route('student#create') }}" method="post">
                        @csrf
                        <div class="text-group mb-3">
                            <label for="">Name</label>
                            <input type="text" name="studentName" class="form-control" placeholder="Enter your name...">
                        </div>
                        <div class="text-group mb-3">
                            <label for="">Email</label>
                            <input type="email" name="studentEmail" class="form-control"
                                placeholder="Enter your email...">
                        </div>
                        <div class="text-group mb-3">
                            <label for="">Address</label>
                            <input type="text" name="studentAddress" class="form-control"
                                placeholder="Enter your address...">
                        </div>
                        <input type="submit" value="Create" class="btn btn-danger">
                    </form>
                </div>
            </div>
            <div class="col-7">
                <div class="data-container">
                    @foreach ($students as $student)
                        <div class="post p-3 shadow-sm mb-4">
                            <h5>{{ $student['name'] }}</h5>
                            <h5>{{ $student['email'] }}</h5>
                            <h5>{{ $student['address'] }}</h5>
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
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
