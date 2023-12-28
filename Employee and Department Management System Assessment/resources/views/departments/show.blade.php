@extends('layouts.app')

@section('title' , $department->name ?? "Departments")

@section('content')

    <div class="mb-4">
        <a href="{{ route('department.index') }}"
            class="link">
            Go Back to Department List !
        </a>
    </div>


    <div class="look_card">
        <p class="info_value p-4">{{ $department->name }}</p>

        @if ($department->description)
            <p class="info_label p-4">description : </p>
            <p class="info_value p-4">{{ $department->description }}</p>
        @endif
    </div>

    <p class="info_label p-4">Employees : </p>

    <form action="{{ route('department.show' , ['department'    => $department]) }}" method="GET">
    @csrf

        <input type="text" name="name" placeholder="Search Employee by name"
        value="{{ request('name') }}" class="mb-3">
        <button type="submit" class="btn">Search</button>
        <a href="{{ route('department.show' , ['department'    => $department]) }}" class="btn">Clear</a>
    </form>

    @isset($employees)

        <div class="w-full">
            @forelse ($employees as $employee)
                <div class="look_card">
                    <a href="{{ route('employee.show', ['employee' => $employee]) }}"
                       class="a_link">
                        <p class="info_value">{{ $employee->name }}</p>
                    </a>
                </div>
            @empty
                <p class="w-full text-center">There are no employees.</p>
            @endforelse
        </div>

    @else

        <div class="w-full">
            @forelse ($department->employees as $employee)
                <div class="look_card">
                    <a href="{{ route('employee.show', ['employee' => $employee]) }}"
                       class="a_link">
                        <p class="info_value">{{ $employee->name }}</p>
                    </a>
                </div>
            @empty
                <p class="w-full text-center">There are no employees.</p>
            @endforelse
        </div>

    @endisset



    <div class="flex gap-2">

        <a class="btn" href="{{ route('department.edit' , [ "department" => $department]) }}" >Edit</a>

        <form action="{{ route('department.destroy' , ['department' => $department] ) }}" method="POST">
            @csrf
            @method('DELETE')
                <button type="submit" class="btn"> Delete </button>
        </form>

    </div>

@endsection
