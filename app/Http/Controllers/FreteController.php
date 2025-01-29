<?php

namespace App\Http\Controllers;

use App\Enums\FreteStatus;
use App\Http\Controllers\Controller;
use App\Models\Frete;
use Illuminate\Http\Request;

class FreteController extends Controller
{
    public function store(Request $request)
    {
        $dados = $request->all();
        $dados['codigo_rastreio'] = 'TESTEEEE123';
        $dados['status'] = FreteStatus::EM_TRANSITO;

        $frete = Frete::create($dados);

        return $frete;
    }
}
