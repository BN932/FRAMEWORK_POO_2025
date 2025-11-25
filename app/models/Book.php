<?php

namespace App\Models;

class Book
{
    public $id, $isbn, $cover, $title, $resume, $author_id, $category_id, $created_at;

    //Links
    private $author;

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
            $columnName = $prop.'_id';
            $this->$prop = $repname::findOneById($this->$columnName);
        endif;
    }
}