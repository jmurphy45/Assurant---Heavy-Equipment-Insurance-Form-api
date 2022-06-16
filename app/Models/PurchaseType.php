<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseType extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function scopeActive($query) 
    {
        return $query->where('active', 1);
    }
}
