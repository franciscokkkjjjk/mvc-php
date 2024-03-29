<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Usuario;

class HomeController extends Controller {

    public function index() {
        $nome = Usuario::select()->execute();

        $this->render('home', ['usuarios' => $nome]);
    }
    
}