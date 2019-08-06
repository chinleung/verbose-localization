<?php

namespace ChinLeung\VerboseLocalization\Concerns;

trait HasJaponicVerboseMethods
{
    /**
     * Retrieve the translation in another locale.
     *
     * @var  string  $locale
     * @return mixed
     */
    abstract public function getTranslationIn(string $locale);

    /**
     * Function to retrieve the translation in Japanese.
     *
     * @returnsmixed
     */
    public function inJapanese()
    {
        return $this->getTranslationIn('ja');
    }
}
