@extends('layouts.app')

@section('content')
<div class="container w-50">
        <div class="card">
            <div class="card-header card-title">
                <h5 class="card-title">Информация o пользователе</h5>
            </div>
                <div class="card-body ">
                    <p class="card-text">
                        <span class="fw-bold">id:</span> {{ $user->id }}
                    </p>
                    <p class="card-text">
                        <span class="fw-bold">Имя:</span> {{ $user->name }}
                    </p>
                    <p class="card-text">
                        <span class="fw-bold">Email:</span> {{ $user->email }}
                    </p>
                    <a href="/" class="btn btn-outline-secondary w-100">Назад</a>
                </div>
            </div>
        </div>
    </div>

@endsection