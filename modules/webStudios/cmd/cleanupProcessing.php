<?php

// ставить processing=false для записей, которые не обновлялись час
$items = new DdItems('portfolio');
$items->cond->addRangeFilter('dateUpdate', 0, Date::db(time() - 60 * 60));
$items->cond->addF('processing', true);
$_items = $items->getItems();
if (!count($_items)) return;
foreach ($_items as $v) $items->update($v['id'], [
  'processing' => false,
  'available' => false
]);
output('disable '.count($_items).' items');