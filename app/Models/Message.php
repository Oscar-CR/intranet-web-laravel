<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'transmitter_id',
        'receiver_id',
        'message'

    ];
}
