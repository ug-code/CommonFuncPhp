# CommonFuncPhp
public function pool


requirements
---
Metod1
```php
using ->include
To use remote includes, the allow_url_fopen and allow_url_include option must be set in php.ini
allow_url_include=On
allow_url_fopen=On
```

For Example
----
Metod1
```sh
include('https://raw.githubusercontent.com/ug-code/CommonFuncPhp/master/functions.global.php');
```
Metod2
```php
<?php

$myscript = fopen("https://raw.githubusercontent.com/ug-code/CommonFuncPhp/master/functions.global.php", "r");
$incmyscript= fread($myscript , 9999);
fclose($myscript);
// include in the contents of my_script.php    

eval("?> ".$incmyscript);

?>
```
Method3
```sh
$remote =file_get_contents("https://raw.githubusercontent.com/ug-code/CommonFuncPhp/master/functions.global.php");
eval("?> ".$remote);
```

Turkish Note:
--
```sh
Amac her projede sık kullanılan foksiyonları uzaktan çagırmak hem alandan tasarruf hem zamandan.

Bu yöntem zafiyetlere yol açabilir uygularken güvenlik önlemlerinizi alın.
```



