<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prisoner extends Model
{
  use HasFactory;
  protected $fillable = ['id','PID','firstName','lastName', 'dob', 'location'];
}
