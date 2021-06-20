<div>
    @forelse ($posts as $post)

							<article class="post">
								<div class="post_date">
									<span class="day">{{ $post->created_at->format('d') }}</span>
									<span class="month">{{ $post->created_at->format('F') }}</span>
								</div>
								<figure class="post_img">
									<a target="blenk" href="{{ config('app.url').'storage/'.$post->image }}">
										<img src="{{ config('app.url').'storage/'.$post->image }}" alt="blog post">
									</a>
								</figure>
								<div class="post_content">
									<div class="post_meta">
										<h2>
											<a href="{{ route('post',$post->id) }}">{{ $post->title }}</a>
										</h2>
										<div class="metaInfo">
											<span><i class="fa fa-user"></i> By <a href="#">{{ $post->auther }}</a> </span>
											<span><i class="fa fa-comments"></i> <a href="#">{{ $post->comments->count() }} Comments</a></span>
										</div>
									</div>
									<p >{!! substr($post->content, 0, 150) !!}</p>
									<a class="btn btn-small btn-default" href="{{ route('post',$post->id) }}">Read More</a>
								</div>
							</article>
                            @empty
                            <h1>No Post Fund!</h1>
                            @endforelse

</div>
{{ $posts->links() }}
