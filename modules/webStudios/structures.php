<?php

return [
  'portfolio' => [
    [
      'title'    => 'Название',
      'name'     => 'title',
      'type'     => 'typoText',
      'required' => true,
    ],
    [
      'title'    => 'Ссылка',
      'name'     => 'url',
      'type'     => 'url',
      'required' => true,
    ],
    [
      'title' => 'Описание',
      'name'  => 'text',
      'type'  => 'typoTextarea',
    ],
    [
      'title' => 'Доступна',
      'name'  => 'available',
      'type'  => 'boolCheckbox',
    ],
    [
      'title' => 'Время ожидания',
      'name'  => 'latency',
      'type'  => 'num',
    ],
    [
      'title'  => 'В обработке',
      'name'   => 'latency',
      'type'   => 'boolCheckbox',
      'system' => true
    ],
  ]
];