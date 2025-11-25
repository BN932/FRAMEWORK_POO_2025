<?php

namespace Core;

use \App\Models\AuthorsRepository , \App\Models\BooksRepository;
abstract class Model {
    public $id, $created_at;
    protected $functionName, $argument;

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
            $fName = $this->functionName;
            $aName = $this->argument;
            $this->$prop = $repname::$fName($this->$aName);
        endif;
    }

}