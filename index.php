<?php
require("easybitcoin.php");

//you can undo the comment and print the value of a function or use it . 

$bitcoin = new Bitcoin("wiki", "admin");

// In this line of code, I simple get the info about the blockchain in general
$block = $bitcoin->getblockchaininfo();
//print_r($block);

// In this line of code, I simple get the info about the difficulty of each transaction happening on blockchain
$difficulty = $bitcoin->getdifficulty();
//print_r($difficulty);

//In this line of code, I get info about miner, who do mining the recent block: 
$mine = $bitcoin-> getmininginfo();
//print_r($mine);

//transaction to send to the network with signature&wallet after the mining fn finds a nonce with the info) 
$trans = $bitcoin-> gettransaction();
//print_r($trans);

//Returns an object containing various state info regarding P2P networking.
$info = $bitcoin-> getnetworkinfo();
//print_r($info);

//Returns an object containing various state info regarding P2P networking.
$prv = $bitcoin-> preciousblock();
//print_r($prv);
?>