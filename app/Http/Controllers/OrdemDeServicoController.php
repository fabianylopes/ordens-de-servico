<?php

namespace App\Http\Controllers;

use App\Models\OrdemDeServico;
use Illuminate\Http\Request;

class OrdemDeServicoController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function create()
    {
        return view('ordensdeservico.create');
    }

    public function store(Request $request)
    {
        $service = new OrdemDeServico;

        $service->nome_tecnico = $request->nome_tecnico;
        $service->data_solicitacao = $request->data_solicitacao;
        $service->prazo_atendimento = $request->prazo_atendimento;
        $service->endereco_atendimento = $request->endereco_atendimento;
        $service->status = $request->status;

        $service->save();

        return redirect("/service/show");
    }

    public function show()
    {
        $services = OrdemDeServico::all();

        return view('ordensdeservico.show', ['services' => $services]);
    }

    public function edit($id)
    {
        $service = OrdemDeServico::findOrFail($id);

        return view('ordensdeservico.edit', ['service' => $service]);
    }

    public function update(Request $request, $id)
    {
        $service = OrdemDeServico::findOrFail($id);
        $service->update([
            'nome_tecnico' => $request->nome_tecnico,
            'data_solicitacao' => $request->data_solicitacao,
            'prazo_atendimento' => $request->prazo_atendimento,
            'endereco_atendimento' => $request->endereco_atendimento,
            'status' => $request->status,
        ]);

        return redirect("/service/show");
    }

    public function destroy($id)
    {
        $service = OrdemDeServico::findOrFail($id);
        $service->delete();

        return redirect('/service/show');
    }
}
