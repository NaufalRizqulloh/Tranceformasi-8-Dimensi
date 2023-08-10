<?php

namespace Helpers\Data;

use App\Models\Jawaban;
use Exception;
use Helpers\GeneralHelper;
use Illuminate\Database\Eloquent\Relations\HasMany;

class EventStatHelper
{
    // Harus instance dari model Jawaban & HasMany
    private static function validateThisManyOfJawaban($jawabanUsers)
    {
        if (!$jawabanUsers instanceof HasMany && !$jawabanUsers->getRelated() instanceof Jawaban) {
            throw new Exception("Variabel jawabanUsers bukan instance dari Jawaban & Hasmany");
        }
    }

    public static function calculateGenderDispersion($jawabanUsers): array
    {
        self::validateThisManyOfJawaban($jawabanUsers);

        $kelaminL = 0;
        $kelaminP = 0;

        foreach ($jawabanUsers as $jawaban) {
            switch ($jawaban->user()->jenis_kelamin) {
                case 'laki':
                    $kelaminL += 1;
                    break;
                case 'perempuan':
                    $kelaminP += 1;
                    break;
            }
        }

        // ['Laki-laki', 'Perempuan']
        return [$kelaminL, $kelaminP];
    }

    public static function calculateAgeDispersion($jawabanUsers): array
    {
        self::validateThisManyOfJawaban($jawabanUsers);

        // Age Category = ['15-20', '20-30', '30-40', '40-50', '50>']
        $age = [0, 0, 0, 0, 0];

        foreach ($jawabanUsers as $jawaban) {
            $userAge = $jawaban->user()->usia;

            if (GeneralHelper::isBetweenAnd($userAge, 15, 20)) {
                $age[0] += 1;
            } else if (GeneralHelper::isBetweenAnd($userAge, 20, 30)) {
                $age[1] += 1;
            } else if (GeneralHelper::isBetweenAnd($userAge, 30, 40)) {
                $age[2] += 1;
            } else if (GeneralHelper::isBetweenAnd($userAge, 40, 50)) {
                $age[3] += 1;
            } else if ($userAge > 50) {
                $age[4] += 1;
            }
        }

        return $age;
    }
}
