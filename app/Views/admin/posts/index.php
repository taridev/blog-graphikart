            <h1>Administrer les articles</h1>

            <p>
                <a href="?page=admin.posts.add" class="btn btn-success">Ajouter</a>
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
                    <?php foreach ($posts as $post) :
                    ?>
                    
                    <tr>
                        <td><?= $post->id; ?></td>
                        <td><?= $post->titre; ?></td>
                        <td>
                            <a href="?page=admin.posts.edit&amp;id=<?= $post->id;
                            ?>" class="btn btn-primary">Editer</a>
                            <form action="?page=admin.posts.delete" method="post" style="display: inline;">
                                <input type="hidden" name="id" value="<?= $post->id; ?>">
                                <button type="submit" href="?page=admin.posts.delete&amp;id=<?= $post->id;
                                ?>" class="btn btn-danger">Supprimer</button>
                            </form>
                    </tr>
                    <?php endforeach;
                    ?>

                </tbody>
            </table>
