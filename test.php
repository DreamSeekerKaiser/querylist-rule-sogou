<?php

require 'vendor/autoload.php';

use QL\QueryList;
use QL\Ext\Sogou;

$queryList = QueryList::getInstance();
$queryList->use(Sogou::class);
$searcher = $queryList->sogou()->search('薛凯琪');
$results = $searcher->getSuggestions();

print_r($results);