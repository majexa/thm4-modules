<?php

class AfishaCalendar extends DdCalendar {

  public $ddddCell = '
`<td`.($class ? ` class="`.$class.`"` : ``).`>`.
  ($empty ? `&nbsp;` : `<div>`.($link ? `<a href="`.$link.`">`.$day.`</a>` : `<span>`.$day.`</span>`).`</div>`).`</td>`'
;

  function __construct($basePath) {
    parent::__construct('afisha', $basePath);
  }

}
