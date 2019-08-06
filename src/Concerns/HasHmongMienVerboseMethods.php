<?php

namespace ChinLeung\VerboseLocalization\Concerns;

trait HasHmongMienVerboseMethods
{
    /**
     * Retrieve the translation in another locale.
     *
     * @var  string 
     * @return mixed
     */
    abstract public function getTranslationIn(string $locale);

    /**
     * Function to retrieve the name in Hmong.
     *
     * @returnsmixed
     */
    public function inHmong() : string
    {
        return $this->getTranslationIn('hmn');
    }
}
