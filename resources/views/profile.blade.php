@extends('layout.default')

@section('title', 'Профиль ' . $user->name)

@section('html')
    <div class="container">
        <div class="page search-page">
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
                                    <div class="publication__user_name profile__user_name">{{ $user->name }}</div>

                                </div>
                                @if (Auth::id() == $user->id)
                                    <a href="{{ route('profile_edit') }}" class="link">Редактировать</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <h2>Статьи пользователя</h2>
                <div class="articles">
                    @if ($articles->count())
                        @foreach ($articles as $article)
                            <x-article :article="$article" />
                        @endforeach
                        <br>
                        {{ $articles->links('vendor.pagination') }}
                    @else
                        <div class="article__no-search">
                            @if ($user->id == Auth::id())
                                У вас нет статей, не хотите ли <a href="{{route('article_create')}}" class="link">создать</a>?
                            @else
                                Пользователь не писал статьи
                            @endif
                        </div>
                    @endif
                </div>

                {{-- <ul class="pagination">
                    <li class="button pagination__item">
                        ⇦
                    </li>
                    <li class="button pagination__item">
                        1
                    </li>
                    <li class="button pagination__item">
                        1
                    </li>
                    <li class="button pagination__item">
                        ⇨
                    </li>
                </ul> --}}
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
