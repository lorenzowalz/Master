<?php
	$mysql = array(
		'user' => 'root',
		'password' => '',
		'host' => 'localhost',
		'database' => 'btc'
	);

	mysql_connect($mysql['host'], $mysql['user'], $mysql['password']) or die("Cannot connect to database.");
	mysql_select_db($mysql['database']);
	
	$rpc = array(
		'login' => 'RPC_login',
		'password' => 'RPC_password',
		'ip' => '127.0.0.1',
		'port' => '8332'
	);
	
	$config = array(
		'name' => 'BuzzCoin Staker',																	// Name of your ponzi
		'title' => '100% 30 Day Stake!',																// Description
		'full-name' => 'BuzzCoin Staker',												// Full name of your ponzi
		'val' => 'BUZZ',																				// Cryptocurrency abbreviation
		'precision' => 4,
		'confirmations' => 1,																	// Minimum number of confirmations to add transaction
		'min' => 0.001,																				// Minimum pay in
		'max' => 5000,																				// Maximum pay in
		'income' => 0,																			// How much money to send - default: 0.1 - 110%
		'fee' => 0.03,																				// Fee taken from pay in amount
		'payout-check' => 2592000,																// Time between payouts
		'ownaddress' => '1MSkXPRK293dDMD5ds6KqVtyDadDkRyanX', // Your address
		'sendback' => true,																	// What to do with txs that are over maximum or under minimum | true - send back, false - send to your address
		'ponziacc' => 'buzz',																	// Name of daemon account
		'address' => '1ponzisApJfHtgrwP7CrpfEgseBmPcRD4',			// Ponzi address
		'privkey' => '',																			// Needed in setup, private key of your address
		'blockchain-addr' => 'https://blockchain.info/en/address/',
		'blockchain-tx' => 'https://blockchain.info/en/tx/'
	);
?>