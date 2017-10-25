<?php

/* /app/View/Helper/LinkHelper.php (using other helpers) */
App::uses('AppHelper', 'View/Helper');

class RenderElementHelper extends AppHelper {

    public $helpers = array('Html');

    public function render($name) {
        return $this->_View->element($this->request->params["slug_idioma"] . "/" . $name);
    }

}
