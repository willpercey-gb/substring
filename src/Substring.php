<?php

namespace UWebPro\Str;

use JetBrains\PhpStorm\Pure;

trait Substring
{
    /**
     * @param $document
     * @param string|null $start
     * @param string|null $end
     * @return string|null
     */
    #[Pure]
    public function substring($document, ?string $start = null, ?string $end = null): ?string
    {
        return SubstringHelper::method($document, $start, $end);
    }
}
