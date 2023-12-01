<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jobs extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'vacancy',
        'nature',
        'salary',
        'location',
        'job_desc',
        'company',
        'responsibility',
        'qualifications',
    ];

    protected $casts = [
        'responsibility' => 'json',
        'qualifications' => 'json',
        'created_at',
        'updated_at',
    ];
}
