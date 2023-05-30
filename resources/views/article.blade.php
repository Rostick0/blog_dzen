<html prefix="og: http://ogp.me/ns#">

<head>
    <meta property="og:title" content="Full set of iOS 16 interface elements for working in Figma" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="http://cp22083.tmweb.ru/" />
    <meta property="og:image" content="http://cp22083.tmweb.ru/img/img-home.png" />
</head>

</html>

@extends('layout.default')

@section('title', 'Пост')

@section('html')
    <div class="container">
        <div class="page search-page">
            <aside class="aside-short">
                <div class="aside-short__inner">
                    <div class="aside-short__item style-block" onclick="clipboard.writeText(document.URL)">
                        <div class="aside-short__item_icon">
                            <svg class="aside-short__svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M18 8H10C8.89543 8 8 8.89543 8 10V18C8 19.1046 8.89543 20 10 20H18C19.1046 20 20 19.1046 20 18V10C20 8.89543 19.1046 8 18 8Z"
                                    stroke="#898989" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M16 8V6C16 5.46957 15.7893 4.96086 15.4142 4.58579C15.0391 4.21071 14.5304 4 14 4H6C5.46957 4 4.96086 4.21071 4.58579 4.58579C4.21071 4.96086 4 5.46957 4 6V14C4 14.5304 4.21071 15.0391 4.58579 15.4142C4.96086 15.7893 5.46957 16 6 16H8"
                                    stroke="#898989" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <div class="aside-short__text">
                                Copy link
                            </div>
                        </div>
                    </div>
                    <div class="aside-short__item style-block">
                        <div class="aside-short__item_icon">
                            <svg class="aside-short__svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6 15C7.65685 15 9 13.6569 9 12C9 10.3431 7.65685 9 6 9C4.34315 9 3 10.3431 3 12C3 13.6569 4.34315 15 6 15Z"
                                    stroke="#898989" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M18 9C19.6569 9 21 7.65685 21 6C21 4.34315 19.6569 3 18 3C16.3431 3 15 4.34315 15 6C15 7.65685 16.3431 9 18 9Z"
                                    stroke="#898989" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M18 21C19.6569 21 21 19.6569 21 18C21 16.3431 19.6569 15 18 15C16.3431 15 15 16.3431 15 18C15 19.6569 16.3431 21 18 21Z"
                                    stroke="#898989" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M8.69995 10.7L15.3 7.30005" stroke="#898989" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M8.69995 13.3L15.3 16.7" stroke="#898989" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            <div class="aside-short__text">
                                Share
                            </div>
                        </div>
                        <div class="aside-short__menu">
                            <ul class="aside-short__list style-block">
                                <li class="aside-short__list_item">
                                    <a class="aside-short__list_href"
                                        href="https://twitter.com/share?url=http://cp22083.tmweb.ru/post.html">
                                        Share in Twitter
                                    </a>
                                </li>
                                <li class="aside-short__list_item">
                                    <a class="aside-short__list_href"
                                        href="https://www.linkedin.com/sharing/share-offsite/?url=http://cp22083.tmweb.ru/post.html">
                                        Share in Linkedin
                                    </a>
                                </li>
                                <li class="aside-short__list_item">
                                    <a class="aside-short__list_href"
                                        href="https://www.reddit.com/submit?url=http://cp22083.tmweb.ru/post.html">
                                        Share in Reddit
                                    </a>
                                </li>
                                <li class="aside-short__list_item">
                                    <a class="aside-short__list_href"
                                        href="https://www.facebook.com/sharer.php?u=http://cp22083.tmweb.ru/post.html">
                                        Share in Facebook
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </aside>

            <div class="content search-page__content">
                <div class="post style-block">
                    <div class="post__main-image">
                        <div class="post__main-image_alignment">
                            <img class="post__main-img" src="img/img-home.png" alt="">
                        </div>
                    </div>
                    <div class="post__content">
                        <div class="post__short-info publication__shor-info">
                            <div class="publication__user post__user">
                                <a class="publication__user_href post__user_href" href="">
                                    <img class="publication__user_img post__user_img" src="img/user_image.png"
                                        alt="">
                                    <div class="publication__user_name post__user_name">
                                        Xperience
                                    </div>
                                </a>
                            </div>
                            <div class="post__date publication__date">
                                Published July 02, 2022
                            </div>
                        </div>
                        <div class="post__titles">
                            <h2 class="post__title">
                                Full set of iOS 16 interface elements for working in Figma
                            </h2>
                        </div>
                        <ul class="post__tags tags">
                            <li class="post__tag tag">
                                <a class="post__tag_link tag__link" href="">
                                    #figma
                                </a>
                            </li>
                            <li class="post__tag tag">
                                <a class="post__tag_link tag__link" href="">
                                    #ui
                                </a>
                            </li>
                            <li class="post__tag tag">
                                <a class="post__tag_link tag__link" href="">
                                    #mobile
                                </a>
                            </li>
                            <li class="post__tag tag">
                                <a class="post__tag_link tag__link" href="">
                                    #ios
                                </a>
                            </li>
                            <li class="post__tag tag">
                                <a class="post__tag_link tag__link" href="">
                                    #apple
                                </a>
                            </li>
                        </ul>
                        <p class="post__p">
                            Lorem ipsum dolor sit amet, no omnes mollis per. Eos id sanctus mandamus. Usu option scriptorem
                            no, nonumes noluisse temporibus ius te, ut elit prima signiferumque his. Per aliquando
                            persequeris et. Usu ei congue gubergren, iudico deseruisse at cum, velit nostro eu ius.
                        </p>
                        <p class="post__p">
                            Nulla aliquam per te, vis omnes lobortis ocurreret an. Ex per omnis feugait, vim eu voluptaria
                            elaboraret. Ea ipsum constituto instructior est, cibo iriure facilisis ut per. Et posse equidem
                            aliquando eos,
                            <a class="link" href="">
                                nobis lobortis definitionem eos an.
                            </a>
                        </p>
                        <p class="post__p">
                            Vis ea nisl ceteros adversarium, te pro labore reprimique. Pri ut ipsum dicta. Similique
                            intellegam an per, omnes tantas electram ut qui, nam in duis velit ceteros. At pro munere
                            euismod, te munere quaerendum cum. Mel nihil eleifend cu. Vis in utroque fuisset, eu sit
                            fabellas definiebas dissentiet.
                        </p>
                        <p class="post__p">
                            Sit at audiam perpetua, et saepe corpora praesent cum. Dicit similique referrentur eam eu, ne
                            omnes ancillae has. Quo labore quaestio ea, te lorem paulo signiferumque vis. Erant nostrum
                            salutandi pri an.
                        </p>
                        <div class="post__image">
                            <div class="post__image_alignment">
                                <img class="post__img" src="img/img-post.png" alt="">
                            </div>
                        </div>
                        <p class="post__p">
                            Lorem ipsum dolor sit amet, no omnes mollis per. Eos id sanctus mandamus. Usu option scriptorem
                            no, nonumes noluisse temporibus ius te, ut elit prima signiferumque his. Per aliquando
                            persequeris et. Usu ei congue gubergren, iudico deseruisse at cum, velit nostro eu ius.
                        </p>
                        <p class="post__italc-grey">
                            Lorem ipsum dolor sit amet, no omnes mollis per. Eos id sanctus mandamus. Usu option scriptorem
                            no, nonumes noluisse temporibus ius te, ut elit prima signiferumque his. Per aliquando
                            persequeris et. Usu ei congue gubergren, iudico deseruisse at cum, velit nostro eu ius.
                        </p>
                        <div class="post__image post__slider slider">
                            <div class="post__image_alignment post__sliders">
                                <div class="post__sliders_inner slider__inner slider__inner">
                                    <img class="post__img post__slider_img slider__item" src="img/img-post.png"
                                        alt="">
                                    <img class="post__img post__slider_img slider__item" src="img/img-home.png"
                                        alt="">
                                    <img class="post__img post__slider_img slider__item" src="img/banner-background.png"
                                        alt="">
                                </div>
                            </div>
                            <div class="post__image_name">
                                Lorem ipsum dolor sit amet, no omnes mollis per.
                            </div>
                            <div class="post__slider__switches">
                                <ul class="post__slider_lists">
                                </ul>
                                <div class="post__slider_arrows">
                                    <div class="post__slider_arrow">
                                        <svg class="post__slider_arrow_svg" width="8" height="14"
                                            viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7 13L1 7L7 1" stroke="#131313" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <div class="post__slider_arrow post__slider_arrow_right">
                                        <svg class="post__slider_arrow_svg" width="8" height="14"
                                            viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 13L7 7L1 1" stroke="#131313" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="post__p">
                            Lorem ipsum dolor sit amet, no omnes mollis per. Eos id sanctus mandamus. Usu option scriptorem
                            no, nonumes noluisse temporibus ius te, ut elit prima signiferumque his. Per aliquando
                            persequeris et. Usu ei congue gubergren, iudico deseruisse at cum, velit nostro eu ius.
                        </p>
                        <p class="post__p">
                            Nulla aliquam per te, vis omnes lobortis ocurreret an. Ex per omnis feugait, vim eu voluptaria
                            elaboraret. Ea ipsum constituto instructior est, cibo iriure facilisis ut per. Et posse equidem
                            aliquando eos, nobis lobortis definitionem eos an.
                        </p>
                        <div class="post__image">
                            <div class="post__image_alignment">
                                <img class="post__img" src="img/img-post.png" alt="">
                            </div>
                            <div class="post__image_name">
                                Lorem ipsum dolor sit amet, no omnes mollis per.
                            </div>
                        </div>
                        <p class="post__p">
                            Lorem ipsum dolor sit amet, no omnes mollis per. Eos id sanctus mandamus. Usu option scriptorem
                            no, nonumes noluisse temporibus ius te, ut elit prima signiferumque his. Per aliquando
                            persequeris et. Usu ei congue gubergren, iudico deseruisse at cum, velit nostro eu ius.
                        </p>
                        <p class="post__p">
                            Nulla aliquam per te, vis omnes lobortis ocurreret an. Ex per omnis feugait, vim eu voluptaria
                            elaboraret. Ea ipsum constituto instructior est, cibo iriure facilisis ut per. Et posse equidem
                            aliquando eos, nobis lobortis definitionem eos an.
                        </p>
                        <div class="post__video">
                            <div class="post__video_alignment">
                                <div class="video__start">
                                    <svg class="video__start_svg" width="68" height="48" viewBox="0 0 68 48"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="68" height="48" rx="6"
                                            transform="matrix(-1 0 0 1 68 0)" fill="#7421B0" />
                                        <path
                                            d="M42.5 23.134C43.1667 23.5189 43.1667 24.4811 42.5 24.866L30.5 31.7942C29.8333 32.1791 29 31.698 29 30.9282L29 17.0718C29 16.302 29.8333 15.8209 30.5 16.2058L42.5 23.134Z"
                                            fill="white" />
                                    </svg>
                                </div>
                                <!-- <img class="post__img" src="img/img-post.png" alt=""> -->
                                <video class="post__video-elem" preload="metadata"
                                    src="img/Desktop 2022.06.24 - 13.17.36.02.mp4"></video>
                            </div>
                        </div>
                        <p class="post__p">
                            Lorem ipsum dolor sit amet, no omnes mollis per. Eos id sanctus mandamus. Usu option scriptorem
                            no, nonumes noluisse temporibus ius te, ut elit prima signiferumque his:
                        </p>
                        <ol class="list__ol post__list_ol">
                            <li class="item__list">
                                Lorem ipsum dolor sit amet, no omnes mollis per
                            </li>
                            <li class="item__list">
                                Lorem ipsum dolor sit amet, no omnes mollis per
                            </li>
                            <li class="item__list">
                                Lorem ipsum dolor sit amet, no omnes mollis per
                            </li>
                            <li class="item__list">
                                Lorem ipsum dolor sit amet, no omnes mollis per
                            </li>
                            <li class="item__list">
                                Lorem ipsum dolor sit amet, no omnes mollis per
                            </li>
                        </ol>
                    </div>
                </div>

                <div class="comments style-block">
                    <div class="comments__top">
                        <div class="comments__top_content">
                            <div class="comment__top_image">
                                <img class="comment__top_img" src="img/user_image.png" alt="">
                            </div>
                            <div class="comment__top_text">
                                <a href="">
                                    <div class="comment__top_name">
                                        Yaroslav Zhimkov
                                    </div>
                                </a>
                                <div class="comment__top_answer">
                                    Lorem ipsum dolor sit amet, no omnes mollis per. Eos id sanctus mandamus. Usu option
                                    scriptorem no, nonumes noluisse temporibus ius te, ut elit prima signiferumque his?
                                </div>
                            </div>
                        </div>
                        <form class="comments__top_form" action="">
                            <textarea class="comments__top_textarea input" placeholder="Your answer"></textarea>
                            <button class="comments__top_button button" disabled>
                                Reply
                            </button>
                        </form>
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
                                        <date class="comment-user__date">July 02, 2022</date>
                                    </div>
                                    <div class="comment-user__message">
                                        Nulla aliquam per te, vis omnes lobortis ocurreret an. Ex per omnis feugait, vim eu
                                        voluptaria elaboraret. Ea ipsum constituto instructior est, cibo iriure facilisis ut
                                        per. Et posse equidem aliquando eos, nobis lobortis definitionem eos an.
                                    </div>
                                </div>
                            </li>
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
                                        <date class="comment-user__date">July 02, 2022</date>
                                    </div>
                                    <div class="comment-user__message">
                                        Nulla aliquam per te, vis omnes lobortis ocurreret an. Ex per omnis feugait, vim eu
                                        voluptaria elaboraret. Ea ipsum constituto instructior est, cibo iriure facilisis ut
                                        per. Et posse equidem aliquando eos, nobis lobortis definitionem eos an.
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