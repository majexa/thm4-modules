<?php

$items = [
  'title' => true,
  'images' => true,
  'text' => true,
  'tags' => true,
  'dateCreate' => true,
  'author' => true
];

return [
  'siteItemsHome' => $items,
  'siteItems' => $items,
  'siteItem' => [
    'images' => true,
    'text' => true,
    'tags' => true,
    'dateCreate' => true,
  ]
];