            <h1>Administrer les categories</h1>

            <p>
                <a href="?page=admin.categories.add" class="btn btn-success">Ajouter</a>
            </p>

            <table class="table">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Titre</td>
                        <td>Actions</td>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($items as $category) :
                    ?>
                    
                    <tr>
                        <td><?= $category->id; ?></td>
                        <td><?= $category ->titre; ?></td>
                        <td>
                            <a href="?page=admin.categories.edit&amp;id=<?= $category->id; ?>" 
                            class="btn btn-primary">
                                Editer
                            </a>
                            <form action="?page=admin.categories.delete" method="post" style="display: inline;">
                                <input type="hidden" name="id" value="<?= $category->id; ?>">
                                <button type="submit" href="?page=admin.categories.delete&amp;id=<?= $category->id; ?>" 
                                class="btn btn-danger">
                                    Supprimer
                                </button>
                            </form>
                    </tr>
                    <?php endforeach;
                    ?>

                </tbody>
            </table>
