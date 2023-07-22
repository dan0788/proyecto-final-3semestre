@extends('adminlte::page')

@section('title', 'Project | Bienes')
@section('content')
    <div class="small-boxes">
        @foreach ($bienes as $item)
            <x-adminlte-small-box title="{{ $loop->iteration }}" text="Número de orden - {{ $item->Numero_orden }}"
                theme="success" icon="fas fa-star" class="custom-size" full="false" />
        @endforeach
    </div>

@endsection

<style>
    .custom-size {
        width: 250px;
        height: 100px;
    }
    .small-boxes{
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }
</style>
