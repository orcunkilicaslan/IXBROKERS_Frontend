<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CryptoMarket extends Model
{
    protected $fillable = ['market_name', 'price', 'bid', 'ask'];
}
