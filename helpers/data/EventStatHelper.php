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

    public static function calculateGenderDispersion($usersAnswer): array
    {
        self::validateThisManyOfJawaban($usersAnswer);

        // Gender Category = ['Laki-laki', 'Perempuan']
        $usersGender = [0, 0];

        foreach ($usersAnswer as $answer) {
            $userGender = $answer->user()->jenis_kelamin;

            switch ($userGender) {
                case 'laki':
                    $usersGender[0] += 1;
                    break;
                case 'perempuan':
                    $usersGender[1] += 1;
                    break;
            }
        }

        return $usersGender;
    }

    public static function calculateAgeDispersion($usersAnswer): array
    {
        self::validateThisManyOfJawaban($usersAnswer);

        // Age Category = ['15-20', '20-30', '30-40', '40-50', '50>']
        $usersAge = [0, 0, 0, 0, 0];

        foreach ($usersAnswer as $answer) {
            $userAge = $answer->user()->usia;

            if (GeneralHelper::isBetweenAnd($userAge, 15, 20)) {
                $usersAge[0] += 1;
            } else if (GeneralHelper::isBetweenAnd($userAge, 20, 30)) {
                $usersAge[1] += 1;
            } else if (GeneralHelper::isBetweenAnd($userAge, 30, 40)) {
                $usersAge[2] += 1;
            } else if (GeneralHelper::isBetweenAnd($userAge, 40, 50)) {
                $usersAge[3] += 1;
            } else if ($userAge > 50) {
                $usersAge[4] += 1;
            }
        }

        return $usersAge;
    }

    public static function calculateEducationDispersion($usersAnswer): array
    {
        self::validateThisManyOfJawaban($usersAnswer);

        // Education Category = ['sd', 'smp', 'sma', 'd1', 'd2', 'd3', 'd4', 's1', 's2', 's3']
        $usersEducation = [0, 0, 0, 0, 0, 0, 0, 0, 0,];

        foreach ($usersAnswer as $answer) {
            $userEducation = $answer->user()->pendidikan_terakhir;

            switch ($userEducation) {
                case 'sd':
                    $usersEducation[0] += 1;
                    break;
                case 'smp':
                    $usersEducation[1] += 1;
                    break;
                case 'sma':
                    $usersEducation[2] += 1;
                    break;
                case 'd1':
                    $usersEducation[3] += 1;
                    break;
                case 'd2':
                    $usersEducation[4] += 1;
                    break;
                case 'd3':
                    $usersEducation[5] += 1;
                    break;
                case 'd4':
                    $usersEducation[6] += 1;
                    break;
                case 's1':
                    $usersEducation[7] += 1;
                    break;
                case 's2':
                    $usersEducation[8] += 1;
                    break;
                case 's3':
                    $usersEducation[9] += 1;
                    break;
            }
        }

        return $usersEducation;
    }

    public static function calculateResidenceDispersion($usersAnswer): array
    {
        self::validateThisManyOfJawaban($usersAnswer);

        /**
         * ~ Size depends on users resident dispersion
         * ~ Filtered by number
         * Residence Category = ['X1' => 14, 'X2' => 7, 'X3' => 4]
         */
        $usersResidence = [];

        foreach ($usersAnswer as $answer) {
            $userResidence = $answer->user()->domisili;

            if (array_key_exists($userResidence, $usersResidence)) {
                $usersResidence[] = [$userResidence => 1];
            } else {
                $usersResidence[$userResidence] += 1;
            }
        }

        return $usersResidence;
    }

    public static function calculate8DimensionsDispersion($usersAnswer): array
    {
        self::validateThisManyOfJawaban($usersAnswer);

        // 8 Dimensions Category = ['Pelopor', 'Penggerak', 'Afirmasi', 'Inklusif', 'Rendah Hati', 'Pemikir', 'Tegas', 'Berwibawa']
        $usersDimension = [0, 0, 0, 0, 0, 0, 0, 0];

        foreach ($usersAnswer as $answer) {
            $userDimension = $answer->dimensi_kepemimpinan;

            switch ($userDimension){
                case 'Pelopor':
                    $usersDimension[0] += 1;
                    break; 
                case 'Penggerak':
                    $usersDimension[1] += 1;
                    break; 
                case 'Afirmasi':
                    $usersDimension[2] += 1;
                    break; 
                case 'Inklusif':
                    $usersDimension[3] += 1;
                    break; 
                case 'Rendah Hati':
                    $usersDimension[4] += 1;
                    break; 
                case 'Pemikir':
                    $usersDimension[5] += 1;
                    break; 
                case 'Tegas':
                    $usersDimension[6] += 1;
                    break; 
                case 'Berwibawa':
                    $usersDimension[7] += 1;
                    break;  
            }
        }

        return $usersDimension;
    }
}
