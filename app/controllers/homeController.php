<?php


namespace itrax\controllers;


use itrax\core\controller;

class homeController extends controller
{
    public function index()
    {
        return $this->view("index");
    }
}