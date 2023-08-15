<?php

namespace Helpers\Validation;

use Exception;
use App\Models\Event;
use App\Models\EmailAdmin;
use Ramsey\Uuid\Type\Integer;

class Validation
{
    // perlu testing
    public static function validateUserExistInEvent($userId, $eventId)
    {
        $event = Event::with('jawabans')->find($eventId);
        $jawabans = $event->jawabans();

        foreach ($jawabans as $jawaban) {
            if ($jawaban->user()->id == $userId && $jawaban->progress == "Selesai") {
                throw new Exception('Anda sudah mengisi');
            }
        }
    }

    // Return true if admin
    public static function isAdmin($email): bool
    {
        foreach (EmailAdmin::all() as $emailAdmin) {
            if ($$email == $emailAdmin) {
                return true;
            }
        }
        return false;
    }

    public static function returnIfInt($intValue, $variableMessage = 'value'): int
    {
        if (!is_int($intValue)){
            throw new Exception($variableMessage . ' harus berupa angka');
        }
        return $intValue;
    }

    public static function returnIfString($strValue, $variableMessage = 'value'): string
    {
        if (!is_string($strValue)){
            throw new Exception($variableMessage . ' harus berupa angka');
        }
        return $strValue;
    }
}
