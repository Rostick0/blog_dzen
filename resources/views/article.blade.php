<html prefix="og: http://ogp.me/ns#">

<head>
    <meta property="og:title" content="{{ $article->content }}" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="{{ url('/') }}" />
    <meta property="og:image" content="{{ Storage::url('upload/image/' . $article->image) }}" />
</head>

</html>

@extends('layout.default')

@section('title', 'Пост')

@section('html')
    <div class="container">
        <div class="page search-page">
            <x-aside-short />

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
                    <div class="post__content">
                        <div class="post__short-info">
                            <div class="post__short-info_top publication__shor-info">
                                <div class="publication__user post__user">
                                    <a class="publication__user_href post__user_href"
                                        href="{{ route('profile', [
                                            'id' => $article->users_id,
                                        ]) }}">
                                        @if ($article->user_avatar && Storage::exists('/public/upload/image/' . $article->user_avatar))
                                            <img class="publication__user_img post__user_img"
                                                src="{{ Storage::url('upload/image/' . $article->user_avatar) }}"
                                                alt="{{ $article->user_name }}">
                                        @else
                                            <img class="publication__user_img post__user_img"
                                                src="https://ses24.ru/assets/components/phpthumbof/cache/2ae6c058_f4f266b8.0172a862a4871f82bf93ce2425b2eb4d39.png"
                                                alt="Нет фото">
                                        @endif
                                        <div class="publication__user_name post__user_name">
                                            {{ $article->user_name }}
                                        </div>
                                    </a>
                                </div>
                                <div style="text-align: right">
                                    <div class="post__date publication__date">
                                        {{ date('H:i d.m.Y', strtotime($article->created_at)) }}
                                        @if ($article->created_at != $article->updated_at)
                                            <span
                                                title="{{ date('H:i d.m.Y', strtotime($article->updated_at)) }}">(ред.)</span>
                                        @endif
                                    </div>
                                    @if ($article->users_id == Auth::id())
                                        <a href="{{ route('article_edit', [
                                            'id' => $article->id,
                                        ]) }}"
                                            class="link">Редактировать</a>
                                    @endif
                                </div>
                            </div>
                            <div class="post__short-info_bottom">
                                <div>
                                    <span>Количество просмотров: </span>
                                    <span>{{ $article->count_views }}</span>
                                    <br>
                                    <span>Лайков: </span>
                                    <span>{{ $article->count_likes }}</span>
                                </div>
                                @if (Auth::check())
                                    @if ($article->user_like)
                                        <form
                                            action="{{ route('like_delete', [
                                                'article_id' => $article->id,
                                            ]) }}"
                                            method="post">
                                            @csrf
                                            <button class="like_button _active">❤</button>
                                        </form>
                                    @else
                                        <form
                                            action="{{ route('like_create', [
                                                'article_id' => $article->id,
                                            ]) }}"
                                            method="post">
                                            @csrf
                                            <button class="like_button">❤</button>
                                        </form>
                                    @endif
                                @endif
                            </div>
                        </div>
                        <div class="post__titles">
                            <h2 class="post__title">
                                {{ $article->title }}
                            </h2>
                        </div>
                        {{ $article->content }}
                    </div>
                </div>

                <div class="comments style-block">
                    <div class="comments__top">
                        @if (Auth::check())
                            <form class="comments__top_form"
                                action="{{ route('comment_create', [
                                    'articles_id' => $article->id,
                                ]) }}"
                                method="POST">
                                @csrf
                                <textarea class="comments__top_textarea input" name="content" placeholder="Ваш комментарий"></textarea>
                                <button class="comments__top_button button" disabled>Отправить</button>
                            </form>
                        @else
                            <a class="link" href="{{ route('login') }}">Ввойдите в аккаунт, чтобы добавить
                                комментарий</a>
                        @endif
                    </div>
                    <div class="comments__bottom">
                        <ul class="comments__aswer">
                            @foreach ($comments as $comment)
                                <li class="comment__answer comment-user">
                                    <a class="comment-user__image"
                                        href="{{ route('profile', [
                                            'id' => $comment->users_id,
                                        ]) }}">
                                        @if ($comment->user_avatar && Storage::exists('/public/upload/image/' . $comment->user_avatar))
                                            <img class="comment-user__img"
                                                src="{{ Storage::url('upload/image/' . $comment->user_avatar) }}"
                                                alt="{{ $comment->user_name }}">
                                        @else
                                            <img class="comment-user__img"
                                                src="https://ses24.ru/assets/components/phpthumbof/cache/2ae6c058_f4f266b8.0172a862a4871f82bf93ce2425b2eb4d39.png"
                                                alt="Нет фото">
                                        @endif
                                    </a>
                                    <div class="comment-user__text">
                                        <div class="comment-user__text_short-info">
                                            <a
                                                href="{{ route('profile', [
                                                    'id' => $comment->users_id,
                                                ]) }}">
                                                <div class="comment-user__name">
                                                    {{ $comment->user_name }}
                                                </div>
                                            </a>
                                            <time class="comment-user__date">{{ $comment->created_at }}</time>
                                        </div>
                                        <div class="commet__likes">
                                            <span>Лайков: {{ $comment->count_likes }}</span>
                                            @if (Auth::check())
                                                @if ($comment->has_like)
                                                    <form
                                                        action="{{ route('like_comment_delete', [
                                                            'id' => $comment->id,
                                                        ]) }}"
                                                        method="post">
                                                        @csrf
                                                        <button class="like_button _active">❤</button>
                                                    </form>
                                                @else
                                                    <form
                                                        action="{{ route('like_comment_create', [
                                                            'id' => $comment->id,
                                                        ]) }}"
                                                        method="post">
                                                        @csrf
                                                        <button class="like_button">❤</button>
                                                    </form>
                                                @endif
                                            @endif
                                        </div>
                                        <div class="comment-user__message">
                                            {{ $comment->content }}
                                        </div>
                                        @if ($comment->is_author_like)
                                            <div class="comment__like_author">
                                                <span class="like_default">❤</span> <span>От автора</span>
                                            </div>
                                        @endif
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                        <br>
                        {{ $comments->links('vendor.pagination') }}
                    </div>
                </div>
            </div>

            <x-right-tags />

            <div class="margin-bottom-fixed"></div>
        </div>
    </div>
@endsection
