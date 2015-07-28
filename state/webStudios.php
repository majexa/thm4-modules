<?php

return array (
  'portfolio' => 
  array (
    0 => 
    array (
      'title' => 'Название',
      'name' => 'title',
      'type' => 'typoText',
      'required' => true,
    ),
    1 => 
    array (
      'title' => 'Ссылка',
      'name' => 'url',
      'type' => 'url',
      'required' => true,
    ),
    2 => 
    array (
      'title' => 'Описание',
      'name' => 'text',
      'type' => 'typoTextarea',
    ),
    3 => 
    array (
      'title' => 'Доступна',
      'name' => 'available',
      'type' => 'boolCheckbox',
    ),
    4 => 
    array (
      'title' => 'Время ожидания',
      'name' => 'latency',
      'type' => 'num',
    ),
    5 => 
    array (
      'title' => 'В обработке',
      'name' => 'latency',
      'type' => 'boolCheckbox',
      'system' => true,
    ),
  ),
);