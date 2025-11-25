<?php

namespace App\Models;

class Author
{
    public $id, $firstname, $lastname, $biography, $picture, $created_at;

    private $books;

    public function __get(?string $prop = null){
        if(property_exists($this, $prop)):
            $this->setter($prop);
            return $this->$prop;
        endif;
    }

    public function setter(?string $prop = null){
        if(empty($this->$prop)):
            if(substr($prop,-1)==='y'):
                $repname = 'App\Models\\'.ucfirst($prop).'esRepository';
            else:
                $repname = 'App\Models\\'.ucfirst($prop).'sRepository';
            endif;
            $this->$prop = $repname::findBooksByAuthorId($this->id);
        endif;
    }
}

