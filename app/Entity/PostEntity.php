<?php

namespace App\Entity;

use Core\Entity\Entity;

class PostEntity extends Entity
{

    public function getUrl()
    {
        return 'index.php?page=posts.show&id=' . $this->id;
    }

    public function getExtrait()
    {
        $html = '<p>'. substr($this->contenu, 0, 150) .'...</p>';
        $html .= '<div><a href="'. $this->getUrl() .'">voir la suite</a></div>';
        return $html;
    }
}
