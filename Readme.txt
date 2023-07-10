1) Run Xampp 
2) Run Bitcoind
3) make sure that you added bitcoin.conf in bitcoin folder
4) Run localhost to see the changes 



Include easybitcoin.php into your PHP script:

require_once('easybitcoin.php');
Initialize Bitcoin connection/object:

$bitcoin = new Bitcoin('username','password');
Optionally, you can specify a host, port. Default is HTTP on localhost port 8332.

$bitcoin = new Bitcoin('username','password','localhost','8332');
If you wish to make an SSL connection you can set an optional CA certificate or leave blank

$bitcoin->setSSL('/full/path/to/mycertificate.cert');
Make calls to bitcoind as methods for your object. Examples:

$bitcoin->getinfo();

$bitcoin->getblock('000000000019d6689c085ae165831e934ff763ae46a2a6c172b3f1b60a8ce26f');
