<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subject extends Model
{
    use HasFactory;

    protected $fillable = [

        'subject',

    ];

    public function studentreg()
    {
        return $this->hasMany(Studentreg::class);
    }
    public function schedule()
    {
        return $this->hasMany(Schedule::class);
    }
    public function payment()
    {
        return $this->hasMany(Payment::class);
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
