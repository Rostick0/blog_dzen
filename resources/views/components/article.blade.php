<article class="article style-block">
    @if ($article->image && Storage::exists('/public/upload/image/' . $article->image))
        <a class="article__image" href="{{ route('article', [
            'id' => $article->id,
        ]) }}">
            <img class="article__img" src="{{ Storage::url('upload/image/' . $article->image) }}"
                alt="{{ $article->title }}">
        </a>
    @endif
    <div class="article__info">
        <div class="article__text">
            <h2 class="article__title">
                <a href="{{ route('article', [
                    'id' => $article->id,
                ]) }}">
                    {{ $article->title }}
                </a>
            </h2>
            <div class="article__subtitle">
                {{ mb_substr($article->content, 0, 100) }}
            </div>
        </div>
        <div class="publication__shor-info article__short-info">
            <div class="publication__user">
                <a class="publication__user_href" href="{{ route('profile', $article->users_id) }}">
                    @if ($article->user_avatar && Storage::exists('/public/upload/image/' . $article->user_avatar))
                        <img class="publication__user_img"
                            src="{{ Storage::url('upload/image/' . $article->user_avatar) }}"
                            alt="{{ $article->user_name }}">
                    @else
                        <img class="publication__user_img"
                            src="https://ses24.ru/assets/components/phpthumbof/cache/2ae6c058_f4f266b8.0172a862a4871f82bf93ce2425b2eb4d39.png"
                            alt="Нет фото">
                    @endif
                    <div class="publication__user_name">
                        {{ $article->user_name }}
                    </div>
                </a>
            </div>
            <div class="publication__date">
                {{ date('H:i d.m.Y', strtotime($article->created_at)) }}
            </div>
        </div>
    </div>
</article>
