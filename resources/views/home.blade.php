@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    <ul>
                        <li><a href="{{route('requests')}}">Заявки</a></li>
                        <li><a href="{{route('ads')}}">Объявления</a></li>
                        <li><a href="{{route('messages')}}">Сообщения</a></li>
                        <li><a href="{{route('vehicle-check')}}">Проверка автомобиля</a></li>
                        <li><a href="{{route('settings')}}">Настройки</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
