@extends('layouts.app')

{{--
    name
    description
 --}}

 @section('title' , 'List Of Department')

@section('content')

    <nav class="mb-4 flex gap-9">
        <a href="{{ route('department.create') }}"
            class="link">
            Add new Department
        </a>

        <a href="{{ route('employee.index') }}"
            class="link">
            Show Employees
        </a>
    </nav>

    <div class="w-full">
        @forelse ($departments as $department)
            <div class="look_card">
                <a href="{{ route('department.show' , ['department' => $department]) }}"
                    class="a_link">
                    <p class="info_value">{{ $department->name }}</p>
                    <p class="info_label">description : </p>
                    <p class="info_value">{{ $department->description }}</p>
                    <p class="flex gap-4 mt-5">
                        <small class="info_value">num of employees : </small>
                        <small class="info_value">{{ $department->employees()->count() }}</small>
                    </p>
                </a>
            </div>
        @empty
        <p> there are no departments</p>
        @endforelse
    </div>

    @if ($departments->count())
        <nav class="mt-4">
            {{ $departments->links() }}
        </nav>
    @endif

@endsection
