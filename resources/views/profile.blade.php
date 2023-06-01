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
                    <article class="article style-block">
                        <div class="article__image">
                            <img class="article__img" src="img/img-home.png" alt="">
                        </div>
                        <div class="article__info">
                            <div class="article__text">
                                <h2 class="article__title">
                                    <a href="post.html">
                                        Full set of iOS 16 interface elements for working in Figma
                                    </a>
                                </h2>
                            </div>
                            <ul class="article__tags tags">
                                <li class="article__tag tag">
                                    <a class="article__tag_link tag__link" href="">
                                        #figma
                                    </a>
                                </li>
                                <li class="article__tag tag">
                                    <a class="article__tag_link tag__link" href="">
                                        #ui
                                    </a>
                                </li>
                                <li class="article__tag tag">
                                    <a class="article__tag_link tag__link" href="">
                                        #mobile
                                    </a>
                                </li>
                                <li class="article__tag tag">
                                    <a class="article__tag_link tag__link" href="">
                                        #ios
                                    </a>
                                </li>
                                <li class="article__tag tag">
                                    <a class="article__tag_link tag__link" href="">
                                        #apple
                                    </a>
                                </li>
                            </ul>
                            <div class="publication__shor-info article__short-info">
                                <div class="publication__user">
                                    <a class="publication__user_href" href="">
                                        <img class="publication__user_img" src="img/user_image.png" alt="">
                                        <div class="publication__user_name">
                                            Xperience
                                        </div>
                                    </a>
                                </div>
                                <div class="publication__date">
                                    Published July 02, 2022
                                </div>
                            </div>
                        </div>
                    </article>


                    <article class="article style-block">
                        <div class="article__info">
                            <div class="article__text">
                                <h2 class="article__title">
                                    <a href="post.html">
                                        How personal blogs work, connecting external sources, transferring your
                                        blog, article series
                                    </a>
                                </h2>
                            </div>
                            <ul class="article__tags tags">
                                <li class="article__tag tag">
                                    <a class="article__tag_link tag__link" href="">
                                        #figma
                                    </a>
                                </li>
                                <li class="article__tag tag">
                                    <a class="article__tag_link tag__link" href="">
                                        #ui
                                    </a>
                                </li>
                                <li class="article__tag tag">
                                    <a class="article__tag_link tag__link" href="">
                                        #mobile
                                    </a>
                                </li>
                                <li class="article__tag tag">
                                    <a class="article__tag_link tag__link" href="">
                                        #ios
                                    </a>
                                </li>
                                <li class="article__tag tag">
                                    <a class="article__tag_link tag__link" href="">
                                        #apple
                                    </a>
                                </li>
                            </ul>
                            <div class="publication__shor-info article__short-info">
                                <div class="publication__user">
                                    <a class="publication__user_href" href="">
                                        <img class="publication__user_img" src="img/user_image.png" alt="">
                                        <div class="publication__user_name">
                                            Xperience
                                        </div>
                                    </a>
                                </div>
                                <div class="publication__date">
                                    Published July 02, 2022
                                </div>
                            </div>
                        </div>
                    </article>

                    <article class="article style-block">
                        <div class="article__info">
                            <div class="article__text">
                                <h2 class="article__title">
                                    <a href="post_second.html">
                                        How personal blogs work, connecting external sources, transferring your
                                        blog, article series
                                    </a>
                                </h2>
                                <div class="article__subtitle">
                                    Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit
                                    officia consequat duis enim velit mollit. Exercitation veniam consequat sunt
                                    nostrud amet.
                                </div>
                            </div>
                            <ul class="article__tags tags">
                                <li class="article__tag tag">
                                    <a class="article__tag_link tag__link" href="">
                                        #figma
                                    </a>
                                </li>
                                <li class="article__tag tag">
                                    <a class="article__tag_link tag__link" href="">
                                        #ui
                                    </a>
                                </li>
                                <li class="article__tag tag">
                                    <a class="article__tag_link tag__link" href="">
                                        #mobile
                                    </a>
                                </li>
                                <li class="article__tag tag">
                                    <a class="article__tag_link tag__link" href="">
                                        #ios
                                    </a>
                                </li>
                                <li class="article__tag tag">
                                    <a class="article__tag_link tag__link" href="">
                                        #apple
                                    </a>
                                </li>
                            </ul>
                            <div class="publication__shor-info article__short-info">
                                <div class="publication__user">
                                    <a class="publication__user_href" href="">
                                        <img class="publication__user_img" src="img/user_image.png" alt="">
                                        <div class="publication__user_name">
                                            Xperience
                                        </div>
                                    </a>
                                </div>
                                <div class="publication__date">
                                    Published July 02, 2022
                                </div>
                            </div>
                        </div>
                    </article>

                    <article class="article style-block">
                        <div class="article__image">
                            <img class="article__img" src="img/img-blog.png" alt="">
                        </div>
                        <div class="article__info">
                            <div class="article__text">
                                <h2 class="article__title">
                                    <a href="post_second.html">
                                        The Art of Product Management. The Importance of Soft Skills
                                    </a>
                                </h2>
                                <div class="article__subtitle">
                                    Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit
                                    officia consequat duis enim velit mollit. Exercitation veniam consequat sunt
                                    nostrud amet.
                                </div>
                            </div>
                            <ul class="article__tags tags">
                                <li class="article__tag tag">
                                    <a class="article__tag_link tag__link" href="">
                                        #figma
                                    </a>
                                </li>
                                <li class="article__tag tag">
                                    <a class="article__tag_link tag__link" href="">
                                        #ui
                                    </a>
                                </li>
                                <li class="article__tag tag">
                                    <a class="article__tag_link tag__link" href="">
                                        #mobile
                                    </a>
                                </li>
                                <li class="article__tag tag">
                                    <a class="article__tag_link tag__link" href="">
                                        #ios
                                    </a>
                                </li>
                                <li class="article__tag tag">
                                    <a class="article__tag_link tag__link" href="">
                                        #apple
                                    </a>
                                </li>
                            </ul>
                            <div class="publication__shor-info article__short-info">
                                <div class="publication__user">
                                    <a class="publication__user_href" href="">
                                        <img class="publication__user_img" src="img/user_image.png" alt="">
                                        <div class="publication__user_name">
                                            Xperience
                                        </div>
                                    </a>
                                </div>
                                <div class="publication__date">
                                    Published July 02, 2022
                                </div>
                            </div>
                        </div>
                    </article>
                </div>

                <ul class="pagination">
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
                </ul>
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
