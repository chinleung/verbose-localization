<?php

namespace ChinLeung\VerboseLocalization\Concerns;

trait HasNigerCongoVerboseMethods
{
    /**
     * Retrieve the translation in another locale.
     *
     * @var  string 
     * @return mixed
     */
    abstract public function getTranslationIn(string $locale);

    /**
     * Function to retrieve the translation in Chewa.
     *
     * @return mixed
     */
    public function inChewa()
    {
        return $this->getTranslationIn('ny');
    }

    /**
     * Function to retrieve the translation in Chichewa.
     *
     * @return mixed
     */
    public function inChichewa()
    {
        return $this->inChewa();
    }

    /**
     * Function to retrieve the translation in Igbo.
     *
     * @return mixed
     */
    public function inIgbo()
    {
        return $this->getTranslationIn('ig');
    }

    /**
     * Function to retrieve the translation in Sesotho.
     *
     * @return mixed
     */
    public function inSesotho()
    {
        return $this->getTranslationIn('st');
    }

    /**
     * Function to retrieve the translation in Shona.
     *
     * @return mixed
     */
    public function inShona()
    {
        return $this->getTranslationIn('sn');
    }

    /**
     * Function to retrieve the translation in Swahili.
     *
     * @return mixed
     */
    public function inSwahili()
    {
        return $this->getTranslationIn('sw');
    }

    /**
     * Function to retrieve the translation in Xhosa.
     *
     * @return mixed
     */
    public function inXhosa()
    {
        return $this->getTranslationIn('xh');
    }

    /**
     * Function to retrieve the translation in Yoruba.
     *
     * @return mixed
     */
    public function inYoruba()
    {
        return $this->getTranslationIn('yo');
    }

    /**
     * Function to retrieve the translation in Zulu.
     *
     * @return mixed
     */
    public function inZulu()
    {
        return $this->getTranslationIn('zu');
    }
}
