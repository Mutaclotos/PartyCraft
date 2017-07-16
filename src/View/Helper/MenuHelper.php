<?php

namespace App\View\Helper;

use Cake\View\Helper;


class MenuHelper extends Helper 
{


    /**
    * Checks the passed parameter about the current controller. If so, return the text to
    * fill the active menu class link. If not, returns null.
    *
    * @param $controller
    * @return null|string
    */
    function activeClass($controller, $action) {
        return $this->request->params['controller'] === $controller && $this->request->params['action'] === $action ? 'active' : null;
    }
}