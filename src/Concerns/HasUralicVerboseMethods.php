<?php

namespace ChinLeung\VerboseLocalization\Concerns;

trait HasUralicVerboseMethods
{
    /**
     * Retrieve the translation in another locale.
     *
     * @var  string  $locale
     * @return mixed
     */
    abstract public function getTranslationIn(string $locale);

    /**
     * Function to retrieve the translation in Estonian.
     *
     * @return mixed
     */
    public function inEstonian()
    {
        return $this->getTranslationIn('et');
    }

    /**
     * Function to retrieve the translation in Finnish.
     *
     * @return mixed
     */
    public function inFinnish()
    {
        return $this->getTranslationIn('fi');
    }

    /**
     * Function to retrieve the translation in Hungarian.
     *
     * @return mixed
     */
    public function inHungarian()
    {
        return $this->getTranslationIn('hu');
    }
}
