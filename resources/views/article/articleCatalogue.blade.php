<div class="catalogue-selector">
  {{Form::open(array('action'=>'ArticleController@getArticleListByCatalogue'))}}
  <select class="catalogue-list" name="catalogue">
    <option value="0">全部類別</option>
    @foreach ($catalogueList as $option)
      @if($option->cid == $selectedCid)
        <option value="{{$option->cid}}" selected="selected">{{$option->catalogueName}}</option>
      @else
        <option value="{{$option->cid}}">{{$option->catalogueName}}</option>
      @endif
    @endforeach
  </select>
</div>
