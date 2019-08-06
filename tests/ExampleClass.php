<?php

namespace ChinLeung\VerboseLocalization\Tests;

class ExampleClass
{
    use \ChinLeung\VerboseLocalization\HasVerboseLocalization;

    /**
     * Retrieve the translation in a specific locale.
     *
     * @param  string  $locale
     * @return string
     */
    public function getTranslationIn(string $locale) : string
    {
        return $locale;
    }
}
