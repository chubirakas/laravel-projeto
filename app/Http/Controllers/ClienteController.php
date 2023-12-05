<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    private $clientes=[
        ['id'=>1, 'nome'=>'Chabledis'],
        ['id'=>2, 'nome'=>'Lulu'],
        ['id'=>3, 'nome'=>'Maozinho'],
        ['id'=>4, 'nome'=>'Uili']
    ];

    public function construct(){
        $clientes = session('clientes');
        if(!isset($clientes))
        session(['clientes'=>$this->clientes]);
    }

    public function index()
    {
        $clientes = session('clientes');
        $titulo = "Todos os clientitos";
        return view('clientes.index', compact(['clientes', 'titulo']));

      
        //Possíveis substituições para o compact
        
        /*
        Forma 1:
        return view('clientes.index')
        -> with('cliente', $clientes)
        -> with('titulo', $titulo);
        */

        //Forma 2:
        //return view('clientes.index', ['clientes' => $clientes, 'titulo' => $titulo]);

        
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $clientes = session('clientes');
        
        $id = $clientes != null ? count($clientes) + 1 : 1;
        $nome = $request->nome;
        $dados = ["id"=>$id, "nome"=>$nome];

        $clientes[] = $dados;

        session(['clientes' => $clientes]);
        
         return redirect()->route('clientes.index');

       
    }

    /**
     * Display the specified resource.E
     */
    public function show(string $id)
    {
        $clientes = session('clientes');
        $cliente = $clientes[$id - 1];
        return view('clientes.info', compact(['cliente']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $clientes = session('clientes');
        $cliente = $clientes[$id - 1];
        return view('clientes.edit', compact(['cliente']));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $clientes = session('clientes');
        $clientes[$id -1]['nome'] = $request->nome;
        session(['clientes' => $clientes]);
        return redirect()->route('clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $clientes = session('clientes');
        $ids = array_column($clientes, 'id');
        $index = array_search($id, $ids);
        array_splice($clientes, $index, 1);
        session(['clientes' => $clientes]);
        return redirect()->route('clientes.index');
      
    }

    /*private function getIndex($id, $clientes){
        
        $ids = array_column($clientes, 'id');
        $index = array_search($id, $ids);
        return $index;

    }*/
}
