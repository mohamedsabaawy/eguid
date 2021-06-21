<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Review extends Pivot
{

    protected $table = 'reviews';
    public $timestamps = true;
    protected $fillable = array('comment', 'review', 'hotel_id', 'client_id','title');

    public function Hotel()
    {
        return $this->belongsTo('App\Models\Hotel');
    }

    public function Client()
    {
        return $this->belongsTo('App\Models\Client');
    }

}
