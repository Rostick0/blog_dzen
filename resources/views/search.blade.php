@extends('layout.default')

@section('title', 'Регистрация')

@section('html')
    <div class="container">
        <div class="page search-page">
            <x-aside />

            <div class="content">
                <div class="search">
                    <form class="search__top">
                        <input class="seart__input input style-block" type="text">
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
                    </form>
                </div>
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
                {{-- <div class="article__no-search">
                    No results match that query
                </div> --}}
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
