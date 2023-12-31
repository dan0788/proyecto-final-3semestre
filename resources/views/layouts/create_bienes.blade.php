@extends('adminlte::page')

@section('content')
    <form {{-- method="put" action="{{ route('crearBien') }}" --}}>
        {{-- @csrf --}}
        <x-adminlte-card for="numeroOrden" title="Ingrese el número de orden:" style="height:45px" />
        <x-adminlte-input id="numeroOrden" name="numeroOrden" type="number" name="numero_orden" style="height:45px" step="1" min="0" required="true" />
        <x-adminlte-button type="submit" theme="primary" style="height:45px" label="Crear registro"/>
    </form>

@endsection
<style>
    form {
        display: flex;
    }
    form > *{
        margin-right: 10px;
    }
</style>
