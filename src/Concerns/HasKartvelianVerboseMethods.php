<?php

namespace ChinLeung\VerboseLocalization\Concerns;

trait HasKartvelianVerboseMethods
{
    /**
     * Retrieve the translation in another locale.
     *
     * @param  string  $locale
     * @return mixed
     */
    abstract public function getTranslationIn(string $locale);

    /**
     * Function to retrieve the translation in Georgian.
     *
     * @return mixed
     */
    public function inGeorgian()
    {
        return $this->getTranslationIn('ka');
    }
}
