# ar-php 

The [ar-php](http://ar-php.com/) is a powerfull library, but it's not update from years, So this fork it to continue develop it with latest Version Controll (Git) and packaging (Composer).

## Example Conver Hijri String to TimeStamp

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

## License

GNU Lesser General Public License v3.0