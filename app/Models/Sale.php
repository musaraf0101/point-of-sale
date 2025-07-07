<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = [
        'customer_id',
        'sale_date',
        'invoice_number',
        'total',
        'final_discount',
        'final_total',
    ];
}
