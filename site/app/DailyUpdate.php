<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DailyUpdate extends Model
{
    protected $guarded = [];
    protected $table = 'daily_updates';
    protected $fillable = ['release_date', 'status', 'created_at', 'udpated_at'];

    public function articles(){
        return $this->hasMany(DailyUpdateArticle::class, 'daily_update_id');
    }
}
