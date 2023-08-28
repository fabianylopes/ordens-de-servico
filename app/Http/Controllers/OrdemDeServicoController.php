<?php

namespace App\Http\Controllers;

use App\Models\OrdemDeServico;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\App;

class OrdemDeServicoController extends Controller
{
    public function index()
    {
        return view('index');
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

    public function dashboard()
    {
        App::setLocale('pt_BR');
        $services = OrdemDeServico::all();

        foreach ($services as $service) {
            //$service->formattedDate = Carbon::parse($service->data_solicitacao)->format('d/m/Y');
            $service->timePassed = Carbon::parse($service->data_solicitacao)->diffForHumans();
        }

        return view('ordensdeservico.dashboard', ['services' => $services]);
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
