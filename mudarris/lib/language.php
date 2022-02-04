<?php

namespace Muddaris\Lib;

class language
{
    public $_dictionary = array();

    public function load($path)
    {
        $lang = $_SESSION['lang'] ?? DEFAULT_LANGUAGE;

        $path =  LANG_PATH . $lang  . DS .str_replace('|', DS, $path) . '.lang.php';

        if (file_exists($path)) {
            require_once $path;
        }

        if (isset($_) && is_array($_)) {
            foreach ($_ as $text => $translate) {
                $this->_dictionary[$text] = $translate;
            }
        }
    }
}
