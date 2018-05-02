@extends('layout')

@section('content')
    @if($car->exists)
        <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--12-col">
                <h3>Edição</h3>
            </div>
        </div>

        {{ html()->modelForm($car, 'PUT', route('veiculos.update', $car->id))->open() }}
    @else
        <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--12-col">
                <h3>Cadastro</h3>
            </div>
        </div>

        {{ html()->form('POST', route('veiculos.store'))->open() }}
    @endif
        <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--12-col">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    {{ html()->text('vehicle')->class('mdl-textfield__input') }}
                    {{ html()->label('Veiculo', 'vehicle')->class('mdl-textfield__label') }}
                </div>
            </div>

            <div class="mdl-cell mdl-cell--12-col">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    {{ html()->text('brand')->class('mdl-textfield__input') }}
                    {{ html()->label('Marca', 'brand')->class('mdl-textfield__label') }}
                </div>
            </div>

            <div class="mdl-cell mdl-cell--12-col">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    {{ html()->input('number', 'year')->class('mdl-textfield__input') }}
                    {{ html()->label('Ano', 'year')->class('mdl-textfield__label') }}
                </div>
            </div>

            <div class="mdl-cell mdl-cell--12-col">
                <div class="mdl-textfield mdl-js-textfield">
                    {{ html()->textarea('description')->attribute('rows', '5')->class('mdl-textfield__input') }}
                    {{ html()->label('Descrição', 'description')->class('mdl-textfield__label') }}
                </div>
            </div>
        </div>

        <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--2-col">
                <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                    Salvar
                </button>
            </div>

            <div class="mdl-cell mdl-cell--2-col">
                <a href="{{ route('veiculos.index') }}">
                    <button class="mdl-button mdl-js-button mdl-button--raised" type="button">
                        Cancelar
                    </button>
                </a>
            </div>
        </div>
    {{ html()->form()->close() }}
@endsection