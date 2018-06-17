<?php if ($errors) :?>
    <div class="alert alert-danger">Identifiants incorrects</div>
<?php endif; ?>

            <form method="post">               
                <?= $form->input('username', 'pseudo'); ?>
                
                <?= $form->input('password', 'mot de passe', ['type' => 'password']); ?>
                
                <?= $form->submit('Envoyer'); ?>
                
            </form>
