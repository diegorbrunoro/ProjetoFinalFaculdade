<?php
require 'Controller.php';
require ROOT_DIR . '/app/Models/BrunoroUsuario.php';

class LoginController extends Controller
{

    public function index()
    {
        $this->assign('nome', 'Diego')
            ->view('login');
    }

    public function login()
    {
        try {

            $Brunoro = new BrunoroUsuario();
            $result = $Brunoro->login('andrewrbrunoro@gmail.com', 123);

            if (!$result)
                throw new Exception("Login/Senha está errado.");

            redirect('home');
        } catch (Exception $e) {
            redirect("login");
        }
    }

}
