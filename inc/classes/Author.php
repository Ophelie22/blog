<?php

class Author
{
  
    public $id;
    public $name;
    public $image;
    public $email;
   

    public function __construct( $id,$name, $image,$email)
    {
        $this->id = $id;
        $this->name = $name;
        $this->image = $image;
        $this->email = $email;
        
    }
}