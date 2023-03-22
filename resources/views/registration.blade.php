@extends('layouts.app')

@section('title-block')
    Сторінка реєстрації
@endsection

@section('content')

    <div class="jumbotron">
        <div class="container">
            <div class="text-center">
                <h2>Вітаємо на нашій сторінці реєстрації</h2>
            </div>
        </div>
    </div>
    <div class="container mt-5">

        <div class="row">
            <div class="col-md-6">
                <form action="{{ route('contact-form-new-user') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Введіть ім'я</label>
                        <input type="text" name="user-name" placeholder="Введіть ім'я" id="user-name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Введіть email</label>
                        <input type="text" name="user-email" placeholder="Введіть email" id="user-email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Введіть Пароль</label>
                        <input type="password" name="user-password" placeholder="Введіть Пароль" id="user-password" class="form-control">
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-success">Реєстрація</button>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <form action="{{ route('contact-form-login') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="email">Введіть email</label>
                        <input type="text" name="email" placeholder="Введіть email" id="user-email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Введіть Пароль</label>
                        <input type="password" name="password" placeholder="Введіть Пароль" id="user-password" class="form-control">
                    </div>
                    <div class="mt-3">
                        <button class="btn btn-primary mt-4">Ввійти</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection




