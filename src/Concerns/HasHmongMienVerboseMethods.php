<?php

namespace ChinLeung\VerboseLocalization\Concerns;

trait HasHmongMienVerboseMethods
{
    /**
     * Retrieve the translation in another locale.
     *
     * @param  string  $locale
     * @return mixed
     */
    abstract public function getTranslationIn(string $locale);

    /**
     * Function to retrieve the name in Hmong.
     *
     * @return mixed
     */
    public function inHmong() : string
    {
        return $this->getTranslationIn('hmn');
    }
}
