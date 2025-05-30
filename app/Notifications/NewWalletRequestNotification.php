<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewWalletRequestNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public string $type;
    public array $data;

    public function __construct(string $type, array $data)
    {
        $this->type = $type;
        $this->data = $data;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database'];
    }

    public function toDatabase($notifiable): array
    {
        return [
            'title' => "New " . ucfirst($this->type) . " request",
            'message' => "{$this->data['name']} requested {$this->data['amount']} SAR",
            'request_id' => $this->data['id'],
            'type' => $this->type,
        ];
    }


}
