<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ExampleController extends BaseController
{
    public function addUser()
    {
        return view("users/add");    
    }
}
