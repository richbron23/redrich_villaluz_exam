<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable ;

class Employee extends Authenticatable 
{
    use HasFactory;

    protected $fillable = [
        'firstname',
        'lastname',
        'age',
        'birthdate',
        'email',
        'job_title',
        'password',
        'access_level_id',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function access_levels()
    {
        
        return $this->belongsTo('App\Models\AccessLevel','access_level_id ');
    }
}