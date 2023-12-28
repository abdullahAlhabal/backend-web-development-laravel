@extends('layouts.app')

@section('title' , 'Add new Employee')

@section('content')
    @include('employees.includes.form' , ["departments" => $departments])
@endsection
