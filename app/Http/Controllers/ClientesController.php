<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRequestClientes;
use App\Models\Cliente;
use App\Models\Componentes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    
    private $cliente;

    public function __construct(Cliente $cliente)
    {
        $this->cliente = $cliente;
    }

    public function index(Request $request) {

        $pesquisar = $request->pesquisar;
        $findCliente = $this->cliente->getClientesPesquisarIndex(search: $pesquisar ?? '');

        return view('pages.clientes.paginacao', compact('findCliente'));
    }

    public function delete(Request $request)
    {
        $id = $request->id;
        $buscarRegistro = Cliente::find($id);
        $buscarRegistro->delete();
        return response()->json(['success' => true]);
    }

    public function cadastrarCliente(FormRequestClientes $request) 
    {
        if($request->method() == "POST"){
            $data = $request->all();

            Cliente::create($data);

            session()->flash('toast_success', 'Gravado com sucesso!');
            return redirect()->route('clientes.index');
        }

        return view('pages.clientes.create');
    }

    public function atualizarCliente(Request $request, $id) 
    {

        if($request->method() == "PUT"){

            $data = $request->all();
            $componentes = new Componentes();
            $data['valor'] = $componentes->formatacaoMascaraDinheiroDecimal($data['valor']);
            
            $buscaRegistro = Cliente::find($id);
            $buscaRegistro->update($data);

            return redirect()->route('produto.index');
        }

        $findProduto = Cliente::where('id', '=', $id)->first();
        return view('pages.clientes.atualiza', compact('findProduto'));
    }
}
