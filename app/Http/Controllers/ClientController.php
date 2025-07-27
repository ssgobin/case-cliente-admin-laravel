<?php
namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ClientController extends Controller
{
    
    public function index(Request $request)
    {
        $clientes = Client::query();
        if ($request->filled('nome')) {
            $clientes->where('nome', 'like', '%' . $request->nome . '%');
        }
        return view('clientes.index', ['clientes' => $clientes->get()]);
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|max:150',
            'cpf' => 'required|digits:11|unique:clients',
            'data_nascimento' => 'required|date|before_or_equal:today',
            'renda_familiar' => 'nullable|numeric|min:0',
        ]);

        Client::create([
            ...$request->only('nome', 'cpf', 'data_nascimento', 'renda_familiar'),
            'data_cadastro' => now()->toDateString(),
        ]);

        return redirect('/clientes')->with('success', 'Cliente cadastrado com sucesso!');
    }





    public function relatorios(Request $request)
    {
        Carbon::setLocale('pt_BR');
        $filtro = $request->get('filtro', 'mes'); // padrão: mês

        $inicio = match ($filtro) {
            'hoje' => Carbon::today(),
            'semana' => Carbon::now()->startOfWeek(),
            default => Carbon::now()->startOfMonth(),
        };

        $clientes = Client::where('data_cadastro', '>=', $inicio)->get();

        $mediaRenda = $clientes->avg('renda_familiar');
        $maioresDeIdadeComRendaMaior = $clientes->filter(function ($cliente) use ($mediaRenda) {
            return $cliente->data_nascimento <= now()->subYears(18)->toDateString() &&
                $cliente->renda_familiar !== null &&
                $cliente->renda_familiar > $mediaRenda;
        })->count();

        $classeA = $clientes->where('renda_familiar', '<=', 980)->count();
        $classeB = $clientes->whereBetween('renda_familiar', [980.01, 2500])->count();
        $classeC = $clientes->where('renda_familiar', '>', 2500)->count();

        return view('clientes.relatorios', compact(
            'filtro', 'maioresDeIdadeComRendaMaior', 'classeA', 'classeB', 'classeC'
        ));
    }

        public function edit(Client $cliente)
    {
        return view('clientes.edit', compact('cliente'));
    }

    public function update(Request $request, Client $cliente)
    {
        $request->validate([
            'nome' => 'required|max:150',
            'cpf' => 'required|digits:11|unique:clients,cpf,' . $cliente->id,
            'data_nascimento' => 'required|date|before_or_equal:today',
            'renda_familiar' => 'nullable|numeric|min:0',
        ]);

        $cliente->update($request->only('nome', 'cpf', 'data_nascimento', 'renda_familiar'));

        return redirect('/clientes')->with('success', 'Cliente atualizado com sucesso!');
    }

    public function destroy(Client $cliente)
    {
        $cliente->delete();
        return redirect('/clientes')->with('success', 'Cliente excluído com sucesso!');
    }

    
}


