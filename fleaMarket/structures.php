<?php

return [
  'fleaMarketProducts' => [
    [
      'title'    => 'Название',
      'name'     => 'title',
      'type'     => 'typoText',
      'required' => true,
    ],
    [
      'title'    => 'Изображение',
      'name'     => 'image',
      'type'     => 'imagePreview',
      'required' => true,
    ],
    [
      'title' => 'Описание',
      'name'  => 'descr',
      'type'  => 'typoTextarea',
    ],
    [
      'title'    => 'Категория',
      'name'     => 'cat',
      'type'     => 'ddTagsTreeMultiselect',
      'required' => true,
    ]
  ]
];