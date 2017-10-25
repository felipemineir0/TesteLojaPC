<?php

/* /app/View/Helper/LinkHelper.php (using other helpers) */
App::uses('AppHelper', 'View/Helper');

class LinkHelper extends AppHelper {

    public $helpers = array('Html');

    public function makeEdit($title, $url) {
        // Use the HTML helper to output
        // formatted data:

        $link = $this->Html->link($title, $url, array('class' => 'edit'));

        return '<div class="editOuter">' . $link . '</div>';
    }

    public function makeUrl($valores, $idioma = true) {

        if (!$idioma) {
            return $this->request->base . $valores;
        } else {
            //debug(empty($this->request->params["slug_idioma"]));
            if ($this->request->params["pass"]["0"] != "" && empty($this->request->params["slug_idioma"])) {
                return $this->request->base . "/" . $this->request->params["pass"]["0"] . $valores;
            } else
                return $this->request->base . "/" . $this->request->params["slug_idioma"] . $valores;
        }
    }

}
