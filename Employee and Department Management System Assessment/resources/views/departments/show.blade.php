@extends('layouts.app')

@section('title' , $department->name ?? "Departments")

@section('content')

    <div class="mb-4">
        <a href="{{ route('department.index') }}"
            class="link">
            Go Back to Department List !
        </a>
    </div>

    <p class="mb-4 text-slate-700">{{ $department->name }}</p>

    @if ($department->description)
        <p class="mb-4 text-slate-700">{{ $department->description }}</p>
    @endif

    <div class="flex gap-2">

        <a class="btn" href="{{ route('department.edit' , [ "department" => $department]) }}" >Edit</a>

        <form action="{{ route('department.destroy' , ['department' => $department] ) }}" method="POST">
            @csrf
            @method('DELETE')
                <button type="submit" class="btn"> Delete </button>
        </form>

    </div>

@endsection
