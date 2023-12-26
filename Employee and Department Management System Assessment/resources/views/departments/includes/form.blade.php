@extends('layouts.app')

@section('title' , @isset($record) ? "Edit Department" : "Create Department")

@section('content')

    <form method="POST"
        action="{{ isset($department) ? route('department.update' , ['department' => $department]) : route('department.store') }}">

        @csrf   {{-- don't forget it . --}}

        @isset($department)
            @method("PUT")
        @endisset

    {{--
        name
        description
    --}}

        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name"
                @class(['border-red-500' => $errors->has('name') ] ) {{-- class = "@error('name') font-bold @enderror " --}}
                value="{{ $department->name  ?? old('name')}}"
            >
            @error('name')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="30" rows="10"
                @class(['border-red-500' => $errors->has('description')])
            >
                {{ $department->description ?? old('description') }}
            </textarea>
            @error('description')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex items-center gap-2">

            <button type="submit" class="btn">
                @isset($department)
                    update Department
                @else
                    Add Department
                @endisset
            </button>

            <a href="{{ route('department.index') }}" class="btn"> Cancel</a>

        </div>

    </form>


@endsection
