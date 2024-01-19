<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    
    use HasFactory;
    protected $fillable = [
        'full_name',
        'gender',
        'major',
        'from_middle_school',
    ];
}
