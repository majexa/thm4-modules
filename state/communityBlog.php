<?php

return array (
  'communityBlog' => 
  array (
    0 => 
    array (
      'title' => 'Заголовок',
      'name' => 'title',
      'type' => 'typoText',
    ),
    1 => 
    array (
      'title' => 'Текст',
      'name' => 'text',
      'type' => 'wisiwigSimple',
    ),
  ),
  'profile' => 
  array (
    0 => 
    array (
      'title' => 'Аватар',
      'name' => 'image',
      'type' => 'imagePreview',
    ),
    1 => 
    array (
      'title' => 'Имя',
      'name' => 'name',
      'type' => 'typoText',
      'required' => true,
    ),
    2 => 
    array (
      'title' => 'Описание',
      'name' => 'info',
      'type' => 'wisiwigSimple',
    ),
    3 => 
    array (
      'title' => 'Статус',
      'name' => 'status',
      'type' => 'text',
    ),
  ),
);