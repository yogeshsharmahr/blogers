<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
     protected $fillable = [
        'event_title', 'event_link', 'event_date','file','description',
    ];

}
