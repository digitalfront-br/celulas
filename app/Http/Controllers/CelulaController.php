<?php

namespace App\Http\Controllers;

use App\Models\Celula;

class CelulaController extends BaseController
{
    public function __construct(){
        $this->modelo = Celula::class;
    }
}
