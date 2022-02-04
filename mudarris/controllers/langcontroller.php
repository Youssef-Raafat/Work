<?php

namespace Muddaris\Controllers;

use  Muddaris\Lib\Helper;

class LangController extends AbstractController
{
    use Helper;

    public function defaultAction()
    {
        if (isset($_SESSION['lang'])) {
            if ($_SESSION['lang'] == 'ar') {
                $_SESSION['lang'] = 'en';
            } else {
                $_SESSION['lang'] = 'ar';
            }
        } else {
            $_SESSION['lang'] = 'en';
        }

        $this->redirect($_SERVER['HTTP_REFERER']);
    }
}
