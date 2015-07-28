<?php

return array (
  'fleaMarketProducts' => 
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
      'title' => 'Изображение',
      'name' => 'image',
      'type' => 'imagePreview',
      'required' => true,
    ),
    2 => 
    array (
      'title' => 'Описание',
      'name' => 'descr',
      'type' => 'typoTextarea',
    ),
    3 => 
    array (
      'title' => 'Категория',
      'name' => 'cat',
      'type' => 'ddTagsTreeMultiselect',
    ),
  ),
);