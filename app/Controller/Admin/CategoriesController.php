<?php

namespace App\Controller\Admin;

use Core\HTML\BootstrapForm;

class CategoriesController extends \App\Controller\Admin\AppController
{

    public function __construct()
    {
        parent::__construct();
        $this->loadModel('Category');
    }

    public function index()
    {
        $items = $this->Category->all();
        $this->render('admin.categories.index', compact('items'));
    }

    public function add()
    {
        if (!empty($_POST)) {
            $result = $this->Category->create([
                'titre' => $_POST['titre']
            ]);
            if ($result) {
                return $this->index();
            }
        }
        $form = new BootstrapForm($_POST);
        $action = 'Ajout';
        $this->render('admin.categories.add', compact('form', 'action'));
    }

    public function edit()
    {
        if (!empty($_POST)) {
            $result = $this->Category->update($_GET['id'], [
                'titre' => $_POST['titre']
            ]);
            if ($result) {
                return $this->index();
            }
        }

        $category = $this->Category->find($_GET['id']);
        if ($category) {
            $form = new BootstrapForm($category);
            $action = 'Edition';
            $this->render('admin.categories.add', compact('form', 'action'));
        } else {
            return $this->notFound();
        }
    }

    public function delete()
    {
        if (!empty($_POST)) {
            $result = $this->Category->delete($_POST['id']);
            return $this->index();
        }
    }
}
