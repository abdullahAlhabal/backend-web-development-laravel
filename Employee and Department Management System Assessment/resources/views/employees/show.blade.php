@extends('layouts.app')

@section('title' , $employee->name ?? "Employee")

@section('content')

    <div class="mb-4">
        <a href="{{ route('employee.index') }}"
            class="link">
            Go Back to Employees List !
        </a>
    </div>

    <div class="look_card p-4">
        <p class="info_value">{{ $employee->name }}</p>
        <p class="info_label"> From :</p>
        <p class="info_value">{{ $employee->department->name }}</p>
        <p class="info_label"> email :</p>
        <p class="info_value">{{ $employee->email }}</p>
        <p class="info_label"> age :</p>
        <p class="info_value">{{ $employee->age }}</p>
        <p class="info_label"> address :</p>
        <p class="info_value">{{ $employee->address }}</p>
        <p class="info_label"> phone :</p>
        <p class="info_value">{{ $employee->phone }}</p>
        <p class="info_label"> salary :</p>
        <p class="info_value">{{ $employee->salary }}</p>
    </div>

    <div class="flex gap-2">

        <a href="{{ route('employee.edit' , ['employee' => $employee ]) }}" class="btn">Edit</a>

        <form action="{{ route('employee.destroy' , ['employee' => $employee]) }}" method="POST">
            @csrf
            @method('DELETE')
                <button type="submit" class="btn">Delete</button>
        </form>

    </div>

@endsection
