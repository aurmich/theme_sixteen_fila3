<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Mail;

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
use Illuminate\Database\Eloquent\Model;
use Illuminate\Mail\Mailable;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
class SendMailByRecordAction
{
    use QueueableAction;

    /**
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
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
    }
}
