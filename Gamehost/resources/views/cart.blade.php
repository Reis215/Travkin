@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="list-group">
            <!-- Элементы корзины -->
            @foreach($cart as $item)
                <div class="list-group-item d-flex gap-2">
                    <img src="{{$item->img}}" style="height: 50px; width: 50px;" alt="">
                    <div class="d-flex justify-content-between w-100">
                        <div>{{$item->title}}</div>
                        <div>Количество: {{$item->cart}}
                            <a class="btn btn-primary" style="margin-left: 20px" href="cart_add?id={{$item->id}}">Добавить товар</a>
                            <a class="btn btn-secondary" style="margin-left: 10px" href="cart_del?id={{$item->id}}">Убрать товар</a>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
        <!-- Управление корзиной -->
        <div class="d-flex justify-content-end">
            <a class="btn btn-secondary m-3" href="cart_fulldel">Отчистить корзину</a>
            <a class="btn btn-primary m-3" href="order_add">Сделать заказ</a>
        </div>
    </div>
@endsection
