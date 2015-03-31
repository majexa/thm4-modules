<?php

$im = DdCore::imDefault('info');
$im->items->cond->addFromFilter('id', 4);
foreach ($im->items->ids() as $id) $im->delete($id);

$im = DdCore::imDefault('portfolio');
$im->items->cond->addFromFilter('id', 11);
foreach ($im->items->ids() as $id) $im->delete($id);

db()->query("DELETE FROM users WHERE id>11");

print "done\n";