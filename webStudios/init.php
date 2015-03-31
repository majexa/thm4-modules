<?php

define('THM', basename(__DIR__));
define('THM_PATH', __DIR__);
Ngn::addBasePath(NGN_ENV_PATH.'/thm/four', 3);
Ngn::addBasePath(NGN_ENV_PATH.'/thm-modules/'.THM, 4, THM);

O::replaceInjection('DefaultRouter', 'WebStudiosRouter');
