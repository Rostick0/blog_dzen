<?php

namespace App\Observers;

use App\Models\ArticleComment;
use App\Models\ArticleCommentLike;

class ArticleCommentLikeObserver
{
    /**
     * Handle the ArticleCommentLike "created" event.
     *
     * @param  \App\Models\ArticleCommentLike  $articleCommentLike
     * @return void
     */
    public function created(ArticleCommentLike $articleCommentLike)
    {
        ArticleComment::find($articleCommentLike->article_comments_id)
            ->update([
                'count_likes' => ArticleCommentLike::where('article_comments_id', '=', $articleCommentLike->article_comments_id)->count()
            ]);
    }

    /**
     * Handle the ArticleCommentLike "updated" event.
     *
     * @param  \App\Models\ArticleCommentLike  $articleCommentLike
     * @return void
     */
    public function updated(ArticleCommentLike $articleCommentLike)
    {
        //
    }

    /**
     * Handle the ArticleCommentLike "deleted" event.
     *
     * @param  \App\Models\ArticleCommentLike  $articleCommentLike
     * @return void
     */
    public function deleted(ArticleCommentLike $articleCommentLike)
    {
        ArticleComment::find($articleCommentLike->article_comments_id)
            ->update([
                'count_likes' => ArticleCommentLike::where('article_comments_id', '=', $articleCommentLike->article_comments_id)->count()
            ]);
    }

    /**
     * Handle the ArticleCommentLike "restored" event.
     *
     * @param  \App\Models\ArticleCommentLike  $articleCommentLike
     * @return void
     */
    public function restored(ArticleCommentLike $articleCommentLike)
    {
        //
    }

    /**
     * Handle the ArticleCommentLike "force deleted" event.
     *
     * @param  \App\Models\ArticleCommentLike  $articleCommentLike
     * @return void
     */
    public function forceDeleted(ArticleCommentLike $articleCommentLike)
    {
        //
    }
}
