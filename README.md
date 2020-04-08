# Simple PHP Bilty API by Isrg
Simple PHP Bilty API by Isrg Rajan can be used to generate short bitly URL without SDK or any additionaly bulky code that me create performance issues.
## Ingeration:
```
<?php 
include("./isrg-bitly/api.php");
$genericAccessToken="your-bitly-generic-AccessToken-"; // See: https://bitly.is/2UQ3XLo
$full_url="https://www.google.com"; 
$short_url=get_short_url($full_url, $genericAccessToken);
echo $short_url;
?>
```
## Credit:
- Author: Isrg Rajan
- Website: www.isrgrajan.com
- Licensed: Mozilla Public License Version 2.0
