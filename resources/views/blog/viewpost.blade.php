@extends('layouts.viewLayout')
@section('title',$post->title )
@section('content')
  <div class="row">
    <a href="http://localhost:8000" class="btn btn-deafult"> Back</a>
  </div>
  <div class="main-content">
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->body }}</p>
  </div>
  {{--<div class="share">
    <div class="fb-share-button" data-href="http://localhost:8000/posts/13" data-layout="button_count" data-size="large" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Flocalhost%3A8000%2Fposts%2F13&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
  </div>
<div class="comments">
  <div class="fb-comments" data-href="http://localhost:8000/posts/{{ $id }}" data-width="600" data-numposts="2"></div>
</div>--}}
<div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

var disqus_config = function () {
this.page.url = '{{ Request::url() }}';  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = {{$id}}; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};

(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://tech-adda-1.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

@endsection
