@extends('base')

@extends('navbar')

@section('title', 'Admin | Roles')

@section('content')
    <div class="whole-page">
        <livewire:admin.roles.index/>
    </div>
<style>
        .whole-page{

background-image: url(images/roles.png);
background-repeat: no-repeat;
background-size: cover;
background-position: center;
height: 100%;
width: 100%;
}
</style>
@endsection