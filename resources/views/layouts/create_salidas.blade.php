@extends('adminlte::page')

@section('content')
    <form {{-- method="put" action="{{ route('crearBien') }}" --}}>
        {{-- @csrf --}}
        <x-adminlte-card for="empleado" title="Ingrese el nombre del empleado:" style="height:45px" />
        <x-adminlte-input id="empleado" name="numeroOrden" type="text" name="numero_orden" style="height:45px" step="1" min="0" required="true" />
        <x-adminlte-card for="fechaSalida" title="Ingrese la fecha de salida:" style="height:45px" />
        <x-adminlte-input id="fechaSalida" name="numeroOrden" type="date" name="numero_orden" style="height:45px" step="1" min="0" required="true" />
        <x-adminlte-card for="fechaEntrega" title="Ingrese la fecha de entrega:" style="height:45px" />
        <x-adminlte-input id="fechaEntrega" name="numeroOrden" type="date" name="numero_orden" style="height:45px" step="1" min="0" required="true" />
        <x-adminlte-button type="submit" theme="primary" style="height:45px" label="Crear registro"/>
    </form>

@endsection
<style>
    form {
        display: flex;
        flex-wrap: wrap;
    }
    form > *{
        margin-right: 10px;
    }
</style>
