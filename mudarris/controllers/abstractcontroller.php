<?php 
namespace Muddaris\Controllers;
use Muddaris\Lib\language;
class AbstractController
{
    protected $_controller;
    protected $_action;
    protected $_params;
    protected $_lang;

    public function setController($controller)
    {
        $this->_controller = $controller;
    }
    public function setAction($action)
    {
        $this->_action = $action;
    }
    public function setParams($params)
    {
        $this->_params = $params;
    }

    public function setLanguage(language $lang){
        $this->_lang = $lang;
    }

    protected function _view($data)
    {
        $view = VIEWS_PATH . $this->_controller . DS . $this->_action . '.view.php';
        if ($this->_controller == 'notfound') {
            $view = VIEWS_PATH . 'notfound' . DS . 'notfound' . '.view.php';
        }
        if(!empty($data)){
          extract($data);
        }  
        if (file_exists($view)) {
            require_once TEMPLATE_PATH . 'header.php';
            require_once $view;
            require_once TEMPLATE_PATH . 'footer.php';
        } 
    }
}
