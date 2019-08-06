<?php

namespace ChinLeung\VerboseLocalization\Concerns;

trait HasKoreanicVerboseMethods
{
    /**
     * Retrieve the translation in another locale.
     *
     * @var  string 
     * @return mixed
     */
    abstract public function getTranslationIn(string $locale);

    /**
     * Function to retrieve the translation in Korean.
     *
     * @return mixed
     */
    public function inKorean()
    {
        return $this->getTranslationIn('ko');
    }
}
