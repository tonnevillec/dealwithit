<?php

namespace App\Repositories;

use App\Models\Message;

class MessageRepository
{
    /**
     * Create a message.
     *
     * @param Array $data
     */
    public function create($data)
    {
        return Message::create($data);
    }

    /**
     * Get messages count.
     */
    public function count()
    {
        return Message::count();
    }

    /**
     * Get message ad.
     *
     * @param \App\Models\Message $message
     */
    public function getAd($message)
    {
        return $message->ad()->firstOrFail();
    }

    /**
     * Delete a message.
     *
     * @param \App\Models\Message $ad
     */
    public function delete($message)
    {
        $message->delete();
    }

    /**
     * Get all messages.
     *
     * @param integer $nbr
     */
    public function all($nbr)
    {
        return Message::latest()->paginate($nbr);
    }

    /**
     * Get a message by Id.
     *
     * @param integer $id
     */
    public function getById($id)
    {
        return Message::findOrFail($id);
    }
}
