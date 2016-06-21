<a href = "{{ url('/creation/'.$creation->scid) }}">
  <div class="grid-item">
    <div class="grid-content">
      <img src="{{$creation->scPic}}" alt>
      <figcaption>{{$creation->title}}</figcaption>
    </div>
  </div>
</a>
