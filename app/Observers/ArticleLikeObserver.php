<?php

namespace App\Observers;

use App\Models\Article;
use App\Models\ArticleLike;

class ArticleLikeObserver
{
    /**
     * Handle the ArticleLike "created" event.
     *
     * @param  \App\Models\ArticleLike  $articleLike
     * @return void
     */
    public function created(ArticleLike $articleLike)
    {
        Article::find($articleLike->articles_id)
            ->update([
                'count_likes' => ArticleLike::where('articles_id', '=', $articleLike->articles_id)->count()
            ]);
    }

    /**
     * Handle the ArticleLike "updated" event.
     *
     * @param  \App\Models\ArticleLike  $articleLike
     * @return void
     */
    public function updated(ArticleLike $articleLike)
    {
        //
    }

    /**
     * Handle the ArticleLike "deleted" event.
     *
     * @param  \App\Models\ArticleLike  $articleLike
     * @return void
     */
    public function deleted(ArticleLike $articleLike)
    {
        //
    }

    /**
     * Handle the ArticleLike "restored" event.
     *
     * @param  \App\Models\ArticleLike  $articleLike
     * @return void
     */
    public function restored(ArticleLike $articleLike)
    {
        //
    }

    /**
     * Handle the ArticleLike "force deleted" event.
     *
     * @param  \App\Models\ArticleLike  $articleLike
     * @return void
     */
    public function forceDeleted(ArticleLike $articleLike)
    {
        //
    }
}
