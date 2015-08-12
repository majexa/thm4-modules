<?php

return [
  'communityBlog' => [
    [
      'title'    => 'Заголовок',
      'name'     => 'title',
      'type'     => 'typoText'
    ],
    [
      'title' => 'Текст',
      'name'  => 'text',
      'type'  => 'wisiwigSimple'
    ],
    [
      'title' => 'Теги',
      'name'  => 'tags',
      'type'  => 'ddTagsAc'
    ],
    [
      'title' => 'Картинки',
      'name'  => 'images',
      'type'  => 'imagesPreview',
    ],
    [
      'title' => 'Рубрика',
      'name'  => 'section',
      'type'  => 'ddTagsSelect',
    ]
  ],
  'profile' => [
    [
      'title'    => 'Аватар',
      'name'     => 'image',
      'type'     => 'imagePreview',
    ],
    [
      'title'    => 'Имя',
      'name'     => 'name',
      'type'     => 'typoText',
      'required' => true
    ],
    [
      'title'    => 'Описание',
      'name'     => 'info',
      'type'     => 'wisiwigSimple',
    ],
    [
      'title'    => 'Статус',
      'name'     => 'status',
      'type'     => 'text',
    ],
    [
      'title'    => 'Рубрика',
      'name'     => 'section',
      'type'     => 'ddTagsSelect',
      'defaultDisallow' => true,
    ]
  ]
];
