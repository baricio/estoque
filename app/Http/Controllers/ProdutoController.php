<?php

namespace Estoque\Http\Controllers;

use Estoque\Produto;
use Estoque\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{

	public function lista(){
		
		$produtos = DB::select('select * from produtos');

		dd($produtos);

	}

}