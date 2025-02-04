@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Lista de Usuários</h1>
    <ul class="list-group">
        @foreach($users as $user)
            <li class="list-group-item">{{ $user }}</li>
        @endforeach
    </ul>
</div>
@endsection
