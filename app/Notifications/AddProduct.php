<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AddProduct extends Notification
{
    use Queueable;
private $product_id;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($product_id)
    {
        $this->product_id=$product_id;
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
        $url='http://127.0.0.1:2222/product/'.$this->product_id;
        return (new MailMessage)
        ->subject('Add New Product')
                    ->line('Add New Product')
                    ->action('Notification Action', $url)
                    ->line('Thank you for using Ysys for application serves!');
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
