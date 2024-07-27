<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    protected $fillable = [
            'grade'

    ];
    public function studentreg()
    {
        return $this->hasMany(Studentreg::class);
    }
    public function schedule()
    {
        return $this->hasMany(Schedule::class);
    }
    public function teacherdashboard()
    {
        return $this->hasMany(teacherdashboard::class);
    }
    
    public function teacherreg()
    {
        return $this->hasMany(teacherreg::class);
    }
}
