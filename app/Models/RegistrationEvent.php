<?php

namespace App\Models;

use App\Models\Participant;
use App\Models\Ticket;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class RegistrationEvent extends Model
{
    use HasUuids;

    public function ticket() 
    {
        return $this->hasOne(Ticket::class);
    }
    public function participant() 
    {
        return $this->hasOne(Participant::class);
    }

}
