    <h1><?= $action ?> d'un article</h1>

        <form method="post">
            <?= $form->input('titre', 'Titre de l\'article'); ?>

            <?= $form->select('categorie_id', 'Categorie', $categories); ?>

            <?= $form->input('contenu', 'Contenu', ['type' => 'textarea']); ?>

            <?= $form->submit('Sauvegarder'); ?>

        </form>
