<?php

$jobs = count(CheckAvailabilityJob::items()->ids());
output("Jobs to add: $jobs");
for ($i = 0; $i < $jobs; $i++) {
  (new ProjectQueue)->add([
    'class' => 'CheckAvailabilityJob'
  ]);
  sleep(1);
}

