<?php

namespace App\Models;
use \Skully\App\Models\BaseModel;

class Testmodel extends BaseModel {
    public function validatesExistenceOf()
    {
        return array('name');
    }
}