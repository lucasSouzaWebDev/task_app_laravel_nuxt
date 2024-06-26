<?php

namespace App\Core\Shared;

abstract class Model
{
    protected function validateParams($params)
    {
        foreach($params as $param => $value){
            if(!property_exists($this, $param)){
                unset($data[$param]);
                continue;
            }

            $this->$param = $value;
        }
    }
}