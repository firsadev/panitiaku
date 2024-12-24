<?php

namespace App\Models;

use App\Models\Ticket;
use App\Models\User;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasUuids;

    public function tickets() 
    {
        $this->belongsToMany(Ticket::class, 'participant_ticket');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    
}
