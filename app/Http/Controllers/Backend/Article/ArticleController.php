<?php

namespace App\Http\Controllers\Backend\Article;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Article\CreateArticleRequest;
use App\Http\Requests\Backend\Article\UpdateArticleRequest;
use App\Models\Article;
use App\Repositories\Backend\ArticleRepository;
use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ArticleController extends Controller
{
    /** @var  ArticleRepository */
    private $articleRepository;

    public function __construct(ArticleRepository $articleRepo)
    {
        $this->articleRepository = $articleRepo;
    }

    /**
     * Display a listing of the Article.
     *
     * @param Request $request
     * @return Response | \Illuminate\View\View|Response
     */
    public function index(Request $request)
    {
        $this->articleRepository->pushCriteria(new RequestCriteria($request));

        return view('backend.articles.index')
            ->with('articles', $this->articleRepository->paginate(25));
    }

    /**
     * Show the form for creating a new Article.
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function create()
    {
        return view('backend.articles.create');
    }

    /**
     * Store a newly created Article in storage.
     *
     * @param CreateArticleRequest $request
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function store(CreateArticleRequest $request)
    {
        $this->articleRepository->create($request->only(['title', 'description', 'body']));

        return redirect()->route('admin.article.index')->withFlashSuccess(__('alerts.frontend.article.saved'));
    }

    /**
     * Display the specified Article.
     *
     * @param Article $article
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function show(Article $article)
    {
        return view('backend.articles.show')->with('article', $article);
    }

    /**
     * Show the form for editing the specified Article.
     *
     * @param Article $article
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function edit(Article $article)
    {
        return view('backend.articles.edit')->with('article', $article);
    }

    /**
     * Update the specified Article in storage.
     *
     * @param UpdateArticleRequest $request
     *
     * @param Article $article
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     */
    public function update(UpdateArticleRequest $request, Article $article)
    {
        $this->articleRepository->update($article, $request->all());

        return redirect()->route('backend.article.index')->withFlashSuccess(__('alerts.frontend.article.updated'));

    }

    /**
     * Remove the specified Article from storage.
     *
     * @param Article $article
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function destroy(Article $article)
    {
        $this->articleRepository->delete($article);

        return redirect()->back()->withFlashSuccess(__('alerts.frontend.article.deleted'));
    }
}
