<?php

namespace App\Providers;

use App\Models\ArticleCommentLike;
use App\Models\ArticleLike;
use App\Models\Articleview;
use App\Observers\ArticleCommentLikeObserver;
use App\Observers\ArticleLikeObserver;
use App\Observers\ArticleViewObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        Articleview::observe(ArticleViewObserver::class);
        ArticleLike::observe(ArticleLikeObserver::class);
        ArticleCommentLike::observe(ArticleCommentLikeObserver::class);
    }
}
