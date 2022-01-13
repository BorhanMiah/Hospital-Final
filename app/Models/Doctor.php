<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'mobile', 'email', 'photo', 'department_id', 'qualification'
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function rooms()
    {
        return $this->hasMany(Room::class);
    }

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}
