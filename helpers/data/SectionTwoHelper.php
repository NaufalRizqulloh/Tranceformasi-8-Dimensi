<?php

namespace Helpers\Data;

use Exception;
use Helpers\GeneralHelper;

class SectionTwoHelper
{
    public static function normalizeData(array $values): array
    {
        $i = 1;
        $scores = [0, 0, 0, 0, 0];

        foreach ($values as $value) {

            if (GeneralHelper::isBetweenAnd($i, 1, 4)) {
                $scores[0] += $value;
            } else if (GeneralHelper::isBetweenAnd($i, 5, 8)) {
                $scores[1] += $value;
            } else if (GeneralHelper::isBetweenAnd($i, 9, 12)) {
                $scores[2] += $value;
            } else if (GeneralHelper::isBetweenAnd($i, 13, 16)) {
                $scores[3] += $value;
            } else if (GeneralHelper::isBetweenAnd($i, 17, 20)) {
                $scores[4] += $value;
            }
            $i++;
        }

        $finalScores = [];

        /**
         * Calculate in percent & round to nearest tens 
         * then divide it by 10 to get 1 digit number
         */
        foreach ($scores as $score) {
            $finalScores[] = round(($score * 100) / 24, -1) / 10;
        }

        return $finalScores;
    }

    public static function formatData(array $values): string
    {
        if (empty($values) | count($values) != 5) {
            throw new Exception("Format array tidak valid");
        }

        $result = "";

        foreach ($values as $value) {
            $result = $result . (string)$value;
        }

        return $result;
    }

    public static function deformatData(string $strValue): array
    {
        if (strlen($strValue) != 5) {
            throw new Exception("Format string tidak valid");
        }

        $result = [];

        foreach (str_split($strValue) as $value) {
            $result[] = (int)$value;
        }

        return $result;
    }
}
