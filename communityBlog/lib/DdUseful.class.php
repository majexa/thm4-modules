<?php

class DdUseful {

  static public function userRecordCounts($strName, $fromTimestamp) {
    return db()->selectCol("SELECT userId AS ARRAY_KEY, COUNT(*) AS cnt FROM dd_i_$strName WHERE dateCreate>? GROUP BY userId", Date::db($fromTimestamp));
  }

  static public function sortItemsByUserRecordCounts(array $items, array $userRecordCounts) {
    asort($userRecordCounts);
    return Arr::sortByArray($items, 'userId', array_keys(array_reverse($userRecordCounts, true)));
  }

}