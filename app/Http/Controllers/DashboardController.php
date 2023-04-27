<?php

namespace App\Http\Controllers;

use App\Models\Associado;
use App\Models\Dependente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller

{
public function index()
{
    $quantidadeAssociados = DB::select("SELECT COUNT(*) AS quantidade FROM associados WHERE id_motivo_exclusao <> 13 AND socio = 'S'")[0]->quantidade;
    $quantidadeDependentes = Dependente::count();

    return view('dashboard', [
        'quantidadeAssociados' => $quantidadeAssociados,
        'quantidadeDependentes' => $quantidadeDependentes
    ]);
}
}