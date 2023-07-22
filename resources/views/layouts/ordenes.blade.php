@extends('adminlte::page')

@section('title', 'Project | Ordenes')
@section('content')
    <div class="small-boxes">
        @foreach ($ordenes as $item)
            <x-adminlte-small-box title="{{ $item->Numero_orden }}" text="Número de orden - {{ $item->Nombre_proveedor }}"
                theme="warning" icon="fas fa-star" class="custom-size" full="false" />
        @endforeach
    </div>
@endsection

<style>
    .custom-size {
        width: 250px;
        height: 125px;
    }
    .small-boxes{
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }
</style>