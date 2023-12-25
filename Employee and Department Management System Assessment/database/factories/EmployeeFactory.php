<?php

namespace Database\Factories;

use \App\Models\Department;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $departmentIds = Department::pluck('id')->toArray();

        return [
            'department_id' => $this->faker->randomElement($departmentIds),
            'name'=> $this->faker->name,
            'email'=> $this->faker->unique()->safeEmail,
            'age' => $this->faker->numberBetween(18,64),
            'address' => $this->faker->address,
            'phone' => $this->faker->phoneNumber ,
            'salary' => $this->faker->numberBetween(0,10000) ,
        ];
    }
}
