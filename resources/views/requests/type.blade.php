@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="{{route('requests')}}">&laquo; Назад</a>

            <div class="card">
                <div class="card-header">Заявки {{$type}}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Номер звявки</th>
                            <th scope="col">ID авто</th>
                            <th scope="col">Марка, модель авто</th>
                            <th scope="col">Дата</th>
                        </tr>
                        </thead>
                        <tbody>
                            @forelse ($requests as $request)
                                <tr>
                                    <td>{{$request->id}}</td>
                                    <td>{{$request->auto_id}}</td>
                                    <td>{{$request->mark}} {{$request->model}}, {{$request->year}}</td>
                                    <td>{{$request->created_at}}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="2">Пусто</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                    {{$requests->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
