@extends('adminlte::page')

@section('title', 'Project | Salidas de almacén')
@section('content')
    <div class="small-boxes">
        @foreach ($salidas as $item)
            <x-adminlte-small-box title="{{ $item->Num_salida }}" text="Nombre de empleado - {{ $item->Empleado }}"
                theme="info" icon="fas fa-star" class="custom-size" full="false" />
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