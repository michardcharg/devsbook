<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\LoginHandler;

class HomeController extends Controller {

    private $loggedUser;

    public function __construct() {
        //Uso uma função da Classe LOGINHANDLER para checar se tem user logado
        //E guardo dentro da VAR LOGGEDUSER
        $this->loggedUser = LoginHandler::checkLogin();

        //Caso o retorno da VERIFICAÇÃO seja FALSE, ja direciona para LOGIN
        if($this->loggedUser === false) {
            $this->redirect('/login');
        }
        
       
    }


    public function index() {
        $this->render('home', ['nome' => 'Bonieky']);
    }

    

}