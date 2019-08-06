<?php

namespace ChinLeung\VerboseLocalization\Concerns;

trait HasTurkicVerboseMethods
{
    /**
     * Retrieve the translation in another locale.
     *
     * @var  string 
     * @return mixed
     */
    abstract public function getTranslationIn(string $locale);

    /**
     * Function to retrieve the translation in Azerbaijani.
     *
     * @return mixed
     */
    public function inAzerbaijani()
    {
        return $this->getTranslationIn('az');
    }

    /**
     * Function to retrieve the translation in Kazakh.
     *
     * @return mixed
     */
    public function inKazakh()
    {
        return $this->getTranslationIn('kk');
    }

    /**
     * Function to retrieve the translation in Kyrgyz.
     *
     * @return mixed
     */
    public function inKyrgyz()
    {
        return $this->getTranslationIn('ky');
    }

    /**
     * Function to retrieve the translation in Turkish.
     *
     * @return mixed
     */
    public function inTurkish()
    {
        return $this->getTranslationIn('tr');
    }

    /**
     * Function to retrieve the translation in Uzbek.
     *
     * @return mixed
     */
    public function inUzbek()
    {
        return $this->getTranslationIn('uz');
    }
}
