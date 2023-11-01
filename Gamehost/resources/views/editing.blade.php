@extends('layouts.app')
@section('content')
<div class="container">
        <h1 class="text-center mb-4">Редактирование товара</h1>

        <div class="card">
        <div class="d-flex gap-1 justify-content-around">
            
                <div class="card w-25 shadow">
                <div class="card-header">Редактирование товара</div>
                <div class="card-body">
                   <div> </div>
                        <form action="editing_red">
                            <label style="margin-left: 1rem" class="mb-3" name="id" for="">ID</label>
                            <input type="text" class="form-control mb-3" name="id" value="{{$editing[0]->id}}">
                            <label style="margin-left: 1rem" class="mb-3" for="">Название </label>
                            <input type="text" class="form-control" name="title" value="{{$editing[0]->title}}">
                            <label class=" m-3" for="">Изображение</label>
                            <?php $path =  '/public/img'; ?>
                                <select type="text" name="img" class="form-control" >
                                    
                                        <option value="">-</option>
                                        
                                        <?php 
                                        $img ='img/';
                                        foreach(scandir($_SERVER['DOCUMENT_ROOT'].$path) as $obj) {
                                            if ($obj == '.' || $obj == '..') {
                                                continue;
                                            } elseif (!is_dir($path . '/' . $obj)) {
                                                echo '<option value="img/'  . $obj . '">' .$img . $obj . '</option>';
                                            }		
                                        } 
                                    ?>
                                </select>
                            <label class=" m-3" for="">Цена</label>
                            <input type="number" class="form-control" name="price" value="{{$editing[0]->price}}">
                            <label class=" m-3" for="">Состав</label>
                            <input type="text" class="form-control" name="Sostav" value="{{$editing[0]->Sostav}}">
                            <label class=" m-3" for="">Вес</label>
                            <input type="text" class="form-control" name="Bec" value="{{$editing[0]->Bec}}">
                            <label class=" m-3" for="">Категория</label>
                            <input type="number" class="form-control" name="category" value="{{$editing[0]->category}}">
                            <button class="btn btn-primary mt-3">Редактировать</button>
                        </form>
                    </div>
                </div>
            </div>
            
    </div>
</div>

     
@endsection
