# Verbose Localization

[![Latest Version on Packagist](https://img.shields.io/packagist/v/chinleung/verbose-localization.svg?style=flat-square)](https://packagist.org/packages/chinleung/verbose-localization)
[![Build Status](https://img.shields.io/travis/chinleung/verbose-localization/master.svg?style=flat-square)](https://travis-ci.org/chinleung/verbose-localization)
[![Quality Score](https://img.shields.io/scrutinizer/g/chinleung/verbose-localization.svg?style=flat-square)](https://scrutinizer-ci.com/g/chinleung/verbose-localization)
[![Total Downloads](https://img.shields.io/packagist/dt/chinleung/verbose-localization.svg?style=flat-square)](https://packagist.org/packages/chinleung/verbose-localization)

A package to allow your class to support verbose localization.

## Installation

You can install the package via composer:

```bash
composer require chinleung/verbose-localization
```

## Usage

Add the `ChinLeung\VerboseLocalization\HasVerboseLocalization` trait to your class and create a method `getTranslationIn(string $locale)` to handle the translation of your class and get access to all the verbose methods instantly like the following example.

Suppose you have files with the translation of the text equivalent of numbers:

``` php
<?php

class NumberClass
{
    use ChinLeung\VerboseLocalization\HasVerboseLocalization;

    /**
     * Constructor of the class.
     *
     * @param  int  $value
     */
    public function __construct(int $value)
    {
        $this->value = $value;
    }

    /**
     * Retrieve the translation in a specific locale.
     *
     * @param  string  $locale
     * @return string
     */
    public function getTranslationIn(string $locale) : string
    {
        $translations = require __DIR__."/resources/lang/$locale/numbers.php";

        return $translations[$this->value];
    }
}
```

Then you can retrieve the translations like this:

```
$number = new NumberClass(1);

$number->inFrench(); // 'un'
$number->inEnglish(); // 'one'
$number->inSimplifiedChinese(); // '一'
```

## Methods

The methods are seperated by language families which are located in [src/Concerns](https://github.com/chinleung/verbose-localization/tree/master/src/Concerns).

### [Afro-Asiatic](https://github.com/chinleung/verbose-localization/tree/master/src/Concerns/HasAfroAsiaticVerboseMethods.php)

<details>
<summary>View Methods</summary>

* inAmharic
* inArabic
* inHausa
* inHebrew
* inMaltese
* inSomali
</details>

### [Austronesian](https://github.com/chinleung/verbose-localization/tree/master/src/Concerns/HasAustronesianVerboseMethods.php)

<details>
<summary>View Methods</summary>

* inCebuano
* inFilipino
* inHawaiian
* inJavanese
* inKhmer
* inMalagasy
* inMalay
</details>

### [Dravidian](https://github.com/chinleung/verbose-localization/tree/master/src/Concerns/HasDravidianVerboseMethods.php)

<details>
<summary>View Methods</summary>

* inKannada
* inMalayalam
* inTamil
* inTelugu
</details>

### [French Creole](https://github.com/chinleung/verbose-localization/tree/master/src/Concerns/HasFrenchCreoleVerboseMethods.php)

<details>
<summary>View Methods</summary>

* inHaitianCreole
</details>

### [Hmong-Mien](https://github.com/chinleung/verbose-localization/tree/master/src/Concerns/HasHmongMienVerboseMethods.php)

<details>
<summary>View Methods</summary>

* inHmong
</details>

### [Indo-European](https://github.com/chinleung/verbose-localization/tree/master/src/Concerns/HasIndoEuropeanVerboseMethods.php)

<details>
<summary>View Methods</summary>
    
* inAlbanian
* inArmenian
* inGreek

#### [Balto-Slavic](https://github.com/chinleung/verbose-localization/tree/master/src/Concerns/HasBaltoSlavicVerboseMethods.php)

<details>
<summary>View Methods</summary>
    
* inBelarusian
* inBosnian
* inBulgarian
* inCroatian
* inCzech
* inLatvian
* inLithuanian
* inMacedonian
* inPolish
* inRussian
* inSerbian
* inSlovak
* inSlovenian
* inUkrainian
</details>

#### [Celtic](https://github.com/chinleung/verbose-localization/tree/master/src/Concerns/HasCelticVerboseMethods.php)

<details>
<summary>View Methods</summary>
    
* inIrish
* inScotsGaelic
* inWelsh
</details>

#### [Germanic](https://github.com/chinleung/verbose-localization/tree/master/src/Concerns/HasGermanicVerboseMethods.php)

<details>
<summary>View Methods</summary>
    
* inAfrikaans
* inDanish
* inDutch
* inEnglish
* inFrisian
* inGerman
* inIcelandic
* inLuxembourgish
* inNorwegian
* inSwedish
* inYiddish
</details>

#### [Indo-Iranian](https://github.com/chinleung/verbose-localization/tree/master/src/Concerns/HasIndoIranianVerboseMethods.php)

<details>
<summary>View Methods</summary>
    
* inBengali
* inGujarati
* inHindi
* inKurmanjiKurdish
* inMarathi
* inNepali
* inPashto
* inPersian
* inPunjabi
* inSindhi
* inSinhala
* inTajik
* inUrdu
</details>

#### [Italic](https://github.com/chinleung/verbose-localization/tree/master/src/Concerns/HasItalicVerboseMethods.php)

<details>
<summary>View Methods</summary>
    
* inCatalan
* inCorsican
* inFrench
* inGalician
* inItalian
* inLatin
* inPortuguese
* inRomanian
* inSpanish
</details>

</details>

### [Isolate](https://github.com/chinleung/verbose-localization/tree/master/src/Concerns/HasIsolateVerboseMethods.php)

<details>
<summary>View Methods</summary>

* inBasque
* inEsperanto
</details>

### [Japonic](https://github.com/chinleung/verbose-localization/tree/master/src/Concerns/HasJaponicVerboseMethods.php)

<details>
<summary>View Methods</summary>

* inJapanese
</details>

### [Kartvelian](https://github.com/chinleung/verbose-localization/tree/master/src/Concerns/HasKartvelianVerboseMethods.php)

<details>
<summary>View Methods</summary>

* inGeorgian
</details>

### [Koreanic](https://github.com/chinleung/verbose-localization/tree/master/src/Concerns/HasKoreanicVerboseMethods.php)

<details>
<summary>View Methods</summary>

* inKorean
</details>

### [Kra-Dai](https://github.com/chinleung/verbose-localization/tree/master/src/Concerns/HasKraDaiVerboseMethods.php)

<details>
<summary>View Methods</summary>

* inLao
* inThai
</details>

### [Monogolic](https://github.com/chinleung/verbose-localization/tree/master/src/Concerns/HasMonogolicVerboseMethods.php)

<details>
<summary>View Methods</summary>

* Mongolian
</details>

### [Niger-Congo](https://github.com/chinleung/verbose-localization/tree/master/src/Concerns/HasNigerCongoVerboseMethods.php)

<details>
<summary>View Methods</summary>

* inChewa
* inChichewa
* inIgbo
* inSesotho
* inShona
* inSwahili
* inXhosa
* inYoruba
* inZulu
</details>

### [Sino-Tibetan](https://github.com/chinleung/verbose-localization/tree/master/src/Concerns/HasSinoTibetanVerboseMethods.php)

<details>
<summary>View Methods</summary>

* inBurmeseMyanmar
* inSimplifiedChinese
* inTraditionalChinese
</details>

### [Turkic](https://github.com/chinleung/verbose-localization/tree/master/src/Concerns/HasTurkicVerboseMethods.php)

<details>
<summary>View Methods</summary>

* inAzerbaijani
* inKazakh
* inKyrgyz
* inTurkish
* inUzbek
</details>

### [Uralic](https://github.com/chinleung/verbose-localization/tree/master/src/Concerns/HasUralicVerboseMethods.php)

<details>
<summary>View Methods</summary>

* inEstonian
* inFinnish
* inHungarian
</details>

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email hello@chinleung.com instead of using the issue tracker.

## Credits

- [Chin Leung](https://github.com/chinleung)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## PHP Package Boilerplate

This package was generated using the [PHP Package Boilerplate](https://laravelpackageboilerplate.com).
