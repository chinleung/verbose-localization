<?php

namespace ChinLeung\VerboseLocalization\Concerns;

trait HasAustronesianVerboseMethods
{
    /**
     * Retrieve the translation in another locale.
     *
     * @param  string  $locale
     * @return mixed
     */
    abstract public function getTranslationIn(string $locale);

    /**
     * Function to retrieve the name in Cebuano.
     *
     * @returnsmixed
     */
    public function inCebuano() : string
    {
        return $this->getTranslationIn('ceb');
    }

    /**
     * Function to retrieve the name in Filipino.
     *
     * @returnsmixed
     */
    public function inFilipino() : string
    {
        return $this->getTranslationIn('tl');
    }

    /**
     * Function to retrieve the name in Hawaiian.
     *
     * @returnsmixed
     */
    public function inHawaiian() : string
    {
        return $this->getTranslationIn('haw');
    }

    /**
     * Function to retrieve the translation in Indonesian.
     *
     * @returnsmixed
     */
    public function inIndonesian()
    {
        return $this->getTranslationIn('id');
    }

    /**
     * Function to retrieve the name in Javanese.
     *
     * @returnsmixed
     */
    public function inJavanese() : string
    {
        return $this->getTranslationIn('jw');
    }

    /**
     * Function to retrieve the name in Khmer.
     *
     * @returnsmixed
     */
    public function inKhmer() : string
    {
        return $this->getTranslationIn('km');
    }

    /**
     * Function to retrieve the name in Malagasy.
     *
     * @returnsmixed
     */
    public function inMalagasy() : string
    {
        return $this->getTranslationIn('mg');
    }

    /**
     * Function to retrieve the name in Malay.
     *
     * @returnsmixed
     */
    public function inMalay() : string
    {
        return $this->getTranslationIn('ms');
    }

    /**
     * Function to retrieve the name in Maori.
     *
     * @returnsmixed
     */
    public function inMaori() : string
    {
        return $this->getTranslationIn('mi');
    }

    /**
     * Function to retrieve the name in Samoan.
     *
     * @returnsmixed
     */
    public function inSamoan() : string
    {
        return $this->getTranslationIn('sm');
    }

    /**
     * Function to retrieve the name in Sundanese.
     *
     * @returnsmixed
     */
    public function inSundanese() : string
    {
        return $this->getTranslationIn('su');
    }

    /**
     * Function to retrieve the name in Vietnamese.
     *
     * @returnsmixed
     */
    public function inVietnamese() : string
    {
        return $this->getTranslationIn('vi');
    }
}
