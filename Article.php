<?php

class Article
{

    public $title = null;
    public $content = null;
    public $author = null;
    public $date = null;
    public $category = null;

    public function __construct($title = null, $content = '', $author = '', $date = '', $category = '')
    {
        $this->title = $title;
        $this->content = $content;
        $this->author = $author;
        $this->date = $date;
        $this->category = $category;
    }


    public function getDate($lang = 'fr')
    {
        if($lang === 'us') {
            return $this->getDateUs();
        }
        elseif($lang === 'fr') {
            return $this->getDateFr();
        }
        else {
            return $this->date;
        }
    }

    public function getDateFr()
    {
        //DOC https://www.php.net/manual/fr/class.datetime.php
        $date = new DateTime($this->date);
        return $date->format('d/m/Y');
    }

    public function getDateUs()
    {
        $date = new DateTime($this->date);
        return $date->format('m/d/Y');
    }
}
