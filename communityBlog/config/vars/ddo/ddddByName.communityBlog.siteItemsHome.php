<?php

return [
  'title' => '`<div class="avatarCont"><div class="name"><small><a href="/blog/user/`.$authorId.`">`.O::get(`DdItems`, `profile`)->getItemByField(`userId`, $authorId)[`name`].`</a></small></div><a href="/blog/user/`.$authorId.`"><img class="avatar" src="`.O::get(`DdItems`, `profile`)->getItemByField(`userId`, $authorId)[`sm_image`].`"></a></div>`.($v ? `<h2>`.$v.`</h2>` : ``)',
  'images' => 'St::enum($v, ``, `"<a href=/".UPLOAD_DIR.\\`/\\`.$v." class=\\`thumb lightbox\\`><img src=/".UPLOAD_DIR."/".Misc::getFilePrefexedPath($v, \\"sm_\\")."></a>"`)',
  'text' => '$v',
];
