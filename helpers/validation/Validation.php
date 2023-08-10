<?php

use App\Models\EmailAdmin;
use App\Models\Event;

class Validation
{
    // perlu testing
    public static function validateUserExistInEvent($userId, $eventId)
    {
        $event = Event::with('jawabans')->find($eventId);
        $jawabans = $event->jawabans();

        foreach ($jawabans as $jawaban) {
            if ($jawaban->user()->id == $userId && $jawaban->progress == "Selesai"){
                throw new Exception('Anda sudah mengisi');
            }
        }
    }

    // Return true if admin
    public static function isAdmin($email): bool{
        foreach(EmailAdmin::all() as $emailAdmin){
            if ($$email == $emailAdmin){
                return true;
            }
        }
        return false;
    }
}
