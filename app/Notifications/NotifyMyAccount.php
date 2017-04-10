<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class NotifyMyAccount extends Notification
{
    use Queueable;

    protected $case;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($case='')
    {
        $this->case = $case;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        // return ['mail'];
        return ['database'];
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
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
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

        ];
    }

    public function toDatabase($notifiable)
    {
        switch ($this->case) {
            case 'teste1':
                return ['notification' => 'Mensagem Teste 1'];
                break;

            case 'teste2':
                return ['notification' => 'Mensagem Teste 2'];
                break;

            default:
                return ['notification' => 'Mensagem default'];
                break;
        }

    }

}
