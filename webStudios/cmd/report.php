<?php

$itemsTotal = new DdItems('portfolio');
//die2($itemsTotal->count());
//print $itemsTotal->cond->all();

$itemsToday = clone $itemsTotal;
//die2($itemsTotal->cond === $itemsToday->cond);
$itemsToday->cond->addTodayFilter('dateUpdate');
print "works: processed today / total: ".$itemsToday->count().'/'.$itemsTotal->count()."\n";
//print "///".$itemsTotal->count()."\n";