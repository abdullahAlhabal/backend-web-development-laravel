@extends('layouts.app')

{{--
    email
    name
    age
    address
    phone
    salary
    department_id
 --}}

@section('content')
    <div class="container">
        <h1> Employees Index page </h1>
        @foreach ($employees as $employee)
            <h1>{{ $employee->name }}</h1>
            <h1>{{ $employee->email }}</h1>
            <h1>{{ $employee->address }}</h1>
            <h1>{{ $employee->phone }}</h1>
            <h1>{{ $employee->salary }}</h1>
            <h1>{{ $employee->department->name }}</h1>
            <br>
        @endforeach
    </div>
@endsection
