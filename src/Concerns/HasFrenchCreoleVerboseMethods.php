<?php

namespace ChinLeung\VerboseLocalization\Concerns;

trait HasFrenchCreoleVerboseMethods
{
    /**
     * Retrieve the translation in another locale.
     *
     * @var  string 
     * @return mixed
     */
    abstract public function getTranslationIn(string $locale);

    /**
     * Function to retrieve the translation in Haitian Creole.
     *
     * @return mixed
     */
    public function inHaitianCreole()
    {
        return $this->getTranslationIn('ht');
    }
}
