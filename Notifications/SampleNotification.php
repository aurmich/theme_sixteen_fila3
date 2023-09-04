<?php

namespace Modules\Notify\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Modules\Notify\Datas\SmsData;

use Modules\Notify\Notifications\Channels\EsendexChannel;

class SampleNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(array $data)
    {
        //
        $this->data=$data;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function via($notifiable):array
    {
        //dddx($notifiable); //Modules\Notify\Datas\NotificationData 
        $channels = [];
        //$channels[]=EsendexChannel::class;
        $channels[]='esendex'; //Driver [esendex] not supported.
        //$channels[]='array'; //Driver [array] not supported.
        //$channels[]='database'; //Driver [array] not supported.
        return $channels;
    }

     /**
     * Get the mail representation of the notification.
     *
     * @param mixed $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toEsendex($notifiable){
        dddx($notifiable);
    }


    public function toSms($notifiable){
        $res= SmsData::from([
            'from' => $this->data['from'],
            //'to' => $notifiable->routeNotificationFor('sms'),
            'to' => $this->data['to'],
            'body' => $this->data['body'],
        ]);
        return $res;
    }


    /**
     * Get the mail representation of the notification.
     *
     * @param mixed $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        dddx('oo');
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', 'https://laravel.com')
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        dddx('oo');
        return [
            //
        ];
    }

    public function toDatabase($notifiable)
    {
        return $notifiable->toArray();
        
    }
}
