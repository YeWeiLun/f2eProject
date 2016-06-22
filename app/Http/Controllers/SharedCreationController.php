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

    function getCreation($scid)
    {
      $creation = $this->model->get(["scid"=>$scid])[0];
      $creation->content = $this->translateCreation($creation->content);
      return View::make("/creation/creationDetail",compact('creation'));
    }

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
    function translateCreation($content)
    {
      $result = str_replace("\r\n","<br>",$content);
      $result = str_replace("\n","<br>",$result);
      $result = str_replace("\r","<br>",$result);
      return $result;
    }

    function addCreation()
    {
      $catalogueList =$this->catalogueModel->all();
      $selectedCid = 0;
      return View::make("/creation/addCreation",compact('catalogueList','selectedCid'));
    }

    function newCreation(Request $req)
    {
      $title=$req->input('title');
      $pic=$req->input('scPic');
      $pic=$this->imgurUrl($pic);
      $content=$req->input('content');
      $cid = $req->input('catalogue');
      $youtubeUrl = $this->formYoutubeUrl($req->input('youtubeUrl'));
      $account = Session::get('user')[0]['acc'];
      $user = $this->userModel->get(['account'=>$account])[0];
      $data = array('uid'=>$user->uid,'title'=>$title,'scPic'=>$pic,'content'=>$content,'cid'=>$cid,'youtubeUrl'=>$youtubeUrl);
      if(strlen($title)>0&&strlen($pic)>0&&strlen($content)>0&&strlen($youtubeUrl)>0)
      {
        $this->model->insert($data);
      }
      else
      {
        Session::flash("notice","請正確輸入分享資料");
      }
      return redirect('');
    }

    function formYoutubeUrl($url)
    {
      $result = str_replace("https://www.youtube.com/watch?v=","",$url);
      return $result;
    }

    function imgurUrl($url)
    {
      $result = $url;
      if (preg_match('/http:\/\/imgur.com/',$url) && !preg_match('/.png?1/',$url) ) {
        $result .= '.png?1';
      }
      return $result;
    }
}
