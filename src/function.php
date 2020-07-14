<?php
if (!function_exists('substring')) {
    /**
     * @param $document
     * @param string $start
     * @param string $end
     * @return bool|string
     */
    function substring($document, ?string $start = null, ?string $end = null)
    {
        return \UWebPro\Str\SubstringHelper::method($document, $start, $end);
    }
}
