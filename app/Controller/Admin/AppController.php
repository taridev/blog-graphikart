<?php

namespace App\Controller\Admin;

use \App\App;
use Core\Auth\DBAuth;

class AppController extends \App\Controller\AppController
{
    public function __construct()
    {
        parent::__construct();
        // Auth
        $app = App::getInstance();
        $auth = new DBAuth($app->getDb());
        if (!$auth->logged()) {
            $this->forbidden();
        }
    }
}
