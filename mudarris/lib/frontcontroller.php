<?php 

namespace Muddaris\Lib;

class FrontController
{
    const CONTROLLER_NAMESPACE = 'Muddaris\Controllers\\';

    private $_controller;
    private $_action;
    private $_params;
    private $_lang;

    public function __construct(language $lang)
    {
        $this->_lang = $lang;
        $this->getReq();
        $this->dispatch();
    }

    private function getReq()
    {
        $url = explode('/', trim($_SERVER['REQUEST_URI'], '/'), 3);
        $this->_controller = isset($url[0]) && !empty($url[0]) ? $url[0] : 'index';
        $this->_action     = isset($url[1]) && !empty($url[1]) ? $url[1] : 'default';
        $this->_params     = isset($url[2]) && !empty($url[2]) ? explode('/', $url[2]) :  array();
    }

    private function dispatch()
    {
       
        $controller = self::CONTROLLER_NAMESPACE . ucfirst($this->_controller) . 'Controller';
        $action = $this->_action . 'Action';
        if(class_exists($controller)){
            $ob = new $controller;
            if(method_exists($ob,$action)){
                $ob->setController($this->_controller);
                $ob->setAction($this->_action);
                $ob->setParams($this->_params);
                $ob->setLanguage($this->_lang);
                $ob->$action();
            }
        } 
    }
}