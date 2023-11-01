@extends('layouts.app')
@section('content')

@if(Auth::user())
<div class="container">
        <h1 class="text-center mb-4">Редактирование профиля</h1>

        <div class="card">
        <div class="d-flex gap-1 justify-content-around">
            
                <div class="card w-25 shadow">
                <div class="card-header">Редактирование профиля</div>
                <div class="card-body">
                   <div> </div>
                        <form action="editingprofile_red">
                            <label style="margin-left: 1rem" class="mb-3" name="id" for="">ID</label>
                            <input type="text" readonly class="form-control mb-3" name="id" value="{{$editingprofile[0]->id}}">
                            <label style="margin-left: 1rem" class="mb-3" for="">Имя</label>
                            <input type="text" class="form-control" name="name" value="{{$editingprofile[0]->name}}">  
                            <label style="margin-left: 1rem" class="mb-3" for="">Фамилия</label>
                            <input type="text" class="form-control" name="surname" value="{{$editingprofile[0]->surname}}">
                            <label style="margin-left: 1rem" class="mb-3" for="">Отчество</label>
                            <input type="text" class="form-control" name="patronymic" value="{{$editingprofile[0]->patronymic}}">
                            <label style="margin-left: 1rem" class="mb-3" for="">Логин</label>
                            <input type="text" class="form-control" name="login" value="{{$editingprofile[0]->login}}">
                            <label style="margin-left: 1rem" class="mb-3" for="">Email</label>
                            <input type="text" class="form-control" name="email" value="{{$editingprofile[0]->email}}">
                            <button class="btn btn-primary mt-3">Редактировать</button>
                        </form>
                    </div>
                </div>
            </div>
            
    </div>
</div>
@endif
     
@endsection
