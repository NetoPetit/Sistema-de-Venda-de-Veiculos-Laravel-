<?php

namespace App\Http\Controllers;

use App\Models\CarrosTrabalho;
use Illuminate\Http\Request;

class CarroTrabalhoController extends Controller
{
    //

    public function dashboard(){
        $carros = CarrosTrabalho::all();

        return view('carrosTrabalho.dashboard', compact('carros'));
    }

    public function cadastrarCarro(){
        return view('carrosTrabalho.cadastrar');
    }

    public function salvarCarro(Request $request){

        //FAZER O VALIDATE!!!

        $carro = new CarrosTrabalho();
        $carro->marca = $request->input('marca');
        $carro->modelo = $request->input('modelo');
        $carro->cor = $request->input('cor');
        $carro->ano_fabricacao = $request->input('ano_fabricacao');
        $carro->quilometragem = $request->input('quilometragem');
        $carro->valor = $request->input('valor');
        $carro->detalhes = $request->input(('detalhes'));
        $carro->img1 = $request->input('img1');
        $carro->img2 = $request->input('img2');
        $carro->img3 = $request->input('img3');

        $carro->save();

        return redirect()->route('dashboard')->with('carroCadastrado', 'Carro cadastrado com sucesso!');
    }

}
