<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Repositories\ArticleRepositoryEloquent;

class HomeController extends Controller
{
    protected $article;

    public function __construct(ArticleRepositoryEloquent $article)
    {
        $this->article = $article;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = $this->article
            ->with([
                'category'
            ])
            ->orderBy('sort','desc')
            ->orderBy('id', 'desc')
            ->paginate();

        return view('default.home', compact('articles'));
    }
    public function postbaidu()
    {
        $articles = \App\Models\Article::whereBetween('id',['226','282'])
            ->orderBy('sort','desc')
            ->orderBy('id', 'desc')
            ->get()
            ->toArray();
        $ids = array_column($articles, 'id');
        $urls = array();
        foreach ($ids as $key => $id) {
            $urls[$key] = 'http://word.feibu.info/article/'.$id;
        }
        $api = 'http://data.zz.baidu.com/urls?site=word.feibu.info&token=c7Ej6hPxF8SNoeaD';
        $ch = curl_init();
        $options =  array(
            CURLOPT_URL => $api,
            CURLOPT_POST => true,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POSTFIELDS => implode("\n", $urls),
            CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
        );
        curl_setopt_array($ch, $options);
        $result = curl_exec($ch);
        echo $result;
    }
}
