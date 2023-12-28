<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;
use App\Http\Requests\StoreDepartmentRequest;
use App\Http\Requests\UpdateDepartmentRequest;
use App\Http\Resources\DepartmentResource;
use App\Http\Resources\DepartmentCollection;
use App\Http\Resources\EmployeeCollection;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $name = $request->input('name');

        // $departments = new DepartmentCollection(Department::paginate());

        $departments = new DepartmentCollection(Department::when($name , fn($query , $name ) =>
            $query->name($name)
        )->paginate());

        return view('departments.index', compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('departments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDepartmentRequest $request)
    {
        $department = Department::create($request->validated());
        return redirect()->route('department.show' , ['department' => $department])->with('success', 'Department created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Department $department , Request $request)
    {
        $department =  new DepartmentResource($department);

        $name = $request->input('name');

        $employees = new EmployeeCollection(Employee::when(
            $name ,
            fn($query , $name) => $query->name($name)
        )->where('department_id' , $department->id )->paginate());

        return view('departments.show', compact('department' , 'employees'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Department $department)
    {
        return view('departments.edit' , compact('department'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDepartmentRequest $request, Department $department)
    {
        $department->update($request->validated());
        return redirect()->route('department.show' , ['department' => $department])->with('success' , 'Department Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Department $department)
    {
        $department->delete();
        return redirect()->route('department.index')->with('success' , 'Department Successfully Deleted');
    }
}
