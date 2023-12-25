<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ensure there are departments available before seeding employees
        if( Department::count() === 0){
            $this->call(DepartmentSeeder::class); // If no departments, run DepartmentSeeder first
        }

        Employee::factory()->count(10)->create();

    }
}
