<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name' , 'email' , 'age' , 'address' , 'phone' , 'salary' , 'department_id'
    ];
    protected $hidden = [
        'created_at', 'updated_at'
    ];
    protected $casts = [];
    protected $guarded = [];
    protected $appends = [];

    public function department(){
        return $this->belongsTo(Department::class , 'department_id' , 'id');
    }
}
