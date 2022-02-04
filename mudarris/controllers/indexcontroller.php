<?php

namespace Muddaris\Controllers;

class indexController extends AbstractController
{

    public function defaultAction()
    {
        $this->_lang->load('index|default');
        $this->_view($this->_lang->_dictionary);
    }
}
