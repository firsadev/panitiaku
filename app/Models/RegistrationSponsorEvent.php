<?php

namespace App\Models;

use App\Models\Event;
use App\Models\Sponsored;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class RegistrationSponsorEvent extends Model
{
    use HasUuids;

    public function event()
    {
        return $this->hasOne(Event::class);
    }

    public function sponsored()
    {
        return $this->hasOne(Sponsored::class);
    }

    
}
