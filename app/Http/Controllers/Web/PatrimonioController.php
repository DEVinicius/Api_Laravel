<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatrimonioController extends Controller
{
    public function patrimonioEmpresa() {
    	$dados = "Empresa";
		return view('patrimonios', compact('dados'));
	}

	public function patrimonioAmbiente() {
		$dados = "Ambiente";
		return view('patrimonios', compact('dados'));
	}
}
