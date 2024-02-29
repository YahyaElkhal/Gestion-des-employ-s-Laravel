<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;

    protected $fillable=['fullname','registration_number',
                          'depart','hire_date',
                          'address','phone','city'
                        ];
}
