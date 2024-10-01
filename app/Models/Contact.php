<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'last_name',
        'identification',
        'birth_date',
    ];

    protected function casts(): array
    {
        return [
            'birth_date' => 'datetime',
        ];
    }
}
