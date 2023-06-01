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
                    @if ($article->image && Storage::url('upload/image/' . $article->image))
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
                                        @if ($article->user_avatar && Storage::url('upload/image/' . $article->user_avatar))
                                            <img class="publication__user_img post__user_img"
                                                src="{{ Storage::url('upload/image/' . $article->user_avatar) }}"
                                                alt="{{ $user->user_name }}">
                                        @else
                                            <img class="publication__user_img post__user_img"
                                                src="https://ses24.ru/assets/components/phpthumbof/cache/2ae6c058_f4f266b8.0172a862a4871f82bf93ce2425b2eb4d39.png"
                                                alt="Нет фото">
                                        @endif
                                        <div class="publication__user_name post__user_name">
                                            {{ $article->name }}
                                        </div>
                                    </a>
                                </div>
                                <div class="post__date publication__date">
                                    {{ date('H:i d.m.Y', strtotime($article->created_at)) }}
                                    @if ($article->created_at != $article->updated_at)
                                        <span
                                            title="{{ date('H:i d.m.Y', strtotime($article->updated_at)) }}">(ред.)</span>
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
                                    <form
                                        action="{{ route('like_create', [
                                            'article_id' => $article->id,
                                        ]) }}">
                                        @csrf
                                        <button class="like_button">❤</button>
                                    </form>
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
                        <div class="comments__count">
                            5 Answers
                        </div>
                        <ul class="comments__aswer">
                            <li class="comment__answer comment-user">
                                <div class="comment-user__image">
                                    <img class="comment-user__img" src="img/img-comment.png" alt="">
                                </div>
                                <div class="comment-user__text">
                                    <div class="comment-user__text_short-info">
                                        <a href="">
                                            <div class="comment-user__name">
                                                Yaroslav Zhimkov
                                            </div>
                                        </a>
                                        <time class="comment-user__date">July 02, 2022</time>
                                    </div>
                                    <div class="commet__likes">
                                        <span>Лайков: 333</span>
                                        @if (Auth::check())
                                            <form
                                                action="{{ route('like_comment_create', [
                                                    'comments_id' => 1,
                                                ]) }}"
                                                method="post">
                                                @csrf
                                                <button class="like_button">❤</button>
                                            </form>
                                        @endif
                                    </div>
                                    <div class="comment-user__message">
                                        Nulla aliquam per te, vis omnes lobortis ocurreret an. Ex per omnis feugait, vim eu
                                        voluptaria elaboraret. Ea ipsum constituto instructior est, cibo iriure facilisis ut
                                        per. Et posse equidem aliquando eos, nobis lobortis definitionem eos an.
                                    </div>
                                    <div class="comment__like_author">
                                        <span>От автора</span> <span class="like_default">❤</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
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

            <div class="margin-bottom-fixed"></div>
        </div>
    </div>
@endsection
