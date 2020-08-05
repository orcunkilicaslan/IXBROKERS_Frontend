<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DailyUpdateArticle extends Model
{
    protected $guarded = [];
    protected $table = 'daily_update_articles';
    protected $fillable = ['daily_update_id', 'title', 'image_url', 'desc'];

    public function daily_updates(){
        return $this->belongsTo(DailyUpdate::class, 'daily_update_id');
    }
}
