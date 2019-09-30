<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackupController extends Controller
{
    public function verificaBackup() {
    	$dados = "Verificar";
		return view('backup', compact('dados'));
	}

	public function dataBackup() {
		$dados = "Delimitar";
		return view('backup', compact('dados'));
	}
}
