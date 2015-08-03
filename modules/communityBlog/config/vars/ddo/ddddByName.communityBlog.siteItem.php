<?php

return [
  //'title' => '($v ? `<h2>`.$v.`</h2>` : ``)',
  'images' => 'St::enum($v, ``, `"<a href=/".UPLOAD_DIR.\\`/\\`.$v." class=\\`thumb lightbox\\`><img src=".ThmFourRouter::thumbUrl(Misc::getFilePrefexedPath($v, \\"md_\\"), 120, 90)."></a>"`)',
  'text' => '$v',
  //'dateCreate' => '$v ? Date::datetimeStrSql($v) : ``',
];
