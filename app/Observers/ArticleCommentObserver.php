<?php

namespace App\Observers;

use App\Models\ArticleComment;
use App\Models\ArticleCommentLike;

class ArticleCommentObserver
{
    /**
     * Handle the ArticleComment "created" event.
     *
     * @param  \App\Models\ArticleComment  $articleComment
     * @return void
     */
    public function created(ArticleComment $articleComment)
    {
        //
    }

    /**
     * Handle the ArticleComment "updated" event.
     *
     * @param  \App\Models\ArticleComment  $articleComment
     * @return void
     */
    public function updated(ArticleComment $articleComment)
    {
        //
    }

    /**
     * Handle the ArticleComment "deleted" event.
     *
     * @param  \App\Models\ArticleComment  $articleComment
     * @return void
     */
    public function deleted(ArticleComment $articleComment)
    {
        ArticleCommentLike::where([
            'article_comments_id', '=', $articleComment->id
        ])->delete();
    }

    /**
     * Handle the ArticleComment "restored" event.
     *
     * @param  \App\Models\ArticleComment  $articleComment
     * @return void
     */
    public function restored(ArticleComment $articleComment)
    {
        //
    }

    /**
     * Handle the ArticleComment "force deleted" event.
     *
     * @param  \App\Models\ArticleComment  $articleComment
     * @return void
     */
    public function forceDeleted(ArticleComment $articleComment)
    {
        //
    }
}
