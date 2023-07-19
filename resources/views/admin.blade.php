@extends('adminlte::page')
 
@section('title', 'AdminLTE')
 
@section('content\_header')
    <h1 class="m-0 text-dark">Dashboard</h1>
@stop
 
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="mb-0">You are logged in!</p>
                </div>
            </div>
        </div>
        <div class="col-12">
            <h5>Alerts</h5>
            <x-adminlte-alert theme="light" title="Tip">
                Light theme alert!
            </x-adminlte-alert>
            <x-adminlte-alert theme="dark" title="Important">
                Dark theme alert!
            </x-adminlte-alert>
            <x-adminlte-alert theme="primary" title="Primary Notification">
                Primary theme alert!
            </x-adminlte-alert>
            <x-adminlte-alert theme="secondary" icon="" title="Secondary Notification">
                Secondary theme alert!
            </x-adminlte-alert>
            <x-adminlte-alert theme="danger" title="Danger">
                Danger theme alert!
            </x-adminlte-alert>
        </div>
    </div>
@stop