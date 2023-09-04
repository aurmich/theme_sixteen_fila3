<?php

declare(strict_types=1);

namespace Modules\Notify\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Datas\EmailData;
use Modules\Xot\Contracts\ModelContactContract;

class RowAttributeNotification extends Notification
{
    use Queueable;
    public ModelContactContract $row;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(ModelContactContract $row)
    {
        $this->row = $row;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     *
     * @return array
     */
    public function via($notifiable)
    {
        return $this->row->getNotifyVia();
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param mixed $notifiable
     *
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        
        $theme = $this->row->notifyThemes->first()->theme ?? 'ark';
        // dddx($theme);
        // dddx([
        //     'row' => $this->row,
        //     'from_email' => $this->row->mail_from,
        //     'from' => $this->row->mail_from_email,
        //     'subject' => $this->row->mail_subject,
        //     'row email' => $this->row->email,
        //     'body' => $this->row->mail_body,
        //     // 'body_html' => $this->row->
        // ]);


        // $email_data = EmailData::from([
        //     'from' =>$this->row->mail_from_email,
        //     'from_email' => $this->row->mail_from,
        //     'subject' => $this->row->mail_subject,
        //     'body_html' => $theme->body_html,
        //     'body' => $this->row->mail_body,
        // ]);
        // dddx($email_data);

        $message = (new MailMessage())
            ->from($this->row->mail_from_email, $this->row->mail_from)
            ->subject($this->row->mail_subject)
            // ->line('---')
            // // non so se posso modificare questa riga senza creare errori in altre parti
            // ->view('notify::emails.templates.' . $theme . '.mail', ['html' => $this->row->mail_body, 'logo' => []]);
            ->view('quaeris::emails.invite', ['html' => $this->row->mail_body, 'logo' => []]);

        $this->row->sendEmailCallback();

        return $message;
    }

    /**
     * Undocumented function.
     *
     * @param mixed $notifiable
     *
     * @return SmsData
     */
    public function toSms($notifiable)
    {
        return SmsData::from([
            'from' => $this->row->sms_from,
            'to' => $this->row->mobile_phone,
            'body' => $this->row->sms_body,
        ]);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param mixed $notifiable
     *
     * @return array
     */
    public function toArray($notifiable)
    {
        dddx($notifiable);

        return [];
    }
}
