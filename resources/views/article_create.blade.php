@extends('layout.default')

@section('title', 'Пост')

@section('html')
    <div class="container">
        <div class="page search-page">
            <x-aside />

            <div class="content search-page__content">
                <div class="post style-block">
                    <form class="post__form" action="{{ url()->current() }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <label class="label">
                            <span>Название статьи</span>
                            <input class="input" name="title" placeholder="Введите теги через запятую" type="text"
                                minlength="3" maxlength="255" required>
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
                        <textarea class="input" name="content" minlength="100" maxlength="65536" rows="12" required></textarea>
                        @error('content')
                            <span class="_error">{{ $message }}</span>
                        @enderror
                        <button class="button">Создать</button>
                    </form>
                </div>
            </div>

            <x-right-tags />
        </div>
    </div>
@endsection
