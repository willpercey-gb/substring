<?php

namespace UWebPro\Str;

trait Substring
{
    /**
     * @param $document
     * @param string $start
     * @param string $end
     * @return bool|string
     */
    public function substring($document, ?string $start = null, ?string $end = null)
    {
        return SubstringHelper::method($document, $start, $end);
    }
}