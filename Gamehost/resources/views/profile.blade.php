@extends('layouts.app')
@section('content')

@if(Auth::user())
<form action="profile">
<div class="container">
    <div class="list-group" style="text-align: center;align-items: center;"> 
    <div class="list-group-item d-flex gap-2">
    <div class="d-flex justify-content-between w-100"> 
    <div class="card-title"><h2>Имя: {{$profile->name}}</h2>
    <div class="card-title"><h2>Фамилия: {{$profile->surname}}</h2></div>
    <div class="card-title"><h2>Отчество: {{$profile->patronymic}}</h2></div>
    <div class="card-title"><h2>Login: {{$profile ->login}}</h2></div>
    <div class="card-title"><h2>Email: {{$profile->email}}@mail.ru</h2>
</div>
</div>
</div>
</div>
<a class="btn mt-2 " href="editingprofile?id={{$profile->id}}">Редактировать</a>

</form>


@endif

@endsection