<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use Str;
class Page extends Model
{
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($page) {
            $page->slug = Str::slug($page->name);
        });

        static::updating(function ($page) {
        });
    }
    public function parent()
    {
        return $this->belongsTo(Page::class,'parent_id');
    }


=======

class Page extends Model
{
    use HasFactory;
>>>>>>> 81dc19414bb2edd5ac0d37e9e58fbf5e72167c9c
}
