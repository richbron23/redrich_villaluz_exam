<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccessLevel extends Model
{
    use HasFactory;

    protected $fillable = [
        'description'
    ];
    
    public function employee()
    {
        return $this->hasMany('App\Models\Employee','access_level_id ','access_level_id ');
    }
}