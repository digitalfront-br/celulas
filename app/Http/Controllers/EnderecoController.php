<?php

namespace App\Http\Controllers;

use App\Models\Endereco;

class EnderecoController extends BaseController
{
    public function __construct(){
        $this->modelo = Endereco::class;
    }
}
