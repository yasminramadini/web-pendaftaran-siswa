<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class SiswaTidakDiterima extends Notification
{
    use Queueable;

    public $siswa;
    public $pengaturan;

    public function __construct($siswa, $pengaturan)
    {
        $this->siswa = $siswa;
        $this->pengaturan = $pengaturan;
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
          ->subject('Pemberitahuan siswa tidak diterima')
          ->view('email.siswaTidakDiterima', ['siswa' => $this->siswa, 'pengaturan' => $this->pengaturan]);
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
