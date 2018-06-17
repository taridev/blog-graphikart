<?php

namespace App\Table;

use App\App;

class Article extends Table
{

    protected static $table = 'article';

    public function getUrl()
    {
        return '?p=article&amp;id='. $this->id;
    }

    public static function find($id)
    {
        return self::query("
            SELECT a.id, a.titre, a.contenu, c.titre as titre_categorie
            FROM article a
            LEFT JOIN categorie c ON a.categorie_id = c.id
            WHERE a.id = ?
        ", [$id], get_called_class(), true);
    }

    public function getExtrait()
    {
        $html = '<p>'. substr($this->contenu, 0, 150) .'...</p>';
        $html .= '<div><a href="'. $this->getUrl() .'">voir la suite</a></div>';
        return $html;
    }


    public static function getLast()
    {
        return self::query("
            SELECT a.id, a.titre, a.contenu, c.titre as titre_categorie
            FROM article a
            LEFT JOIN categorie c ON a.categorie_id = c.id
            ORDER BY a.date DESC
        ");
    }

    public static function lastByCategorie($categorie_id)
    {
        return self::query("
            SELECT a.id, a.titre, a.contenu, c.titre as titre_categorie
                FROM article a
                LEFT JOIN categorie c 
                    ON a.categorie_id = c.id
                WHERE categorie_id = ?
        ", [$categorie_id]);
    }
}
