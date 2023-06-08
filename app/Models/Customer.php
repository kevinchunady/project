<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customers';

    protected $fillable = [
        'trade_name',
        'outlet_name',
        'npwp',
        'type_id',
        'top',
        'phone_number'
    ];

    /**
     * Get the type associated with the Client
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function type(): HasOne
    {
        return $this->hasOne(CustomerType::class, 'id', 'type_id');
    }

    /**
     * Get the address associated with the Customer
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function address(): HasOne
    {
        return $this->hasOne(CustomerAddress::class, 'customer_id', 'id');
    }
}
