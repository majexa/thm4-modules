<?php

return [
  'title' => '`<h2><a href="`.$pagePath.`/item/`.$id.`">`.$v.`</a></h2><small class="copy gray" style="float:right">&copy; `.$item[`source`].`</small>`',
  'text' => '$v',
  'image' => '$v ? `<a href="`.$v.`" class="thumb lightbox" target="_blank"><img src="`.Misc::getFilePrefexedPath($v, `sm_`).`" title="`.Date::str($item[`eventDate_tStamp`]).`: `.$item[`title`].`" /></a>` : ``',
  'eventDate' => 'Date::str($item[`eventDate_tStamp`]).`&nbsp;—&nbsp;`',
  'eventTime' => '$v != `00:00:00` ? Date::time($v) : ``',
  'price' => '`Цена: `.$v'
];
