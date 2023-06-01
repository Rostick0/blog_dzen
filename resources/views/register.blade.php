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

            <div class="recommendations">
                <div class="recommendation style-block">
                    <h3 class="recommendation__title">
                        <a class="recommendation__title_href" href="">
                            #travel
                        </a>
                    </h3>
                    <ul class="recommendation__list">
                        <li class="recommendation__list_item">
                            Collaboration of designers with current materials
                        </li>
                        <li class="recommendation__list_item">
                            Do I need a QR code on my mobile app's front page?
                        </li>
                        <li class="recommendation__list_item">
                            Spline - a modern tool for creating 3D with friends
                        </li>
                        <li class="recommendation__list_item">
                            About navigation in interfaces and games
                        </li>
                        <li class="recommendation__list_item">
                            The Influence of Age on Type Perception, a Study
                        </li>
                    </ul>
                </div>

                <div class="recommendation style-block">
                    <h3 class="recommendation__title">
                        <a class="recommendation__title_href" href="">
                            #tools
                        </a>
                    </h3>
                    <ul class="recommendation__list">
                        <li class="recommendation__list_item">
                            Collaboration of designers with current materials
                        </li>
                        <li class="recommendation__list_item">
                            Do I need a QR code on my mobile app's front page?
                        </li>
                        <li class="recommendation__list_item">
                            Spline - a modern tool for creating 3D with friends
                        </li>
                        <li class="recommendation__list_item">
                            About navigation in interfaces and games
                        </li>
                        <li class="recommendation__list_item">
                            The Influence of Age on Type Perception, a Study
                        </li>
                    </ul>
                </div>

                <div class="recommendation style-block">
                    <h3 class="recommendation__title">
                        <a class="recommendation__title_href" href="">
                            #lifestyle
                        </a>
                    </h3>
                    <ul class="recommendation__list">
                        <li class="recommendation__list_item">
                            Collaboration of designers with current materials
                        </li>
                        <li class="recommendation__list_item">
                            Do I need a QR code on my mobile app's front page?
                        </li>
                        <li class="recommendation__list_item">
                            Spline - a modern tool for creating 3D with friends
                        </li>
                        <li class="recommendation__list_item">
                            About navigation in interfaces and games
                        </li>
                        <li class="recommendation__list_item">
                            The Influence of Age on Type Perception, a Study
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
