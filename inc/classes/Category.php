<?php

class Category
{
   
    public $name;
    public $id;
 

    public function __construct($nameParam)
    {
     
        $this->name = $nameParam;
    
    }
}