<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class WalletRequestStatusNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public string $type;
    public string $status;
    public float $amount;

    public function __construct(string $type, string $status, float $amount)
    {
        $this->type = $type;
        $this->status = $status;
        $this->amount = $amount;
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
            'title' => ucfirst($this->type) . " request " . $this->status,
            'message' => "Your {$this->type} request for {$this->amount} SAR has been {$this->status}.",
        ];
    }

    // public function toMail($notifiable)
    // {
    //     return (new MailMessage)
    //         ->subject(ucfirst($this->type) . ' Request ' . ucfirst($this->status))
    //         ->line("Hello {$notifiable->name},")
    //         ->line("Your {$this->type} request for {$this->amount} SAR has been {$this->status}.")
    //         ->line('Thank you for using our application!');
    // }

}
