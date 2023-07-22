@extends('adminlte::page')
@section('title', 'Project | Solicitudes')

@section('content')
    <div class="small-boxes">
        @foreach ($solicitudes as $item)
            <x-adminlte-small-box title="{{ $item->id_solicitud }}" text="Responsable de solicitud - {{ $item->Responsable_soli }}"
                theme="primary" icon="fas fa-star" class="custom-size" full="false" />
        @endforeach
    </div>

@endsection

<style>
    .custom-size {
        width: 250px;
        height: 125px;
    }

    .small-boxes {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }
</style>
