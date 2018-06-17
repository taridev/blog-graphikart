        <h1><?= $action ?> d'une catégorie</h1>

        <form method="post">
            <?= $form->input('titre', 'Titre de l\'article'); ?>

            <?= $form->submit('Sauvegarder'); ?>

        </form>
