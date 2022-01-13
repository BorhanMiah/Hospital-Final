<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presception extends Model
{
    protected $fillable=[
      'id','d_name','age','date','p_name','gender','diseas','provisional','differential','lab','advice','medicine','examination'
    ];
}
