<?php

return [
  'title' => '`<h2>`.$v.`</h2><div class="updateTime gray"><small>Проверка доступности:<br>`.Date::datetimeStr($item[`dateUpdate_tStamp`]).`</small></div><div class="latency gray"><small>Время загрузки:<br>`.round($item[`latency`]/1000).` секунд</small></div>`',
  'available' => '$v ? `<img src="/`.UPLOAD_DIR.`/captures/`.$id.`.png" alt="`.$item[`title`].`">` : ``',
];
