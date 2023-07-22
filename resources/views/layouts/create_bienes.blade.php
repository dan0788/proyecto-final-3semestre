@extends('adminlte::page')

@section('title', 'Project | Crear bien')
@section('content')
    <div class="form">
        <x-adminlte-card title="Ingrese el número de orden:" style="height:45px" />
        <x-adminlte-input type="number" name="numero_orden" style="height:45px" step="1" min="0" required="true" />
        <x-adminlte-button type="submit" theme="primary" style="height:45px" label="Enviar registro"/>
    </div>

@endsection
<style>
    .form {
        display: flex;
    }
    .form > *{
        margin-right: 10px;
    }
</style>
