<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SendRequest extends Model
{
   protected $fillable = [
     'name', 'email', 'phone_number', 'pickup_location', 'pickup_date','pickup_time'
    ];
}
