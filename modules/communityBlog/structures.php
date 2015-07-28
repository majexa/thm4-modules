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
  ],
  'profile' => [
    [
      'title'    => 'Имя',
      'name'     => 'name',
      'type'     => 'typoText',
      'required' => true
    ],
    [
      'title'    => 'Аватар',
      'name'     => 'image',
      'type'     => 'imagePreview',
    ],
  ]
];
