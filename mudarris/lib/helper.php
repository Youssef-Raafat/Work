<?php

namespace Muddaris\Lib;

trait Helper
{

    public function redirect($path)
    {
        header('Location: ' . $path);
        exit;
    }
}
