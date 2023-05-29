<?php

namespace App\Controllers;

class hello extends BaseController
{
    public function index()
    {
        echo view('/layout/template');
    }

    //--------------------------------------------------------------------

}
