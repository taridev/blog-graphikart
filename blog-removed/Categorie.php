<?php

namespace App\Table;

use App\App;

class Categorie extends Table
{

    protected static $table = 'categorie';

    public function getUrl()
    {
        return '?p=categorie&amp;id='. $this->id;
    }
}
