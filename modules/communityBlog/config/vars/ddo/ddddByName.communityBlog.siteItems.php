<?php

return [
  'title' => '($v ? `<h2>`.$v.`</h2>` : ``)',
  'images' => 'St::enum($v, ``, `"<a href=/".UPLOAD_DIR.\\`/\\`.$v." class=\\`thumb lightbox\\`><img src=/".UPLOAD_DIR."/".Misc::getFilePrefexedPath($v, \\"sm_\\")."></a>"`)',
  'text' => '`<a href="`.$pagePath.`/item/`.$id.`" class="dgray">`.$v.`</a>`',
  'dateCreate' => '$v ? Date::datetimeStrSql($v) : ``',
];
