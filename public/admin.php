<?php

require_once 'define.php';
require_once ROOT . '/app/App.php';

use App\App;
use Core\Auth\DBAuth;

App::load();


if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'posts.home';
}

// Auth
$app = App::getInstance();
$auth = new DBAuth($app->getDb());
if (!$auth->logged()) {
    $app->forbidden();
}


ob_start();
if ($page === 'posts.home') {
    require ROOT . '/pages/admin/posts/index.php';
} elseif ($page === 'posts.edit') {
    require ROOT . '/pages/admin/posts/edit.php';
} elseif ($page === 'posts.show') {
    require ROOT . '/pages/admin/posts/show.php';
} elseif ($page === 'posts.create') {
    require ROOT . '/pages/admin/posts/create.php';
} elseif ($page === 'posts.del') {
    require ROOT . '/pages/admin/posts/delete.php';
} elseif ($page === 'categories.home') {
    require ROOT . '/pages/admin/categories/index.php';
} elseif ($page === 'categories.edit') {
    require ROOT . '/pages/admin/categories/edit.php';
} elseif ($page === 'categories.show') {
    require ROOT . '/pages/admin/categories/show.php';
} elseif ($page === 'categories.create') {
    require ROOT . '/pages/admin/categories/create.php';
} elseif ($page === 'categories.del') {
    require ROOT . '/pages/admin/categories/delete.php';
}
$content = ob_get_clean();
require ROOT . '/pages/templates/default.php';
