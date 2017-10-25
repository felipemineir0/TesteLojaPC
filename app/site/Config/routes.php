<?php

Router::connect('/', array('controller' => 'home', 'action' => 'index'));
Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));
Router::connect('/paginas/:slug_pagina', array('controller' => 'paginas', 'action' => 'index'), array('pass' => array("slug_pagina")));
Router::connect('/cadastro', array('controller' => 'cadastroImoveis', 'action' => 'index'), array('pass' => array("slug_idioma")));

Router::connect('/empresa', array('controller' => 'institucional', 'action' => 'index'), array('pass' => array("slug_idioma")));
Router::connect('/clube-ynovez', array('controller' => 'institucional', 'action' => 'clube'), array('pass' => array("slug_idioma")));
Router::connect('/servicos', array('controller' => 'servicos', 'action' => 'index'), array('pass' => array("slug_servico")));
Router::connect('/servico/:slug_servico', array('controller' => 'servicos', 'action' => 'view'), array('pass' => array("slug_servico")));
Router::connect('/promocoes', array('controller' => 'promocoes', 'action' => 'index'), array('pass' => array("slug_promocao")));
Router::connect('/promocoes/:slug_promocao', array('controller' => 'promocoes', 'action' => 'view'), array('pass' => array("slug_promocao")));

CakePlugin::routes();

require CAKE . 'Config' . DS . 'routes.php';
