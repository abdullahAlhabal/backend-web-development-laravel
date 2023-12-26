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

 @section('title' , 'List Of Department')

@section('content')

    <nav class="mb-4">
        <a href="{{ route('department.create') }}"
            class="link">
            Add new Department
        </a>
    </nav>

    @forelse ($departments as $department)
        <div>
            <a href="{{ route('department.show' , ['department' => $department]) }}"
                @class(['font-bold'])>
                {{ $department->name }}
            </a>
        </div>
    @empty
    <p> there are no departments</p>
    @endforelse

    @if ($departments->count())
        <nav class="mt-4">
            {{ $departments->links() }}
        </nav>
    @endif

@endsection
