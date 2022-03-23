<?php

define("DS",DIRECTORY_SEPARATOR);
define("ROOT", dirname(__DIR__));
define("APP", ROOT.DS."app");
define("CONTROLLER", APP.DS."controllers".DS);
define("MODEL", APP.DS."models".DS);
define("VIEW", APP.DS."views".DS);
define("CORE", APP.DS."core".DS);

require_once "../vendor/autoload.php";
$app = new itrax\core\app();
