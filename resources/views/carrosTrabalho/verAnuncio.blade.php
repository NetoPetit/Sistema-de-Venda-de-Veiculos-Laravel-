@extends('template_admin.index')

@section('conteudo')

    @guest

    <h2>Seja bem vindo Visitante!!!</h2>

    @endguest

    @auth

    <h2>Seja bem vindo Admin!!!</h2>

    @endauth

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Cor</th>
                <th>Ano</th>
                <th>Quilometragem</th>
                <th>Valor</th>
                <th>Detalhes</th>
                <th>Foto 1</th>
                <th>Foto 2</th>
                <th>Foto 3</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $carro->marca }}</td>
                <td>{{ $carro->modelo }}</td>
                <td>{{ $carro->cor }}</td>
                <td>{{ $carro->ano_fabricacao }}</td>
                <td>{{ $carro->quilometragem }} Km</td>
                <td>R$ {{ $carro->valor }}</td>
                <td>{{ $carro->detalhes }}</td>
                <td>
                    <img src="{{ $carro->img1 }}" alt="imagem carro" width="200px">
                </td>
                <td>
                    <img src="{{ $carro->img2 }}" alt="imagem carro" width="200px">
                </td>
                <td>
                    <img src="{{ $carro->img3 }}" alt="imagem carro" width="200px">
                </td>
            </tr>
        </tbody>
    </table>

    <a href="{{ route('index') }}" class="btn btn-info">Pagina inicial</a>
@endsection

