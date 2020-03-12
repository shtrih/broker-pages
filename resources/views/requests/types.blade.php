@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Заявки</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Виды заявок</th>
                                <th scope="col">День</th>
                                <th scope="col">Неделя</th>
                                <th scope="col">Месяц</th>
                                <th scope="col">Всего</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($requestTypes as $type)
                                <tr>
                                    <td><a href="/requests/{{$type->type}}">{{$type->type}}</a></td>
                                    <td>{{$type->count_day}}</td>
                                    <td>{{$type->count_week}}</td>
                                    <td>{{$type->count_month}}</td>
                                    <td>{{$type->count_all}}</td>
                                    <td><a class="btn btn-dark" href="/requests/{{$type->type}}/statistics" role="button">Статистика по дням</a></td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5">Ничего нет</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
