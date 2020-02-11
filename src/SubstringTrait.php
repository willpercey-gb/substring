<?php

namespace UWebPro\Str;

trait SubstringTrait
{
    /**
     * @param $document
     * @param string $start
     * @param string $end
     * @return bool|string
     */
    public function substring($document, $start = '', $end = '')
    {
        if (!empty($start)) {
            $start_position = mb_stripos($document, $start);
            if (!($start_position === false)) $start_position = $start_position + strlen($start);
        } else $start_position = 0;

        if (!empty($end)) $end_position = @mb_stripos($document, $end, $start_position);
        else {
            $end_position = strlen($document);
        }
        if ($start_position === false || $end_position === false) return false;
        return trim(substr($document, $start_position, $end_position - $start_position));

    }
}