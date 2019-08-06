<?php

namespace ChinLeung\VerboseLocalization\Concerns;

trait HasDravidianVerboseMethods
{
    /**
     * Retrieve the translation in another locale.
     *
     * @var  string  $locale
     * @return mixed
     */
    abstract public function getTranslationIn(string $locale);

    /**
     * Function to retrieve the translation in Kannada.
     *
     * @returnsmixed
     */
    public function inKannada()
    {
        return $this->getTranslationIn('kn');
    }

    /**
     * Function to retrieve the translation in Malayalam.
     *
     * @returnsmixed
     */
    public function inMalayalam()
    {
        return $this->getTranslationIn('ml');
    }

    /**
     * Function to retrieve the translation in Tamil.
     *
     * @returnsmixed
     */
    public function inTamil()
    {
        return $this->getTranslationIn('ta');
    }

    /**
     * Function to retrieve the translation in Telugu.
     *
     * @returnsmixed
     */
    public function inTelugu()
    {
        return $this->getTranslationIn('te');
    }
}
