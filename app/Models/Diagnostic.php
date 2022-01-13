<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnostic extends Model
{
    protected $fillable=[
      'id','p_name','date','t_name','test_price'
    ];
}
