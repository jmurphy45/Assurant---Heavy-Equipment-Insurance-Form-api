<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InsuranceForm extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'industries_id', 'product_types_id', 'purchase_types_id', 'price_ranges_id'];
}
