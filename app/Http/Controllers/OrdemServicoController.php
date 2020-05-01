<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OrdemServico;
use Illuminate\Support\Facades\Auth;



class OrdemServicoController extends Controller
{
    

    public function newOS(Request $request){


        $userId = Auth::user()->id;
        
        $Os = new OrdemServico();

        $Os->produto_id = $request['produto_id'];
        $Os->comentario = $request['comentario'];
        $Os->user_id = $userId;
        $Os->save();
    }
}
