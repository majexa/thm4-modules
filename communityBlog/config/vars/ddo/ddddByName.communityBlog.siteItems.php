<?php

return [
  'title' => '`<img class="avatar" src="`.O::get(`DdItems`, `profile`)->getItem($authorId)[`sm_image`].`">`.DbModelCore::get(`users`, $authorId)[`login`].($v ? `<h2>`.$v.`</h2>` : ``)',
  'images' => 'St::enum($v, ``, `"<img src=".UPLOAD_DIR."/".$v.">"`)'
];
