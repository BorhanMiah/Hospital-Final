<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
   protected $fillable=['id','p_name','date','d_price','t_price','m_price','total_price'];
}
