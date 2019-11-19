<?php

namespace App\Http\Controllers;

use App\Models\Presenca;

class PresencaController extends BaseController
{
    public function __construct(){
        $this->modelo = Presenca::class;
    }
}
