<?php
use MVC\Core\App;
use MVC\Core\Request;
use MVC\Core\Route;
use MVC\Database\DB;
require_once 'vendor/autoload.php';

App::bind('config/app',require_once 'config/app.php');
Route::Load('config/router.php')->direct(Request::uri(),Request::method());
