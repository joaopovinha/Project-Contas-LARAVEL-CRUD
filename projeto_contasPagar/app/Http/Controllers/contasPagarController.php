<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contasPagarModel;

class contasPagarController extends Controller
{
    function incluir (request $dados) {
        $conta=new contasPagarModel();
        $conta->nome = $dados->input('txtNome');
        $conta->valor = $dados->input('numbValor');
        $conta->data_venc = $dados->input('dateVenc');
        $conta->save();
        return redirect()->back()->with('mensagem', 'Cadastrado com sucesso!');
    }
    function listar(){
        $contas = contasPagarModel::all();
        return view('homePage', compact('contas'));
}
    function editar($id){
    $contas = contasPagarModel::where('id', '=', $id)->get();
    return view('editarConta', compact('contas'));
}
    function alterar(Request $dados){
        $conta = new contasPagarModel();
        $conta->exists = true;
        $conta->nome = $dados->input('txtNome');
        $conta->valor = $dados->input('numbValor');
        $conta->data_venc = $dados->input('dateVenc');
        $conta->save();
        return redirect()->back()->with('mensagem', 'Dados atualizados com sucesso!');
}
    function deletar($id){
        $conta = contasPagarModel::where('id', '=', $id)->delete();
        return redirect('/');
}

}