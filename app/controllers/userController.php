<?php
namespace itrax\controllers;


use itrax\core\controller;

class userController extends controller
{
    public function index()
    {
        return $this->view("home");
    }
}