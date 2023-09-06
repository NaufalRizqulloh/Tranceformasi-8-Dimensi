<?php

namespace Helpers\Validation;

use Exception;
use App\Models\Event;
use App\Models\EmailAdmin;
use App\Models\Jawaban;
use Ramsey\Uuid\Type\Integer;

class Validation
{
    public static function isCodeAccessValid(): bool
    {

        return true;
    }

    // perlu testing
    public static function isUserExistIn($userId, $eventId)
    {
        $answer = Jawaban::where('event_id', '=', $eventId)
            ->where('user_id', '=', $userId)
            ->first();
        $isAlreadyAnswered = false;

        if ($answer) {
            $isAlreadyAnswered = $answer->progress == 'Selesai';
        }

        return $isAlreadyAnswered ? true : false;

        // $jawabans = $event->jawabans();

        // foreach ($jawabans as $jawaban) {
        //     if ($jawaban->user()->id == $userId && $jawaban->progress == "Selesai") {
        //         throw new Exception('Anda sudah mengisi');
        //     }
        // }
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
        if (!is_int($intValue)) {
            throw new Exception($variableMessage . ' harus berupa angka');
        }
        return $intValue;
    }

    public static function returnIfString($strValue, $variableMessage = 'value'): string
    {
        if (!is_string($strValue)) {
            throw new Exception($variableMessage . ' harus berupa string');
        }
        return $strValue;
    }

    // return i true if jump
    public static function jumperDetector($answerID)
    {
        $answer = session('answers-' . $answerID);

        if (empty($answer)) {
            return true;
        }

        if (!$answer['checkbox'] && !$answer['range']) {
            return true;
        }

        if (count($answer['checkbox']['p']) != 24 && count($answer['checkbox']['t']) != 24) {
            return true;
        }

        if (count($answer['range']) != 20) {
            return true;
        }

        return false;
    }
}
