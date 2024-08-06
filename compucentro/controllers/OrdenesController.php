<?php

namespace Controllers;

use MVC\Router;

class OrdenesController {

    public static function index(Router $router){
        $router->render('admin/ordenes/index', [
            'titulo' => 'Ordenes',
        ]);
    }

    public static function crear(Router $router){

        $alertas = [];
        $router->render('admin/ordenes/crear', [
            'titulo' => 'Registrar Ordenes',
            'alertas' => $alertas
        ]);
    }
}