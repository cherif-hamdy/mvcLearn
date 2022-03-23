<?php
namespace itrax\core;

class controller
{
    public function view($path)
    {
        require VIEW.$path.".php";
    }
}