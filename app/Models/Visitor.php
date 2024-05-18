<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory;

    protected $fillable = [
        'ip_address',
        'visits',
        'country',
        'city',
        'region',
        'postal_code',
        'session_id',
        'user_agent',
        'last_visit'
    ];


   

  

    public function scopeVisitsCount($query)
    {
        return $query->sum('visits');
    }
}
