<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;

class MovieCreated implements ShouldBroadcastNow
{
    use InteractsWithSockets;

    public $movie;

    public function __construct($movie)
    {
        $this->movie = $movie;
    }

    public function broadcastOn()
    {
        return new Channel('movies');
    }

    public function broadcastAs()
    {
        return 'movie.created';
    }
}
