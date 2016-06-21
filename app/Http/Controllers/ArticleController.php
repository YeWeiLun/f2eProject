<?php

namespace App\Http\Controllers;
use App\Http\Models\Articles as Article;
use App\Http\Models\Catalogues as Catalogue;
use App\Http\Controllers\Controller as Controller;
use View;
use Cookie;
use Illuminate\Http\Request;
class ArticleController extends Controller
{
    protected $model = "";
    protected $catalogueModel ="";

    function __construct()
    {
      $this->model = new Article;
      $this->catalogueModel = new Catalogue;
    }

    function article()
    {
      $articleList = $this->model->all();
      return View::make("/article/article",compact('articleList'));
    }

    function getArticle($tid)
    {
      $article = $this->model->get(["tid"=>$tid])[0];
      $aricle->content = $this->translateArticle($article->content);
      return View::make("/article/articleDetail",compact('article'));
    }

    function getArticleListByCatalogue(Request $req)
    {
      $selectedCid = $req->input('catalogue');
      if($selectedCid!=0)
        $articleList = $this->model->get(["cid"=>$selectedCid]);
      else
        $articleList = $this->model->all();
      $catalogueList =$this->catalogueModel->all();
      return View::make("/article/article",compact('articleList','catalogueList','selectedCid'));
    }

    function translateArticle($content)
    {
      $result = str_replace("\r\n","<br>",$content);
      $result = str_replace("\n","<br>",$result);
      $result = str_replace("\r","<br>",$result);
      return $result;
    }
}
