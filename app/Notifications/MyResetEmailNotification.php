<?php

namespace App\Notifications;

use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Notifications\Messages\MailMessage;

class MyResetEmailNotification extends ResetPassword
{
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line('Você recebeu este e-mail porque recebemos uma solicitação para redefinir a senha.')
            ->action('Reset Password', url(config('app.url').route('password.reset', $this->token, false)))
            ->line('If you did not request a password reset, no further action is required.');
    }
         
}
