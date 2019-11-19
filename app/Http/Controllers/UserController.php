<?php

namespace App\Http\Controllers;

use App\User;

class UserController extends BaseController
{
    public function __construct(){
        $this->modelo = User::class;
    }
}
