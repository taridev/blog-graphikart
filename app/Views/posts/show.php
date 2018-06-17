<?php

use App\App;

App::getInstance()->title = App::getInstance()->title . ' | ' . $post->titre;

?>

        <h1><?= $post->titre; ?></h1>

        <p><em><?= $post->categorie ?></em></p>

        <div><?= $post->contenu; ?></div>   
