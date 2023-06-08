<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CustomerAddress extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'customer_addresses';

    protected $fillable = [
        'customer_id',
        'street_name',
        'city',
        'province',
        'postal_code'
    ];
}
