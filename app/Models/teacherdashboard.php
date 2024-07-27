<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teacherdashboard extends Model
{
    use HasFactory;
    protected $fillable = [

        'student_id',
        'subject_id',
        'grade_id',
        'time',

    ];
    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
    public function studentreg()
    {
        return $this->belongsTo(Studentreg::class);
    }

}
