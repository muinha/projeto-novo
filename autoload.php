<?php

function __autoload($class)
{

    if (file_exists("classes/$class.php")) {

        require_once "classes/$class.php";

    }

}