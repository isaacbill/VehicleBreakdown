<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mechanic extends Model
{
   protected $fillable = [
     'name', 'phone_number', 'email','speciality','location','image'
    ];
}
