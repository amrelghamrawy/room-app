<?php

namespace App\Events;

use App\Models\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class chatMessageEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     */
    private $message ; 
    private $user ; 

    public function __construct($msg , User $user)
    {
        $this->message = $msg ; 
        $this->user = $user ; 
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            //public 
            // new Channel('public.chat.1'),
            //  new PrivateChannel('priv ate.chat.1'),
              new PresenceChannel('presence.chat.1'),
        ];
    }
    public function broadcastAs(){
        return 'chat-message' ;
    }
    public function broadcastWith(){
        return [
            'message' =>$this->message , 
            'user' => $this->user->only(['name' , 'email'])
        ];
    }
}
