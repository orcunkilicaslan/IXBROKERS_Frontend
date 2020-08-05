<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    protected $guarded = [];
    protected $table = 'journals';
    protected $fillable = ['release_date', 'status'];

    public function currencies(){
        return $this->hasMany(JournalCurrency::class, 'journal_id');
    }
}
