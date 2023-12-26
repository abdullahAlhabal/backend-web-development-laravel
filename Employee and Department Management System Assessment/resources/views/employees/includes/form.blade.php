@extends('layouts.app')

@section('content')

    <form method="POST"
        action="{{ isset($employee) ? route('employee.update' , ['employee' => $employee]) : route('employee.store') }}">

        @csrf

        @isset($employee)
            @method("PUT")
        @endisset

    {{--
        name
        email
        age
        address
        phone
        salary
        department_id
    --}}

    <div>
        <label for="name"> Name : </label>
        <input type="text" name="name" id="name"
        @class(['font-bold' => $errors->has('name') ] ) {{-- class = "@error('name') font-bold @enderror " --}}
        value="{{ $employee->name ?? old('name') }}"
        >
        @error('name')
            <p class="error"> {{ $message }} </p>
        @enderror
    </div>

    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email"
        @class(['border-red-500' => $errors->has('email')])
        value="{{ $employee->email ?? old('email') }}"
        >
        @error('email')
            <p class="error">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="age">Age</label>
        <input type="number" name="age" id="age"
        @class(['border-red-500' => $errors->has('age')])
        value="{{ $employee->age ?? old('age') }}"
        >
        @error('age')
            <p class="error">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="address">address</label>
        <input type="text" name="address" id="address"
        @class(['border-red-500' => $errors->has('address')])
        >
        @error('address')
            <p class="error">{{ $message }}</p>
        @enderror
    </div>

    <div class="relative">

        <span class="absolute start-0 bottom-3 text-gray-500 dark:text-gray-400">
            <svg class="w-4 h-4 rtl:rotate-[270deg]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 19 18">
                <path d="M18 13.446a3.02 3.02 0 0 0-.946-1.985l-1.4-1.4a3.054 3.054 0 0 0-4.218 0l-.7.7a.983.983 0 0 1-1.39 0l-2.1-2.1a.983.983 0 0 1 0-1.389l.7-.7a2.98 2.98 0 0 0 0-4.217l-1.4-1.4a2.824 2.824 0 0 0-4.218 0c-3.619 3.619-3 8.229 1.752 12.979C6.785 16.639 9.45 18 11.912 18a7.175 7.175 0 0 0 5.139-2.325A2.9 2.9 0 0 0 18 13.446Z"/>
            </svg>
        </span>

        <input type="text" name="phone" id="phone"
        @class(['block', 'py-2.5', 'ps-6', 'pe-0', 'w-full', 'text-sm', 'text-gray-900', 'bg-transparent', 'border-0', 'border-b-2' , 'border-gray-300' , 'appearance-none' , 'dark:text-white' , 'dark:border-gray-600' , 'dark:focus:border-blue-500' , 'focus:outline-none', 'focus:ring-0', 'focus:border-blue-600', 'peer','border-red-500' => $errors->has('phone')])
        value="{{ $employee->phone ?? old('phone') }}"
        >

        <label for="phone"
            @class(['absolute', 'text-sm', 'text-gray-500', 'dark:text-gray-400', 'duration-300', 'transform', '-translate-y-6', 'scale-75', 'top-3', '-z-10', 'origin-[0]', 'peer-placeholder-shown:start-6', 'peer-focus:start-0', 'peer-focus:text-blue-600', 'peer-focus:dark:text-blue-500', 'peer-placeholder-shown:scale-100', 'peer-placeholder-shown:translate-y-0', 'peer-focus:scale-75', 'peer-focus:-translate-y-6' ,'rtl:peer-focus:translate-x-1/4' ,'rtl:peer-focus:left-auto'])
        >phone</label>

        @error('phone')
            <p class="error">{{ $message }}</p>
        @enderror
    </div>

    <div>

    </div>

    </form>


@endsection
