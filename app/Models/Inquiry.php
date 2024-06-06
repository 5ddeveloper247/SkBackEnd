<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    use HasFactory;
    protected $fillable = [
        'location',
        'email',
        'phone',
        'description',
        'agent',
        'informed_me',
    ];
    protected $casts = [
        'agent' => 'array',
        'informed_me' => 'boolean',
    ];
}
