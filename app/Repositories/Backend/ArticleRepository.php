<?php

namespace App\Repositories\Backend;

use App\Models\Article;
use App\Repositories\BaseRepository;
use Prettus\Repository\Contracts\CacheableInterface;
use Prettus\Repository\Traits\CacheableRepository;


class ArticleRepository extends BaseRepository implements CacheableInterface
{
    use CacheableRepository;

    protected  $defaultOrderBy ='title';
    protected  $defaultSortBy = 'asc';


    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title', 'description', 'body'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Article::class;
    }
}
