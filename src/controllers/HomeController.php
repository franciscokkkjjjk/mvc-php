<?php
namespace src\controllers;

use \core\Controller;

class HomeController extends Controller {

    public function index() {
        $this->render('home', ['nome' => 'Bonieky']);
    }

    public function sobre() {
        $this->render('sobre');
    }

    public function sobreP($args) {
        print_r($args);
        $this->render('ola', ['nome' => $args['nome'], 'au' => $args['au']]); 
    }

    public function cachaca() {
        $this->render('ola');
    }
}