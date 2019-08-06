<?php

namespace ChinLeung\VerboseLocalization\Concerns;

trait HasMonogolicVerboseMethods
{
    /**
     * Retrieve the translation in another locale.
     *
     * @var  string 
     * @return mixed
     */
    abstract public function getTranslationIn(string $locale);

    /**
     * Function to retrieve the translation in Mongolian.
     *
     * @return mixed
     */
    public function inMongolian()
    {
        return $this->getTranslationIn('mn');
    }
}
