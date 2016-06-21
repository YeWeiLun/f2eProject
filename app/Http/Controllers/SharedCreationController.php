<?php

namespace App\Http\Controllers;
use App\Http\Models\SharedCreations as SharedCreation;
use App\Http\Models\Catalogues as Catalogue;
use App\Http\Models\Users as User;
use App\Http\Controllers\Controller as Controller;
use View;
use Cookie;
use Session;
use Illuminate\Http\Request;
class SharedCreationController extends Controller
{
    protected $model = "";
    protected $catalogueModel ="";
    protected $userModel = "";

    function __construct()
    {
      $this->model = new SharedCreation;
      $this->catalogueModel = new Catalogue;
      $this->userModel = new User;
    }

    function sharedCreation()
    {
      $creationList = $this->model->all();
      $catalogueList =$this->catalogueModel->all();
      $selectedCid = 0;
      return View::make("/creation/creation",compact('creationList','catalogueList','selectedCid'));
    }

    // function getArticle($tid)
    // {
    //   $article = $this->model->get(["tid"=>$tid])[0];
    //   $article->content = $this->translateArticle($article->content);
    //   return View::make("/article/articleDetail",compact('article'));
    // }
    //
    function getByCatalogue(Request $req)
    {
      $selectedCid = $req->input('catalogue');
      if($selectedCid!=0)
        $creationList = $this->model->get(["cid"=>$selectedCid]);
      else
        $creationList = $this->model->all();
      $catalogueList =$this->catalogueModel->all();
      return View::make("/creation/creation",compact('creationList','catalogueList','selectedCid'));
    }
    //
    // function translateArticle($content)
    // {
    //   $result = str_replace("\r\n","<br>",$content);
    //   $result = str_replace("\n","<br>",$result);
    //   $result = str_replace("\r","<br>",$result);
    //   return $result;
    // }
    //
    // function addArticle()
    // {
    //   $catalogueList =$this->catalogueModel->all();
    //   $selectedCid = 0;
    //   return View::make("/article/addArticle",compact('catalogueList','selectedCid'));
    // }
    //
    // function newArticle(Request $req)
    // {
    //   $title=$req->input('title');
    //   $pic=$req->input('articlePic');
    //   $content=$req->input('content');
    //   $cid = $req->input('catalogue');
    //   $account = Session::get('user')[0]['acc'];
    //   $user = $this->userModel->get(['account'=>$account])[0];
    //   $data = array('uid'=>$user->uid,'title'=>$title,'articlePic'=>$pic,'content'=>$content,'cid'=>$cid);
    //   if(strlen($title)>0&&strlen($pic)>0&&strlen($content)>0)
    //   {
    //     $this->model->insert($data);
    //   }
    //   else
    //   {
    //     Session::flash("notice","請正確輸入文章資料");
    //   }
    //   return redirect('');
    //
    // }
}
