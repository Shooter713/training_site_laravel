@extends('layouts.app')

@section('title-block')
    Сторінка контактів
@endsection

@section('content')
    <h1>Сторінка додавання статті</h1>

    @if($errors->any())

        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>

    @endif

    <form action="{{ route('contact-form') }}" method="post">

        @csrf

        <div class="form-group">
            <label for="name">Введіть ім'я</label>
            <input type="text" name="name" placeholder="Введіть ім'я" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Введіть email</label>
            <input type="text" name="email" placeholder="Введіть email" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="subject">Тема повідомлення</label>
            <input type="text" name="subject" placeholder="Тема повідомлення" id="subject" class="form-control">
        </div>

        <div class="form-group">
            <label for="message">Введіть текст повідомлення</label>
            <textarea name="message" id="message" class="form-control" placeholder="Введіть текст повідомлення"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Відправити</button>

    </form>
@endsection
