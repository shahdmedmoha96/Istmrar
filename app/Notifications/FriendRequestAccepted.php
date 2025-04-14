<?php
namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;

class FriendRequestAccepted extends Notification
{
    use Queueable;

    protected $receiver;

    public function __construct($receiver)
    {
        $this->receiver = $receiver; // ده اللي قبل الطلب (اللي بعت له الطلب)
    }

    public function via($notifiable)
    {
        return ['database'];
    }

    public function toArray($notifiable)
    {
        return [
            'message' => $this->receiver->name . ' accepted your friend request!',
            'user_id' => $this->receiver->id,
            'url' => route('friend.request.show', $this->receiver->id), // رابط لصفحة الطلب
        ];
    }
}
