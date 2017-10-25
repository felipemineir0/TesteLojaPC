<?php

App::uses('AppController', 'Controller');

/**
 * Noticias Controller
 *
 * @property Noticia $Noticia
 * @property PaginatorComponent $Paginator
 */
class PaginasController extends AppController {

    public $uses = array();

    public function index($slug_idioma = null, $slug_pagina = null) {

        $path = dirname(WWW_ROOT) . DS . "app" . DS . "site" . DS . "View" . DS . "Paginas" . DS . $slug_idioma . DS . $slug_pagina . ".ctp";

        if (file_exists($path)) {
            $this->render($this->slug_idioma . DS . $slug_pagina, "mapas");
        } else
            $this->redirect('/');
        //throw new NotFoundException("Página não existe");
    }

}
