@extends('layout.default')

@section('title', 'Вход')

@section('html')
    <div class="container">
        <div class="page home-page">
            <x-aside />

            <div class="content">
                <div class="auth login">
                    <div class="auth__title">Вход в аккаунт</div>
                    <form class="style-block auth__form login__form" action="{{ url()->current() }}" method="post">
                        @csrf
                        <div class="auth__inputs">
                            <label class="label">
                                <span>E-mail*</span>
                                <input class="input" type="email" name="email" value="{{ old('email') }}" required>
                                @error('email')
                                    <span class="_error">{{ $message }}</span>
                                @enderror
                            </label>
                            <label class="label">
                                <span>Пароль*</span>
                                <input class="input" type="password" name="password" required>
                            </label>
                        </div>
                        <button class="button auth__button">Вход</button>
                        <a class="link auth__link" href="{{ route('register') }}">Создать аккаунт</a>
                    </form>
                </div>
            </div>

            <x-right-tags />
        </div>
    </div>
@endsection
