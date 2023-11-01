@extends('layouts.app')
@section('content')
<div class="container">
    <h1 class="text-center mb-4">Панель администратора</h1>
    <div class="card">
    <div class="card-header">Управление аккаунтами</div>
    <div class="card-body">
        <div class="d-flex gap-1 justify-content-around">
            <div class="d-flex gap-2" style="flex-wrap: wrap">
                
                @foreach($users as $user)
                       
                
                <div class="card">
                        <img src="{{$user->img}}" class="card-img" style="width: 130px; height: 127px" alt="">
                        <div class="card-body">
                            <div class="card-title">{{$user->name}} {{$user->surname}}</div>
                            <a class="btn btn-primary mt-2"  href="profile?id={{$user->id}}">Просмотр аккаунта</a>
                            <a class="btn mt-2 " href="editingprofile?id={{$user->id}}">
                                Редактировать
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>


@endsection