<?php

namespace ChinLeung\VerboseLocalization\Concerns;

trait HasJaponicVerboseMethods
{
    /**
     * Retrieve the translation in another locale.
     *
     * @param  string  $locale
     * @return mixed
     */
    abstract public function getTranslationIn(string $locale);

    /**
     * Function to retrieve the translation in Japanese.
     *
     * @return mixed
     */
    public function inJapanese()
    {
        return $this->getTranslationIn('ja');
    }
}
