<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class MessageNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public $message;
    public $emisor;
    public $transmitter_name;

    public function __construct($emisor, $message, $transmitter_name)
    {

        $this->emisor  = $emisor;
        $this->message  = $message;
        $this->transmitter_name = $transmitter_name;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [

            'emisor' => $this->emisor,
            'message' => $this->message,
            'transmitter_name' => $this->transmitter_name,

        ];
    }
}