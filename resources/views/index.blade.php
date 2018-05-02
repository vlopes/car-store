@extends('layout')

@section('content')
    <div class="mdl-grid">
        <div class="mdl-cell mdl-cell--12-col">
            <h3>Listagem</h3>
        </div>
    </div>

    <div class="mdl-grid">
        <div class="mdl-cell mdl-cell--2-col">
            <a href="{{ route('veiculos.create') }}">
                <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored">
                    <i class="material-icons" id="add">add</i>
                    <div class="mdl-tooltip" for="add">
                        Adicionar Carro
                    </div>
                </button>
            </a>
        </div>
    </div>

    <div class="mdl-grid">
        <div class="mdl-cell mdl-cell--12-col">
            <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
                <thead>
                    <tr>
                        <th>Veiculo</th>
                        <th>Marca</th>
                        <th>Ano</th>
                        <th>Descricao</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cars as $car)
                        <tr>
                            <td>{{ $car->vehicle }}</td>
                            <td>{{ $car->brand }}</td>
                            <td>{{ $car->year }}</td>
                            <td>{!! nl2br($car->description) !!}</td>
                            <td>
                                <div class="mdl-grid">
                                    <div class="mdl-cell mdl-cell--6-col">
                                        <a
                                            class="mdl-button mdl-js-button mdl-button--icon"
                                            href="{{ route('veiculos.edit', $car->id) }}"
                                        >
                                            <i class="material-icons" id="edit-{{ $car->id }}">mode_edit</i>
                                            <div class="mdl-tooltip" for="edit-{{ $car->id }}">
                                                Editar Carro
                                            </div>
                                        </a>
                                    </div>

                                    <div class="mdl-cell mdl-cell--6-col">
                                        {{ html()->form('DELETE', route('veiculos.destroy', $car->id))->open() }}
                                            <button type="submit" class="mdl-button mdl-js-button mdl-button--icon">
                                                <i class="material-icons" id="delete-{{ $car->id }}">delete</i>
                                                <div class="mdl-tooltip" for="delete-{{ $car->id }}">
                                                    Deletar Carro
                                                </div>
                                            </button>
                                        {{ html()->form()->close() }}
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection