<?php

namespace Helpers\Data;

use Exception;

class DiscHelper
{

    public static function formatDiscValue(array $values): String
    {
        if (empty($values) | count($values) != 4) {
            throw new Exception("Format array tidak valid");
        }

        $result = "";

        foreach ($values as $value) {
            $result = $result . (string)$value;
        }

        return $result;
    }

    public static function getChangeValue(array $most, array $least): array
    {
        if (count($most) != 4 | count($least) != 4) {
            throw new Exception("Data yang dikirim tidak valid");
        }

        $result = [];

        for ($i = 0; $i <= 3; $i++) {
            $result[] = $most[$i] - $least[$i];
        }

        return $result;
    }

    public static function getRawChangeValue(array $most, array $least): array
    {
        if (count($most) != 4 | count($least) != 4) {
            throw new Exception("Data yang dikirim tidak valid");
        }

        $result = [];

        for ($i = 0; $i <= 3; $i++) {
            $result[] = $most[$i] - $least[$i];
        }

        return $result;
    }

    public static function deformatDiscValue(string $disc): array
    {
        if (strlen($disc) != 4) {
            throw new Exception("Data yang dikirim tidak valid");
        }

        $result = [];

        foreach (str_split($disc) as $value) {
            $result[] = (int)$value;
        }

        return $result;
    }

    public static function normalizeDiscValue(array $values): array
    {
        if (empty($values)) {
            throw new Exception("Array DISC kosong");
        }

        $D = 0;
        $I = 0;
        $S = 0;
        $C = 0;

        foreach ($values as $value) {
            $D += ($value == "d") ? 1 : 0;
            $I += ($value == "i") ? 1 : 0;
            $S += ($value == "s") ? 1 : 0;
            $C += ($value == "c") ? 1 : 0;
        }

        $result = [$D, $I, $S, $C];
        return $result;
    }

    public static function normalizeAndFormatDiscValue(array $values): string
    {
        $result = self::formatDiscValue(self::normalizeDiscValue($values));
        return $result;
    }
}
