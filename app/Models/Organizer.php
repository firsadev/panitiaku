<?php

namespace App\Models;

use App\Models\Event;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Organizer extends Model
{
    use HasUuids;

    public function events()
    {
        return $this->hasMany(Event::class());
    }
}
