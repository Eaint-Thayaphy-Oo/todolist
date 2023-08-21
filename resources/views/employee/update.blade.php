@extends('master')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-6 offset-3">
                <div class="my-3">
                    <a href="{{ route('employee#home') }}" class="text-decoration-none text-black"><i
                            class="fa-solid fa-arrow-left"></i>back</a>
                </div>
                {{-- {{ $employee[0]['id'] }} --}}
                <h3>{{ $employee[0]['employee_name'] }}</h3>
                <h3>{{ $employee[0]['employee_email'] }}</h3>
                <h3>{{ $employee[0]['employee_phone'] }}</h3>
                <h3>{{ $employee[0]['employee_address'] }}</h3>
                <h3>{{ $employee[0]['employee_description'] }}</h3>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-3 offset-8">
                <a href="{{ route('employee#editPage', $employee[0]['id']) }}">
                    <button class="btn bg-dark text-white">Edit</button>
                </a>
            </div>
        </div>
    </div>
@endsection
