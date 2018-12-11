<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Repositories\ArticleRepositoryEloquent;


class ArticleController extends Controller
{
    protected $article;

    public function __construct(ArticleRepositoryEloquent $article)
    {
        $this->article = $article;
    }

    public function index($id)
    {
        $article = $this->article->find($id);
        $article->read_count = $article->read_count + 1;
        $article->save();
        return view('default.show_article', compact('article'));
    }
	public function store(Request $request)
	{
		$this->article->create([
			'title' => $request->title,
			'keyword' => $request->keyword ?? '',
			'desc' => $request->desc ?? '',
			'content' => $request->content ?? '',
			'cate_id' => $request->cate_id ?? 3,
			'user_id' => 7,
		]);
		return [
			'code' => '200',
			'message' => 'success',
		];
	}
}
