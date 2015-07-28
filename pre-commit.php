<?php

define('NGN_PATH', dirname(__DIR__).'/ngn');
require NGN_PATH.'/init/core.php';
foreach (glob(__DIR__.'/modules/*') as $dir) {
  $structures = require $dir.'/structures.php';
  $name = basename($dir);
  $prevStructures = require __DIR__.'/state/'.$name.'.php';
  if ($prevStructures == $structures) continue;
  foreach ($prevStructures as $strName => $fields) {
    foreach ($fields as $prevField) {
      $field = Arr::getValueByKey($structures[$strName], 'name', $prevField['name']);
      if (!$field) {
        print "Unknown error. Cant commit";
        exit(1);
      }
      if (count($field) < count($prevField)) {
        print "Number count of '$strName' structure can't be less then was before";
        exit(1);
      }
    }
  }
  print "stored $name\n";
  file_put_contents(__DIR__.'/state/'.$name.'.php', "<?php\n\nreturn ".var_export($structures, true).';');
}

