@extends('layout.default')

@section('title', 'Поиск ' . Request::get('search'))

@section('html')
    <div class="container">
        <div class="page search-page">
            <x-aside />

            <div class="content">
                <form class="search" action="{{ url()->current() }}">
                    <div class="search__top">
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

            <x-right-tags>
        </div>
    </div>
@endsection
