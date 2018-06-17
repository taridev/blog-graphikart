<?php

namespace App\Controller\Admin;

use Core\HTML\BootstrapForm;

class PostsController extends \App\Controller\Admin\AppController
{

    public function __construct()
    {
        parent::__construct();
        $this->loadModel('Post');
    }

    public function index()
    {
        $posts = $this->Post->all();
        $this->render('admin.posts.index', compact('posts'));
    }

    public function add()
    {
        if (!empty($_POST)) {
            $result = $this->Post->create([
                'titre' => $_POST['titre'],
                'contenu' => $_POST['contenu'],
                'categorie_id' => $_POST['categorie_id']
            ]);
            if ($result) {
                return $this->index();
            }
        }
        $this->loadModel('Category');
        $categories = $this->Category->extract('id', 'titre');
        $form = new BootstrapForm($_POST);
        $action = 'Création';
        $this->render('admin.posts.add', compact('categories', 'form', 'action'));
    }

    public function edit()
    {
        if (!empty($_POST)) {
            $result = $this->Post->update($_GET['id'], [
                'titre' => $_POST['titre'],
                'contenu' => $_POST['contenu'],
                'categorie_id' => $_POST['categorie_id']
            ]);
            if ($result) {
                return $this->index();
            }
        }

        $post = $this->Post->find($_GET['id']);
        if ($post) {
            $this->loadModel('Category');
            $categories = $this->Category->extract('id', 'titre');
            $form = new BootstrapForm($post);
            $action = 'Edition';
            return $this->render('admin.posts.add', compact('categories', 'form', 'action'));
        } else {
            return $this->notFound();
        }
    }

    public function delete()
    {
        if (!empty($_POST)) {
            $result = $this->Post->delete($_POST['id']);
            return $this->index();
        }
    }
}
