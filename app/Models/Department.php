<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class department extends Model
{
    use HasFactory;
    protected $table = 'Departments';

    public function complaint(){

        return $this->hasMany(Complaint::class, 'department_id');
    }
}
