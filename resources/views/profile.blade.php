@extends('layout.default')

@section('title', 'Регистрация')

@section('html')
    <div class="container">
        <div class="page search-page">
            <aside class="aside">
                <div class="aside__inner">
                    <div class="aside__logo">
                        <svg class="aside__logo_svg" width="48" height="30" viewBox="0 0 48 30" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M23.9507 0H29.9258V6.0199H48.0005V24.1294H42.0254V30H29.9258H23.9507V23.9801H17.9258V18.01H23.9507V0Z"
                                fill="white" />
                            <path d="M5.97511 6.01978H0V11.9899H5.97511V6.01978Z" fill="white" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M5.9248 0H11.9995V6.0199H18.0244V12.0896H11.9995V17.9602H5.9248V0Z" fill="#E6E6E6" />
                        </svg>
                    </div>

                    <div class="aside__close">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>

                    <nav class="aside__nav">
                        <ul class="aside__navigation">
                            <li class="aside__navigation_item _active">
                                <a class="aside__navigation_link" href="/">
                                    <svg class="aside__navigation_svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_1_2765)">
                                            <path class="aside__navigation_svg_fill"
                                                d="M20.0001 6.00001L14.0001 0.740006C13.4501 0.248051 12.738 -0.0239258 12.0001 -0.0239258C11.2622 -0.0239258 10.5501 0.248051 10.0001 0.740006L4.00009 6.00001C3.68246 6.28408 3.42899 6.63256 3.25657 7.02225C3.08414 7.41194 2.99671 7.83389 3.00009 8.26001V17C3.00009 17.7957 3.31617 18.5587 3.87877 19.1213C4.44138 19.6839 5.20445 20 6.00009 20H18.0001C18.7957 20 19.5588 19.6839 20.1214 19.1213C20.684 18.5587 21.0001 17.7957 21.0001 17V8.25001C21.0021 7.82557 20.9139 7.40555 20.7416 7.01769C20.5692 6.62983 20.3165 6.28296 20.0001 6.00001V6.00001ZM14.0001 18H10.0001V13C10.0001 12.7348 10.1055 12.4804 10.293 12.2929C10.4805 12.1054 10.7349 12 11.0001 12H13.0001C13.2653 12 13.5197 12.1054 13.7072 12.2929C13.8947 12.4804 14.0001 12.7348 14.0001 13V18ZM19.0001 17C19.0001 17.2652 18.8947 17.5196 18.7072 17.7071C18.5197 17.8946 18.2653 18 18.0001 18H16.0001V13C16.0001 12.2044 15.684 11.4413 15.1214 10.8787C14.5588 10.3161 13.7957 10 13.0001 10H11.0001C10.2044 10 9.44138 10.3161 8.87877 10.8787C8.31617 11.4413 8.00009 12.2044 8.00009 13V18H6.00009C5.73488 18 5.48052 17.8946 5.29299 17.7071C5.10545 17.5196 5.00009 17.2652 5.00009 17V8.25001C5.00027 8.10802 5.03069 7.9677 5.08931 7.83839C5.14794 7.70907 5.23343 7.59372 5.3401 7.50001L11.3401 2.25001C11.5226 2.08969 11.7572 2.00127 12.0001 2.00127C12.243 2.00127 12.4776 2.08969 12.6601 2.25001L18.6601 7.50001C18.7668 7.59372 18.8523 7.70907 18.9109 7.83839C18.9695 7.9677 18.9999 8.10802 19.0001 8.25001V17Z"
                                                fill="black" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_1_2765">
                                                <rect width="24" height="24" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <div class="aside__navigation_text">
                                        Home
                                    </div>
                                </a>
                            </li>
                            <li class="aside__navigation_item">
                                <a class="aside__navigation_link" href="">
                                    <svg class="aside__navigation_svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path class="aside__navigation_svg_stroke"
                                            d="M12.5 9.94118C15 6.63294 12.5 2.11765 11.25 1C11.25 4.39541 9.03375 6.29876 7.5 7.70588C5.9675 9.11412 5 11.3271 5 13.2941C5 15.0726 5.79018 16.7783 7.1967 18.0359C8.60322 19.2935 10.5109 20 12.5 20C14.4891 20 16.3968 19.2935 17.8033 18.0359C19.2098 16.7783 20 15.0726 20 13.2941C20 11.5819 18.68 8.89059 17.5 7.70588C15.2675 11.0588 14.0112 11.0588 12.5 9.94118Z"
                                            stroke="black" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    <div class="aside__navigation_text">
                                        Top Posts
                                    </div>
                                </a>
                            </li>
                            <li class="aside__navigation_item">
                                <a class="aside__navigation_link" href="no-search.html">
                                    <svg class="aside__navigation_svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path class="aside__navigation_svg_stroke"
                                            d="M12 20C16.9706 20 21 15.9706 21 11C21 6.02944 16.9706 2 12 2C7.02944 2 3 6.02944 3 11C3 15.9706 7.02944 20 12 20Z"
                                            stroke="black" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path class="aside__navigation_svg_stroke" d="M12 6V11L15 14" stroke="black"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <div class="aside__navigation_text">
                                        Latest
                                    </div>
                                </a>
                            </li>
                            <li class="aside__navigation_item">
                                <a class="aside__navigation_link" href="search.html">
                                    <svg class="aside__navigation_svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path class="aside__navigation_svg_stroke"
                                            d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z"
                                            stroke="black" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M21.0004 20.9999L16.6504 16.6499" stroke="black" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <div class="aside__navigation_text">
                                        Search
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </nav>

                    <div class="aside__popular-tags">
                        <div class="aside__popular-tags_title">
                            Popular Tags
                        </div>
                        <ul class="popular-tags">
                            <li class="popular-tag">
                                <a class="popular-tag__href" href="">
                                    #ux
                                </a>
                            </li>
                            <li class="popular-tag">
                                <a class="popular-tag__href" href="">
                                    #tools
                                </a>
                            </li>
                            <li class="popular-tag">
                                <a class="popular-tag__href" href="">
                                    #lifestyle
                                </a>
                            </li>
                            <li class="popular-tag">
                                <a class="popular-tag__href" href="">
                                    #travel
                                </a>
                            </li>
                            <li class="popular-tag">
                                <a class="popular-tag__href" href="">
                                    #bookmarks
                                </a>
                            </li>
                            <li class="popular-tag">
                                <a class="popular-tag__href" href="">
                                    #tutorial
                                </a>
                            </li>
                            <li class="popular-tag">
                                <a class="popular-tag__href" href="">
                                    #lern
                                </a>
                            </li>
                            <li class="popular-tag">
                                <a class="popular-tag__href" href="">
                                    #handbook
                                </a>
                            </li>
                            <li class="popular-tag">
                                <a class="popular-tag__href" href="">
                                    #collections
                                </a>
                            </li>
                            <li class="popular-tag">
                                <a class="popular-tag__href" href="">
                                    #lern
                                </a>
                            </li>
                            <li class="popular-tag">
                                <a class="popular-tag__href" href="">
                                    #tech
                                </a>
                            </li>
                            <li class="popular-tag">
                                <a class="popular-tag__href" href="">
                                    #productivity
                                </a>
                            </li>
                        </ul>
                    </div>

                    <ul class="aside__policy">
                        <li class="aside__policy_item">
                            <a class="aside__policy_href" href="">
                                Privacy Policy
                            </a>
                        </li>
                        <li class="aside__policy_item">
                            <a class="aside__policy_href" href="">
                                Cookie Policy
                            </a>
                        </li>
                    </ul>
                </div>
            </aside>

            <div class="content search-page__content">
                <div class="profile style-block">
                    <div class="profile__content">
                        <div class="publication__shor-info profile__short-info">
                            <div class="publication__user profile__user">
                                <div class="publication__user_href profile__user_href">
                                    <img class="publication__user_img profile__user_img" src="img/user_image.png"
                                        alt="">
                                    <div class="publication__user_name profile__user_name">
                                        Xperience
                                    </div>
                                </div>
                                <a href="" class="link">Редактировать</a>
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