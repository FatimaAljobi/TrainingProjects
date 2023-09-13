<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    use HasFactory;
    protected $table = 'Complaints';
    protected $fillable = [
        'title',
        'empname',
        'compname',
        'comp_text',
        // 'departmnt_id',
    ];
    public function department(){

        return $this->belongsTo(Department::class);

    }
}
