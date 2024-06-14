<?php

// app/Http/Controllers/ContatoController.php

// app/Http/Controllers/ContatoController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function showForm()
    {
        return view('contato');
    }

    public function processForm(Request $request)
    {
        // Validar os dados do formulário
        $request->validate([
            'nome' => 'required',
            'telefone' => 'required',
            'endereco' => 'required',
            'sexo' => 'required',
        ]);

        // Processar os dados
        $nome = $request->input('nome');
        $telefone = $request->input('telefone');
        $endereco = $request->input('endereco');
        $sexo = $request->input('sexo');

        // Exibir os dados utilizando var_dump
        // var_dump(compact('nome', 'telefone', 'endereco', 'sexo'));

        // Redirecionar de volta para o formulário com os dados
        return redirect()->back()->withInput()->with('nome', $nome)
                                      ->with('telefone', $telefone)
                                      ->with('endereco', $endereco)
                                      ->with('sexo', $sexo);
    }
}
