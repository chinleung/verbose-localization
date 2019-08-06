<?php

namespace ChinLeung\VerboseLocalization\Concerns;

trait HasIndoIranianVerboseMethods
{
    /**
     * Retrieve the translation in another locale.
     *
     * @param  string  $locale
     * @return mixed
     */
    abstract public function getTranslationIn(string $locale);

    /**
     * Function to retrieve the translation in Bengali.
     *
     * @return mixed
     */
    public function inBengali()
    {
        return $this->getTranslationIn('bn');
    }

    /**
     * Function to retrieve the translation in Gujarati.
     *
     * @returnsmixed
     */
    public function inGujarati()
    {
        return $this->getTranslationIn('gu');
    }

    /**
     * Function to retrieve the translation in Hindi.
     *
     * @returnsmixed
     */
    public function inHindi()
    {
        return $this->getTranslationIn('hi');
    }

    /**
     * Function to retrieve the translation in Kurdish (Kurmanji).
     *
     * @returnsmixed
     */
    public function inKurmanjiKurdish()
    {
        return $this->getTranslationIn('ku');
    }

    /**
     * Function to retrieve the translation in Marathi.
     *
     * @returnsmixed
     */
    public function inMarathi()
    {
        return $this->getTranslationIn('mr');
    }

    /**
     * Function to retrieve the translation in Nepali.
     *
     * @returnsmixed
     */
    public function inNepali() : string
    {
        return $this->getTranslationIn('ne');
    }

    /**
     * Function to retrieve the translation in Pashto.
     *
     * @returnsmixed
     */
    public function inPashto() : string
    {
        return $this->getTranslationIn('ps');
    }

    /**
     * Function to retrieve the translation in Persian.
     *
     * @returnsmixed
     */
    public function inPersian() : string
    {
        return $this->getTranslationIn('fa');
    }

    /**
     * Function to retrieve the translation in Punjabi.
     *
     * @returnsmixed
     */
    public function inPunjabi() : string
    {
        return $this->getTranslationIn('pa');
    }

    /**
     * Function to retrieve the translation in Urdu.
     *
     * @returnsmixed
     */
    public function inUrdu() : string
    {
        return $this->getTranslationIn('ur');
    }

    /**
     * Function to retrieve the translation in Tajik.
     *
     * @returnsmixed
     */
    public function inTajik() : string
    {
        return $this->getTranslationIn('tg');
    }

    /**
     * Function to retrieve the translation in Sinhala.
     *
     * @returnsmixed
     */
    public function inSinhala() : string
    {
        return $this->getTranslationIn('si');
    }

    /**
     * Function to retrieve the translation in Sindhi.
     *
     * @returnsmixed
     */
    public function inSindhi() : string
    {
        return $this->getTranslationIn('sd');
    }
}
