@extends('student.master')

@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-5">
            <div class="p-3">
                <form action="" method="">
                    @csrf
                    <div class="text-group mb-3">
                        <label for="">Name</label>
                        <input type="text" name="studentName" class="form-control" placeholder="Enter your name...">
                    </div>
                    <div class="text-group mb-3">
                        <label for="">Email</label>
                        <input type="email" name="studentEmail" class="form-control" placeholder="Enter your email...">
                    </div>
                    <div class="text-group mb-3">
                        <label for="">Address</label>
                        <input type="text" name="studentAddress" class="form-control" placeholder="Enter your address...">
                    </div>
                    <input type="submit" value="Create" class="btn btn-danger">
                </form>
            </div>
        </div>
        <div class="col-7">
            <div class="data-container">
                <div class="post p-3 shadow-sm mb-4">
                    <table border="1">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th></th>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td>Email</td>
                            <td>Address</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td>Email</td>
                            <td>Address</td>
                            <td></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
