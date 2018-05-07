# ar-php 


This Library clone from [ar-php](http://ar-php.com/),
It is a powerfull library to support Arabic in PHP.


Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
composer require ameen-sarsour/ar-php
```

Usage
-----


### Example Conver Hijri String to TimeStamp

```include ('vendor/autoload.php');

use \ArPhp\Arabic;

$time = time();
$Arabic = new Arabic('StrToTime');

$str  = '1 رمضان 1439';
$int  = $Arabic->strtotime($str, $time);
$date = date('l dS F Y', $int);
echo "String: $str \n";
echo "TimeStamp: $int \n";
echo "Date: $date \n";
```

##Yii2

### same Example 

To use this extension,  simply add the following code in your application configuration:

```php
return [
    //....
    'components' => [
     'strToTime'=>[
               'class' => \ArPhp\Arabic::class,
               'library' => '{{name of library eg. strToTime}}'
           ],
    ],
];
```

You can then call the function :

```php
        $str  = '1 رمضان 1439';
        $int  = \Yii::$app->strToTime->strtotime($str, $time);
        $date = date('l dS F Y', $int);
        echo "String: $str \n";
        echo "TimeStamp: $int \n";
        echo "Date: $date \n";
        echo $message . "\n";
```



# ArPHP Full Features
|  en| العربية  | library name | Example Github link | Example Result |
| ------- | ------- | ------- | ----- | ----- |
|  Arabic text auto summarization | التلخيص الآلي للنص العربي |AutoSummarize | [Example](https://github.com/ameen-sarsour/ar-php/blob/master/src/I18N/Arabic/Examples/AutoSummarize.php) | [Result](http://www.ar-php.org/I18N/Arabic/Examples/AutoSummarize.php)
| Advanced Arabic search (stem based) |  بحث متقدم بالعربية (بدلالة ساق الكلمة) | Query | [Example](https://github.com/ameen-sarsour/ar-php/blob/master/src/I18N/Arabic/Examples/Query.php) | [Result](http://www.ar-php.org/I18N/Arabic/Examples/Query.php) |
| Present dates in Arabic or Hijri |  عرض التواريخ بالعربية أو الهجرية | Date | [Example](https://github.com/ameen-sarsour/ar-php/blob/master/src/I18N/Arabic/Examples/Date.php) | [Result](http://www.ar-php.org/I18N/Arabic/Examples/Date.php) |
| Convert Hijri date into Unix timestamp  | تحويل التاريخ الهجري إلى Unix timestamp |  Mktime | [Example](https://github.com/ameen-sarsour/ar-php/blob/master/src/I18N/Arabic/Examples/Mktime.php) | [Result](http://www.ar-php.org/I18N/Arabic/Examples/Mktime.php) |
| Parse Arabic textual datetime into timestamp  |  تحويل أي نص عربي يصف التاريخ إلى timestamp  | StrToTime  | [Example](https://github.com/ameen-sarsour/ar-php/blob/master/src/I18N/Arabic/Examples/StrToTime.php) | [Result](http://www.ar-php.org/I18N/Arabic/Examples/StrToTime.php) |
| Transliterate English words in Arabic |  الترجمة اللفظية للكلمات الإنجليزية بالعربية  |  Transliteration | [Example](https://github.com/ameen-sarsour/ar-php/blob/master/src/I18N/Arabic/Examples/ArTransliteration.php) | [Result](http://www.ar-php.org/I18N/Arabic/Examples/ArTransliteration.php) |
| Transliterate Arabic words in English  |   الترجمة اللفظية للكلمات العربية بالإنجليزية | Transliteration  | [Example](https://github.com/ameen-sarsour/ar-php/blob/master/src/I18N/Arabic/Examples/EnTransliteration.php) | [Result](http://www.ar-php.org/I18N/Arabic/Examples/EnTransliteration.php) |
|  Spell numbers in Arabic idiom |   التفقيط: كتابة الأرقام العربية | Numbers  | [Example](https://github.com/ameen-sarsour/ar-php/blob/master/src/I18N/Arabic/Examples/Numbers.php) | [Result](http://www.ar-php.org/I18N/Arabic/Examples/Numbers.php) |
| Phonetically alike Arabic words  |  التشابه اللفظي للكلمات العربية  |  Soundex | [Example](https://github.com/ameen-sarsour/ar-php/blob/master/src/I18N/Arabic/Examples/Soundex.php) | [Result](http://www.ar-php.org/I18N/Arabic/Examples/Soundex.php) |
|  Arabic character set auto detection |  التعرف الآلي على مجموعة المحارف العربية  |  CharsetD | [Example](https://github.com/ameen-sarsour/ar-php/blob/master/src/I18N/Arabic/Examples/CharsetD.php) | [Result](http://www.ar-php.org/I18N/Arabic/Examples/CharsetD.php) |
|  Identify Arabic in multi language documents |  تمييز النصوص العربية في الوثائق المتعددة اللغات  | Identifier  | [Example](https://github.com/ameen-sarsour/ar-php/blob/master/src/I18N/Arabic/Examples/Identifier.php) | [Result](http://www.ar-php.org/I18N/Arabic/Examples/Identifier.php) |
|  Identify names & places in Arabic text |  تحديد الأسماء والأماكن في النص العربي  | WordTag  | [Example](https://github.com/ameen-sarsour/ar-php/blob/master/src/I18N/Arabic/Examples/WordTag.php) | [Result](http://www.ar-php.org/I18N/Arabic/Examples/WordTag.php) |
| Guess gender of Arabic names  |  تخمين جنس الأسماء العربية  | Gender  | [Example](https://github.com/ameen-sarsour/ar-php/blob/master/src/I18N/Arabic/Examples/Gender.php) | [Result](http://www.ar-php.org/I18N/Arabic/Examples/Gender.php) |
|  Convert keyboard language programmatically | تغيير لغة لوحة المفاتيح برمجيا   |  KeySwap | [Example](https://github.com/ameen-sarsour/ar-php/blob/master/src/I18N/Arabic/Examples/KeySwap.php) | [Result](http://www.ar-php.org/I18N/Arabic/Examples/KeySwap.php) |
|  Calculate the time of Muslim prayer | حساب أوقات صلاة المسلمين   | Salat  | [Example](https://github.com/ameen-sarsour/ar-php/blob/master/src/I18N/Arabic/Examples/Salat.php) | [Result](http://www.ar-php.org/I18N/Arabic/Examples/Salat.php) |
| Compress string using Huffman-like coding  |  ضغط النصوص بشيفرة مشابهة لشيفرة هوفمان  | CompressStr  | [Example](https://github.com/ameen-sarsour/ar-php/blob/master/src/I18N/Arabic/Examples/CompressStr.php) | [Result](http://www.ar-php.org/I18N/Arabic/Examples/CompressStr.php) |
| Standardize Arabic text  |  نسيق النصوص العربية  | Standard  | [Example](https://github.com/ameen-sarsour/ar-php/blob/master/src/I18N/Arabic/Examples/Standard.php) | [Result](http://www.ar-php.org/I18N/Arabic/Examples/Standard.php) |
|  Arabic stemmer |  استخلاص ساق  (جذر) الكلمة  |  Stemmer | [Example](https://github.com/ameen-sarsour/ar-php/blob/master/src/I18N/Arabic/Examples/Stemmer.php) | [Result](http://www.ar-php.org/I18N/Arabic/Examples/Stemmer.php) |
|  Arabic Cities List |  قائمة المدن العربية  |  ---  | [Example](https://github.com/ameen-sarsour/ar-php/blob/master/src/I18N/Arabic/Examples/City.php) | [Result](http://www.ar-php.org/I18N/Arabic/Examples/City.php) |
|  Informations about Arabic countries |  معلومات عن الدول العربية  |   | [Example](https://github.com/ameen-sarsour/ar-php/blob/master/src/I18N/Arabic/Examples/Info.php) | [Result](http://www.ar-php.org/I18N/Arabic/Examples/Info.php) |
|  Arabic text normalisation |  تسوية/توحيد النص العربي  | Normalise  | [Example](https://github.com/ameen-sarsour/ar-php/blob/master/src/I18N/Arabic/Examples/Normalise.php) | [Result](http://www.ar-php.org/I18N/Arabic/Examples/Normalise.php) |
| Translate English words into Hieroglyphics  |   ترجمة الكلمات الإنجليزية إلى الهيروغليفية |   | [Example](https://github.com/ameen-sarsour/ar-php/blob/master/src/I18N/Arabic/Examples/Hiero.php) | [Result](http://www.ar-php.org/I18N/Arabic/Examples/Hiero.php) |
|  Translate English words into Phoenician |  ترجمة الكلمات الإنجليزية إلى الفينيقية  |   | [Example](https://github.com/ameen-sarsour/ar-php/blob/master/src/I18N/Arabic/Examples/Phoenician.php) | [Result](http://www.ar-php.org/I18N/Arabic/Examples/Phoenician.php) |



# ArPHP Official Site
For full documentation [ar-php](http://ar-php.com/)

## License

GNU Lesser General Public License v3.0