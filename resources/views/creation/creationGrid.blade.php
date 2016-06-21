<a href = "{{ url('/creation/'.$creation->scId) }}">  
  <div class="grid-item">
    <div class="grid-content">
      <img src="{{$creation->scPic}}" alt>
      <figcaption>{{$creation->title}}</figcaption>
    </div>
  </div>
</a>
