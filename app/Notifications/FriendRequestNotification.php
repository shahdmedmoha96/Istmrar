<?php
namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\DatabaseMessage;
use App\Models\User;

class FriendRequestNotification extends Notification
{
    use Queueable;

    public $sender;

    public function __construct(User $sender)
    {
        $this->sender = $sender;
    }

    public function via($notifiable)
    {
        return ['database'];
    }

    public function toDatabase($notifiable)
    {
        return [
            'sender_id' => $this->sender->id,
            'sender_name' => $this->sender->name,
            'message' => "{$this->sender->name} sent you a friend request",
            'url' => route('friend.request.show', $this->sender->id), // رابط لصفحة الطلب
        ];
    }
}
