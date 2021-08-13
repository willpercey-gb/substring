<?php

use JetBrains\PhpStorm\Pure;

if (!function_exists('substring')) {
    /**
     * @param $document
     * @param string|null $start
     * @param string|null $end
     * @return string|null
     */
    #[Pure]
    function substring($document, ?string $start = null, ?string $end = null): ?string
    {
        return \UWebPro\Str\SubstringHelper::method($document, $start, $end);
    }
}
