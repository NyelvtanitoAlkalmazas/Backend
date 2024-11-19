<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'hungarian',
        'sentence',
        'basis',
        'option_one',
        'option_two',
        'option_three',
        'option_four'
    ];
}
