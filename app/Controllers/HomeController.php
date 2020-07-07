<?php
require "Controller.php";

class HomeController extends Controller
{

    public function index()
    {
        $this->assign("nome", "Diego")
            ->view("home");
    }

}
