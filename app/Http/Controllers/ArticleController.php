<?php

namespace App\Http\Controllers;
use App\Http\Models\Articles as Article;
use App\Http\Models\Catalogues as Catalogue;
use App\Http\Models\Users as User;
use App\Http\Controllers\Controller as Controller;
use View;
use Cookie;
use Session;
use Illuminate\Http\Request;
class ArticleController extends Controller
{
    protected $model = "";
    protected $catalogueModel ="";
    protected $userModel = "";

    function __construct()
    {
      $this->model = new Article;
      $this->catalogueModel = new Catalogue;
      $this->userModel = new User;
    }

    function article()
    {
      $articleList = $this->model->all();
      $catalogueList =$this->catalogueModel->all();
      $selectedCid = 0;
      return View::make("/article/article",compact('articleList','catalogueList','selectedCid'));
    }

    function getArticle($tid)
    {
      $article = $this->model->get(["tid"=>$tid])[0];
      $article->content = $this->translateArticle($article->content);
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

    function addArticle()
    {
      $catalogueList =$this->catalogueModel->all();
      $selectedCid = 0;
      return View::make("/article/addArticle",compact('catalogueList','selectedCid'));
    }

    function newArticle(Request $req)
    {
      $title=$req->input('title');
      $pic=$req->input('articlePic');
      $content=$req->input('content');
      $cid = $req->input('catalogue');
      $account = Session::get('user')[0]['acc'];
      $user = $this->userModel->get(['account'=>$account])[0];
      $data = array('uid'=>$user->uid,'title'=>$title,'articlePic'=>$pic,'content'=>$content,'cid'=>$cid);
      if(strlen($title)>0&&strlen($pic)>0&&strlen($content)>0)
      {
        $this->model->insert($data);
      }
      else
      {
        Session::flash("notice","請正確輸入文章資料");
      }
      return redirect('');

    }
}
