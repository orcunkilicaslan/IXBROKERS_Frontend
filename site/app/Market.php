<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Market extends Model
{
    protected $fillable = ['market_name', 'current_price', 'bid', 'ask', 'previous_close', 'volume', 'type', 'fetch_url'];
}
