
<div class="d-flex align-items-center flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">

    <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
        <span class="fs-1 ">iMak91</span>
    </a>

    <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        <a class="me-4 py-3 text-dark text-decoration-none" href="{{ route('home') }}">Домашня</a>
        <a class="me-4 py-3 text-dark text-decoration-none" href="{{ route('about') }}">Про нас</a>
        @if(\Auth::user())
            <a class="me-4 py-3 text-dark text-decoration-none" href="{{ route('contact') }}">Контакти</a>
            <a class="me-4 py-3 text-dark text-decoration-none" href="{{ route('contact-data') }}">Повідомлення</a>
        @endif

        @if(\Auth::user())
            <a class="me-4 py-3 text-dark text-decoration-none" href="{{ route('logout') }}">{{\Auth::user()->email}}</a>
        @else
            <a class="me-4 py-3 text-dark text-decoration-none" href="{{ route('registration') }}">Вхід / Реєстрація</a>
        @endif
    </nav>

</div>


{{--{{ route('entrance') }}--}}
