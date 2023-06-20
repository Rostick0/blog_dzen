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
                    <form class="post__form"
                        action="{{ route('article_delete', [
                            'id' => $article->id,
                        ]) }}"
                        method="post">
                        @csrf
                        <button class="_error">Удалить</button>
                    </form>
                </div>
            </div>

            <x-right-tags />
        </div>
    </div>
@endsection
