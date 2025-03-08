<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Mail;

<<<<<<< HEAD
=======
<<<<<<< HEAD
use Illuminate\Support\Facades\Mail;
use Modules\Xot\Mail\RecordMail;
use Spatie\QueueableAction\QueueableAction;

/**
 * Class SendMailByRecordAction
 * 
 * Invia una mail utilizzando un record come dati.
 */
=======
>>>>>>> origin/master
use Illuminate\Database\Eloquent\Model;
use Illuminate\Mail\Mailable;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

<<<<<<< HEAD
=======
>>>>>>> c544fb4580 (Merge commit '18b8a43387ec0e43ffbd378b65d7fcd266562aab' as 'laravel/Themes/Sixteen')
>>>>>>> origin/master
class SendMailByRecordAction
{
    use QueueableAction;

    /**
<<<<<<< HEAD
=======
<<<<<<< HEAD
     * Invia la mail.
     *
     * @param array<string, mixed> $data I dati del record
     * @param string $to Indirizzo email del destinatario
     * @return void
     */
    public function execute(array $data, string $to): void
    {
        $mailable = new RecordMail($data);
        Mail::to($to)->send($mailable);
=======
>>>>>>> origin/master
     * Undocumented function.
     *
     * @return bool
     */
    public function execute(Model $record, string $mailClass): void
    {
        Assert::classExists($mailClass);
        Assert::implementsInterface($mailClass, Mailable::class);

        /** @var Mailable $mail */
        $mail = new $mailClass($record);
        $mail->send();
<<<<<<< HEAD
=======
>>>>>>> c544fb4580 (Merge commit '18b8a43387ec0e43ffbd378b65d7fcd266562aab' as 'laravel/Themes/Sixteen')
>>>>>>> origin/master
    }
}
