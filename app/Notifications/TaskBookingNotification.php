<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;
use App\Models\Booking;

class TaskBookingNotification extends Notification
{
    use Queueable;

    protected $task;

    public function __construct(Booking $task)
    {
        $this->task = $task;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Pesanan Baru')
            ->line('ID Pemesanan : ' . $this->task->token)
            ->line('Tanggal Masuk : ' . date('d F Y', strtotime($this->task->created_at)))
            ->line('Tanggal Pelaksanaan : ' . date('d F Y', strtotime($this->task->datetime)))
            ->line('Nama Pemesan : ' . $this->task->User->name)
            ->line('No Telp. Pemesan : ' . $this->task->User->no_hp)
            ->line('Package : ' . $this->task->Package->name)
            ->line('Jenis Pesanan : ' . $this->task->type)
            ->line('Lokasi Penyewaan : ' . $this->task->location)
            ->line('Jumlah Orang : ' . $this->task->price_1 . ' orang')
            ->line('Tambahan Lokasi : ' . $this->task->price_2)
            ->line('Tambahan Durasi : ' . $this->task->price_3 . ' jam')
            ->line('Tambahan Foto : ' . $this->task->price_4 . ' foto')
            ->line('Cinematic Video : ' . $this->task->price_5)
            ->line('Harga Total : ' . $this->task->total);
    }
}
