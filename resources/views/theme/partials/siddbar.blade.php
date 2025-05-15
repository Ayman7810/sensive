@php
    use App\Models\Category;
    use App\Models\Blog;

    $categories = Category::get();

    $blogRecent =Blog::latest()->take(3)->get();
@endphp
<!-- Start Blog Post Siddebar -->
<div class="col-lg-4 sidebar-widgets">
    <div class="widget-wrap">
        <div class="single-sidebar-widget newsletter-widget">
            <h4 class="single-sidebar-widget__title">Newsletter</h4>
            <form action="{{ route('subcribe.store') }}" method="post">
                @csrf
                <div class="form-group mt-30">
                    <div class="col-autos">

                        <input type="text" class="form-control" name="email" value="{{ old('email') }}"
                            placeholder="Enter email" onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Enter email'">
                        @if (session('status'))
                            <span>{{ session('status') }}</span>
                        @endif
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                    </div>
                </div>
                <button type="submit" class="bbtns d-block mt-20 w-100">Subcribe</button>
            </form>
        </div>


        <div class="single-sidebar-widget post-category-widget">
            @if (count($categories) > 0)
                <h4 class="single-sidebar-widget__title">Catgory</h4>
                <ul class="cat-list mt-20">
                    @foreach ($categories as $e)
                        <li>
                            <a href="{{ route('theme.category',['id' => $e->id]) }}" class="d-flex justify-content-between">
                                <p>{{ $e->name }}</p>
                                <p>{{ count($e->blogs) }}</p>
                            </a>
                        </li>
                    @endforeach
                </ul>
            @endif

        </div>

        <div class="single-sidebar-widget popular-post-widget">
            <h4 class="single-sidebar-widget__title">Recent Post</h4>
            <div class="popular-post-list">
                @if (count( $blogRecent) > 0)
                    @foreach ( $blogRecent as $element)
                    <div class="single-post-list">
                        <div class="thumb">
                            <img class="card-img rounded-0" src="{{ asset("storage/blogs/$element->image") }}"
                                alt="">
                            <ul class="thumb-info">
                                <li><a href="{{ route('blogs.show',['blog' => $element]) }}">{{ $element->user->name }}</a></li>
                                <li><a href="{{ route('blogs.show',['blog' => $element]) }}">{{ $element->created_at->format('d M')}}</a></li>
                            </ul>
                        </div>
                        <div class="details mt-20">
                            <a href="{{ route('blogs.show',['blog' => $element]) }}">
                                <h6>{{ $element->name }}</h6>
                            </a>
                        </div>
                    </div>
                    @endforeach
                @endif
              
            </div>
        </div>
    </div>
</div>
<!-- End Blog Post Siddebar -->
