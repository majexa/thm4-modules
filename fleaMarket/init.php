<?php

define('THM', basename(__DIR__));
Ngn::addBasePath(NGN_ENV_PATH.'/thm/four', 3);
Ngn::addBasePath(NGN_ENV_PATH.'/thm-modules/'.THM, 4, THM);

O::replaceInjection('DefaultRouter', 'FleaMarketRouter');

Ngn::addEvent('auth', function($user) {
  UserUploadTemp::moveSessionToAuth($user['id']);
});
