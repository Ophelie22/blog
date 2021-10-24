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
    public function getDateFr()
    {
        //DOC https://www.php.net/strtotime
        $date = new DateTime($this->date);
        return $date->format('d/m/Y');
    }
}

