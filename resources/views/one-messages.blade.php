@extends('layouts.app')

@section('title-block')
    {{ $data->subject }}
@endsection

@section('content')

    <h1>{{ $data->subject }}</h1>

        <div class="alert alert-info">
            <p>{{ $data->subject }}</p>
            <p>{{ $data->email }} {{ $data->name }}</p>
            <p>{{ $data->message }}</p>
            <p>
                <small>{{ $data->created_at }}</small>
            </p>
            <a href="{{ route('contact-data-update', $data->id) }}">
                <button class="btn btn-primary">Редагувати</button>
            </a>
            <a href="{{ route('contact-data-delete', $data->id) }}">
                <button class="btn btn-danger">Видалити</button>
            </a>
        </div>

@endsection



