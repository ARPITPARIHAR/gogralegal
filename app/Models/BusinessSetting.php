<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'business_name',
        'email',
        'contact_numbers',
        'address',
        // Add other fields here that you want to allow mass assignment for
    ];
}
