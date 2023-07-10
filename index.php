<?php
require("easybitcoin.php");

$bitcoin = new Bitcoin("wiki", "admin");


$block = $bitcoin->getblockchaininfo();
print_r($block);

$difficulty = $bitcoin->getdifficulty();
print_r($difficulty);

$transaction = $bitcoin->getnewaddress();
//print_r($transaction);

$info = $bitcoin-> getnetworkinfo();
//print_r($info);

$infop = $bitcoin-> preciousblock();
//print_r($infop);
?>