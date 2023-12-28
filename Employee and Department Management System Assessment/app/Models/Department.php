<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Department extends Model
{
    use HasFactory;

    protected $fillable = [
        'name' , 'description'
    ];

    protected $hidden = [
        'created_at' , 'updated_at'
    ];

    protected $casts = [];

    protected $guarded = [];

    public function employees(){
        return $this->hasMany(Employee::class);
    }
    // when using Laravel's 'hasMany' relationship , there's no need to explicitly define the 'foreign key' and 'owner key'

    public function scopeName( Builder $query , string $name) :Builder {
        return $query->where('name' , 'LIKE' , '%' . $name . '%');
    }
}
