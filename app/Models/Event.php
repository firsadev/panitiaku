<?php

namespace App\Models;

use App\Models\Participant;
use App\Models\Sponsored;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasUuids;


    public function sponsoreds() 
    {
        $this->belongsToMany(Sponsored::class,'event_sponsored');
    }

    public function participants() 
    {
        $this->belongsToMany(Participant::class, 'event_participant');
    }


}
