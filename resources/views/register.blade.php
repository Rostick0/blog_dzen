@extends('layout.default')

@section('title', 'Регистрация')

@section('html')
    <div class="container">
        <div class="page home-page">
            <x-aside />

            <div class="content">
                <div class="auth register">
                    <div class="auth__title">Создание аккаунта</div>
                    <form class="style-block auth__form register__form" action="{{ url()->current() }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="auth__inputs">
                            <label class="label">
                                <span>Имя*</span>
                                <input class="input" type="text" name="name" value="{{ old('name') }}" required>
                                @error('name')
                                    <span class="_error">{{ $message }}</span>
                                @enderror
                            </label>
                            <label class="label">
                                <span>Аватар</span>
                                <input class="input" type="file" name="avatar" accept="image/png, image/jpeg">
                                @error('avatar')
                                    <span class="_error">{{ $message }}</span>
                                @enderror
                            </label>
                            <label class="label">
                                <span>E-mail*</span>
                                <input class="input" type="email" name="email" value="{{ old('email') }}" required>
                                @error('email')
                                    <span class="_error">{{ $message }}</span>
                                @enderror
                            </label>
                            <label class="label">
                                <span>Телефон</span>
                                <input class="input" type="tel" name="telephone" value="{{ old('telephone') }}">
                            </label>
                            <label class="label">
                                <span>Пароль*</span>
                                <input class="input" type="password" name="password" required>
                                @error('password')
                                    <span class="_error">{{ $message }}</span>
                                @enderror
                            </label>
                            <label class="label">
                                <span>Подтвердите пароль*</span>
                                <input class="input" type="password" name="password_confirmation" required>
                            </label>
                        </div>
                        <button class="button auth__button">Регистрация</button>
                        <a href="{{ route('login') }}" class="link auth__link">Уже есть аккаунт</a>
                    </form>
                </div>
            </div>

            <x-right-tags />
        </div>
    </div>
@endsection
