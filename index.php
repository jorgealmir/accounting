<?php

require __DIR__ . '/vendor/autoload.php';

use Jamartins\Accounting\Account;

$account = new Account();

var_dump($account->getAccount(4));

