<?php

namespace app\Controllers;

use app\Models\Companies;

class CompaniesController
{
    private $model;

    public function __construct()
    {
        $this->model = new Companies();
    }
}
