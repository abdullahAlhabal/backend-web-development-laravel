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
        value="{{ $employee->address ?? old("address") }}"
        >
        @error('address')
            <p class="error">{{ $message }}</p>
        @enderror
    </div>

    <div class="relative">

        <label for="phone">phone</label>

        <input type="text" name="phone" id="phone"
        @class(['border-red-500' => $errors->has('phone')])
        value="{{ $employee->phone ?? old('phone') }}"
        >

        @error('phone')
            <p class="error">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="salary">salary</label>
        <input type="number" name="salary" id="salary"
        @class(['border-red-500' => $errors->has('salary')])
        value="{{ $employee->salary ?? old('salary') }}"
        >
        @error('salary')
            <p class="error">{{ $message }}</p>
        @enderror
    </div>

    <div class="my-4">
        <label for="department_id">Department</label>
        <select name="department_id" id="department_id"
        @class(['border-red-500' => $errors->has('department_id')])
        >
            <option value=""> Select a department  </option>
            @forelse ($departments as $department)
                <option value="{{ $department->id }}"

                    @isset($employee)
                        @if ( $employee->department && $employee->department->id == $department->id)
                            selected
                        @elseif ( $department->id == old('department_id'))
                            selected
                        @endif
                    @endisset

                    >{{ $department->name }}</option>
            @empty
                <option value="" disabled> there are no departments</option>
            @endforelse
        </select>
    </div>

    <div
    @class(['flex', 'items-center' , 'gap-2' ])>

        <button type="submit" class="btn">
            @isset($employee)
                update Employee
            @else
                Add Employee
            @endisset
        </button>

        <a href="{{ route('employee.index') }}" class="btn">Cancel</a>

    </div>

    </form>


@endsection
