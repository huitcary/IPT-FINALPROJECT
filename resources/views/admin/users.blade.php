@extends('base')

@include('navbar')

@section('title', 'Admin | Users')

@section('content')
    <div class="container">
        <livewire:admin.users.index/>
    </div>
