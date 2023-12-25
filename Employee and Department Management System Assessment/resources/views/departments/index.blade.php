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
        <h1> Departments Index page </h1>
        @foreach ($departments as $department)
            <h1>{{ $department->name }}</h1>
            <h1>{{ $department->description }}</h1>
            <h1>Employees</h1>
            @foreach ($department->employees as $employee)
                <h2>{{ $employee->name }}</h2>
            @endforeach
            <br>
        @endforeach
    </div>
@endsection
