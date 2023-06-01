@extends('layout.default')

@section('title', 'Редактирование')

@section('html')
    <div class="container">
        <div class="page home-page">
            <x-aside />

            <div class="content search-page__content">
                <div class="profile style-block">
                    <div class="profile__content">
                        <div class="publication__shor-info profile__short-info">
                            <div class="publication__user profile__user">
                                <div class="publication__user_href profile__user_href">
                                    @if ($user->avatar && Storage::url('upload/image/' . $user->avatar))
                                        <img class="publication__user_img profile__user_img"
                                            src="{{ Storage::url('upload/image/' . $user->avatar) }}"
                                            alt="{{ $user->name }}">
                                    @else
                                        <img class="publication__user_img profile__user_img"
                                            src="https://ses24.ru/assets/components/phpthumbof/cache/2ae6c058_f4f266b8.0172a862a4871f82bf93ce2425b2eb4d39.png"
                                            alt="Нет фото">
                                    @endif
                                    <div class="publication__user_name profile__user_name">
                                        {{ $user->name }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="auth register">
                    <h2 class="auth__title">Редактирование аккаунта</h2>
                    <form class="style-block auth__form register__form" action="{{ url()->current() }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="auth__inputs">
                            <label class="label">
                                <span>Имя*</span>
                                <input class="input" type="text" name="name" value="{{ old('name') ?? $user->name }}"
                                    required>
                                @error('name')
                                    <span class="_error">{{ $message }}</span>
                                @enderror
                            </label>
                            <label class="label">
                                <span>Новый аватар</span>
                                <input class="input" type="file" name="avatar" accept="image/png, image/jpeg">
                                @error('avatar')
                                    <span class="_error">{{ $message }}</span>
                                @enderror
                            </label>
                            <label class="label">
                                <span>E-mail*</span>
                                <input class="input" type="email" name="email"
                                    value="{{ old('email') ?? $user->email }}" required>
                                @error('email')
                                    <span class="_error">{{ $message }}</span>
                                @enderror
                            </label>
                            <label class="label">
                                <span>Телефон</span>
                                <input class="input" type="tel" name="telephone"
                                    value="{{ old('telephone') ?? $user->telephone }}">
                                @error('telephone')
                                    <span class="_error">{{ $message }}</span>
                                @enderror
                            </label>
                        </div>
                        <button class="button auth__button">Сохранить</button>
                    </form>
                </div>

                <div class="auth register">
                    <h2 class="auth__title">Смена пароля</h2>
                    <form class="style-block auth__form register__form" action="{{ route('password_edit') }}"
                        method="post">
                        @csrf
                        <div class="auth__inputs">
                            <label class="label">
                                <span>Пароль*</span>
                                <input class="input" type="password" name="password_old" required>
                                @error('password_old')
                                    <span class="_error">{{ $message }}</span>
                                @enderror
                            </label>
                            <label class="label">
                                <span>Новый пароль*</span>
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
                        <button class="button auth__button">Сохранить</button>
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
