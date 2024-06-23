<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use Str;
class PracticeArea extends Model
{
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($practice_area) {
            $practice_area->slug = Str::slug($practice_area->title);
        });

        static::updating(function ($practice_area) {
        });
    }
=======

class PracticeArea extends Model
{
    use HasFactory;
>>>>>>> 81dc19414bb2edd5ac0d37e9e58fbf5e72167c9c
}
