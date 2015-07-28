<?php

return [
  'text' => '$v',
  'image' => '$v ? `<a href="`.$v.`" class="thumb lightbox" target="_blank"><img src="`.Misc::getFilePrefexedPath($v, `md_`).`" title="`.Date::str($item[`eventDate_tStamp`]).`: `.$item[`title`].`" /></a>` : ``',
  'eventDate' => 'Date::str($item[`eventDate_tStamp`])',
  'eventTime' => '$v != `00:00:00` ? `&nbsp;—&nbsp;`.Date::time($v) : ``',
  'price' => '`Цена: `.$v',
];
