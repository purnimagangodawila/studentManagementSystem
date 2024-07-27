<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class payment extends Model
{
    use HasFactory;
    protected $fillable = [

        'payment_date',
        'subject_id',
        'student_id',
        'payment',
    ];
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
    public function studentreg()
    {
        return $this->belongsTo(studentreg::class);
    }
}
