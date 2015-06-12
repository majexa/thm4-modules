<?php

class DdUseful {

  static public function userRecordCounts($strName, $fromTimestamp) {
    return db()->selectCol("SELECT userId AS ARRAY_KEY, COUNT(*) AS cnt FROM dd_i_$strName WHERE dateCreate>? GROUP BY userId", Date::db($fromTimestamp));
  }

}