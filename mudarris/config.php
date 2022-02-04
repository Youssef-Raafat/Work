<?php

!defined('DS') ? define('DS', DIRECTORY_SEPARATOR) : '';

// Our Paths
!defined('PUBLIC_PATH') ?  define('PUBLIC_PATH', dirname(__FILE__) . DS) : '';
!defined('VIEWS_PATH') ?  define('VIEWS_PATH', dirname(__FILE__) . DS . 'views' . DS) : '';
!defined('TEMPLATE_PATH') ?  define('TEMPLATE_PATH', dirname(__FILE__) . DS . 'template' . DS) : '';
!defined('LANG_PATH') ?  define('LANG_PATH', dirname(__FILE__) . DS . 'languages' . DS) : '';
!defined('DEFAULT_LANGUAGE') ? define('DEFAULT_LANGUAGE','ar') : 'ar';