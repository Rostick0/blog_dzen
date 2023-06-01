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
                <li class="aside__navigation_item {{ (request()->is('/')) ? '_active' : '' }}">
                    <a class="aside__navigation_link" href="{{ route('main') }}">
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
                            Главная
                        </div>
                    </a>
                </li>
                <li class="aside__navigation_item {{ (request()->is('hot')) ? '_active' : '' }}">
                    <a class="aside__navigation_link" href="">
                        <svg class="aside__navigation_svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path class="aside__navigation_svg_stroke"
                                d="M12.5 9.94118C15 6.63294 12.5 2.11765 11.25 1C11.25 4.39541 9.03375 6.29876 7.5 7.70588C5.9675 9.11412 5 11.3271 5 13.2941C5 15.0726 5.79018 16.7783 7.1967 18.0359C8.60322 19.2935 10.5109 20 12.5 20C14.4891 20 16.3968 19.2935 17.8033 18.0359C19.2098 16.7783 20 15.0726 20 13.2941C20 11.5819 18.68 8.89059 17.5 7.70588C15.2675 11.0588 14.0112 11.0588 12.5 9.94118Z"
                                stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <div class="aside__navigation_text">
                            Топ
                        </div>
                    </a>
                </li>
                <li class="aside__navigation_item {{ (request()->is('search')) ? '_active' : '' }}">
                    <a class="aside__navigation_link" href="{{ route('search') }}">
                        <svg class="aside__navigation_svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path class="aside__navigation_svg_stroke"
                                d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z"
                                stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M21.0004 20.9999L16.6504 16.6499" stroke="black" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <div class="aside__navigation_text">
                            Поиск
                        </div>
                    </a>
                </li>
                @if (Auth::check())
                    <li class="aside__navigation_item {{ (request()->is('article_create')) ? '_active' : '' }}">
                        <a class="aside__navigation_link" href="{{ route('article_create') }}">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 12H19" stroke="black" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M12 5L12 19" stroke="black" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            <div class="aside__navigation_text">
                                Создать статью
                            </div>
                        </a>
                    </li>
                    <li class="aside__navigation_item {{ (request()->is('profile')) ? '_active' : '' }}">
                        <a class="aside__navigation_link" href="{{ route('profile', [
                            'id' => Auth::id()
                        ]) }}">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path id="Vector"
                                    d="M19 21C19 17.134 15.866 14 12 14C8.13401 14 5 17.134 5 21M12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7C16 9.20914 14.2091 11 12 11Z"
                                    stroke="#000000" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            <div class="aside__navigation_text">
                                Профиль
                            </div>
                        </a>
                    </li>
                @else
                    <li class="aside__navigation_item {{ (request()->is('login', 'register')) ? '_active' : '' }}">
                        <a class="aside__navigation_link" href="{{ route('login') }}">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15 16.5V19C15 20.1046 14.1046 21 13 21H6C4.89543 21 4 20.1046 4 19V5C4 3.89543 4.89543 3 6 3H13C14.1046 3 15 3.89543 15 5V8.0625M20 12L9 12M9 12L11.5 14.5M9 12L11.5 9.5"
                                    stroke="#000000" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            <div class="aside__navigation_text">
                                Вход
                            </div>
                        </a>
                    </li>
                @endif
            </ul>
        </nav>
    </div>
</aside>
