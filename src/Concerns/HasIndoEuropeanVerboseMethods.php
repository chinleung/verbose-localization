<?php

namespace ChinLeung\VerboseLocalization\Concerns;

trait HasIndoEuropeanVerboseMethods
{
    /**
     * Retrieve the translation in another locale.
     *
     * @param  string  $locale
     * @return mixed
     */
    abstract public function getTranslationIn(string $locale);

    /**
     * Function to retrieve the translation in Afrikaans.
     *
     * @return mixed
     */
    public function inAfrikaans()
    {
        return $this->getTranslationIn('af');
    }

    /**
     * Function to retrieve the translation in Albanian.
     *
     * @return mixed
     */
    public function inAlbanian()
    {
        return $this->getTranslationIn('sq');
    }

    /**
     * Function to retrieve the translation in Armenian.
     *
     * @return mixed
     */
    public function inArmenian()
    {
        return $this->getTranslationIn('hy');
    }

    /**
     * Function to retrieve the translation in Belarusian.
     *
     * @return mixed
     */
    public function inBelarusian()
    {
        return $this->getTranslationIn('be');
    }

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
     * Function to retrieve the translation in Bosnian.
     *
     * @return mixed
     */
    public function inBosnian()
    {
        return $this->getTranslationIn('bs');
    }

    /**
     * Function to retrieve the translation in Bulgarian.
     *
     * @return mixed
     */
    public function inBulgarian()
    {
        return $this->getTranslationIn('bg');
    }

    /**
     * Function to retrieve the translation in Catalan.
     *
     * @return mixed
     */
    public function inCatalan()
    {
        return $this->getTranslationIn('ca');
    }

    /**
     * Function to retrieve the translation in Corsican.
     *
     * @return mixed
     */
    public function inCorsican()
    {
        return $this->getTranslationIn('co');
    }

    /**
     * Function to retrieve the translation in Croatian.
     *
     * @return mixed
     */
    public function inCroatian()
    {
        return $this->getTranslationIn('hr');
    }

    /**
     * Function to retrieve the translation in Czech.
     *
     * @return mixed
     */
    public function inCzech()
    {
        return $this->getTranslationIn('cs');
    }

    /**
     * Function to retrieve the translation in Danish.
     *
     * @return mixed
     */
    public function inDanish()
    {
        return $this->getTranslationIn('da');
    }

    /**
     * Function to retrieve the translation in Dutch.
     *
     * @return mixed
     */
    public function inDutch()
    {
        return $this->getTranslationIn('nl');
    }

    /**
     * Function to retrieve the translation in English.
     *
     * @return mixed
     */
    public function inEnglish()
    {
        return $this->getTranslationIn('en');
    }

    /**
     * Function to retrieve the translation in French.
     *
     * @return mixed
     */
    public function inFrench()
    {
        return $this->getTranslationIn('fr');
    }

    /**
     * Function to retrieve the translation in Frisian.
     *
     * @returnsmixed
     */
    public function inFrisian()
    {
        return $this->getTranslationIn('fy');
    }

    /**
     * Function to retrieve the translation in Galician.
     *
     * @returnsmixed
     */
    public function inGalician()
    {
        return $this->getTranslationIn('gl');
    }

    /**
     * Function to retrieve the translation in German.
     *
     * @returnsmixed
     */
    public function inGerman()
    {
        return $this->getTranslationIn('de');
    }

    /**
     * Function to retrieve the translation in Greek.
     *
     * @returnsmixed
     */
    public function inGreek()
    {
        return $this->getTranslationIn('el');
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
     * Function to retrieve the translation in Icelandic.
     *
     * @returnsmixed
     */
    public function inIcelandic()
    {
        return $this->getTranslationIn('is');
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
     * Function to retrieve the translation in Irish.
     *
     * @returnsmixed
     */
    public function inIrish()
    {
        return $this->getTranslationIn('ga');
    }

    /**
     * Function to retrieve the translation in Italian.
     *
     * @returnsmixed
     */
    public function inItalian()
    {
        return $this->getTranslationIn('it');
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
     * Function to retrieve the translation in Latin.
     *
     * @returnsmixed
     */
    public function inLatin()
    {
        return $this->getTranslationIn('la');
    }

    /**
     * Function to retrieve the translation in Latvian.
     *
     * @returnsmixed
     */
    public function inLatvian()
    {
        return $this->getTranslationIn('lv');
    }

    /**
     * Function to retrieve the translation in Lithuanian.
     *
     * @returnsmixed
     */
    public function inLithuanian()
    {
        return $this->getTranslationIn('lt');
    }

    /**
     * Function to retrieve the translation in Luxembourgish.
     *
     * @returnsmixed
     */
    public function inLuxembourgish()
    {
        return $this->getTranslationIn('lb');
    }

    /**
     * Function to retrieve the translation in Macedonian.
     *
     * @returnsmixed
     */
    public function inMacedonian()
    {
        return $this->getTranslationIn('mk');
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
     * Function to retrieve the translation in Norwegian.
     *
     * @returnsmixed
     */
    public function inNorwegian() : string
    {
        return $this->getTranslationIn('no');
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
     * Function to retrieve the translation in Polish.
     *
     * @returnsmixed
     */
    public function inPolish() : string
    {
        return $this->getTranslationIn('pl');
    }

    /**
     * Function to retrieve the translation in Portuguese.
     *
     * @returnsmixed
     */
    public function inPortuguese() : string
    {
        return $this->getTranslationIn('pt');
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
     * Function to retrieve the translation in Romanian.
     *
     * @returnsmixed
     */
    public function inRomanian() : string
    {
        return $this->getTranslationIn('ro');
    }

    /**
     * Function to retrieve the translation in Russian.
     *
     * @returnsmixed
     */
    public function inRussian() : string
    {
        return $this->getTranslationIn('ru');
    }

    /**
     * Function to retrieve the translation in Scots Gaelic.
     *
     * @returnsmixed
     */
    public function inScotsGaelic() : string
    {
        return $this->getTranslationIn('gd');
    }

    /**
     * Function to retrieve the translation in Serbian.
     *
     * @returnsmixed
     */
    public function inSerbian() : string
    {
        return $this->getTranslationIn('sr');
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
     * Function to retrieve the translation in Slovak.
     *
     * @returnsmixed
     */
    public function inSlovak() : string
    {
        return $this->getTranslationIn('sk');
    }

    /**
     * Function to retrieve the translation in Slovenian.
     *
     * @returnsmixed
     */
    public function inSlovenian() : string
    {
        return $this->getTranslationIn('sl');
    }

    /**
     * Function to retrieve the translation in Spanish.
     *
     * @returnsmixed
     */
    public function inSpanish() : string
    {
        return $this->getTranslationIn('es');
    }

    /**
     * Function to retrieve the translation in Swedish.
     *
     * @returnsmixed
     */
    public function inSwedish() : string
    {
        return $this->getTranslationIn('sv');
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
     * Function to retrieve the translation in Ukrainian.
     *
     * @returnsmixed
     */
    public function inUkrainian() : string
    {
        return $this->getTranslationIn('uk');
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
     * Function to retrieve the translation in Welsh.
     *
     * @returnsmixed
     */
    public function inWelsh() : string
    {
        return $this->getTranslationIn('cy');
    }

    /**
     * Function to retrieve the translation in Yiddish.
     *
     * @returnsmixed
     */
    public function inYiddish() : string
    {
        return $this->getTranslationIn('yi');
    }
}
