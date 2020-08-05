<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JournalCurrency extends Model
{
    protected $guarded = [];
    protected $table = 'journal_currencies';
    protected $fillable = ['journal_id', 'currency_id', 'image_url', 'detail', 'title', 'resistance_c1', 'resistance_c2', 'resistance_c3', 'support_c1', 'support_c2', 'support_c3'];

    public function journals(){
        return $this->belongsTo(Journal::class, 'journal_id');
    }
}
