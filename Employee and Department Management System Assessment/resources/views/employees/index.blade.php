@extends('layouts.app')

@section("title" , "List Of Employees")
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

    <nav class="mb-4 flex gap-9">

        <a href="{{ route('employee.create') }}"
            class="link">
            Add new Employee
        </a>

        <a href="{{ route('department.index') }}"
            class="link">
            Show Departments
        </a>


        <form action="{{ route('employee.index') }}"
            method="GET"
        >
        @csrf
            <input type="text" placeholder="Search Employee by names" name="name"
                value="{{ request('name') }}" class="mb-4">
            <button type="submit" class="btn">Search</button>
            <a href="{{ route('employee.index') }}" class="btn">Clear</a>
        </form>

    </nav>

    <div class="w-full">
        @forelse ($employees as $employee)
            <div class="look_card">
                <a href="{{ route('employee.show' , ['employee' => $employee]) }}"
                   class="a_link">
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
                </a>
            </div>
        @empty
            <p class="w-full text-center">There are no employees.</p>
        @endforelse
    </div>

    @if ($employees->count())
        <nav class="mt-4">
            {{ $employees->links() }}
        </nav>
    @endif


@endsection
