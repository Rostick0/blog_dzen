@extends('layout.default')

@section('title', 'Пост')

@section('html')
    <div class="container">
        <div class="page search-page">
            <x-aside />

            <div class="content search-page__content">
                <div class="post style-block">
                    @if ($article->image && Storage::exists('/public/upload/image/' . $article->image))
                        <div class="post__main-image">
                            <div class="post__main-image_alignment">
                                <img class="post__main-img" src="{{ Storage::url('upload/image/' . $article->image) }}"
                                    alt="{{ $article->name }}">
                            </div>
                        </div>
                    @endif
                    <form class="post__form" action="{{ url()->current() }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <label class="label">
                            <span>Название статьи</span>
                            <input class="input" name="title" placeholder="Введите теги через запятую" type="text"
                                minlength="3" maxlength="255" value="{{ $article->title }}" required>
                            @error('title')
                                <span class="_error">{{ $message }}</span>
                            @enderror
                        </label>
                        <label class="label">
                            <span>Категория</span>
                            <select class="input" name="categories_id" required>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('categories_id')
                                <span class="_error">{{ $message }}</span>
                            @enderror
                        </label>
                        <label class="label">
                            <span>Фотография статьи</span>
                            <input class="input" name="image" placeholder="Введите теги через запятую" type="file"
                                accept="image/png, image/jpeg">
                            @error('image')
                                <span class="_error">{{ $message }}</span>
                            @enderror
                        </label>
                        <textarea class="input" name="content" minlength="100" maxlength="65536" rows="12" required>{{ $article->content }}</textarea>
                        @error('content')
                            <span class="_error">{{ $message }}</span>
                        @enderror
                        <button class="button">Изменить</button>
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
