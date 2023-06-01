<?php

namespace App\Observers;

use App\Models\Article;
use App\Models\ArticleView;

class ArticleViewObserver
{
    /**
     * Handle the ArticleView "created" event.
     *
     * @param  \App\Models\ArticleView  $articleView
     * @return void
     */
    public function created(ArticleView $articleView)
    {
        Article::find($articleView->articles_id)
            ->update([
                'count_views' => ArticleView::where('articles_id', '=', $articleView->articles_id)->count()
            ]);
    }

    /**
     * Handle the ArticleView "updated" event.
     *
     * @param  \App\Models\ArticleView  $articleView
     * @return void
     */
    public function updated(ArticleView $articleView)
    {
        //
    }

    /**
     * Handle the ArticleView "deleted" event.
     *
     * @param  \App\Models\ArticleView  $articleView
     * @return void
     */
    public function deleted(ArticleView $articleView)
    {
        
    }

    /**
     * Handle the ArticleView "restored" event.
     *
     * @param  \App\Models\ArticleView  $articleView
     * @return void
     */
    public function restored(ArticleView $articleView)
    {
        //
    }

    /**
     * Handle the ArticleView "force deleted" event.
     *
     * @param  \App\Models\ArticleView  $articleView
     * @return void
     */
    public function forceDeleted(ArticleView $articleView)
    {
        //
    }
}
