@extends('layout.default')

@section('title', 'Поиск ' . Request::get('search'))

@section('html')
    <div class="container">
        <div class="page search-page">
            <x-aside />

            <div class="content">
                <form class="search" action="{{ url()->current() }}">
                    <div class="search__top" action="{{ url()->current() }}">
                        <input class="seart__input input style-block" type="search" name="search">
                        <button class="search__icon">
                            <svg class="search__icon_svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z"
                                    stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M21.0004 20.9999L16.6504 16.6499" stroke="black" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                    <div class="search__bottom">
                        <label class="label">
                            <span>Категория</span>
                            <select class="input" name="categories_id">
                                <option value="">Не указано</option>
                                @foreach ($categories as $category)
                                    <option {{ Request::get('categories_id') == $category->id ? 'selected' : '' }}
                                        value="{{ $category->id }}">{{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </label>
                    </div>
                </form>
                <div class="articles">
                    @if ($articles->count())
                        @foreach ($articles as $article)
                            <x-article :article="$article" />
                        @endforeach
                        <br>
                        {{ $articles->links('vendor.pagination') }}
                    @else
                        <div class="article__no-search">
                            Нет статей
                        </div>
                    @endif
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
