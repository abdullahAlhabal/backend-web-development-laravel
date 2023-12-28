@extends('layouts.app')

@section('title' , 'Edit '.$employee->name.' Employee' ?? "Edit")

@section('content')
    @include('employees.includes.form' , ['employee' => $employee , 'departments' => $departments  ])
@endsection
