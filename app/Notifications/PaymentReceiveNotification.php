<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class PaymentReceiveNotification extends Notification implements ShouldQueue
{
    use Queueable;
    protected $order;
    protected $payment;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($order, $payment)
    {
        $this->order = $order;
        $this->payment = $payment;
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
        $order = $this->order;
        $payment = $this->payment;
        return (new MailMessage)
                    ->line('This is to notify that Social AuditvBD has received a payment')
                    ->line('against invoice no '.$order->inv_id .' from '.$order->user->company.' with the following details')
                    ->line('Payment Type: '.$payment->payment_type .'; Reference No: '.$payment->reference_no .'; Payment Amount: '.$payment->payment_amount .'; Payment Status: '.$order->status .';');
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
