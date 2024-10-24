<?php

namespace App\Notifications;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class UserUploadedDocuments extends Notification
{
    use Queueable;

    public $user;

    /**
     * Create a new notification instance.
     */
    public function __construct(User $user)
    {
        $this->user = $user;
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

    /**
     * Get the mail representation of the notification.
     */
    // public function toMail(object $notifiable): MailMessage
    // {
    //     return (new MailMessage)
    //         ->line('The introduction to the notification.')
    //         ->action('Notification Action', url('/'))
    //         ->line('Thank you for using our application!');
    // }

    public function databaseType(object $notifiable): string
    {
        return 'user-uploaded-document';
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toDatabase(object $notifiable): array
    {
        return [
            'message' => 'A ' . $this->user->firstname . ' ' .  $this->user->lastname .  ' just uploaded documents ',
            'user_id' => $this->user->id,
            'user_firstname' => $this->user->firstname,
            'user_lastname' => $this->user->lastname,
            'user_uuid' => $this->user->uuid,
            'email' => $this->user->email,
            'profile_url' => route('admin.user', $this->user->uuid), // Assuming this is your user profile route
        ];
    }
}
