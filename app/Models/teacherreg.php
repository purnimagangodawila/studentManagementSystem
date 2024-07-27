<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teacherreg extends Model
{
    use HasFactory;
    protected $fillable = [

        'teacher_name',
        'address',
        'phone_number',
        'email',
        'subject_id',
        'grade_id',

    ];
    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
