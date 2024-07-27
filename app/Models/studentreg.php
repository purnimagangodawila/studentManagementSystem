<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studentreg extends Model
{
    use HasFactory;
    protected $fillable = [

        'student_name',
        'address',
        'phone_number',
        'register_date',
        'gardian',
        'gardian_phone_number',
        'grade_id',
        'subject_id',
    ];

    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }
    public function teacherdashboard()
    {
        return $this->belongsTo(teacherdashboard::class);
    }
}
