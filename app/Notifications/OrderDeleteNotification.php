<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class OrderDeleteNotification extends Notification implements ShouldQueue
{
    use Queueable;
    public $inv_id;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($inv_id)
    {
        $this->inv_id = $inv_id;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('You are receiving this email because we received an order delete request from your account.')
                    ->line('Order against invoice no '.$this->inv_id .' has been deleted from our system.')
                    ->line('If you think that this is a mistake, please vistit out site and re-order.')
                    ->line('Thank you for using our application!');
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
            //
        ];
    }
}
