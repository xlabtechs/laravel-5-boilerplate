<?php

namespace App\Events\Backend\Auth\Article;

use Illuminate\Queue\SerializesModels;

/**
 * Class ArticleCreated.
 */
class ArticleCreated
{
    use SerializesModels;

    /**
     * @var
     */
    public $article;

    /**
     * @param $article
     */
    public function __construct($article)
    {
        $this->article = $article;
    }
}
