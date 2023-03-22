@extends('layouts.app')

@section('title-block')
    Обновлення запису
@endsection

@section('content')
    <h1>Обновлення запису</h1>

    @if($errors->any())

        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>

    @endif

    <form action="{{ route('contact-data-update-submit', $data->id) }}" method="post">

        @csrf

        <div class="form-group">
            <label for="name">Введіть ім'я</label>
            <input type="text" name="name" value="{{ $data->name }}" placeholder="Введіть ім'я" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Введіть email</label>
            <input type="text" name="email" value="{{ $data->email }}" placeholder="Введіть email" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="subject">Тема повідомлення</label>
            <input type="text" name="subject" value="{{ $data->subject }}" placeholder="Тема повідомлення" id="subject" class="form-control">
        </div>

        <div class="form-group">
            <label for="message">Введіть текст повідомлення</label>
            <textarea name="message" id="message" class="form-control" placeholder="Введіть текст повідомлення">
                {{ $data->message }}"
            </textarea>
        </div>

        <button type="submit" class="btn btn-success">Обновити</button>

    </form>
@endsection
