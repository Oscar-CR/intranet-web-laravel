<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\Models\User;
use App\Models\Message;

class MessageSent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $message;
    public $receptor;
    public $emisor;
    public $transmitter_name;
    public $created_at;
    public function __construct($message, $receptor, $emisor, $transmitter_name, $created_at)
    {
        $this->message  = $message;
        $this->receptor  = $receptor;
        $this->emisor  = $emisor;
        $this->transmitter_name = $transmitter_name;
        $this->created_at = $created_at;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return ['chat'];
    }
}
