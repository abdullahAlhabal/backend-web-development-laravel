<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use App\Http\Resources\EmployeeResource;
use App\Http\Resources\EmployeeCollection;
use App\Http\Resources\DepartmentCollection;
use App\Models\Department;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $name = $request->input('name');
        // dd($name);

        $employees = new DepartmentCollection(Employee::when($name , fn($query , $name ) =>
            $query->name($name)
        )->paginate());

        return view('employees.index' , compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departments = new DepartmentCollection(Department::all());
        return view('employees.create' , compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmployeeRequest $request)
    {
        $employee = Employee::create($request->validated());
        return redirect()->route('employee.show' , ['employee' => $employee])->with('success' , 'Employee Successfully created ');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        $employee = new EmployeeResource($employee);
        return view('employees.show' , compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        $departments = new DepartmentCollection(Department::all());
        return view('employees.edit' , compact('employee' , 'departments'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
        $employee->update($request->validated());
        // dd("here");
        return redirect()->route('employee.show' , ['employee' => $employee])->with('success' , 'Employee Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect()->route('employee.index')->with('success' , 'Employee Successfully Deleted');
    }
}
