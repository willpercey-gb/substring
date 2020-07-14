<?php

namespace UWebPro\Str;

final class SubstringHelper
{
    public static function method($document, $start, $end)
    {
        if ($start) {
            $start_position = mb_stripos($document, $start);
            if (!($start_position === false)) {
                $start_position += strlen($start);
            }
        } else {
            $start_position = 0;
        }

        if ($end) {
            $end_position = @mb_stripos($document, $end, $start_position);
        }
        else {
            $end_position = strlen($document);
        }
        if ($start_position === false || $end_position === false) {
            return false;
        }
        return trim(substr($document, $start_position, $end_position - $start_position));

    }
}