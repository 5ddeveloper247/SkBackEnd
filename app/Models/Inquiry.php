<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    use HasFactory;
    protected $fillable = [
        'location',
        'name',
        'email',
        'phone',
        'description',
        'agent',
        'informed_me',
        'status',
        'reply',
    ]; 
    protected $casts = [
        'agent' => 'array',
        'informed_me' => 'boolean',
    ];
}
