@extends('layouts.app')

@section('title' , "Edit ".$department->name." Department" ?? "Edit")

@section('content')
    @include('departments.includes.form' , ["department" => $department])
@endsection
