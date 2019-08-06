<?php

namespace ChinLeung\VerboseLocalization\Concerns;

trait HasDravidianVerboseMethods
{
    /**
     * Retrieve the translation in another locale.
     *
     * @param  string  $locale
     * @return mixed
     */
    abstract public function getTranslationIn(string $locale);

    /**
     * Function to retrieve the translation in Kannada.
     *
     * @return mixed
     */
    public function inKannada()
    {
        return $this->getTranslationIn('kn');
    }

    /**
     * Function to retrieve the translation in Malayalam.
     *
     * @return mixed
     */
    public function inMalayalam()
    {
        return $this->getTranslationIn('ml');
    }

    /**
     * Function to retrieve the translation in Tamil.
     *
     * @return mixed
     */
    public function inTamil()
    {
        return $this->getTranslationIn('ta');
    }

    /**
     * Function to retrieve the translation in Telugu.
     *
     * @return mixed
     */
    public function inTelugu()
    {
        return $this->getTranslationIn('te');
    }
}
