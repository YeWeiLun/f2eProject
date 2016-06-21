<?php

namespace App\Http\Controllers;
use App\Http\Models\Articles as Article;
use App\Http\Controllers\Controller as Controller;
use View;
use Cookie;
use Illuminate\Http\Request;
class ArticleController extends Controller
{
    protected $model = "";

    function __construct()
    {
      $this->model = new Article;
    }

    function article()
    {
      $articleList = $this->model->all();
      return View::make("/article/article",compact('articleList'));
    }

    function getArticle($tid)
    {
      $article = $this->model->get(["tid"=>$tid])[0];
      return View::make("/article/articleDetail",compact('article'));
    }
}
